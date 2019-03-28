<head>
<script type = "text/javascript" src="logOutClick.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse" id="indexNavigationID">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                         
                        </button>
                    <a class="navbar-brand" href="index.php"><h1 id="logoRow">ArtStore</h1></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">
                                    <h5 class="navbarOption">Home</h5>
                                </a>
                            </li>
                            <li>
                                <a href="about.php">
                                    <h5 class="navbarOption">About</h5>
                                </a>
                            </li>
                            <li>
                                <a href="artists.php">
                                    <h5 class="navbarOption">Artists</h5>
                                </a>
                            </li>
                            <li>
                                <a href="topArtists.php">
                                    <h5 class="navbarOption">Best-Sellers</h5>
                                </a>
                            </li>
                            <li>
                                <a href="genres.php">
                                    <h5 class="navbarOption">Genres</h5>
                                </a>
                            </li>
                            <li>
                                <a href="subjects.php">
                                    <h5 class="navbarOption">Subjects</h5>
                                </a>
                            </li>
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
                                <?php
                                    // if (session_status() == 1)
                                    // // if ($_SESSION['userName'] = $_POST['email'])
                                    // {
                                    //     printf(session_status().'testing session if session status 1');
                                    //     echo "<a href='login.php'>";
                                    //     echo "<h5 class='navbarOption'>Login</h5>";
                                    //     echo "</a>";
                                    //     }
                                    // else {
                                    //     printf(session_status().'testing session if session status is not 1');
                                    //     include_once 'includes/logout.inc.php';
                                    //     // echo '<a href="../logout.php" onclick="endSession(); return false;">Logout</a>'; 
                                    //     // echo '<a href="../js/logOutClick.js" id="logOut" onclick="closeSession()">
                                    //     // <h5 class="navbarOption">Logout</h5></a>';
                                    //     echo '<a href="../includes/logout.inc.php" id="logOut" onclick="">
                                    //     <h5 class="navbarOption">Logout</h5></a>';
                                    // }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>