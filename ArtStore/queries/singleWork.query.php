<?php
// DETAILS OF A SINGLE WORK.
$requestedPaintingID = $_GET['PaintingID'];
$sqlPaintingDetails = "SELECT * FROM art.Paintings WHERE PaintingID = :requestedPaintingID";
$statementSqlPaintingDetails = $getSingleWorkDetails->prepare($sqlPaintingDetails);
$statementSqlPaintingDetails->bindValue(':requestedPaintingID',$requestedPaintingID);
$statementSqlPaintingDetails->execute();
$resultPaintingDetails = $statementSqlPaintingDetails;
$selectedPainting = $resultPaintingDetails->fetch();
$requestedPainting = new Painting($selectedPainting);
$getSingleWorkDetails = null;
?>