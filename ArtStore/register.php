<?php include 'includes/session.inc.php'; ?>
<!DOCTYPE html>
<html lang=en>
<head>
<?php include 'classes/ValidationResult.php' ?>
<?php include 'includes/resources.inc.php' ?>
</head>
<body >
    
<?php include 'includes/art-header.inc.php'; ?>
<div class="banner-container">
    <div class="ui sizer container">
        <h1 class="ui huge header">Come join us</h1>
    </div>  
</div>  
<h2 class="ui horizontal divider"><i class="write icon"></i> Register</h2>   
    
<main>
   <section class="ui stackable container">
    <div>
    <?php include 'includes/newUserValidation.inc.php' ?>
    </div>
    <br/>
    <?php include 'includes/registerBody.inc.php' ?>
   </section>
   <br/>
   <br/>
</main>
</body>
</html>