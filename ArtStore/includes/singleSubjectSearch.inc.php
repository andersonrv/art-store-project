<?php
$item = $_GET['SubjectID'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ( isset($_GET['SubjectID']) ) {
        searchPaintingOfSubject($item);
    }
}
?>