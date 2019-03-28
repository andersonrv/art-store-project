<?php
try {
    $connectionString = DBCONNSTRING;
    $user = DBUSER;
    $pass = DBPASS;
    
    $getRandomThumb = new PDO($connectionString, $user , $pass);

    $getRandomThumb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die( $e->getMessage());
}
$sqlRandomThumb = "SELECT * FROM art.Paintings ORDER BY RAND() LIMIT 3";
$statementRandomPainting = $getRandomThumb->prepare($sqlRandomThumb);
$statementRandomPainting->execute();
$resultPaintings = $statementRandomPainting;
$getRandomThumb = null;
?>
<div class="container">
    <div class="row">
        <?php  
            while($singlePainting = $resultPaintings->fetch()) {
            $painting = new Painting($singlePainting); 
            $painting->displayAsIndexThumbnail();
            }
        ?>
    </div>
</div>