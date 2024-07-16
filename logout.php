<?php
    session_start();
    //supprime la session
    unset($_SESSION['pseudo']);
    /* session_destroy(); */
    header('Location:index.php');
?>