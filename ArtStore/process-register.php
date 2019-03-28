<?php include 'includes/session.inc.php'; ?>
<?php
error_reporting(E_All);
ini_set('display_errors','1');

include 'classes/RegisterValidationClass.php';
include 'connections/artists.connect.php';

$fNameValid = new RegisterValidationClass("","","",true);
$lNameValid = new RegisterValidationClass("","","",true);
$phone = new RegisterValidationClass("","","",true);
$emailValid = new RegisterValidationClass("","","",true);
$pass1Valid = new RegisterValidationClass("","","",true);
$pass2Valid = new RegisterValidationClass("","","",true);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fNameValid = RegisterValidationClass::checkParameter($_POST['firstname'],"", 'First Name can not be empty');

    $lNameValid = RegisterValidationClass::checkParameter($_POST['lastname'],"", ' Last Name can not be empty');

    $phone = RegisterValidationClass::checkParameter($_POST['phone'],
            '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',' Please enter a valid phone number (xxx-xxx-xxxx)');
    
    $emailValid = RegisterValidationClass::checkParameter($_POST['email'],
                 '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',' Please enter a valid email address');

    $pass1Valid = RegisterValidationClass::checkParameter($_POST['password1'],
                '/^[a-zA-Z0-9]\w{6,8}$/',' Please enter a password between 8 and 40 characters');

    $pass2Valid = RegisterValidationClass::checkParameter($_POST['password2'],
                '/^[a-zA-Z0-9]\w{6,8}$/',' Please enter a password between 8 and 40 characters');
};
?>

<!DOCTYPE html>
<html lang=en>
    <head>
    <?php include 'includes/resources.inc.php' ?>
    </head>
    <body >
        <?php include 'includes/art-header.inc.php'; ?>
        <div class="banner-container">
            <div class="ui sizer container">
                <h1 class="ui huge header">Welcome!</h1>
            </div>  
        </div>  
        <h2 class="ui horizontal divider"><i class="write icon"></i> Registration Successful</h2>   
            
        <main>
            <section class="ui stackable container">
                    <div class="ui icon message">
                    <i class="add user icon"></i>
                    <div class="content">
                        <div class="header">
                        Thank you for registering!
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            echo "<p><strong>" . $_POST['firstname'] . " " . $_POST['lastname'] . "</strong><br>";
                            echo $_POST['email'] . "</p>";
                        }
                        ?> 
                    </div>
                    </div>        
            
            </section>
        </main>
    </body>
</html>