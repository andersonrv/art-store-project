<?php
$searchedID = $requestedPainting->getPaintingID();
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

$getWorkOfArt = $_GET['PaintingID'];
$sqlJoinPaintingAndGenres = 
"SELECT art.PaintingGenres.GenreID
FROM art.Paintings
JOIN art.PaintingGenres
ON art.Paintings.PaintingID = art.PaintingGenres.PaintingID
WHERE Paintings.PaintingID = :requestedWorkOfArt";
$statementGetGenres = $connect->prepare($sqlJoinPaintingAndGenres);
$statementGetGenres->bindValue(':requestedWorkOfArt',$searchedID );
$statementGetGenres->execute();
$resultOfGenres = $statementGetGenres;
$arrayOfGenres = array();
while($singleGenre = $resultOfGenres->fetch()) {
    array_push($arrayOfGenres, $singleGenre);
}

$accessingGenreID = $arrayOfGenres[0]['GenreID'];

$sqlRandomThumb = 
"SELECT art.Paintings.* 
FROM art.Paintings 
JOIN art.PaintingGenres
ON art.Paintings.PaintingID = art.PaintingGenres.PaintingID
JOIN art.Genres
ON art.PaintingGenres.GenreID = art.Genres.GenreID
WHERE art.Genres.GenreID = :requestedGenre
ORDER BY RAND() LIMIT 4";
$statementRandomPainting = $connect->prepare($sqlRandomThumb);
$statementRandomPainting->bindValue(':requestedGenre', $accessingGenreID);
$statementRandomPainting->execute();
$resultPaintings = $statementRandomPainting;
$connect = null;

while($singlePainting = $resultPaintings->fetch()) {
$painting = new Painting($singlePainting); 
$painting->displayAsSimilarProduct();
}
?>