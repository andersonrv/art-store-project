<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['Update']) ) {
        //ONCE SESSION IS WORKING REMOVE THE LINE BELOW AND USE SESSION TAG TO GET THIS INFO
        $email = $_POST['Email'];

        if(empty($_POST['FirstName'])) {
            $firstName = NULL;
        } else {
            $firstName = $_POST['FirstName'];
        }

        if(empty($_POST['LastName'])) {
            $lastName = NULL;
        } else {
            $lastName = $_POST['LastName'];
        }

        if(empty($_POST['Address'])) {
            $address = NULL;
        } else {
            $address = $_POST['Address'];
        }

        if(empty($_POST['City'])) {
            $city = NULL;
        } else {
            $city = $_POST['City'];
        }

        if(empty($_POST['Country'])) {
            $country = NULL;
        } else {
            $country = $_POST['Country'];
        }

        if(empty($_POST['Region'])) {
            $region = NULL;
        } else {
            $region = $_POST['Region'];
        }

        if(empty($_POST['Postal'])) {
            $postal = NULL;
        } else {
            $postal = $_POST['Postal'];
        }

        if(empty($_POST['Phone'])) {
            $phone = NULL;
        } else {
            $phone = $_POST['Phone'];
        }
        
        try {
            $connectionString = DBCONNSTRING;
            $user = DBUSER;
            $pass = DBPASS;
            $connection = new PDO($connectionString, $user , $pass);
            $sql = "UPDATE art.Customers AS c JOIN art.CustomerLogon
            ON c.CustomerID = art.CustomerLogon.CustomerID
            SET c.FirstName = :FirstName, 
                c.LastName = :LastName, 
                c.Address = :AddressCust, 
                c.City = :City,
                c.Country = :Country, 
                c.Region= :Region, 
                c.Postal = :Postal,
                c.Phone = :Phone 
            WHERE CustomerLogon.UserName = :userEmail";
            $statement = $connection->prepare($sql);
            $statement->bindValue(':FirstName', $firstName);
            $statement->bindValue(':LastName', $lastName) ?? NULL;
            $statement->bindValue(':AddressCust', $address);
            $statement->bindValue(':City', $city) ?? NULL;
            $statement->bindValue(':Country', $country) ?? NULL;
            $statement->bindValue(':Region', $region) ?? NULL;
            $statement->bindValue(':Postal', $postal) ?? NULL;
            $statement->bindValue(':Phone', $phone) ?? NULL;
            $statement->bindValue(':userEmail', $email) ?? NULL;
            $statement->execute();
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection = null;
        }
        catch (PDOException $e) {
            die( $e->getMessage());
        }
    }
}
?>