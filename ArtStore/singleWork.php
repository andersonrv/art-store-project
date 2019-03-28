<?php include 'includes/session.inc.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <?php include 'connections/config.php' ?>
    <?php include 'connections/paintings.connect.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Painting.class.php' ?>
    <?php include 'classes/Gallery.class.php' ?>
    <?php include 'classes/Subject.class.php' ?>
    <?php include 'classes/Genre.class.php' ?>

    <title>IWP - Works</title>
</head>

<body>

    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <?php include 'includes/singleWorkDetails.inc.php' ?>
                <br/>
                <div class="row">
                    <h3 class="similarTitle">Similar Products</h3>
                </div>
                <br/>
                <div class="row">
                    <?php include 'includes/singleWorkSimilarThumbs.inc.php';?>
                </div>
            </div>

            <!-- <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <span class="similarTitle">Cart</span></div>
                            <div class="panel-body">
                                <div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img  src="images/tiny/116010.jpg" alt="..." width="32"></a>
                                        </div>
                                        <div class="media-body">
                                            <p><a href="#">Artist Holding a Thistle</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><img src="images/tiny/113010.jpg" alt="..." width="32"></a>
                                        </div>
                                        <div class="media-body">
                                            <p><a href="#">Self-portrait in a Straw Hat</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <strong class="cartText">Subtotal: <span >$1200</span></strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-info-sign"></span> Edit</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-arrow-right"></span> Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"><span class="similarTitle">Popular Artists</span></div>
                            <div class="panel-body">
                                <div><a href="#">Caravaggio</a></div>
                                <br/>
                                <div><a href="#">Cezanne</a></div>
                                <br/>
                                <div><a href="#">Matisse</a></div>
                                <br/>
                                <div><a href="#">Michelangelo</a></div>
                                <br/>
                                <div><a href="#">Picasso</a></div>
                                <br/>
                                <div><a href="#">Raphael</a></div>
                                <br/>
                                <div><a href="#">Van Gogh</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"><span class="similarTitle">Popular Genres</span></div>
                            <div class="panel-body">
                                <div><a href="#">Baroque</a></div>
                                <br/>
                                <div><a href="#">Cubism</a></div>
                                <br/>
                                <div><a href="#">Impressionism</a></div>
                                <br/>
                                <div><a href="#">Renaissance</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <?php include 'includes/footer.inc.php' ?>

</body>

</html>
