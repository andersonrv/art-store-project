<?php 
include 'includes/session.inc.php'; 
?>
<!doctype html>

<html lang="en">
<head>

    <?php include 'connections/config.php' ?>
    <?php include 'connections/artists.connect.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Painting.class.php' ?>

    <title>IWP - Favorites</title>

</head>

<body>

    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>
    
    <div class="container">      
        <div class="row">
            <h1 class="similarTitle">Favorite Artists List</h1>
        </div>
        
        <div class="container">
            <br/>
            <div>
                <table class="table table-striped">
                    <col width="20%">
                    <col width="80%">
                    <tbody>
                    
                    <?php include 'includes/addToFav.inc.php';?>
                    <?php var_dump($_SESSION['favArtist'])//include 'includes/searchResultsBody.inc.php'; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>