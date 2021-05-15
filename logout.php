<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    // remove all session variables
    if (isset($_SESSION)) {
        unset($_SESSION);

        // destroy the session
        session_destroy(); 

        header("Location: loginn.php");
    }
?>