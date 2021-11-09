<?php
session_start();
$_SESSION["nbvisites"]++;

if(!isset($_SESSION["nbvisites"]))
{
    if($_GET["reset"] != "Reset")
    {
        $_SESSION["nbvisiteurs"] = 0;
    }
}

if(!isset($_GET["reset"]))
{
    $_GET["reset"] = "Reset";
}

if($_GET["reset"] == "Reset")
{
    session_unset();
    $_GET["reset"] = "button";
}

echo("Vous avez visité cette page ".$_SESSION["nbvisites"]." fois");
var_dump($_GET["reset"]);
?>

<form action="index.php" method="get">
    <input type="submit" value="Reset" name="reset">
</form>