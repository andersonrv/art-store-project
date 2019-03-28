
var email = document.getElementById('email');
var password = document.getElementById('password');

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
    if (email.value.length > 0) clearErrorMessage('Email');
    if (password.value.length > 0) clearErrorMessage('Password');
}

// event handlers

function init(){
    var login = document.getElementById('login');
    login.onsubmit = validateForm;
    email.onchange = resetMessages;
    password.onchange = resetMessages;
}

// validation checks

function validateForm() {
    var errorFlag = false;


    // checking email

    var emailReg = /(.+)@([^\.].*)\.([a-z]{2, })/;
    if (! emailReg.test(email.value)){
        addErrorMessage('Email', 'Please enter a valid email address [js]');
        errorFlag = true;
    }

    // checking password

    var passReg = /^[a-zA-Z]\w{8,16}$/;
    if (!passReg.test(password.value)) {
        addErrorMessage('Password', 'Please enter a password between 8 and 16 characters [js]');
        errorFlag = true;
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