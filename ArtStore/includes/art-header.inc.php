<header>
    <div class="ui attached stackable grey inverted  menu">
        <div class="ui container">
            <nav class="right menu">            
                <div class="ui simple  dropdown item">
                  <i class="user icon"></i>
                  Account
                    <i class="dropdown icon"></i>
                  <div class="menu">
                    <a href="login.php" class="item"><i class="sign in icon"></i> Login</a>
                    <a href="<?php if(isset($_SESSION['userName'])) { echo 'edit.php';} else {echo'login.php';}?>" class="item"><i class="edit icon"></i> Edit Profile</a>
                    <a href=# class="item"><i class="settings icon"></i> Account Settings</a>
                  </div>
                </div>
                <a href=#  class=" item">
                  <i class="heartbeat icon"></i> Favorites
                </a>        
                <a href=#  class=" item">
                  <i class="shop icon"></i> Cart
                </a>                                     
            </nav>            
        </div>     
    </div>
    
    <div class="ui attached stackable borderless huge menu">
        <div class="ui container">
            <h2 class="header item">
              <img src="images/logo5.png" class="ui small image" >
            </h2>  
            <a href="index.php" class="item">
              <i class="home icon"></i> Home
            </a>       
            <a href="about.php" class="item">
              <i class="mail icon"></i> About Us
            </a>          
            <div class="ui simple dropdown item">
              <i class="grid layout icon"></i>
              Browse
                <i class="dropdown icon"></i>
              <div class="menu">
                <a href="artists.php" class="item" href="browse-artists.php"><i class="users icon"></i> Artists</a>
                <a href="genres.php" class="item" href="browse-genres.php"><i class="theme icon"></i> Genres</a>
                <a href="works.php" class="item" href="browse-paintings.php"><i class="paint brush icon"></i> Paintings</a>
                <a href="subjects.php" class="item"><i class="cube icon"></i> Subjects</a>
              </div>
            </div>        
            <div class="right item">
              <div class="col-md-3">
                  <form class="form-horizontal" action="searchResults.php" method="get">
                      <div class="input-group">
                          <input type="text" class="form-control" id="searchedValue" name="SearchedValue" placeholder="Enter search">
                          <div class="input-group-btn">
                              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                      </div>
                  </form>
              </div>
            </div>      

        </div>
    </div>   
    
</header> 