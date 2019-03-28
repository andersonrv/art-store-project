<?php
    session_start();
    // session_unset();
    // session_destroy();
    if(session_status() == 2) {
        echo 'Welcome ' . $_SESSION['userName'];
        echo '<br/><a href=../index.php?action=enter">GoToMainPage</a>';
    }
?>