<?php
// GET EVERY ERA IN THE DB.
$sqlEras = "SELECT * FROM art.Eras ORDER BY art.Eras.EraID ASC";
$resultEras = $getEveryEra->query($sqlEras);
$getEveryEra = null;
?>