<?php

$userName = $_REQUEST['userName'];
$firstName = $_REQUEST['firstName'];

if ($userName === '' || $userName === null) {
    //$errorUserName = '<div class="error">Sorry, userName is required.</div>';
    echo "Missing the USER NAME!!! <br/>";
}

if ($firstName === '' || $firstName === null) {
    //$errorFirstName =  '<div class="error">Sorry, firstName is required.</div>';
    echo "MISSING FIRST NAME!!!!!!!<br/>";
}

//var_dump($_REQUEST);

$arr = [];

foreach ($_REQUEST as $key => $value) {
    $input = new UserInput($value);
    //$arr[] = $input;
    $input->checkBlank() ;
}

//var_dump($_REQUEST);
print_r($arr);
echo $_REQUEST['firstName'];

class UserInput {
    public $valueOfTheField;
    //public $method;

    public function __construct($valueOfTheField) {
        $this->valueOfTheField = $valueOfTheField;
    }

    public function checkBlank() {
        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))){
            if ($this->valueOfTheField === '' || $this->valueOfTheField === null) {
                $errBlank = '<div class="error">Sorry, this field is required.</div>';
                echo $errBlank;
            }; 
        }
    }
/*
    public function mirrorIfIsValid() {
        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))){
            if (isset($_POST['$this->valueOfTheField'])) { 
                echo $_POST['$this->valueOfTheField'];
            }
        }
    }

    public function filterEmail() {
        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))){
            if (!(filter_var($this->valueOfTheField, FILTER_VALIDATE_EMAIL))) {
                $errUserMail = '<div class="error">Sorry, email address is considered invalid.</div>';
                echo $errUserMail;
            }
        }
    }

    public function checkPasswordLength() {
        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))){
            if (strlen($this->valueOfTheField) < 7) {
                $errPassLength = '<div class="error">Sorry, the password must have at least eight characters.</div>';
                echo $errPassLength;
            };
        }
    }
}

function comparePasswords($pass1, $pass2) {
    if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))){
        if ($pass1 !== $pass2) {
            $errPassConf = '<div class="error">Sorry, passwords must match.</div>';
            echo $errPassConf;
        };
    };
*/
}


?>

<!--
array(9) { 
["userName"]=> string(0) "" 
["firstName"]=> string(0) "" 
["lastName"]=> string(0) "" 
["userPassword"]=> string(0) "" 
["confPassword"]=> string(0) "" 
["action"]=> string(6) "submit" 
["jenkins-timestamper"]=> string(6) "system" 
["jenkins-timestamper-local"]=> string(5) "false" 
["jenkins-timestamper-offset"]=> string(8) "25200000" 
-->