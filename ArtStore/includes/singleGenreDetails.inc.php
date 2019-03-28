<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ( isset($_GET['GenreID']) ) {
            require 'queries/singleGenre.query.php';
        }
    }
?>
<div class="row">
    <div class="col-md-5">
        <h2 class="similarTitle"><?php echo $requestedGenre->getGenreName() ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <img src="images/genres/square-medium/<?php echo $requestedGenre->getGenreID() ?>.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat" />
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Genre Details</h3></div>
            <table class="table">
            <col width="20%">
            <col width="80%">
                <tr>
                    <th>Description:</th>
                    <td><?php echo $requestedGenre->getDescription() ?></td>
                </tr>
                <tr>
                    <?php include 'queries/getEraNameFromGenre.query.php' ?>
                    <th>Era:</th>
                    <td><a href='genres.php'><?php echo $era->getEraName() ?></a></td>
                </tr>
                <tr>
                    <th>Info:</th>
                    <td><a href='<?php echo $requestedGenre->getLink() ?>'><?php echo $requestedGenre->getLink() ?></a></td>
                </tr>
            </table>
        </div>
    </div>
</div>