<?php
    include('database.php');
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];

    //Ajouter ici les contrôles souhaités

    $rkt=$bdd->query("INSERT INTO chat (pseudo, message) VALUES('".$pseudo."', '".$message."')");
    $rqet=$bdd->query("INSERT INTO chat (id_chat, pseudo, message) VALUES ('',".$pseudo.",'".$message."')");
    header("Location:chat.php");
?>