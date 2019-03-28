<?php

function readPlates($filename) {

    $arr = file($filename) or die('ERROR: File not found.');
    $delimiter = ';';

    foreach ($arr as $line) {  

        $splitcontents = explode($delimiter, $line);
  
        $aPlate = array();

        $aPlate['plateId'] = $splitcontents[0];
        $aPlate['plateName'] = $splitcontents[1];
        $aPlate['plateDescription'] = $splitcontents[2];
        $aPlate['platePrice'] = $splitcontents[3];

        $plates[$aPlate['plateId']] = $aPlate;
    }
    return $plates;
}

?>