<?php

    // Databaseinformasjon
    $server = "localhost";  // Navn på databasetjeneren
    $user = "root";         // Brukernavn for å koble til databasen
    $pw = "";               // Passord for å koble til databasen
    $db = "bleh";           // Navnet på den valgte databasen

    // Oppretter en tilkobling til databasen ved hjelp av mysqli_connect
    $conn = mysqli_connect($server, $user, $pw, $db);

    // Sjekker om tilkoblingen mislyktes
    if(!$conn) {
        echo "Connection failed!";  // Melding som vises hvis tilkoblingen mislykkes
    }

    // Sjekker om tilkoblingen var vellykket
    if ($conn) {
        echo "Connection success";  // Melding som vises hvis tilkoblingen er vellykket
    }

?>
