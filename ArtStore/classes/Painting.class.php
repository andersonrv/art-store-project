<?php
class Painting {
    private $paintingID;
    private $artistID;
    private $galleryID;
    private $imageFileName;
    private $title;
    private $shapeID;
    private $museumLink;
    private $accessionNumber;
    private $copyrightText;
    private $description;
    private $excerpt;
    private $yearOfWork;
    private $width;
    private $height;
    private $medium;
    private $cost;
    private $msrp;
    private $googleLink;
    private $googleDescription;
    private $wikiLink;

    public function __construct($aPainting) {
        $this->paintingID = $aPainting['PaintingID'];
        $this->artistID = $aPainting['ArtistID'];
        $this->galleryID = $aPainting['GalleryID'];
        $this->imageFileName = $aPainting['ImageFileName'];
        $this->title = $aPainting['Title'];
        $this->shapeID = $aPainting['ShapeID'];
        $this->museumLink = $aPainting['MuseumLink'];
        $this->accessionNumber = $aPainting['AccessionNumber'];
        $this->copyrightText = $aPainting['CopyrightText'];
        $this->description = $aPainting['Description'];
        $this->excerpt = $aPainting['Excerpt'];
        $this->yearOfWork = $aPainting['YearOfWork'];
        $this->width = $aPainting['Width'];
        $this->height = $aPainting['Height'];
        $this->medium = $aPainting['Medium'];
        $this->cost = $aPainting['Cost'];
        $this->msrp = $aPainting['MSRP'];
        $this->googleLink = $aPainting['GoogleLink'];
        $this->googleDescription = $aPainting['GoogleDescription'];
        $this->wikiLink = $aPainting['WikiLink'];
    }
    
    function setPaintingID($paintingID) { $this->paintingID = $paintingID; }
    function setArtistID($artistID) { $this->artistID = $artistID; }
    function setGalleryID($galleryID) { $this->galleryID = $galleryID; }
    function setImageFileName($imageFileName) { $this->imageFileName = utf8_encode($imageFileName); }
    function setTitle($title) { $this->title = utf8_encode($title); }
    function setShapeID($shapeID) { $this->shapeID = $shapeID; }
    function setMuseumLink($museumLink) { $this->museumLink = utf8_encode($museumLink); }
    function setAccessionNumber($accessionNumber) { $this->accessionNumber = utf8_encode($accessionNumber); }
    function setCopyrightText($copyrightText) { $this->copyrightText = utf8_encode($copyrightText); }
    function setDescription($description) { $this->description = utf8_encode($description); }
    function setExcerpt($excerpt) { $this->excerpt = utf8_encode($excerpt); }
    function setYearOfWork($yearOfWork) { $this->yearOfWork = $yearOfWork; }
    function setWidth($width) { $this->width = $width; }
    function setHeight($height) { $this->height = $height; }
    function setMedium($medium) { $this->medium = utf8_encode($medium); }
    function setCost($cost) { $this->cost = $cost; }
    function setMSRP($msrp) { $this->msrp = $msrp; }
    function setGoogleLink($googleLink) { $this->googleLink = utf8_encode($googleLink); }
    function setGoogleDescription($googleDescription) { $this->googleDescription = utf8_encode($googleDescription); }
    function setWikiLink($wikiLink) { $this->wikiLink = utf8_encode($wikiLink); }

    public function getPaintingID() { return $this->paintingID; }
    public function getArtistID() { return $this->artistID; }
    public function getGalleryID() { return $this->galleryID; }
    public function getImageFileName() { return $this->imageFileName; }
    public function getTitle() { return $this->title; }
    public function getShapeID() { return $this->shapeID; }
    public function getMuseumLink() { return $this->museumLink; }
    public function getAccessionNumber() { return $this->accessionNumber; }
    public function getCopyrightText() { return $this->copyrightText; }
    public function getDescription() { return $this->description; }
    public function getExcerpt() { return $this->excerpt; }
    public function getYearOfWork() { return $this->yearOfWork; }
    public function getWidth() { return $this->width; }
    public function getHeight() { return $this->height; }
    public function getMedium() { return $this->medium; }
    public function getCost() { return $this->cost; }
    public function getMSRP() { return $this->msrp; }
    public function getGoogleLink() { return $this->googleLink; }
    public function getGoogleDescription() { return $this->googleDescription; }
    public function getWikiLink() { return $this->wikiLink; }

