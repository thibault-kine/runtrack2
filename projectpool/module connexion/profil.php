<?php
session_start();
?>

<html>
    <head>
        <title>Bouff' @ Home</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
    </head>

<body>

<header>
    <div id="links">
        <a href="index.php"><h1>Bouff' @ Home</h1></a> 
        <div id="profile-links">
            <a href="inscription.php"><h2>S'inscrire</h2></a>
            <a href="connexion.php"><h2>Se connecter</h2></a>
        </div>
    </div>
</header>

<div id="profil">
    <div id="main-info">
        <input type="image" name="image" src="img/defaultprofile.png" id="profilepic">
        <div id="names">
            <?php 
            echo('
            <form method="post">
                <input type="text" name="login" value="'.$_SESSION["login"].'" id="login"><br>
                <input type="text" name="name" value="'.$_SESSION["name"].'" class="login-names">
                <input type="text" name="lastname" value="'.$_SESSION["lastname"].'" class="login-names"><br>
                <input type="password" name="p1" value="'.$_SESSION["password"].'" class="passwords">
                <input type="password" name="p2" placeholder="confirmer mot de passe" class="passwords">
                <input type="submit" style="font-size: 20;">
            </form>
            ');
            ?>
        </div>
    </div>
    <div class="panel">
        <h1>- Vos commandes en cours -</h1>
        <img src="img/livreur.png" alt="">
        <p>Vous n'avez rien commandé pour l'instant...</p>
    </div>
    <div class="panel">
        <h1>- Vos restaurants favoris -</h1>
        <img src="img/restaurant.png" alt="">
        <p>Vous n'avez aucun restaurant favori...</p>
    </div>
    <div class="panel">
        <h1>- Vos réductions -</h1>
        <img src="img/coupon.png" alt="">
        <p>Vous n'avez aucune réduction...</p>
    </div>
</div>    

</body>
</html>

<?php
if(!empty($_POST))
{
    if($_POST["p1"] == $_POST["p2"])
    {
        $_login = $_POST["login"];
        $_name = $_POST["name"];
        $_lastname = $_POST["lastname"];
        $_password = $_POST["p1"];
        $_userID = $_SESSION["id"];

        if(!empty($_SESSION))
        {
            $db = mysqli_connect("localhost", "root", "", "moduleconnexion");
            $query = "UPDATE `utilisateurs` SET `login`='$_login', `prenom`='$_name', `nom`='$_lastname', `password`='$_password'
            WHERE `id`='$_userID";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);

            if($_SESSION != $row)
            {
                $_SESSION["login"] = $row["login"];
                $_SESSION["name"] = $row["prenom"];
                $_SESSION["lastname"] = $row["nom"];
                $_SESSION["password"] = $row["password"];
            }
        }
    }
}
var_dump($_SESSION);
?>