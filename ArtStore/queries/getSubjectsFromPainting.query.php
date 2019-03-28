<?php
// GET SUBJECTS RELATED TO A SINGLE PAINTING.
$getWork = $_GET['PaintingID'];
$sqlJoinPaintingAndSubject = 
"SELECT art.Subjects.*
FROM art.Paintings
JOIN art.PaintingSubjects
ON art.Paintings.PaintingID = art.PaintingSubjects.PaintingID
JOIN art.Subjects
ON art.PaintingSubjects.SubjectID = art.Subjects.SubjectID
WHERE Paintings.PaintingID = :requestedPainting";
$statementGetSubjects = $getSubjects->prepare($sqlJoinPaintingAndSubject);
$statementGetSubjects->bindValue(':requestedPainting',$getWork);
$statementGetSubjects->execute();
$resultOfSubjects = $statementGetSubjects;
$getSubjects = null;
?>