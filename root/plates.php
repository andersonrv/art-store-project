<?php

    include 'resources/utilities.php';
    include 'resources/templates/top_menu.php';
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

            $infoSection1 = new InfoSection('about', 'bg-light-orange', 'Plates',
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

            <!-- Container (Portfolio Section) -->
            <div id="portfolio" class="container-fluid text-center bg-light-red">
                <h2>Portfolio</h2>
                <br>
                <h4>What we have created</h4>
                <div class="row text-center slideanim">
                    <?php 
                        foreach ($plates as $plat) {
                            $plate = new Plate($plat);
                            echo $plate->displayThumb();
                        }
                        // Add if statement to reloop after 3 generated results
                    ?>
                </div>
                <br>
    
                <h2>What our customers say</h2>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <h4>"Amazing food!"
                                <br>
                                <span>Michael Rodriguez, Lawyer</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>"One word... WOW!!"
                                <br>
                                <span>Janice Doe, Full-time housewife</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4>"Could I be any more happy with this company?"
                                <br>
                                <span>Robert Smith, Driver</span>
                            </h4>
                        </div>
                    </div>
    
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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