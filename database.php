<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=my_projet','root','');
    } catch (Exeption $e) {
        die('erreur:'.$e->getMessage());
    }
?>