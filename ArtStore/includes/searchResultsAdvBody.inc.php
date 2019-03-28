<?php

if(!isset($_GET['optsearch']) && 
!isset($_GET['advPainting']) && 
($_GET['SearchedValue']!='') && 
($_GET['MinYear']=='') &&
($_GET['MaxYear']=='') &&
($_GET['MinPrice']=='') && 
($_GET['MaxPrice']=='')) {
    $item = $_GET['SearchedValue'];
    echo 'Please select at least one filter.';
    
} else {

    if(isset($_GET['optsearch'])) {
        // SEARCH ARTIST BY NAME
        if(($_GET['optsearch']=='artist') && 
        !isset($_GET['advPainting']) && 
        ($_GET['SearchedValue']!='') && 
        ($_GET['MinYear']=='') &&
        ($_GET['MaxYear']=='') &&
        ($_GET['MinPrice']=='') && 
        ($_GET['MaxPrice']=='')) {
            $item = $_GET['SearchedValue'];
            searchArtistAsc($item);
        } 
        // SEARCH PAINTING BY TITLE
        elseif(($_GET['optsearch']=='painting') && 
        !isset($_GET['advPainting']) && 
        ($_GET['SearchedValue']!='') && 
        ($_GET['MinYear']=='') &&
        ($_GET['MaxYear']=='') &&
        ($_GET['MinPrice']=='') && 
        ($_GET['MaxPrice']=='')) {
            $item = $_GET['SearchedValue'];
            searchPainting($item);
        } 
        // SEARCH PAINTING BY YEAR
        elseif(($_GET['optsearch']=='painting') && 
        ($_GET['advPainting']=='year') && 
        ($_GET['SearchedValue']=='') && 
        ($_GET['MinPrice']=='') && 
        ($_GET['MaxPrice']=='')) {
            $initialYear = $_GET['MinYear'];
            $finalYear = $_GET['MaxYear'];
            searchPaintingsInYearRange($initialYear, $finalYear);
        } 
        //SEARCH PAINTING BY PRICE
        elseif(($_GET['optsearch']=='painting') && 
        ($_GET['advPainting']=='cost') && 
        ($_GET['SearchedValue']=='') && 
        ($_GET['MinYear']=='') && 
        ($_GET['MaxYear']=='')) {
            $initialPrice = $_GET['MinPrice'];
            $finalPrice = $_GET['MaxPrice'];
            searchPaintingsInPriceRange($initialPrice, $finalPrice);
        } 

        else 
        {
            echo 'Please select only a single filter.';
        }
    }
}
?>