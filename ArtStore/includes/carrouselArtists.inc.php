<?php
    for ($i=0; $i<12; $i++) {
        $row = $resultArtists->fetch();
        $artist = new Artist($row);
        $artist->displayAsThumbnail();
    }
?>