<?php
$value = $_GET['SubjectID'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ( isset($_GET['SubjectID']) ) {
        $subject = getSubjectName($value);
    }
}
?>