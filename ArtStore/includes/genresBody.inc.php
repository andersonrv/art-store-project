<?php
    $arrayOfEras = array();
    while ($singleEra = $resultEras->fetch()) {
        $era = new Era($singleEra);
        array_push($arrayOfEras, $era);
    }
?>

<div class="row">
    <h1 class="similarTitle">Genres by Era</h1>
</div>

<?php
//I WILL TRY TO MAKE THIS LOOP WORK TO REPLACE ALL THE REST OF THE PAGE
// for($i=0; $i<sizeof($arrayOfEras); $i++) {
// echo'    <div class="container">';
// echo'        <div class="row">';
// echo'            <h2 class="similarTitle">' . $arrayOfEras[$i]->getEraName() . '</h2>';
// echo'            <h5 class="similarTitle">' . $arrayOfEras[$i]->getEraYears() . '</h5>';        
//                 $filter = $arrayOfEras[$i]->getEraID();
//                 $secondPartPDOName = ".'$i'.";
//                 include 'queries/filterGenresWithinAnEra.query.php'; // This is the problem
// echo'        </div>';
// echo'        <div class="row col-md-12">';
//                 while($selectedGenres = $resultErasFilter->fetch()) {
//                     $genresFiltered = new Genre($selectedGenres);
//                     $genresFiltered->displayAsThumbnail();
//                 }
// echo'        </div>';
// echo'    </div>';
// }
?>


<?php foreach($arrayOfEras as $era): ?>
<!-- <div class="container">
<div class="row">
    <h2 class="similarTitle"><?php echo $era->getEraName() ?></h2>
    <h5 class="similarTitle"> <?php echo $era->getEraYears() ?></h5>        
    <?php 
        // $filter = $era->getEraID(); 
        // $secondPartPDOName = "0";
        // include 'queries/filterGenresWithinAnEra.query.php';
    ?>
</div>
<div class="row col-md-12">
    <?php            
        // while($selectedGenres = $resultErasFilter->fetch()) {
        //     $genresFiltered = new Genre($selectedGenres);
        //     $genresFiltered->displayAsThumbnail();
        // }
    ?>
</div>
</div> -->
<?php endforeach; ?>


<div class="container">
    <div class="row">
        <h2 class="similarTitle"><?php echo $arrayOfEras[0]->getEraName() ?></h2>
        <h5 class="similarTitle"> <?php echo $arrayOfEras[0]->getEraYears() ?></h5>        
        <?php 
            $filter = $arrayOfEras[0]->getEraID(); 
            $secondPartPDOName = "0";
            include 'queries/filterGenresWithinAnEra.query.php';
        ?>
    </div>
    <div class="row col-md-12">
        <?php            
            while($selectedGenres = $resultErasFilter->fetch()) {
                $genresFiltered = new Genre($selectedGenres);
                $genresFiltered->displayAsThumbnail();
            }
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2 class="similarTitle"><?php echo $arrayOfEras[1]->getEraName() ?></h2>
        <h5 class="similarTitle"> <?php echo $arrayOfEras[1]->getEraYears() ?></h5>        
        <?php 
            $filter = $arrayOfEras[1]->getEraID(); 
            $secondPartPDOName = "1";
            include 'queries/filterGenresWithinAnEra.query.php';
        ?>
    </div>
    <div class="row col-md-12">
        <?php            
            while($selectedGenres = $resultErasFilter->fetch()) {
                $genresFiltered = new Genre($selectedGenres);
                $genresFiltered->displayAsThumbnail();
            }
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2 class="similarTitle"><?php echo $arrayOfEras[2]->getEraName() ?></h2>
        <h5 class="similarTitle"> <?php echo $arrayOfEras[2]->getEraYears() ?></h5>        
        <?php 
            $filter = $arrayOfEras[2]->getEraID(); 
            $secondPartPDOName = "2";
            include 'queries/filterGenresWithinAnEra.query.php';
        ?>
    </div>
    <div class="row col-md-12">
        <?php            
            while($selectedGenres = $resultErasFilter->fetch()) {
                $genresFiltered = new Genre($selectedGenres);
                $genresFiltered->displayAsThumbnail();
            }
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2 class="similarTitle"><?php echo $arrayOfEras[3]->getEraName() ?></h2>
        <h5 class="similarTitle"> <?php echo $arrayOfEras[3]->getEraYears() ?></h5>        
        <?php 
            $filter = $arrayOfEras[3]->getEraID(); 
            $secondPartPDOName = "3";
            include 'queries/filterGenresWithinAnEra.query.php';
        ?>
    </div>
    <div class="row col-md-12">
        <?php            
            while($selectedGenres = $resultErasFilter->fetch()) {
                $genresFiltered = new Genre($selectedGenres);
                $genresFiltered->displayAsThumbnail();
            }
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2 class="similarTitle"><?php echo $arrayOfEras[4]->getEraName() ?></h2>
        <h5 class="similarTitle"> <?php echo $arrayOfEras[4]->getEraYears() ?></h5>        
        <?php 
            $filter = $arrayOfEras[4]->getEraID(); 
            $secondPartPDOName = "4";
            include 'queries/filterGenresWithinAnEra.query.php';
        ?>
    </div>
    <div class="row col-md-12">
        <?php            
            while($selectedGenres = $resultErasFilter->fetch()) {
                $genresFiltered = new Genre($selectedGenres);
                $genresFiltered->displayAsThumbnail();
            }
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2 class="similarTitle"><?php echo $arrayOfEras[5]->getEraName() ?></h2>
        <h5 class="similarTitle"> <?php echo $arrayOfEras[5]->getEraYears() ?></h5>        
        <?php 
            $filter = $arrayOfEras[5]->getEraID(); 
            $secondPartPDOName = "5";
            include 'queries/filterGenresWithinAnEra.query.php';
        ?>
    </div>
    <div class="row col-md-12">
        <?php            
            while($selectedGenres = $resultErasFilter->fetch()) {
                if (!isset($selectedGenres)) { // I NEED TO CHECK THIS CONDITIONAL. MESSAGE NOT BEEN DISPLAYED. EMPTY, IS_NULL AND ISSET IS NOT WORKING
                    echo '<p> No works available for this era. </p>'; 
                } else {
                    $genresFiltered = new Genre($selectedGenres);
                    $genresFiltered->displayAsThumbnail();
                }
            }
        ?>
    </div>
</div>