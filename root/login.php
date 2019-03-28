<?php

    include 'resources/templates/top_menu.php';
    include 'resources/templates/footer.php';

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
    
    <div id="loginForm" class="container-fluid bg-white">
        <fieldset id="login" title="Login Info">
            <legend>Login Info</legend>
            <span id="formerror" class="error"></span>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2 form-group">
                        <label for="myemail">Username: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="address@server.com" type="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 form-group">
                        <label for="myemail">Password: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="mypassword" name="mypassword" placeholder="Enter password." type="mypassword" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-left" type="submit">Submit</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <p>If it is your first time, please <a href=register.php>click here to register</a>.</p>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

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