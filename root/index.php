<?php

    include 'resources/utilities.php';
    include 'resources/templates/top_menu.php';
    include 'resources/templates/jumbotron.php';
    include 'resources/templates/info_section.php';
    include 'resources/templates/footer.php';
    include 'resources/library/classes/plate.php';

    $plates = readPlates('resources/data/plates.txt');

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

            $jumbotron = new Jumbotron('Big Byte', 'You pick, we cook!');
            echo $jumbotron->displayJumbotron();

            $infoSection1 = new InfoSection('about', 'bg-light-orange', 'About Company Page',
                                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                             ex ea commodo consequat.',
                                             'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                             ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                             deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                             nisi ut aliquip ex ea commodo consequat.', '', '', '');
            echo $infoSection1->displayInfoSection();       
            
            $infoSection2 = new InfoSection('', 'bg-light-red', 'TESTING TITLE AGAIN', 'PARAGRAPH100', 'PARAGRAPH101', 'PARAGRAPH102', 'PARAGRAPH103', 'PARAGRAPH104');
            echo $infoSection2->displayInfoSection();  
            
            $infoSection3 = new InfoSection('', 'bg-white', 'TESTING TITLE AGAIN', 'PARAGRAPH100', 'PARAGRAPH101', 'PARAGRAPH102', 'PARAGRAPH103', 'PARAGRAPH104');
            echo $infoSection3->displayInfoSection(); 
        ?>

        <!-- Container (Pricing Section) -->
        <div id="pricing" class="container-fluid">
            <div class="text-center">
                <h2>Pricing</h2>
                <h4>Choose a payment plan that works for you</h4>
            </div>
            <div class="row slideanim">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">
                            <p>
                                <strong>20</strong> Lorem</p>
                            <p>
                                <strong>15</strong> Ipsum</p>
                            <p>
                                <strong>5</strong> Dolor</p>
                            <p>
                                <strong>2</strong> Sit</p>
                            <p>
                                <strong>Endless</strong> Amet</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$19</h3>
                            <h4>per month</h4>
                            <button class="btn btn-lg">Sign Up</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Pro</h1>
                        </div>
                        <div class="panel-body">
                            <p>
                                <strong>50</strong> Lorem</p>
                            <p>
                                <strong>25</strong> Ipsum</p>
                            <p>
                                <strong>10</strong> Dolor</p>
                            <p>
                                <strong>5</strong> Sit</p>
                            <p>
                                <strong>Endless</strong> Amet</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$29</h3>
                            <h4>per month</h4>
                            <button class="btn btn-lg">Sign Up</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Premium</h1>
                        </div>
                        <div class="panel-body">
                            <p>
                                <strong>100</strong> Lorem</p>
                            <p>
                                <strong>50</strong> Ipsum</p>
                            <p>
                                <strong>25</strong> Dolor</p>
                            <p>
                                <strong>10</strong> Sit</p>
                            <p>
                                <strong>Endless</strong> Amet</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$49</h3>
                            <h4>per month</h4>
                            <button class="btn btn-lg">Sign Up</button>
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