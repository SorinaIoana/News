<?php require_once 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH; ?>/bootstrap.css">
    <link rel="stylesheet" href="<?= CSS_PATH; ?>/styles.css">
    <title>Stirile de azi</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_PATH; ?>">Proiect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE_PATH; ?>">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if (isset($logged_user)): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $logged_user['username']; ?>
                        </a>  
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= PROFILE_PATH; ?>">Profile</a>
                            <a class="dropdown-item" href="<?= CHANGE_PASSWORD_PATH; ?>">Change pass</a>
                        </div> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= LOGOUT_PATH; ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= LOGIN_PATH; ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= REGISTER_PATH; ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<a href="change_password.php">Change pass</a>
<div class="container">


    
