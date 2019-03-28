<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>
<body >

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ( isset($_GET['ArtistID']) ) {
            require 'queries/singleArtist.query.php';
        }
    }
?>
<div class="row" id="artistName">
    <h1><?php echo $requestedArtist->getFullName() ?></h1>
</div>
<div class="row">
    <div class="col-md-5">
        <img src="images/artists/medium/<?php echo $requestedArtist->getArtistID() ?>.jpg" class="img-thumbnail img-responsive" alt="<?php echo $requestedArtist->getFullName() ?>" />
    </div>
    <div class="col-md-7">
        <div>
            <p>
                <?php echo $requestedArtist->getDetails() ?>
                
            </p>
        </div>
            <a href='favourites.php?<?php echo 'ArtistID='.$requestedArtist->getArtistID()?>'>
            </br>
                <button <id="btn">
                    <span 
                        class="glyphicon glyphicon-heart" id='<?php echo $requestedArtist->getArtistID() ?>'>
                    </span> Add to Favourites List
                </button></br></a>
            <span id="message"></span>
        <br/>
        <div class="panel panel-default">
            <div class="panel-heading">Artist Details</div>
            <table class="table">
                <tr>
                    <th>Date:</th>
                   <td><?php echo $requestedArtist->getYearOfBirth() ?> - <?php echo $requestedArtist->getYearOfDeath() ?></td>
               </tr>
                <tr>
                    <th>Nationality:</th>
                    <td><?php echo $requestedArtist->getNationality() ?></td>
                </tr>
                <tr>
                   <th>More Info:</th>
                   <td><a href='<?php echo $requestedArtist->getArtistLink() ?>'><?php echo $requestedArtist->getArtistLink() ?></a></td>
               </tr>
           </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/buttonSubmit.js"></script>
</body>

</html>