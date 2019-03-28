/* add valiation checks here */

var phone = document.getElementById('phone')
var email = document.getElementById('email');
var password = document.getElementById('password');
var password1 = document.getElementsByName('password1');
var password2 = document.getElementsByName('password2');

// Passing messages to specified element

function addErrorMessage(id, msg) {

    //get relevant span and div elements

    var spanId = 'error' + id;
    var span = document.getElementById(spanId);
    var divId = 'control' + id;
    var div = document.getElementById(divId);

    // add error message to error span element

    if (span) span.innerHTML = msg;
    if (div) div.className = div.className + "error";

}
// Clearing error message for specified element

function clearErrorMessage(id) {

    //get relevant span and div elements

    var spanId = 'error' + id;
    var span = document.getElementById(spanId);
    var divId = 'control' + id;
    var div = document.getElementById(divId);

    // clear error message and class to error span and div elements

    if (span) span.innerHTML = "";
    if (div) div.className = "control-group";
}

// clearing error state

function resetMessages() {
    if (phone.value.length > 0) clearErrorMessage('Phone');
    if (email.value.length > 0) clearErrorMessage('Email');
    if (password.value.length > 0) clearErrorMessage('Password');
    if (password1.value.length > 0) clearErrorMessage('Password1');
    if (password2.value.length > 0) clearErrorMessage('Password2');
}

// event handlers

function init() {
    var login = document.getElementById('login');
    login.onsubmit = validateForm;
    phone.onchange = resetMessages;
    email.onchange = resetMessages;
    password.onchange = resetMessages;
    password1.onchange = resetMessages;
    password2.onchange = resetMessages;
}

// validation checks

function validateForm() {
    var errorFlag = false;

    // checking phone

    var phoneReg = /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/;
    if (!phoneReg.test(phone.value)) {
        addErrorMessage('Phone', 'Please enter phone number in XXX-XXX-XXXX format [js]');
        errorFlag = true;
    }


    // checking email

    var emailReg = /(.+)@([^\.].*)\.([a-z]{2, })$/;
    if (!emailReg.test(email.value)) {
        addErrorMessage('Email', 'Please enter a valid email address [js]');
        errorFlag = true;
    }

    // checking password

    var passReg = /^[a-zA-Z]\w{8,16}$/;
    if (!passReg.test(password.value)) {
        addErrorMessage('Password', 'Please enter a password between 8 and 16 characters [js]');
        errorFlag = true;
    }

    if (password1 != password2) {
        addErrorMessage('Passwords', 'Passwords entered must match [js]');
    }

    // checking conditions agreement

    if (document.getElementById("agree").checked = false){
        addErrorMessage('Checkbox','Please agree to terms and conditions');
    }

    // canceling submit if any errors occur

    if (!errorFlag)
        return true;
    else {
        if (e.preventDefault) {
            e.preventDefault();
        } else {
            e.returnValue = false;
        }
        return false;
    }
}

// setting up validation handler when page is downloaded and ready

window.onload = init;