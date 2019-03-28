<?php
// GET EVERY SUBJECT IN THE DB.
$sqlSubjects = "SELECT * FROM art.Subjects";
$resultSubjects = $getEverySubject->query($sqlSubjects);
$getEverySubject = null;
?>