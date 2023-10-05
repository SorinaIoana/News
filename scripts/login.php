<?php
$errors = [];

if(isset($_POST) && $_POST) {
    $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

    $errors = validate($_POST, $rules);

    if(!$errors) {
        $getUser = $db->query("SELECT * FROM users WHERE username='".$db->real_escape_string($_POST['username'])."'");
        if($getUser->num_rows) {
            $user = $getUser->fetch_assoc();
            if(!password_verify($_POST['password'], $user['password'])) {
                $errors['username'][] = 'Incorrect username or password';
            } else {
                unset($user['password']);
                $_SESSION['logged_user'] = $user;

                if(isset($_POST['remember_me'])) {
                    $token = uniqid();
                    $db->query("UPDATE users SET token = '".$token."' WHERE id = ".$user['id']);
                    setcookie(REMEMBER_ME_COOKIE_NAME, $token, REMEMBER_ME_EXPIRE_TIME);
                }

                redirect(BASE_PATH);
            }
        } else {
            $errors['username'][] = 'Incorrect username or password';
        }
    }
}