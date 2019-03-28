<div id="topHeaderRow">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            Welcome to Art Store, 
                            <?php if(isset($_SESSION['userName'])) { 
                                echo $_SESSION['userName']; 
                                } else {
                                    echo '<a href="login.php">Login</a> or <a href="register.php">Create</a> new account';
                                }                 
                                ?>
                        </div>
                    </div>
                    <ul class="nav navbar-nav navbar-right"> 
                        <li><a href="<?php if(isset($_SESSION['userName'])) { echo 'profile.php';} else {echo'login.php';}?>
                        "> <span class="glyphicon glyphicon-user"></span> My Account</a></li>
                        <li><a href="favourites.php"> <span class="glyphicon glyphicon-gift"></span> Wish List</a></li>
                        <li><a href="#"> <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                        <li><a href="#"> <span class="glyphicon glyphicon-arrow-right"></span> Checkout</a></li>
                        <li>
                        <?php
                        if(isset($_SESSION['userName'])) {
                                    echo '<form action="includes/logout.inc.php" method="POST">
                                    <button class="btn btn-danger" type="submit" name="logout">Logout</button>
                                    </form>';
                                } else {
                                    echo'<a href="login.php"><button class="btn btn-primary" type="submit" name="logout">Login</button></a>';
                                }
                        ?>
                        </li>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>