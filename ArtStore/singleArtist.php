<?php include 'includes/session.inc.php'; ?>
<!doctype html>

<html lang="en">
<head>

    <?php include 'connections/config.php' ?>
    <?php include 'connections/paintings.connect.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Artist.class.php' ?>
    <?php include 'classes/Painting.class.php' ?>

    <title>IWP - Single Artist</title>

</head>

<body>

    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>
    
    <div class="container">
        <?php
            include 'includes/singleArtistDetails.inc.php';
        ?>
    </div>

    <div class="container">
        <div class="row">
            <h2>Art by <?php echo $requestedArtist->getFullName(); ?> </h2>
        </div>
        <div class="row">
            <?php
                require 'queries/singleArtistGallery.query.php';
            ?>
        </div>
    </div>


    <?php include 'includes/footer.inc.php' ?>

</body>

</html>
