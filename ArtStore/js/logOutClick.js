function closeSession() {

        document.getElementById("logOut").innerHTML = "<?php session_start(); ?>"
        document.getElementById("logOut").innerHTML = "<?php session_unset(); ?>"
        document.getElementById("logOut").innerHTML = "<?php session_destroy(); ?>"
        document.getElementById("logOut").innerHTML = "<?php header('Location: ../index.php'); ?>"}
        
// function closeSession() {
//     $.ajax({
//         url: "../includes/logout.inc.php", 
//         type: "POST", //request type
//         success: function (result) {
//             alert(result);
//         }
//     });
// }