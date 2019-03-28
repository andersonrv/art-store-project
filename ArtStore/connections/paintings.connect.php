<?php
try {
    $connectionString = DBCONNSTRING;
    $user = DBUSER;
    $pass = DBPASS;
    
    $getSingleArtistWorks = new PDO($connectionString, $user , $pass);

    $getSingleArtistDetails = new PDO($connectionString, $user , $pass);

    $getSingleWorkDetails = new PDO($connectionString, $user , $pass); //

    $getArtistNameFromAPainting = new PDO($connectionString, $user , $pass);

    $getGalleryMuseum = new PDO($connectionString, $user , $pass);

    $getSubjects = new PDO($connectionString, $user , $pass);

    $getGenres = new PDO($connectionString, $user , $pass);

    $getRandomPainting = new PDO($connectionString, $user , $pass);

    $connect = new PDO($connectionString, $user , $pass);

    $getSingleArtistWorks->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die( $e->getMessage());
}

?>