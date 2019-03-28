<?php
// GET GALLERY INFO OF A SINGLE PAINTING.
$getPainting = $_GET['PaintingID'];
$sqlJoinPaintingAndGalleries = 
"SELECT art.Galleries.* 
FROM art.Galleries 
JOIN art.Paintings 
ON art.Paintings.GalleryID = art.Galleries.GalleryID 
WHERE PaintingID = :requestedPainting";
$statementJoinPaintingsAndGalleries = $getGalleryMuseum->prepare($sqlJoinPaintingAndGalleries);
$statementJoinPaintingsAndGalleries->bindValue(':requestedPainting',$getPainting);
$statementJoinPaintingsAndGalleries->execute();
$resultOfJointQuery = $statementJoinPaintingsAndGalleries;
$resultGallery = $resultOfJointQuery->fetch();
$gallery = new Gallery($resultGallery);
$getGalleryMuseum = null;
?>