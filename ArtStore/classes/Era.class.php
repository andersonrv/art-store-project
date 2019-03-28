<?php
class Era {
    private $eraID;
    private $eraName;
    private $eraYears;

    public function __construct($anEra) {
        $this->eraID = $anEra['EraID'] ?? NULL;
        $this->eraName = $anEra['EraName'] ?? NULL;
        $this->eraYears = $anEra['EraYears'] ?? NULL;
    }
    
    function setEraID($eraID) { $this->eraID = $eraID; }
    function setEraName($eraName) { $this->eraName = utf8_encode($eraName); }
    function setEraYears($eraYears) { $this->eraYears = utf8_encode($eraYears); }

    public function getEraID() { return $this->eraID; }
    public function getEraName() { return $this->eraName; }
    public function getEraYears() { return $this->eraYears; }
}
?>