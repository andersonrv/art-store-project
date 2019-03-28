<?php
try {
    $connectionString = DBCONNSTRING;
    $user = DBUSER;
    $pass = DBPASS;
    
    $getEverySubject = new PDO($connectionString, $user , $pass);

    $getEverySubject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die( $e->getMessage());
}

?>