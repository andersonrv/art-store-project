<?php include 'includes/session.inc.php'; ?>
<!doctype html>

<html lang="en">
<head>

    <?php include 'includes/resources.inc.php' ?>
    <?php include 'connections/config.php' ?>
    <?php include 'connections/genres.connect.php' ?>
    <?php include 'connections/eras.connect.php' ?>
    <?php include 'queries/everyGenre.query.php' ?>
    <?php include 'queries/everyEra.query.php' ?>
    <?php include 'classes/Genre.class.php' ?>
    <?php include 'classes/Era.class.php' ?>

    <title>IWP - Genres</title>

</head>

<body>

    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>
    <div class="container">
        <?php include 'includes/genresBody.inc.php'?>
    </div>

    <?php include 'includes/footer.inc.php' ?>
</body>

</html>