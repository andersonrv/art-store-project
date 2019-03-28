<?php

    include 'resources/templates/top_menu.php';
    include 'resources/templates/footer.php';
    include 'resources/library/classes/input.php';
  /*  if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))){
    
        $userName = $_REQUEST['userName'];
        $firstName = $_REQUEST['firstName'];
    
        if ($userName === '' || $userName === null) {
            $errorUserName = '<div class="error">Sorry, userName is required.</div>';
        }
    
        if ($firstName === '' || $firstName === null) {
            $errorFirstName =  '<div class="error">Sorry, firstName is required.</div>';
        }
    } */
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Big Byte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet">
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <form id="registerForm" name="registerForm" class="group" action="/resources/library/classes/input.php <?php// echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div id="loginForm" class="container-fluid bg-white">
            <fieldset id="login" title="Login Info">
                <legend>Login Info</legend>
                <span id="formerror" class="error"></span>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="userName">Username: </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="userName" name="userName" placeholder="address@server.com" type="text" value="USUARIO" >
                            <?php //if (isset($err_myname)) { echo $err_myname; } ?>
				            <?php //if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
                            <?php //if (isset($userName)) { $firstField->checkBlank(); } ;
                            //$firstField->filterEmail() ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="firstName">First Name: </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="firstName" name="firstName" placeholder="Enter your first name." type="text" value="PrimeiroNome">
                            <?php //if (isset($errorFirstName)) { echo $errorFirstName; } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="lastName">Last Name: </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="lastName" name="lastName" placeholder="Enter your last name." type="text" value="UltimoNome">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="userPassword">Password: </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="userPassword" name="userPassword" placeholder="Enter password with at least 8 characters." type="password" value="123456">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <label for="confPassword">Confirm Password: </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="confPassword" name="confPassword" placeholder="Re-enter password." type="password" value="123456">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-left" type="submit" name="action" value="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </form>

        <?php 
            $topMenu = new TopMenu;
            echo $topMenu->displayTopMenu();   

            $footer = new Footer;
            echo $footer->displayFooter();
        ?>

            <script src="js/index.js">
            </script>

    </body>

</html>