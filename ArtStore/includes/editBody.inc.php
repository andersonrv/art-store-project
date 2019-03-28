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
    <form class="ui form" method="post" action="profile.php">
        <h4 class="ui dividing header">Personal Information</h4>
        <div class="field" id="emailcontainer">
            <label>E-mail / UserName</label>
            <h3 class="text-primary"><?php echo $customer->getEmail();?></h3>
            <input type="hidden" name="Email" value="<?php echo $customer->getEmail();?>">
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="firstName">
                <label>First Name</label>
                <input type="text" name="FirstName" placeholder="First Name" id="firstName" value="<?php echo $customer->getFirstName();?>">
            </div>
            <div class="eight wide field" id="lastName">
                <label>Last Name</label>
                <input type="text" name="LastName" placeholder="Last Name" id="lastname" value="<?php echo $customer->getLastName();?>">
            </div>
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="address">
                <label>Address</label>
                <input type="text" name="Address" placeholder="Address" id="address" value="<?php echo $customer->getAddress();?>">
            </div>
            <div class="eight wide field" id="city">
                <label>City</label>
                <input type="text" name="City" placeholder="City" id="city" value="<?php echo $customer->getCity();?>">
            </div>
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="country">
                <label>Country</label>
                <input type="text" name="Country" placeholder="Country" id="country" value="<?php echo $customer->getCountry();?>">
            </div>
            <div class="eight wide field" id="region">
                <label>Region</label>
                <input type="text" name="Region" placeholder="Region" id="region" value="<?php echo $customer->getRegion();?>">
            </div>
        </div>
        <h2 class="ui dividing divider"></h2>
        <div class="fields">
            <div class="eight wide field" id="postal">
                <label>Postal</label>
                <input type="text" name="Postal" placeholder="Postal" id="postal" value="<?php echo $customer->getPostal();?>">
            </div>
            <div class="eight wide field" id="phone">
                <label>Phone</label>
                <input type="text" name="Phone" placeholder="Phone" id="phone" value="<?php echo $customer->getPhone();?>">
            </div>
        </div>
        <br/>
        <button type="submit" class="ui primary button" tabindex="0" name="Update" id="update">Update</button>
    </div>
    <a href=profile.php><button class="ui button" tabindex="0" name="Cancel" id="cancel">Cancel</button></a>
   </section>
   <br/>
   <br/>
</main>