<?php

echo $requestedArtist->getFullName();
// echo $requestedArtist->getDetails();

function addFavouriteArtist($requestedArtist) {
    $favouriteArtists = array();
    $favouriteArtists[]=$requestedArtist->getFullName();
    }
function deleteFavouriteArtist() {
    unset($favouriteArtists[$requestedArtist]);
    echo $favouriteArtists;
}
        
    //     </div>
    //     <div>
    //         <button type="button" onclick="deleteFavouriteArtist()"> Remove From List </button>
    //     </div>
    // </div>
?>

