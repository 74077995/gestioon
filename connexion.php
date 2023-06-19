<?php
//connexion a la base de donnees
$con =mysqli_connect("localhost","root","","nadege");
if(!$con){
    echo "vous n'etes pas connecte a la base de donnee";
} 
?>