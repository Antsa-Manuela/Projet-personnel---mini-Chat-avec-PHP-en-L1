<link rel="stylesheet" href="styles/style_signin.css">
<div class="header">
<?php
    include('header.php');
?>
<fieldset>
    <legend><h2>Inscription</h2></legend>
    Se connecter <a href="index.php?id=ici">ici</a>
    <form action="addusers.php" method="post">
        <input type="text" name="email" placeholder="E-mail"><br>
        <input type="tel" name="number" placeholder="Tel"><br>
        <input type="text" name="pseudo" placeholder="Pseudo"><br>
        <input type="password" name="mdp" placeholder="Mot de passe"><br>
        <input type="submit" value="Se connecter">
    </form>
</fieldset>
</div>
<?php
    include('footer.php');
?>