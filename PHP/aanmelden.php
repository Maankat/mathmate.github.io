﻿<?php

$host = "localhost";

$user = "root";

$pass = "";

$db = "project 4";

$conn = mysqli_connect($host, $user, $pass, $db);

               

if(!$conn){

                die("Niet goed");

}

 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

               

                // als er op de knop ‘registreer’ is gedrukt willen we deze helft gebruiken

                // die de gegevens verwerkt

 

                $query = "INSERT INTO gebruikers (email, username, wachtwoord)

                VALUES('".$_POST['emailadres']."','".$_POST['gebruikersnaam']."','".md5($_POST['wachtwoord1'])."');";

                // de gegevens kunnen we opvangen door de $_POST te gebruiken met als naam de naam van het formulier

                // veldje.. kijk maar naar het formulier van net.

                $sql = mysqli_query($conn, $query);

                // we voeren de query uit

           header('Location:../index.php');

                // en we zijn aangemeld..

}else{

                // als er geen knop in is gedrukt willen we deze helft gebruiken

                // die het invulveld weergeeft

                echo 'je bent een Ravi.';

}

?>

               

 
