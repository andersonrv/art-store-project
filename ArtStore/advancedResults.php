<?php include 'includes/session.inc.php'; ?>
<!doctype html>

<html lang="en">
<head>

    <?php include 'connections/config.php' ?>
    <?php include 'connections/artists.connect.php' ?>
    <?php include 'connections/search.connect.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Artist.class.php' ?>
    <?php include 'classes/Painting.class.php' ?>

    <title>IWP - Search Results</title>

</head>

<body>

    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>
    
    <div class="container">      
        <div class="row">
            <h1 class="similarTitle">Results - Advanced</h1>
        </div>
        
        <div class="container">
            <form action="advancedResults.php" method="get">
                
                <input type="text" class="form-control" id="searchedValue" name="SearchedValue" placeholder="Enter artist name or painting title..." 
                value="<?php if(isset($_GET['SearchedValue'])) { echo $_GET['SearchedValue']; } ?>">
                <!-- RABIO BUTTONS NOT FULLY WORKING YET -->
                <div class="row radio">
                    <label><input onclick="document.getElementById('extra2').style.visibility='hidden';document.getElementById('extra3').style.visibility='hidden'; document.getElementById('subOptionYear').checked=false; document.getElementById('subOptionPrice').checked=false;" type="radio" name="optsearch" value="artist">Artist by Name</label>
                </div>

                <div class="row radio">
                    <label><input onclick="document.getElementById('extra2').style.visibility='visible';document.getElementById('extra3').style.visibility='visible';" type="radio" name="optsearch" value="painting">Painting by Title</label>
                </div>
                    
                <div class="container"> 
                    <div class="row radio" id="extra2" style="visibility:hidden">
                        <label><input id="subOptionYear" type="radio" value="year" name="advPainting"/>By Year:</label>
                        <br/>
                        Initial Year:
                        <input type="number" id="minYear" name="MinYear" size="4" maxlength="4" min="1" max="2018"><br>

                        Final Year:
                        <input type="number" id="maxYear" name="MaxYear" size="4" maxlength="4" min="0" max="2018"><br>                 
                    </div>

                    <div class="row radio" id="extra3" style="visibility:hidden">
                        <label><input id="subOptionPrice" type="radio" value="cost" name="advPainting"/>By Price:</label>
                        <br/>
                        Minimum:
                        <input type="number" id="minPrice" size="12" name="MinPrice" min="=0" max="99999999998"><br>

                        Maximum:
                        <input type="number" id="minPrice" size="12" name="MaxPrice" min="1" max="99999999999"><br> 

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
            <br/>
            <div>
                <table class="table table-striped">
                    <col width="20%">
                    <col width="80%">
                    <tbody>
                    <?php include 'includes/searchResultsAdvBody.inc.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.inc.php' ?>

</body>

</html>
