<?php
// GET ERA NAME OF A SINGLE GENRE.
$getGenre = $_GET['GenreID'];
$sqlJoinGenreAndEra = 
"SELECT art.Eras.* 
FROM art.Eras 
JOIN art.Genres 
ON art.Genres.EraID = art.Eras.EraID 
WHERE GenreID = :requestedGenre";
$statementJoinGenresAndEra = $getEra->prepare($sqlJoinGenreAndEra);
$statementJoinGenresAndEra->bindValue(':requestedGenre',$getGenre);
$statementJoinGenresAndEra->execute();
$resultOfJointQuery = $statementJoinGenresAndEra;
$resultEra = $resultOfJointQuery->fetch();
$era = new Era($resultEra);
$getEra = null;
?>