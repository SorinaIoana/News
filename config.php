<?php
date_default_timezone_set('Europe/Bucharest');
require_once 'config/constants.php';
if(strpos($_SERVER['SCRIPT_NAME'], 'install/index.php') !== false) {
    require_once 'config/install.php';
} else {
    if(!file_exists('config/db.php')) {
        
        header('Location: install');
        exit;
    } else{
        require_once 'inc/functions.php';
        require_once 'config/db.php';
        require_once 'config/sessions.php';
      
    }
}

$scriptFile = 'scripts'.str_replace(BASE_PATH, '', $_SERVER['SCRIPT_NAME']);

if(file_exists($scriptFile)) {
    require_once $scriptFile;
}

if(isset($_COOKIE[REMEMBER_ME_COOKIE_NAME]) && !isset($logged_user)) {
    $getUser = $db->query("SELECT * FROM users WHERE token = '".$_COOKIE[REMEMBER_ME_COOKIE_NAME]."'");

    if($getUser->num_rows) {
        $user - $getUser->fetch_assoc();
        unset($user['password']);
        $_SESSION['logged_user'] = $user;
        redirect(BASE_PATH);
    } else {
        setcookie(REMEMBER_ME_COOKIE_NAME, null, -1);
    }
}


