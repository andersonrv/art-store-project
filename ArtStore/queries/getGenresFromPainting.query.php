<?php
// GET GENRES RELATED TO A SINGLE PAINTING.
$getWorkOfArt = $_GET['PaintingID'];
$sqlJoinPaintingAndGenres = 
"SELECT art.Genres.*
FROM art.Paintings
JOIN art.PaintingGenres
ON art.Paintings.PaintingID = art.PaintingGenres.PaintingID
JOIN art.Genres
ON art.PaintingGenres.GenreID = art.Genres.GenreID
WHERE Paintings.PaintingID = :requestedWorkOfArt";
$statementGetGenres = $getGenres->prepare($sqlJoinPaintingAndGenres);
$statementGetGenres->bindValue(':requestedWorkOfArt',$getWorkOfArt);
$statementGetGenres->execute();
$resultOfGenres = $statementGetGenres;
$getGenres = null;
?>