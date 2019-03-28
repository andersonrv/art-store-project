<?php

class Plate {

    public $plateId;
    public $plateName;
    public $plateDescription;
    public $platePrice;
    
    public function __construct($args=[]) {

        $this->plateId = $args['plateId'] ?? NULL;
        $this->plateName = $args['plateName'] ?? NULL;
        $this->plateDescription = $args['plateDescription'] ?? NULL;
        $this->platePrice = $args['platePrice'] ?? NULL;

    }

    function displayThumb () {

        echo '<div class="col-sm-4">';
        echo '<div class="thumbnail">';
        echo '<img src="img/thumbs/' . $this->plateId . '.' . $this->plateName . '.jpg" alt="' . $this->plateName . '" width="400" height="300">';
        echo '<p><strong>' . $this->plateName . '</strong></p>';
        echo '<p>' . $this->plateDescription . '</p>';
        echo '<p>' . $this->platePrice . '</p>';
        echo '</div>';
        echo '</div>';

    }

}

?>