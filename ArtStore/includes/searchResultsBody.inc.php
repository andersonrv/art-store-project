<?php

if(!isset($_GET['optsearch'])) {
    $item = $_GET['SearchedValue'];
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ( isset($_GET['SearchedValue']) ) {
            searchPainting($item);
        }
    }
}

if(isset($_GET['optsearch'])) {
    if($_GET['optsearch']=='artist') {
        $item = $_GET['SearchedValue'];
        searchArtistAsc($item);
    }

    if($_GET['optsearch']=='painting') {
        $item = $_GET['SearchedValue'];
        searchPainting($item);
    }
}


if(isset($_GET['SearchedValue']) && isset($_GET['optsearch'])) {
    if (isset($_GET['optsearch'])=='artist') {
        $value = $_GET['SearchedValue'];
        searchArtistDesc($value);
    }
}
?>