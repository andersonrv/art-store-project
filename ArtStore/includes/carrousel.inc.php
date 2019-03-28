<?php include 'queries/getRandomPaintingToIndex.query.php' ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <?php  
            $counter = 0;
            while($singlePainting = $resultPaintings->fetch()) {
            $painting = new Painting($singlePainting); 
            if($counter == 0) {$class = "active";} else {$class = "";}
            $painting->displayAsSlide($class);
            $counter++;
            }
        ?>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>