<?php
// LIST OF ALL PAINTINGS OF A SELECTED ARTIST FETCHED.
$requestedArtistID = $_GET['ArtistID'];
$sqlArtistPaintings = "SELECT * FROM art.Paintings WHERE ArtistID = :requestedArtistID";
$statementSqlArtistPaintings = $getSingleArtistWorks->prepare($sqlArtistPaintings);
$statementSqlArtistPaintings->bindValue(':requestedArtistID',$requestedArtistID);
$statementSqlArtistPaintings->execute();
$resultPaintings = $statementSqlArtistPaintings;
$getSingleArtistWorks = null;

while($selectedPaintings = $resultPaintings->fetch()) {
    $requestedPaintings = new Painting($selectedPaintings);
    $requestedPaintings->displayAsThumbnail();
} 
?>