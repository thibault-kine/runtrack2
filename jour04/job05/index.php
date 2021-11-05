<?php
if($_POST["username"] == "John" && $_POST["password"] == "Rambo")
{
    echo("C'est pas ma guerre");
}
else if($_POST["username"] != null && $_POST["password"] != null)
{
    if($_POST["username"] != "John" && $_POST["password"] != "Rambo")
    {
        echo("Votre pire cauchemar");
    }
}
?>

<form action="index.php" method="post">
    <label for="username">Pseudo d'utilisateur: </label>
    <input type="text" name="username" id="username"><br>
    <label for="password">Mot de passe: </label>
    <input type="text" name="password" id="password"><br>
    <input type="submit">
</form>