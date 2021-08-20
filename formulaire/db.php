<?php

$serveur_name="localhost";
$db_username="root";
$db_password="";
$db_name="formulaire";

$connection= mysqli_connect($serveur_name,$db_username,$db_password,$db_name);
if(!$connection)
{
    die("problème d'accès a la base de donnéés". $mysqli_connect_error());
}
?>                            