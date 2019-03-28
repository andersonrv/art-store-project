<?php
class Subject {
    private $subjectID;
    private $subjectName;

    public function __construct($aSubject) {
        $this->subjectID = $aSubject['SubjectID'];
        $this->subjectName = $aSubject['SubjectName'] ?? NULL;
    }
    
    function setSubjectID($subjectID) { $this->subjectID = $subjectID; }
    function setSubjectName($subjectName) { $this->subjectName = utf8_encode($subjectName); }

    public function getSubjectID() { return $this->subjectID; }
    public function getSubjectName() { return $this->subjectName; }

    function displayAsThumbnail() {
        echo '<div class="col-md-2">';
        echo '    <div class="thumbnail sizeThumbSubject">';
        echo '    <div class="cropThumbImageSubject">';
        echo '        <a href="singleSubject.php?SubjectID=' . $this->getSubjectID() . '"><img src="images/subjects/square-thumbs/' . $this->getSubjectID() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '        </div>';
        echo '        <div class="caption" align="center">';
        // REPLACE LINK TO A singleSubject.php FOR A SEARCH QUERY ONCE THE SEARCH FUNCIONALITY IS IMPLEMENTED.
        echo '            <p class="similarTitle"><a href="singleSubject.php?SubjectID=' . $this->getSubjectID() . '">' .  $this->getSubjectName() . '</a></p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
}
?>