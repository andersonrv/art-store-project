<?php
    for ($i=0; $i<6; $i++) {
        $row = $resultArtists->fetch();
        $artist = new Artist($row);
        $artist->displayAsThumbnail();
    }
?>