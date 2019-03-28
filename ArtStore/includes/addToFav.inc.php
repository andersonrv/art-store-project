<?php
include 'includes/favouritesList.inc.php';

if (isset($_SESSION['userName'])) {
    // $value = $_GET['ArtistID'];
    $value = $favouriteArtists;
    $_SESSION["favArtist"]=$value;
}
else {
    echo '<strong>Please sign in to add to Favorites List</strong>';
    exit();
}
?>