    function displayAsThumbnail() {
        echo '<div class="col-md-3">';
        echo '   <div class="thumbnail sizeLimitThumb">';
        echo '   <div class="crop">';       
        echo '        <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '"><img src="images/works/square-medium/' . $this->getImageFileName() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '    </div>';        
        echo '        <div class="caption" align="center">';
        echo '            <p class="similarTitle"><a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '">' . $this->getTitle() . '</a></p>';
        echo '            <div class="btn-group">';
        echo '                <div class="row">';
        //NEED TO ADD GLYPHICON-INFO-SIGN TO THE BUTTON VIEW
        echo '                    <a href="/singleWork.php?PaintingID=' . $this->getPaintingID() . '"><input type="button" class="btn btn-primary btn-xs" value="View"></a>';
        echo '                    <button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-gift"></span> Wish</button>';
        echo '                    <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }

    function displayAsSimpleResult($keyword) {
        $artTitle = $this->getTitle();
        $artDescription = $this->getDescription();
        echo '<tr>';
        echo '      <td>';    
        echo '          <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '"><img src="images/works/square-medium/' . $this->getImageFileName() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '      </td>';
        // THE FUNCTION str_ireplace() IS RETURNING THE SEARCHED KEYWORD WITH A CASE DIFFERENT FROM THE ORIGINAL TEXT.
        echo '      <td>
                        <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '">' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $artTitle) . '</a>
                        <br/>
                        ' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $artDescription) . '
                    </td>';
        echo '</tr>';
    }

    function displayAsSimpleResultWithPrice($keyword) {
        $artTitle = $this->getTitle();
        $artDescription = $this->getDescription();
        echo '<tr>';
        echo '      <td>';   
        echo '          <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '"><img src="images/works/square-medium/' . $this->getImageFileName() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '          <h4 class="price">Price: $' . number_format($this->getMSRP(), 2, ".", ",") . '</h4>';
        echo '      </td>';
        // THE FUNCTION str_ireplace() IS RETURNING THE SEARCHED KEYWORD WITH A CASE DIFFERENT FROM THE ORIGINAL TEXT.
        echo '      <td>
                        <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '">' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $artTitle) . '</a>
                        <br/>
                        ' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $artDescription) . '
                    </td>';
        echo '</tr>';
    }

    function displayAsSlide($class) {
        echo '    <div class="item '. $class .'">';
        echo '        <img src="images/works/large/' . $this->getImageFileName() . '.jpg" alt="' . $this->getTitle() . '">';
        echo '        <div class="carousel-caption">';
        echo '            <h3>' . $this->getTitle() . '</h3>';
        echo '            <p>' . $this->getExcerpt() . '</p>';
        echo '            <a href="/singleWork.php?PaintingID=' . $this->getPaintingID() . '"><input type="button" class="btn btn-info" value="Learn More"></a>';
        echo '        </div>';
        echo '    </div>';
    }


    function displayAsSimpleResultWithYear($keyword) {
        $artTitle = $this->getTitle();
        $artDescription = $this->getDescription();
        echo '<tr>';
        echo '      <td>';   
        echo '          <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '"><img src="images/works/square-medium/' . $this->getImageFileName() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '          <h4>Year of Work: ' . $this->getYearOfWork() . '</h4>';
        echo '      </td>';
        // THE FUNCTION str_ireplace() IS RETURNING THE SEARCHED KEYWORD WITH A CASE DIFFERENT FROM THE ORIGINAL TEXT.
        echo '      <td>
                        <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '">' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $artTitle) . '</a>
                        <br/>
                        ' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $artDescription) . '
                    </td>';
        echo '</tr>';
    }

    function displayAsIndexThumbnail() {
        echo '<div class="col-md-4">';
        echo '    <div class="thumbnail">';
        echo '        <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '"><img src="images/works/square-small/' . $this->getImageFileName() . '.jpg" alt="..." class="img-circle"></a>';
        echo '        <div class="caption">';
        echo '            <h4 class="text-center">' . $this->getTitle() . '</h4>';
        echo '        </div>';
        echo '        <div>';
        echo '            <p class="text-justify">' . $this->getExcerpt() . '</p>';
        echo '        </div>';
        echo '        <div>';
        echo '        <br/>';
        echo '            <a href="/singleWork.php?PaintingID=' . $this->getPaintingID() . '"><input type="button" class="btn btn-info center-block" value="Learn More"></a>';
        echo '       </div>';
        echo '    </div>';
        echo '</div>';
    }

    function displayAsSimilarProduct() {
        echo '<div class="col-md-3">';
        echo '    <div class="thumbnail">';
        echo '        <a href="singleWork.php?PaintingID=' . $this->getPaintingID() . '"><img src="images/works/square-medium/' . $this->getImageFileName() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '        <div class="caption" align="center">';
        echo '            <p class="similarTitle">' . $this->getTitle() . '</p>';
        echo '            <div class="btn-group">';
        echo '                <div class="row">';
        //NEED TO ADD GLYPHICON-INFO-SIGN TO THE BUTTON VIEW
        echo '                    <a href="/singleWork.php?PaintingID=' . $this->getPaintingID() . '"><input type="button" class="btn btn-primary btn-xs" value="View"></a>';
        echo '                    <button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-gift"></span> Wish</button>';
        echo '                    <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
}
?>