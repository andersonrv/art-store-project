<?php //include 'includes/session.inc.php'; ?>
<?php
include 'connections/config.php';
include 'classes/ValidationResult.php';
include 'classes/CustomerLogon.class.php';
include 'includes/login.inc.php';
include 'connections/paintings.connect.php';


?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <?php
        include 'includes/top-navigation.inc.php';
        include 'includes/resources.inc.php';
        
        include 'classes/Painting.class.php';
        
        
    ?>
    <title>Login Page</title>
</head>
<body >
<form action="login.php" method="POST" class="form-horizontal" id="login" >
<fieldset>
    <div class="ui container " id="controlEmail">
        <h3>Login Page</h3>
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input id="email" name="email" type="text" class="col-md-4" 
                value="<?php if(isset($_POST['login'])){echo $emailValid->getValue();}?>"
                placeholder="john@email.com"
                class="input-xlarge" required>
            <span class="help-inline" id="errorEmail">
            <?php if(isset($_POST['login'])){echo $emailValid->getErrorMessage();}?>
                <?php ?>
            </span>
        </div>
    </div>
        <div class="ui container " id="controlPassword">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input id="password" name="password" type="password" class="col-md-4"
                    value="<?php if(isset($_POST['login'])){echo $passValid->getValue();}?>"
                    placeholder="Enter your password"
                    class="input-xlarge" required>
                <span class="help-inline" id="errorPassword">
                    <?php if(isset($_POST['login'])){echo $passValid->getErrorMessage();}?>
                </span>
            </div>
        </div>

    <div class="ui container">
        <label class="control-label" for="submit"></label>
        <div class="controls">
            <button type="submit" name="login" class="btn btn-primary" id="login">Submit</button>
        </div>
        </br>
         <a href="index.php">Back to Home</button></a>
        <p class="bg-warning"><?php echo $registerMessage?></p>
    </div>

   
</fieldset>

</form>
</body>
<?php

?>
</html>

