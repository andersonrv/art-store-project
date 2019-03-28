<?php
if(isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
    $customer = searchForCustomerProfile($userName);
}
?>

<main>
   <section class="ui stackable container">
    <div>
    </div>
    <br/>
    <div class="ui form">
        <h4 class="ui dividing header">Personal Information</h4>
        <div class="field" id="emailcontainer">
            <label>E-mail / UserName</label>
            <h3 class="text-primary"><?php echo $customer->getEmail();?></h3>
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="firstName">
                <label>First Name</label>
                <h3 class="text-primary"><?php echo $customer->getFirstName() ?></h3>
            </div>
            <div class="eight wide field" id="lastName">
                <label>Last Name</label>
                <h3 class="text-primary"><?php echo $customer->getLastName() ?></h3>
            </div>
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="address">
                <label>Address</label>
                <h3 class="text-primary"><?php echo $customer->getAddress() ?></h3>
            </div>
            <div class="eight wide field" id="city">
                <label>City</label>
                <h3 class="text-primary"><?php echo $customer->getCity() ?></h3>
            </div>
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="country">
                <label>Country</label>
                <h3 class="text-primary"><?php echo $customer->getCountry() ?></h3>
            </div>
            <div class="eight wide field" id="region">
                <label>Region</label>
                <h3 class="text-primary"><?php echo $customer->getRegion() ?></h3>
            </div>
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="postal">
                <label>Postal</label>
                <h3 class="text-primary"><?php echo $customer->getPostal() ?></h3>
            </div>
            <div class="eight wide field" id="phone">
                <label>Phone</label>
                <h3 class="text-primary"><?php echo $customer->getPhone() ?></h3>
            </div>
        </div>
        <br/>
        <a href="edit.php">
        <button class="ui primary button" tabindex="0" name="update" id="update">Edit</div>
        </a>
    </div>
   </section>
   <br/>
   <br/>
</main>