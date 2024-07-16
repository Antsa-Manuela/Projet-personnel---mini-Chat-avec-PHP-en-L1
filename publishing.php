<link rel="stylesheet" href="style_publish.css">
<?php
/*     include('logo.php');
    include('nav.php'); */
?>
</div>

<form action="publish.php" method="post" class="pub">
    <div class="input">
        <label for="pseudo">Pseudo:</label>
        <input type="text" name="pseudo" id="pseudo" class="pseudo">
    </div><br>
    <div class="input">
    <input type="text" name="texte" placeholder="Ecrire ici">
    <input type="submit" value="Post">
    </div>
</form>

<hr>
<?php
    include('database.php');
    $selection = $bdd->query("SELECT id_pub, pseudo, texte, image FROM publishing");
    $donnees=$selection->fetch();
    while ($donnees=$selection->fetch()){
        echo "<br><br><br><br><p class=\"pub\">De <span class=\"envoyeur\">".$donnees["pseudo"]."</span>: ".$donnees["texte"]."</p><hr class=\"hr\"><br><br><br><br><br>";
    }
?>