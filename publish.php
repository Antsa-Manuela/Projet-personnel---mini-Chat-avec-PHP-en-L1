<?php
    include('database.php');
    $pseudo = $_POST['pseudo'];
    $texte = $_POST['texte'];
    $fichier = $_FILES['fichier'];
    $fichierData = file_get_contents($fichier); //lecture de l'image en flux binaire
    $fichierData = mysqli_real_escape_string($bdd, $fichierData);

    //Ajouter ici les contrôles souhaités

    $rekety=$bdd->query("INSERT INTO publishing (pseudo, texte, image) VALUES('".$pseudo."', '".$texte."', '".$fichierData."')");
    header("Location:home.php");
?>