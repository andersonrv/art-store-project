<?php
    while ($singleSubject = $resultSubjects->fetch()) {
        $subject = new Subject($singleSubject);
        $subject->displayAsThumbnail();
    }
?>