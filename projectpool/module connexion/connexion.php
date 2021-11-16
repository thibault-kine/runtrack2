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
        <div id="profile-links">
            <a href="inscription.php"><h2>S'inscrire</h2></a>
            <a href="connexion.php"><h2>Se connecter</h2></a>
        </div>
    </div>
</header>

    <div id="welcome">
        <h1>Connectez-vous à Bouff' @ Home !</h1>
    </div>
    <div id="connexion">

    <h1>Connexion :</h1>
    <?php
    if(!$canConnect)
    {
        echo "<form action=\"\" method=\"post\">";
    }
    else
    {
        echo "<form action=\"profil.php\" method=\"post\">";
    }
    ?>
        <div class="field">
        <label for="login">Nom d'utilisateur :</label>
        <input type="text" name="login"><br>
        </div>
        <div class="field">
        <label for="password">Mot de passe :</label>
        <input type="password" name="p1"><br>
        </div>

        <?php
        if(!empty($_POST)) // si $_POST n'est pas vide
        {
            checkLogin($_POST["login"], $_POST["p1"]);
        }
        ?>
            
        <input type="submit" value="Je me connecte !" class="btn">
    </form>

    </div>
</body>
</html>

<?php
function checkLogin(string $_login, string $_password)
{
    if($_login != "" && $_password != "") // si les champs entrés ne sont pas vides
    {
        $db = mysqli_connect("localhost", "root", "", "moduleconnexion");
        $query = "SELECT `login`, `password` FROM `utilisateurs` WHERE '$_login'=`login` AND '$_password'=`password`";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) == 1) // si exactement une entrée correspond
        {
            if(!isset($_SESSION)) // s'il n'y a pas encore de session ouverte
            {
                session_start();
                if(empty($_SESSION["login"]) || empty($_SESSION["password"]))
                {
                    $_SESSION["login"] = $_login;
                    $_SESSION["password"] = $_password;
                }
                else
                {
                    $query = "SELECT `prenom`, `nom`, `login`, `id` FROM `utilisateurs` WHERE '$_login'=`login` AND '$_password'=`password`";
                    $result = mysqli_query($db, $query);
                    $row = mysqli_fetch_assoc($result);

                    $_SESSION["login"] = $row["login"];
                    $_SESSION["name"] = $row["prenom"];
                    $_SESSION["lastname"] = $row["nom"];
                    $_SESSION["id"] = $row["id"];
                    
                    var_dump($_SESSION);
                }
            }
        }
    }
}
?>