<?php
//GET RANDOM PAINTING FOR INDEX PAGE.
$sqlRandomPainting = "SELECT * FROM art.Paintings ORDER BY RAND() LIMIT 3";
$statementRandomPainting = $getRandomPainting->prepare($sqlRandomPainting);
$statementRandomPainting->execute();
$resultPaintings = $statementRandomPainting;
$getRandomPainting = null;
?>