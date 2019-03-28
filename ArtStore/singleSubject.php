<?php include 'includes/session.inc.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <?php include 'connections/config.php' ?>
    <?php include 'connections/search.connect.php' ?>
    <?php include 'connections/genres.connect.php' ?>
    <?php include 'includes/resources.inc.php' ?>
    <?php include 'classes/Painting.class.php' ?>
    <?php include 'classes/Subject.class.php' ?>
    <?php include 'classes/Genre.class.php' ?>
    <?php include 'classes/Era.class.php' ?>

    <title>IWP - Subject</title>
</head>
<body>
    <header>
        <?php include 'includes/top-navigation.inc.php' ?>
        <?php include 'includes/menu.inc.php' ?>
        <?php include 'includes/navigation.inc.php'?>
    </header>
    <div class="container">
        <div class="container">
            <div class="row">
                <?php include 'includes/singleSubjectBody.inc.php' ?>
                <h2 class="similarTitle">Subject - <?php echo $subject->getSubjectName() ?></h2>
            </div>
            <div>
                <table class="table table-striped">
                    <col width="20%">
                    <col width="80%">
                    <tbody>
                        <?php include 'includes/singleSubjectSearch.inc.php' ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.inc.php' ?>
</body>

</html>