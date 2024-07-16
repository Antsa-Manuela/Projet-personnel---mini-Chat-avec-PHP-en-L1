<link rel="stylesheet" href="styles/style_chat.css">
<div class="header">
<?php
    include('logo.php');
    include('nav.php');
?>
</div>
<hr>
<!-- style="border: solid 1px #00cc66;" -->
<?php
    include('profile.php');
?>

<?php
/*     include('footer.php'); */
    if (isset($_SESSION['pseudo'])) {
        # code...

?>
<!-- <hr> -->
<br>
<br>
<br>
<div class="chat">

<form action="sendmessage.php" method="post">
<span class="send">
    <label for="pseudo">Votre pseudo:</label>
    <input type="text" name="pseudo" id="pseudo" value="<?php 
    if (isset($_SESSION['pseudo'])) {
    echo "     ".$_SESSION['pseudo'];
    }
    ?>">
</span>
<br>
<hr>

<?php

    include('database.php');
    $selection = $bdd->query("SELECT id_chat, pseudo, message FROM chat");
    $donnees=$selection->fetch();
    while ($donnees=$selection->fetch()){
        echo "<br><p class=\"sms\"><span class=\"envoyeur\">".$donnees["pseudo"]."</span> : ".$donnees["message"]."</p>";
    }
?>
<br>
<hr>
<br>
<?php
    }
    else {
        header('Location:index.php');
    }
?>

</div>

<span class="envoie">
    <input type="text" name="message" placeholder="Insérer votre message">
    <input type="submit" value="Send">
</span>
</form>
<br>
<script>
    
</script>