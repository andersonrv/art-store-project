<?php
if(isset($_POST['login']))
{
    // validation default values
    
    $emailValid = new ValidationResult("","",true);
    $passValid = new ValidationResult("","",true);

    //validation of POST. If GET, then the form is displayed
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $emailValid = ValidationResult::checkParameter($_POST['email'],
                    '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',' Please enter a valid email address');
        $passValid = ValidationResult::checkParameter($_POST['password'],
                    '/^[a-zA-Z0-9]\w{8,40}$/', ' Please enter a password between 9 and 40 characters');
        // no validation errors, then redirect
        if ($emailValid->isValid() && $passValid->isValid())
        {
            $connectionString = DBCONNSTRING;
            $user = DBUSER;
            $pass = DBPASS;
            $connect = new PDO($connectionString, $user , $pass);

            $userName = $_POST['email'];
            $userPass = $_POST['password'];

            //Password is hashed!!! Create a new user to test, because the encprytion mode is different.

            $loginSql="SELECT * FROM art.CustomerLogon WHERE UserName = :userName/* AND Pass = :userPass*/";

            $prepareSql = $connect->prepare($loginSql);
            $prepareSql->bindValue(':userName', $userName);
            $prepareSql->execute();
            $requestedUser = $prepareSql;

            $user = $requestedUser->fetch();

            // $hashedPass = password_verify($userPass, $user['Pass']);
            // if ($hashedPass == false) {
            //     header("Location: login.php?login=error");
            //     exit();
            // } elseif ($hashedPass == true) {
                
                if($user) {
                    session_start();
                    $_SESSION['userName'] = $user['UserName'];
                    $_SESSION['userID'] = $user['CustomerID'];
                    $_SESSION['favPaintings'] = array();
                    $_SESSION['favArtists'] = array();
                    $_SESSION['cart'] = array();
                    header("Location: ../index.php?login=sucess");
                    exit();
                }

            }
                            else {
                    $registerMessage = 'User or password invalid , please create user.';
                }
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $connect = null;
        }
    }
// }
if(isset($_GET['logout'])) {
    session_unregister('userName');
}
?>