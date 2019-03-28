<?php
// DETAILS OF A SINGLE ARTIST.
$requestedArtistID = $_GET['ArtistID'];
$sqlArtistDetails = "SELECT * FROM art.Artists WHERE ArtistID = :requestedArtistID";
$statementSqlArtistDetails = $getSingleArtistDetails->prepare($sqlArtistDetails);
$statementSqlArtistDetails->bindValue(':requestedArtistID',$requestedArtistID);
$statementSqlArtistDetails->execute();
$resultArtistDetails = $statementSqlArtistDetails;
$selectedArtist = $resultArtistDetails->fetch();
$requestedArtist = new Artist($selectedArtist);
$getSingleArtistDetails = null;
?>