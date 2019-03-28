<?php

class Jumbotron {

    public $mainText;
    public $subText;

    public function __construct($mainText, $subText) {
        $this->mainText = $mainText;
        $this->subText = $subText;
    }
    
    function displayJumbotron () {

        echo '<div class="jumbotron text-center">';
        echo '<h1>' . $this->mainText . '</h1>';
        echo '<p>' . $this->subText . '</p>';
        echo '</div>';
    }

/*
HTML form example, just in case.
<!--        
    <form>
    <div class="input-group">
        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
        <div class="input-group-btn">
            <button type="button" class="btn btn-danger">Subscribe</button>
        </div>
    </div>
    </form>
-->
*/

}

?>