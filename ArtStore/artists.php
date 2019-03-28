<?php include 'includes/session.inc.php'; ?>
<!doctype html>

<html lang="en">
<head>

    <?php include 'connections/config.php' ?>
    <?php include 'connections/artists.connect.php' ?>
    <?php include 'queries/everyArtist.query.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Artist.class.php' ?>

    <title>IWP - Artists</title>

</head>

<body>

    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>
    
    <div class="container">      
        <div class="row">
            <h1 class="similarTitle">Artists</h1>
        </div>
        <br/>
        <div id="myArtistCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myArtistCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myArtistCarousel" data-slide-to="1"></li>
                <li data-target="#myArtistCarousel" data-slide-to="2"></li>
                <li data-target="#myArtistCarousel" data-slide-to="3"></li>
                <li data-target="#myArtistCarousel" data-slide-to="4"></li>
                <li data-target="#myArtistCarousel" data-slide-to="5"></li>
                <li data-target="#myArtistCarousel" data-slide-to="6"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active col-md-12 artistsCarrousel">
                    <?php
                        include 'includes/carrouselArtists.inc.php';
                    ?>
                </div>

                <div class="item col-md-12 artistsCarrousel">
                    <?php
                        include 'includes/carrouselArtists.inc.php';
                    ?>
                </div>

                <div class="item col-md-12 artistsCarrousel">
                    <?php
                        include 'includes/carrouselArtists.inc.php';
                    ?>
                </div>

                <div class="item col-md-12 artistsCarrousel">
                    <?php
                        include 'includes/carrouselArtists.inc.php';
                    ?>
                </div>

                <div class="item col-md-12 artistsCarrousel">
                    <?php
                        include 'includes/carrouselArtists.inc.php';
                    ?>
                </div>

                <div class="item col-md-12 artistsCarrousel">
                    <?php
                        include 'includes/carrouselArtists.inc.php';
                    ?>
                </div>

                <div class="item col-md-12 artistsCarrousel">
                    <?php
                        include 'includes/carrouselArtistsEnd.inc.php';
                    ?>
                </div>
        
            </div>

            <a class="left carousel-control" href="#myArtistCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myArtistCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br/>
    </div>

    <?php include 'includes/footer.inc.php' ?>

</body>

</html>
