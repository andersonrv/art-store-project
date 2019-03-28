<form class="ui form" method="post" action="register.php">
    <h4 class="ui dividing header">Personal Information</h4>
    <div class="field">
        <label>Name</label>
        <div class="two fields">
            <div class="field" id="firstnamecontainer">
                <input type="text" name="FirstName" placeholder="First Name" id="firstName" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){if(isset($_POST['FirstName'])){echo $_POST['FirstName'];}}?>">
            </div>
            <div class="field" id="lastnamecontainer">
                <input type="text" name="LastName" placeholder="Last Name" id="lastname" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){if(isset($_POST['LastName'])){echo $_POST['LastName'];}}?>">
            </div>
        </div>
    </div>
    <div class="six wide field" id="phonecontainer">
        <label>Phone</label>
        <input type="text" name="Phone" placeholder="xxx-xxx-xxxx" id="phone" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){if(isset($_POST['Phone'])){echo $_POST['Phone'];}}?>">
    </div>
    <h4 class="ui dividing header">Login Information</h4>
    <div class="field" id="emailcontainer">
        <label>E-mail</label>
        <input type="email" placeholder="joe@schmoe.com" name="Email" id="email" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){if(isset($_POST['Email'])){echo $_POST['Email'];}}?>">
        <div class="text-danger">
            <h3>
                <?php if(isset($_POST['Register'])){echo $emailValid->getErrorMessage();}?>
            </h3>
        </div>
    </div>
    <div class="fields">
        <div class="eight wide field" id="password1container">
            <label>Password</label>
            <input type="password" name="Pass" maxlength="16" placeholder="Password" id="password1">
            <div class="text-danger">
                <h3>
                    <?php if(isset($_POST['Register'])){echo $passValid->getErrorMessage();}?>
                </h3>
            </div>
        </div>
        <div class="eight wide field" id="password2container">
            <label>Password Again</label>
            <input type="password" name="ConfPass" maxlength="16" placeholder="Repeat" id="password2">
        </div>
    </div>
    <br/>
    <div class="inline field" id="agreecontainer">
        <div class="ui">
            <input type="checkbox" tabindex="0" name="Agree" id="agree">
            <label>I agree to the terms and conditions</label>
        </div>
    </div>
    <button type="submit" class="ui primary button" tabindex="0" name="Register" id="register">Register</div>
</form>