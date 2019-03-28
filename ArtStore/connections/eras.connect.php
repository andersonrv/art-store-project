<?php
try {
    $connectionString = DBCONNSTRING;
    $user = DBUSER;
    $pass = DBPASS;
    
    $getEveryEra = new PDO($connectionString, $user , $pass);

    $getEveryEra->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die( $e->getMessage());
}

?>