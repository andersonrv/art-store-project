<?php 
$results = countingArtistSales();
$topArtist = array();
while($singleArtist = $results->fetch()) {
    $anArtist = new Artist($singleArtist);
    array_push($topArtist, $anArtist);
}
$totalSales = countingBestSellersTotalSales();
?>