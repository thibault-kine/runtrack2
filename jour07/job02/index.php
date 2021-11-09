<?php
setcookie("nbvisites", 0, time()+365*24*60*3600);
$_COOKIE["nbvisites"] += 1;
echo($_COOKIE["nbvisites"]);
?>