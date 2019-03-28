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
            <h1 class="similarTitle">Results</h1>
        </div>
        
        <div class="container">
            <form action="searchResults.php" method="get">
                
                <input type="text" class="form-control" id="searchedValue" name="SearchedValue" placeholder="Enter search" 
                value="<?php if(isset($_GET['SearchedValue'])) { echo $_GET['SearchedValue']; } ?>">
                <div class="row radio">
                    <label><input type="radio" name="optsearch" value="artist">Artist</label>
                </div>

                <div class="row radio">
                    <label><input type="radio" name="optsearch" value="painting">Painting</label>
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
                    <?php include 'includes/searchResultsBody.inc.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.inc.php' ?>

</body>

</html>
