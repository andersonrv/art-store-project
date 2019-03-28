<?php
$item = $_GET['GenreID'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ( isset($_GET['GenreID']) ) {
        searchPaintingOfGenre($item);
    }
}
?>