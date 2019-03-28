<?php include 'includes/session.inc.php'; ?>

<!doctype html>
<html lang="en">
    <head>
        <?php include 'includes/resources.inc.php' ?>
        <?php include 'connections/config.php' ?>
        
       
        <?php include 'connections/paintings.connect.php' ?>
        <?php include 'classes/Painting.class.php' ?>

        <title>IWP - Index</title>
    </head>

    <body>

        <?php include 'includes/index-navigation.inc.php' ?>
        <?php include 'includes/carrousel.inc.php' ?>
        </br>
        <?php include 'includes/indexThumbnails.inc.php' ?>
        <?php include 'includes/footer.inc.php' ?>
         
    </body>
</html>