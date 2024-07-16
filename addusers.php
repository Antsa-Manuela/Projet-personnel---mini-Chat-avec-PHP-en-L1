<?php
    //Démarrer la session
    session_start();
    include('database.php');
    if (!empty($_POST)) {
        if (isset($_POST["email"], $_POST["number"], $_POST["pseudo"], $_POST["mdp"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["pseudo"]) && !empty($_POST["mdp"]) ){
            $email = $_POST['email'];
            $number = $_POST['number'];
            $pseudo = $_POST['pseudo'];
            $password = $_POST['mdp'];
            //Ajouter ici les contrôles souhaités
            $rqt=$bdd->query("INSERT INTO users (email, number, pseudo, password) VALUES('".$email."', '".$number."', '".$pseudo."', '".$password."')");
            $rqet=$bdd->query("INSERT INTO chat (pseudo) VALUES (".$pseudo.")");
            /* header('Location:signin.php'); */
            //On récupère l'id du nouvel l'utilisateur
            $id = $bdd->lastInsertId();
            //connecter l'utilisateur
            //On stocke dans $_SESSION les informations de l'utilisateur (facultatif?)
            $_SESSION["utilisateurs"]= [
                "id" => $id,
                "email" => $_POST["email"],
                "number" => $_POST["number"],
                "pseudo" => $_POST["pseudo"],
            ];
            $id = $bdd->lastInsertId();
            header('Location:index.php');
        }
        else {
            die("Le formulaire est incomplet");
        }
    }
    $rqt=$bdd->query("INSERT INTO chat (pseudo) VALUES (".$pseudo.")");
?>