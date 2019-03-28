<?php

class TopMenu {

    public $companyName = 'Big Byte';
    public $companyLink = '"index.php"';
    
    public $menuOption1 = 'PLATES';
    public $menuLink1 = '"plates.php"';
    
    public $menuOption2 = 'ABOUT';
    public $menuLink2 = '"about.php"';   
    
    public $menuOption3 = 'FAQ';
    public $menuLink3 = '"faq.php"';
    
    public $menuOption4 = 'CONTACT';
    public $menuLink4 = '"contact.php"';
    
    public $menuOption5 = 'LOGIN / SIGN UP';
    public $menuLink5 = '"login.php"';
    
    function displayTopMenu () {
        echo '<nav class="navbar navbar-default navbar-fixed-top">';
        echo '<div class="container">';
        echo '<div class="navbar-header">';
        echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">';
        echo '<span class="icon-bar"></span>';
        echo '<span class="icon-bar"></span>';
        echo '<span class="icon-bar"></span>';                        
        echo '</button>';
        echo '<a class="navbar-brand" href=' . $this->companyLink . '>' . $this->companyName . '</a>';
        echo '</div>';
        echo '<div class="collapse navbar-collapse" id="myNavbar">';
        echo '<ul class="nav navbar-nav navbar-right">';
        echo '<li><a href=' . $this->menuLink1 . '>' . $this->menuOption1 .'</a></li>';
        echo '<li><a href=' . $this->menuLink2 . '>' . $this->menuOption2 .'</a></li>';
        echo '<li><a href=' . $this->menuLink3 . '>' . $this->menuOption3 .'</a></li>';
        echo '<li><a href=' . $this->menuLink4 . '>' . $this->menuOption4 .'</a></li>';
        echo '<li><a href=' . $this->menuLink5 . '>' . $this->menuOption5 .'</a></li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</nav>';
    }

}

?>
