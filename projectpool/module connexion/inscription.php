<?php
$canRegister = false;
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
        <h1>Inscrivez-vous afin de profiter de Bouff' @ Home !</h1>
    </div>
    <div id="inscription">

    <h1>Inscription :</h1>
    <?php
    if(!$canRegister)
    {
        echo("<form action=\"\" method=\"post\">");
    }
    else
    {
        echo("<form action=\"connexion.php\" method=\"post\">");
    }
    ?>
        <div class="field">
        <label for="name">Prénom : </label>
        <input type="text" name="name"><br>
        </div>
        <div class="field">
        <label for="lastname">Nom : </label>
        <input type="text" name="lastname"><br>
        </div>
        <div class="field">
        <label for="login">Nom d'utilisateur : </label>
        <input type="text" name="login"><br>
        </div>
        <div class="field">
        <label for="password">Mot de passe : </label>
        <input type="password" name="p1"><br>
        </div>  
        <div class="field">
        <label for="password">Confirmation du mot de passe : </label>
        <input type="password" name="p2"><br>
        </div>
        
        <?php
        if($_POST != null)
        {
            if(
                $_POST["name"] != "" && $_POST["lastname"] != "" &&
                $_POST["login"] != "" && $_POST["p1"] != "" && $_POST["p2"] != ""
            )
            {
                if($_POST["p1"] == $_POST["p2"])
                {
                    $canRegister = true;
                }
            }
        }
        ?>

        <input type="submit" value="Je m'inscris !" class="btn">
        <br>
        <a href="connexion.php" style="font-family: Arial; font-size: 16;">Vous avez déjà un compte ? Connectez-vous ici.</a>
    </form>

    </div>
</body>
</html>

<?php
if($canRegister)
{
    $_name = $_POST["name"];
    $_lastname = $_POST["lastname"];
    $_login = $_POST["login"];
    $_password = $_POST["p1"];


    $bdd = mysqli_connect("localhost", "root", "", "moduleconnexion");
    $query = "INSERT INTO `utilisateurs`(`prenom`, `nom`, `login`, `password`) VALUES ('$_name', '$_lastname', '$_login', '$_password');";

    $inscription = mysqli_query($bdd, $query);
}
?>