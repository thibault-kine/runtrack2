<?php
session_start();
var_dump($_SESSION);
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
            <?php
            if(!empty($_SESSION))
            {
                echo "<a href='profil.php'><h2>Profil</h2></a>";
            }
            ?>
            <a href="inscription.php"><h2>S'inscrire</h2></a>
            <a href="connexion.php"><h2>Se connecter</h2></a>
        </div>
    </div>
</header>

    <div id="welcome">
        <h1>Bienvenue sur Bouff' @ Home</h1>
        <h2>La bouffe, chez vous, quand vous voulez</h2>
    </div>
    <div id="inscription-popup">
        <h2>Vous n'avez pas de compte ?</h2>
        <a href="inscription.php">
        <h1>Commencez par vous inscrire !</h1>
        </a>
    </div>
</body>
</html>
