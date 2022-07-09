<?php   

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'mirror';

    $conn = new mysqli($host, $user, $password, $db_name);

    if ($conn->connect_error) {
        die('Database Connection Error' . $conn->connect_error);
    }