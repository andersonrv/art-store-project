<?php

if (isset($_POST['logout'])){
    session_start();
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}

// function endSession() {
//     session_start();
//     session_unset();
//     session_destroy();
//     echo 'session_status()'.' from logout.inc';
//     header("Location: ../index.php");
    
// }

?>