<?php
class Genre {
    private $genreID;
    private $genreName;
    private $eraID;
    private $description;
    private $link;

    public function __construct($aGenre) {
        $this->genreID = $aGenre['GenreID'];
        $this->genreName = $aGenre['GenreName'] ?? NULL;
        $this->eraID = $aGenre['EraID'] ?? NULL;
        $this->description = $aGenre['Description'] ?? NULL;
        $this->link = $aGenre['Link'] ?? NULL;
    }
    
    function setGenreID($genreID) { $this->genreID = $genreID; }
    function setGenreName($genreName) { $this->genreName = utf8_encode($genreName); }
    function setEraID($eraID) { $this->eraID = $eraID; }
    function setDescription($description) { $this->description = utf8_encode($description); }
    function setLink($link) { $this->link = utf8_encode($link); }

    public function getGenreID() { return $this->genreID; }
    public function getGenreName() { return $this->genreName; }
    public function getEraID() { return $this->eraID; }
    public function getDescription() { return $this->description; }
    public function getLink() { return $this->link; }

    function displayAsThumbnail() {
        echo '<div class="col-md-2">';
        echo '    <div class="thumbnail sizeThumbGenre">';
        echo '    <div class="cropThumbImageGenre">';
        echo '        <a href="singleGenre.php?GenreID=' . $this->getGenreID() . '"><img src="images/genres/square-thumbs/' . $this->getGenreID() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '        </div>';
        echo '        <div class="caption" align="center">';
        echo '            <p class="similarTitle"><a href="singleGenre.php?GenreID=' . $this->getGenreID() . '">' .  $this->getGenreName() . '</a></p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
}
?>