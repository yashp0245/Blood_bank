<?php
    session_start();
    session_unset();
    session_destroy();
    header( "location:temp1.php");
?>