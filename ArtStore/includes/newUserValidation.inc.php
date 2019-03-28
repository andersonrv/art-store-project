<?php
require_once("connections/config.php");
//Checking if every field was filled up

if(isset($_POST['Register']))
{
    $emailValid = new ValidationResult("","",true);
    $passValid = new ValidationResult("","",true);

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $emailValid = ValidationResult::checkParameter($_POST['Email'],
                    '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',' Email address must be valid.');
        $passValid = ValidationResult::checkParameter($_POST['Pass'],
                    '/^[a-zA-Z0-9]\w{8,40}$/', ' Password must have between 9 and 40 characters.');
        
        if ($emailValid->isValid() && $passValid->isValid())
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['Email']) != '' &&
                isset($_POST['FirstName']) != '' &&
                isset($_POST['LastName']) != '' &&
                isset($_POST['Phone']) != '' &&
                isset($_POST['Pass']) != '' &&
                isset($_POST['ConfPass']) != '' &&
                isset($_POST['Agree']) == 'on') {
                    //Checking if passwords match
                    if(($_POST['Pass']) == ($_POST['ConfPass'])) {
                        try {
                            $firstName = $_POST['FirstName'];
                        
                            $lastName = $_POST['LastName'];
                    
                            $phone = $_POST['Phone'];
                        
                            $userEmail = $_POST['Email'];

                            $userPass = $_POST['Pass'];
                            //HASHING PASSWORD
                            $hashedPass = password_hash($userPass, PASSWORD_DEFAULT);
                        
                            $confPass = $_POST['ConfPass'];
            
                            $connectionString = DBCONNSTRING;
                            $user = DBUSER;
                            $pass = DBPASS;
                            
                            $connection = new PDO($connectionString, $user , $pass);
                            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                            if(!empty($_POST['Email']) && !empty($_POST['FirstName'])) {
                                $value = 1;
            
                                $sql3 = "INSERT INTO art.CustomerLogon(UserName, Pass, Salt, `State`, DateJoined, DateLastModified) 
                                VALUES (:email,:pass,NULL,NULL,NULL,NULL)";
                                $statement3 = $connection->prepare($sql3);
                                $statement3->bindParam(':email', $userEmail);
                                $statement3->bindParam(':pass', $hashedPass);
                                $statement3->execute();
            
                                $customerID = $connection->lastInsertId();
            
                                $sql1 = "INSERT INTO art.Customers(CustomerID, FirstName, LastName, `Address`, City, Region, Country, Postal, Phone, Email, Privacy) 
                                VALUES (:customerID,:firstName,:lastName,NULL,NULL,NULL,NULL,NULL,:phone,:email,:privacy)";
                                $statement1 = $connection->prepare($sql1);
                                $statement1->bindParam(':customerID', $customerID);
                                $statement1->bindParam(':firstName', $firstName);
                                $statement1->bindParam(':lastName', $lastName);
                                $statement1->bindParam(':phone', $phone);
                                $statement1->bindParam(':email', $userEmail);
                                $statement1->bindParam(':privacy', $value);
                                $statement1->execute();
            
                                $connection = null;
                                
                                if ($connection == null) {
                                    $registerMessage = 'Registration complete!';
                                    echo '<div id="errors" class="ui positive message">';
                                    echo '<h3 class="header">Sucess:</h3>';
                                    echo '<h3>' . $registerMessage . '</h3>';
                                    echo '<div class="ui divider"></div>';
                                    echo '<div id="errorMessages"> </div>';
                                    echo '</div>';
                                }
                            }
            
                        }
                        catch (PDOException $e) {
                            die( $e->getMessage());
                        }
                        
                    } else {
                        $registerMessage = 'Passwords do not match.';
                        echo '<div id="errors" class="ui negative message">';
                        echo '<h3 class="header">Errors were encountered:</h3>';
                        echo '<h3>' . $registerMessage . '</h3>';
                        echo '<div class="ui divider"></div>';
                        echo '<div id="errorMessages"> </div>';
                        echo '</div>';  
                    }
                } else {
                    $registerMessage = 'You are missing something. Please recheck fields above.';
                    echo '<div id="errors" class="ui negative message">';
                    echo '<h3 class="header">Errors were encountered:</h3>';
                    echo '<h3>' . $registerMessage . '</h3>';
                    echo '<div class="ui divider"></div>';
                    echo '<div id="errorMessages"> </div>';
                    echo '</div>';      
                }
            }
        } else {
            $registerMessage = 'Email or password invalid, please follow instructions.';
            echo '<div id="errors" class="ui negative message">';
            echo '<h3 class="header">Errors were encountered:</h3>';
            echo '<h3>' . $registerMessage . '</h3>';
            echo '<div class="ui divider"></div>';
            echo '<div id="errorMessages"> </div>';
            echo '</div>';
            
        }
    }
}


?>

