<?php
$message = '';
$errors = [];

if(isset($_POST) && $_POST) {
    $rules = [
        'current_password' => 'required',
        'password' => 'required',
        'cofirm_password' => 'required|match:password'
    ];

    
    $errors = validate($_POST, $rules);

    if(!$errors) { 
        $getUser = $db->query("SELECT password FROM users WHERE id=".$logged_user['id']);
        $user = $getUser->fetch_assoc();

        if(!password_verify($_POST['current_password'], $user['password'])) {
            $errors['current_password'][] = 'Invalid current password';
    
        } else {
            $db->query("UPDATE users SET password = '".password_hash($_POST['password'], PASSWORD_DEFAULT)."' WHERE id ".$logged_user['id']);
        }
        
    }
}