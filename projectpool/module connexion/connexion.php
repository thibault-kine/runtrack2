<?php 
$canConnect = false; 
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
        <a href="inscription.php"><h2>S'inscrire / Se connecter</h2></a>
    </div>
</header>

    <div id="welcome">
        <h1>Connectez-vous à Bouff' @ Home !</h1>
    </div>
    <div id="connexion">

    <h1>Connexion :</h1>
    <form action="" method="post">
        <div class="field">
        <label for="login">Nom d'utilisateur :</label>
        <input type="text" name="login"><br>
        </div>
        <div class="field">
        <label for="password">Mot de passe :</label>
        <input type="password" name="p1"><br>
        </div>

        <?php
        if($_POST != null)
        {
            if($_POST["login"] != "" && $_POST["p1"] != "")
            {
                $canConnect = true;
            }
        }
        ?>
            
        <a href="connexion.php">
        <input type="submit" value="Je me connecte !" class="btn">
        </a>
    </form>

    </div>
</body>
</html>

<?php
if($canConnect)
{
    $_login = $_POST["login"];
    $_password = $_POST["p1"];

    $bdd = mysqli_connect("localhost", "root", "", "moduleconnexion");
    $query = "SELECT `login`, `password` FROM `utilisateurs` WHERE '$_login'=`login` AND '$_password'=`password`";
    
    $connexion = mysqli_query($bdd, $query);
    var_dump($connexion);
    if($connexion['num_rows'] == 1)
    {
        session_start();
        if(!isset($_SESSION["login"]) && !isset($_SESSION["p1"]))
        {
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["p1"] = $_POST["p1"];
        }
    }
}
?>