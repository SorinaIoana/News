<?php

$message = '';

if(isset($_POST) && $_POST){

    $host = $_POST['host'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $db_name = $_POST['db_name'] ?? '';

    if($host && $username && $db_name) {

    $db = new mysqli($host, $username, $password);

    $db->query("CREATE DATABASE IF NOT EXISTS ". $db->real_escape_string($db_name) . " character set UTF8 collate utf8_general_ci");
    $db->select_db($db_name);


    $sql_user = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(100) NOT NULL,
        token VARCHAR(100),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ";  

    $sql_profile = "CREATE TABLE IF NOT EXISTS users_profile (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(11),
        first_name VARCHAR(50),
        last_name VARCHAR(50),
        email VARCHAR(100),
        phone VARCHAR(12),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) "; 


    $sql_posts = "CREATE TABLE IF NOT EXISTS posts (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(75) NOT NULL,
        body TEXT,
        image VARCHAR(255),
        posted_by INT(11),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) "; 

    $db->query($sql_user) or die(mysqli_error($db));
    $db->query($sql_profile) or die(mysqli_error($db));
    $db->query($sql_posts) or die(mysqli_error($db));

    $file = fopen('../config/db.php', 'w');
    $content = ' 
    
    <?php

    $host = "'.$host.'";
    $username = "'.$username.'";
    $password = "'.$password.'";
    $dbName = "'.$db_name.'";

    $db = new mysqli($host, $username, $password, $dbName);

    if($db->connect_errno) {
        die(\'Connection failed: \'. $db->connect_error);
    }
    ';

    fwrite($file, $content);
    fclose($file);

    $message = 'Installation complete';

    } else {
        $message = 'Host, username and databse name are required';
    };
}