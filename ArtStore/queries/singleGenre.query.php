<?php
// DETAILS OF A SINGLE GENRE.
$requestedGenreID = $_GET['GenreID'];
$sqlGenreDetails = "SELECT * FROM art.Genres WHERE GenreID = :requestedGenreID";
$statementSqlGenreDetails = $getSingleGenreDetails->prepare($sqlGenreDetails);
$statementSqlGenreDetails->bindValue(':requestedGenreID',$requestedGenreID);
$statementSqlGenreDetails->execute();
$resultGenreDetails = $statementSqlGenreDetails;
$selectedGenre = $resultGenreDetails->fetch();
$requestedGenre = new Genre($selectedGenre);
$getSingleGenreDetails = null;
?>