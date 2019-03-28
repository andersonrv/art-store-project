<?php
// GET EVERY GENRE IN THE DB.
$sqlGenres = "SELECT * FROM art.Genres";
$resultGenres = $getEveryGenre->query($sqlGenres);
$getEveryGenre = null;
?>