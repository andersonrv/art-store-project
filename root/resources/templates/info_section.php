<?php

class InfoSection {

    public $id;
    public $bgClassColor; // bg-light-orange or bg-light-yellow
    public $title;
    public $paragraph1;
    public $paragraph2;
    public $paragraph3;
    public $paragraph4;
    public $paragraph5;


    public function __construct($id, $bgClassColor, $title, $paragraph1, $paragraph2, $paragraph3, $paragraph4, $paragraph5) {
        $this->id = $id ?? NULL;
        $this->bgClassColor = $bgClassColor;
        $this->title = $title;
        $this->paragraph1 = $paragraph1 ?? NULL;
        $this->paragraph2 = $paragraph2 ?? NULL;
        $this->paragraph3 = $paragraph3 ?? NULL;
        $this->paragraph4 = $paragraph4 ?? NULL;
        $this->paragraph5 = $paragraph5 ?? NULL;
    }
    
    function displayInfoSection () {

        echo '<div id="' . $this->id . '" class="container-fluid '. $this->bgClassColor . '">';
        echo '<div class="row">';
        echo '<div>';
        echo '<h2>' . $this->title . '</h2>';
        echo '<br>';
        echo  '<h4>' . $this->paragraph1 . '</h4>';
        echo  '<h4>' . $this->paragraph2 . '</h4>';
        echo  '<h4>' . $this->paragraph3 . '</h4>';
        echo  '<h4>' . $this->paragraph4 . '</h4>';
        echo  '<h4>' . $this->paragraph5 . '</h4>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

    }

}

?>