<?php include 'includes/session.inc.php'; ?>
<!doctype html>

<html lang="en">
<head>

    <?php include 'connections/config.php' ?>
    <?php include 'connections/subjects.connect.php'; ?>
    <?php include 'queries/everySubject.query.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Subject.class.php' ?>

    <title>IWP - Subjects</title>

</head>

<body>

    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>
    
    <div class="container">
        <div class="row">
            <h1 class="similarTitle">Subjects</h1>
        </div>
        <div class="col-md-12">
            <?php            
                include 'includes/subjectsAsThumb.inc.php';
            ?>
        </div>
    </div>

    <?php include 'includes/footer.inc.php' ?>
</body>

</html>