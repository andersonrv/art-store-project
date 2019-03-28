<?php
class DBConnect {
    private $host = '192.168.64.2';
    private $dbName = 'art';
    private $user = 'testuser';
    private $pass = 'funwebdev';
    private $dbConnstring = 'mysql:host=192.168.64.2;port=3306; charset=utf8mb4;';
    private $port = '3306';

    function setHost($host) { $this->host = $host; }
    function setDbName($dbName) { $this->dbName = $dbName; }
    function setUser($user) { $this->user = $user; }
    function setPass($pass) { $this->pass = $pass; }
    function setDbConnstring($dbConnstring) { $this->dbConnstring = $dbConnstring; }
    function setPort($port) { $this->port = $port; }

    function getHost() { return $this->host; }    
    function getDbName() { return $this->dbName; }
    function getUser() { return $this->user; }
    function getPass() { return $this->pass; }
    function getDbConnstring() { return $this->dbConnstring; }
    function getPort() { return $this->port; }

    public function connect() {
        try {
            $connection = new PDO('mysql:host=' . $this->getHost() .';port=' . $this->getPort() .'; charset=utf8mb4;', $this->getUser() , $this->getPass());
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            echo 'DB Error: ' . $e->getMessage();
        }
    }
}
?>