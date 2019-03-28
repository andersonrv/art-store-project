<?php
class CustomerLogon {
    private $customerID;
    private $userName;
    private $pass;
    private $salt;
    private $state;
    private $dateJoined;
    private $lastModified;


    public function __construct($aLogon) {
        $this->customerID = $aLogon['customerID'];
        $this->userName = $aLogon['userName'] ?? NULL;
        $this->pass = $aLogon['pass'] ?? NULL;
        $this->salt = $aLogon['salt'] ?? NULL;
        $this->state = $aLogon['state'] ?? NULL;
        $this->dateJoined = $aLogon['dateJoined'] ?? NULL;
        $this->lastModified = $aLogon['lastModified'] ?? NULL;
    }
    
    function setCustomerID($customerID) { $this->customerID = utf8_encode($customerID); }
    function setUserName($userName) { $this->userName = utf8_encode($userName); }
    function setPass($pass) { $this->pass = utf8_encode($pass); }
    function setSalt($salt) { $this->salt = utf8_encode($salt); }
    function setState($state) { $this->state = utf8_encode($state); }
    function setDateJoined($dateJoined) { $this->dateJoined = utf8_encode($dateJoined); }
    function setLastModified($lastModified) { $this->lastModified = utf8_encode($lastModified); }

    public function getCustomerID() { return $this->customerID; }
    public function getUserName() { return $this->userName; }
    public function getPass() { return $this->pass; }
    public function getSalt() { return $this->salt; }
    public function getState() { return $this->state; }
    public function getDateJoined() { return $this->dateJoined; }
    public function getLastModified() { return $this->lastModified; }
}

?>