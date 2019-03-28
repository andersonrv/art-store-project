<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ( isset($_GET['PaintingID']) ) {
            require 'queries/singleWork.query.php';
        }
    }
?>
<div class="row">
    <div class="col-md-5">
        <h2 class="similarTitle"><?php echo $requestedPainting->getTitle() ?></h2>
    </div>
    <div class="col-md-7">
        <div></div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <?php include 'queries/getArtistNameFromPaintingID.query.php'?>
        <p>By <a href="singleArtist.php?ArtistID=<?php echo $resultArray['ArtistID'] ?>"><?php echo $resultArray['FirstName'] . ' ' .$resultArray['LastName'] ?></a></p>
    </div>
    <div class="col-md-7">
        <div></div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <img src="images/works/large/<?php echo $requestedPainting->getImageFileName() ?>.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat" />
    </div>
    <div class="col-md-7">
        <div>
            <p>
                <?php echo $requestedPainting->getDescription() ?>
            </p>
        </div>
        <br/>
        <div>
            <p class="price">Price: <?php echo number_format($requestedPainting->getMSRP(), 2, ".", ",") ?></p>
        </div>
        <br/>
        <div>
            <button type="button">  <span class="glyphicon glyphicon-gift"></span> Add to Wish List </button>
            <button type="button">  <span class="glyphicon glyphicon-shopping-cart"></span> Add to Shopping Cart
            </button>
        </div>
        <br/>
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Product Details</h3></div>
            <table class="table">
            <col width="25%">
            <col width="75%">
                <tr>
                    <th>Date:</th>
                    <td><?php echo $requestedPainting->getYearOfWork() ?></td>
                </tr>
                <tr>
                    <th>Medium:</th>
                    <td><?php echo $requestedPainting->getMedium() ?></td>
                </tr>
                <tr>
                    <th>Dimensions:</th>
                    <td><?php echo $requestedPainting->getHeight() ?>cm x <?php echo $requestedPainting->getWidth() ?>cm</td>
                </tr>
                <tr>
                    <th>Home:</th>
                    <?php include 'queries/getGalleryFromPainting.query.php' ?>
                    <td>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo $gallery->getGalleryName() ?></a>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                            <p>Native Name: <?php echo $gallery->getGalleryNativeName();?></p>
                            <p>Address: <?php echo $gallery->getGalleryAddress() . ', ' . $gallery->getGalleryCity() . ', ' . $gallery->getGalleryCountry() ?></p>
                            <p>Lat/Lon: <?php echo $gallery->getLatitude() . ', ' . $gallery->getLongitude() ?></p>
                            <p>Website: <a href='<?php echo $gallery->getGalleryWebSite(); ?>'><?php echo $gallery->getGalleryWebSite(); ?></a></p>
                            <p>Flickr Place: <?php echo $gallery->getFlickrPlaceID(); ?></p>
                            <p>Yahoo Woe: <?php echo $gallery->getYahooWoeID(); ?></p>
                            <p>Google Place: <?php echo $gallery->getGooglePlaceID(); ?></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Genres:</th>
                    <?php include 'queries/getGenresFromPainting.query.php' ?>
                    <td>
                        <?php 
                            while($resultSingleGenre = $resultOfGenres->fetch()) {
                                $genre = new Genre($resultSingleGenre);
                                echo '<a href="singleGenre.php?GenreID=' . $genre->getGenreID() . '">' . $genre->getGenreName() . '</a> ';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Subjects:</th>
                    <?php include 'queries/getSubjectsFromPainting.query.php' ?>
                    <td>
                        <?php
                            while($resultSingleSubject = $resultOfSubjects->fetch()) {
                                $subject = new Subject($resultSingleSubject);
                                echo '<a href="singleSubject.php?SubjectID=' . $subject->getSubjectID() . '">' . $subject->getSubjectName() . '</a> ';
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>