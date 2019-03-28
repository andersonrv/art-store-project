<?php
//GET SOME INFO ABOUT THE ARTIST WHO CREATED A SPECIFIC WORK.
$getPaintingID = $_GET['PaintingID'];
$sqlJoinPaintingAndArtists = 
"SELECT art.Artists.ArtistID, art.Artists.FirstName, art.Artists.LastName 
FROM art.Paintings 
JOIN art.Artists 
ON art.Paintings.ArtistID = art.Artists.ArtistID 
WHERE PaintingID = :requestedPaintingID";
$statementJoinPaintingsAndArtists = $getArtistNameFromAPainting->prepare($sqlJoinPaintingAndArtists);
$statementJoinPaintingsAndArtists->bindValue(':requestedPaintingID',$getPaintingID);
$statementJoinPaintingsAndArtists->execute();
$resultOfJoinQuery = $statementJoinPaintingsAndArtists;
$resultArray = $resultOfJoinQuery->fetch();
$getArtistNameFromAPainting = null;
?>