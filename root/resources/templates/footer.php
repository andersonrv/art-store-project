<?php

class Footer {

    public $footerText = 'Website developed by Big Byte©';

    
    function displayFooter () {

        echo '<footer class="container-fluid text-center">';
        echo '<a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>';
        echo '<p>' . $this->footerText . '</p>';
        echo '</footer>';
        
    }

}

?>   