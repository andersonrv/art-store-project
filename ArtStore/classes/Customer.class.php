<?php
class Customer {
    private $address;
    private $city;
    private $country;
    private $customerID;
    private $email;
    private $firstName;
    private $lastName;
    private $phone;
    private $postal;
    private $privacy;
    private $region;
    private $connection;

    function setAddress($address) { $this->address = $address; }
    function getAddress() { return $this->address; }
    function setCity($city) { $this->city = $city; }
    function getCity() { return $this->city; }
    function setCountry($country) { $this->country = $country; }
    function getCountry() { return $this->country; }
    function setCustomerID($customerID) { $this->customerID = $customerID; }
    function getCustomerID() { return $this->customerID; }
    function setEmail($email) { $this->email = $email; }
    function getEmail() { return $this->email; }
    function setFirstName($firstName) { $this->firstName = $firstName; }
    function getFirstName() { return $this->firstName; }
    function setLastName($lastName) { $this->lastName = $lastName; }
    function getLastName() { return $this->lastName; }
    function setPhone($phone) { $this->phone = $phone; }
    function getPhone() { return $this->phone; }
    function setPostal($postal) { $this->postal = $postal; }
    function getPostal() { return $this->postal; }
    function setPrivacy($privacy) { $this->privacy = $privacy; }
    function getPrivacy() { return $this->privacy; }
    function setRegion($region) { $this->region = $region; }
    function getRegion() { return $this->region; }

    public function __construct($aCustomer) {
        $this->address = $aCustomer['Address'];
        $this->city = $aCustomer['City'] ?? NULL;
        $this->country = $aCustomer['Country'] ?? NULL;
        $this->customerID = $aCustomer['CustomerID'] ?? NULL;
        $this->email = $aCustomer['Email'] ?? NULL;
        $this->firstName = $aCustomer['FirstName'] ?? NULL;
        $this->lastName = $aCustomer['LastName'] ?? NULL;
        $this->phone = $aCustomer['Phone'] ?? NULL;
        $this->postal = $aCustomer['Postal'] ?? NULL;
        $this->privacy = $aCustomer['Privacy'] ?? NULL;
        $this->region = $aCustomer['Region'] ?? NULL;
    }

    function saveCustomerInitInfo() {
        $customerID = $connection->lastInsertId();
        $value = 1;

        $sql = "INSERT INTO art.Customers(CustomerID, FirstName, LastName, `Address`, City, Region, Country, Postal, Phone, Email, Privacy) 
        VALUES (:customerID,:firstName,:lastName,NULL,NULL,NULL,NULL,NULL,:phone,:email,:privacy)";
        $statement = $this->connection->prepare();
        $statement1->bindParam(':customerID', $customerID);
        $statement->bindParam(':firstName', $this->getFirstName());
        $statement->bindParam(':lastName', $this->getLastName());
        $statement->bindParam(':phone', $this->getPhone());
        $statement->bindParam(':email', $this->getEmail());
        $statement->bindParam(':privacy', $value);

        if($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>