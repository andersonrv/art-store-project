<?php
$sqlErasFilter = "SELECT art.Genres.*
FROM art.Eras
JOIN art.Genres
ON art.Eras.EraID = art.Genres.EraID
WHERE art.Eras.EraID = :requestedEra
ORDER BY art.Genres.GenreName";
$firstPartPDOName = "getErasFilter";
$fullPDOName= $firstPartPDOName.$secondPartPDOName; // I used a variable with different names to create a PDO connection
$statementSqlErasFilter = $$fullPDOName->prepare($sqlErasFilter); // '$$' is used to create a 'variable variable'
$statementSqlErasFilter->bindValue(':requestedEra',$filter);
$statementSqlErasFilter->execute();
$resultErasFilter = $statementSqlErasFilter;
$$fullPDOName = null;
?>