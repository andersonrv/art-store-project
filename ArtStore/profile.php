<?php include 'includes/session.inc.php'; ?>
<!DOCTYPE html>
<html lang=en>
<head>
<?php include 'connections/config.php' ?>
<?php include 'classes/Customer.class.php' ?>
<?php include 'connections/search.connect.php' ?>
<?php include 'includes/editValidation.inc.php' ?>
<?php include 'includes/resources.inc.php' ?>
</head>
<body >
<?php include 'includes/art-header.inc.php'; ?>
<h2 class="ui horizontal divider"><i class="write icon"></i> User Profile</h2>   
<?php include 'includes/profileBody.inc.php'; ?>
</body>
</html>