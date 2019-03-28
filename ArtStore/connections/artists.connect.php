<?php
include 'connections/config.php';

try {
    $connectionString = DBCONNSTRING;
    $user = DBUSER;
    $pass = DBPASS;
    
    $connect = new PDO($connectionString, $user , $pass);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die( $e->getMessage());
}

?>