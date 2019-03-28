<?php
try {
    $connectionString = DBCONNSTRING;
    $user = DBUSER;
    $pass = DBPASS;
    
    $getEveryGenre = new PDO($connectionString, $user , $pass);

    $getErasFilter0 = new PDO($connectionString, $user , $pass);

    $getErasFilter1 = new PDO($connectionString, $user , $pass);
    
    $getErasFilter2 = new PDO($connectionString, $user , $pass);

    $getErasFilter3 = new PDO($connectionString, $user , $pass);

    $getErasFilter4 = new PDO($connectionString, $user , $pass);

    $getErasFilter5 = new PDO($connectionString, $user , $pass);

    $getSingleGenreDetails = new PDO($connectionString, $user , $pass);

    $getEra = new PDO($connectionString, $user , $pass);

    $getErasFilter0->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die( $e->getMessage());
}

?>