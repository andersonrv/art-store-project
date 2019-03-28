<?php

    include 'resources/templates/top_menu.php';
    include 'resources/templates/info_section.php';
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
        <?php 
            $topMenu = new TopMenu;
            echo $topMenu->displayTopMenu();

            $infoSection1 = new InfoSection('', 'bg-light-orange', 'Contact',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
             ex ea commodo consequat.',
             'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
             ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
             deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
             nisi ut aliquip ex ea commodo consequat.', 
             'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
             ex ea commodo consequat.', '', '');
            echo $infoSection1->displayInfoSection();

        ?>

            <!-- Container (Contact Section) -->
            <div id="contact" class="container-fluid bg-white">
                <h2 class="text-center">CONTACT</h2>
                <div class="row">
                    <div class="col-sm-5">
                        <p>Contact us and we'll get back to you within 48 hours.</p>
                        <p>
                            <span class="glyphicon glyphicon-map-marker"></span> Calgary, AB</p>
                        <p>
                            <span class="glyphicon glyphicon-phone"></span> +1 999-999-9999</p>
                        <p>
                            <span class="glyphicon glyphicon-envelope"></span> bigbyte@something.com</p>
                    </div>
                    <div class="col-sm-7 slideanim">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>
                        </div>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button class="btn btn-default pull-right" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        <?php
            $footer = new Footer;
            echo $footer->displayFooter();
        ?>

            <script src="js/index.js">
            </script>

    </body>

</html>