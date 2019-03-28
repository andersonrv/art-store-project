<?php
// GET EVERY ARTIST IN THE DB.
$sqlArtists = "SELECT * FROM art.Artists ORDER BY LastName ASC";
$resultArtists = $connect->query($sqlArtists);
$connect = null;
?>
