<?php include 'includes/session.inc.php'; ?>
<!doctype html>

<html lang="en">
<head>

    <?php include 'connections/config.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Artist.class.php' ?>
    <?php include 'connections/search.connect.php' ?>

    <title>IWP - Best-Selling Artists</title>

</head>

<body>
    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php' ?>
    </header>
    <div class="container">
        <div class="row">
            <h1 class="similarTitle">Best-Selling Artists</h1>
        </div>
        <div class="row">
            <div class="alert alert-warning">
                These are are the best-selling artists of all time...
            </div>
        </div>
        <div class="col-md-12">
            <?php searchTopArtists(); ?>
        </div>
        <div class="row">
            <h2 class="similarTitle">Top 10 Artists Share in the Top Sales</h2>
        </div>
        <div class="row">
            <div class="progress">
            <?php 
            include 'includes/topArtistsBody.inc.php';
            ?>
                <div class="progress-bar progress-bar-info" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[0]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[0]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[1]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[1]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[2]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[2]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[3]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[3]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-primary" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[4]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[4]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-info" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[5]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[5]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[6]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[6]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[7]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[7]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[8]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[8]->getLastName();?>
                </div>
                <div class="progress-bar progress-bar-primary" role="progressbar" style="width:<?php echo $top0Sales = (($topArtist[9]->getSales() / $totalSales[0]) * 100);?>%">
                    <?php echo $topArtist[9]->getLastName();?>  
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.inc.php' ?>

</body>

</html>
