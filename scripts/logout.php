<?php
session_unset();
session_destroy();

if(isset($_COOKIE[REMEMBER_ME_COOKIE_NAME])) {
    setcookie(REMEMBER_ME_COOKIE_NAME, null, -1);
}

redirect(BASE_PATH);