 
    
    <?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "proiect";

    $db = new mysqli($host, $username, $password, $dbName);

    if($db->connect_errno) {
        die('Connection failed: '. $db->connect_error);
    }
    