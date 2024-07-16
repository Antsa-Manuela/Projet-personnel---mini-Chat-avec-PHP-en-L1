<?php
    include('database.php');
    $id = $_GET['id'];
    $delete = $bdd-> query("DELETE FROM chat WHERE id_chat=".$id);
    header("Location:chat.php");
/*     exit(); */
?>