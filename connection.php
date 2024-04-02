<?php
function connect_to_database($host = 'localhost', $username = 'root', $password = '', $dbname = 'login_db') {
    
    $connection = mysqli_connect($host, $username, $password, $dbname);

    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $connection;
}
?>
