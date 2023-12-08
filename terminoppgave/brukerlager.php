<?php
// Inkluderer filen som inneholder tilkoblingsinformasjon til databasen
include("db_connect.php");

// Henter passord fra skjemaet
$passord = $_POST['passord3'];
$passord2 = $_POST['passord2'];

// Sjekker om de to innskrevne passordene er like
if ($passord == $passord2) {
    // Henter andre skjemafeltverdier
    $mail = $_POST['mail'];
    $navn = $_POST['navn'];
    $etternavn = $_POST['etternavn'];
    $brukernavn = $_POST['brukerlager'];

    // Setter opp SQL-spørringen for å legge til en ny bruker i databasen
    // Legger merke til at det anbefales å bruke forberedte spørringer for å forhindre SQL-injeksjoner
    $sporring = "INSERT INTO bruker (brukernavn, mail, navn, etternavn, passord)";
    $sporring .= " VALUES ('$brukernavn','$mail', '$navn', '$etternavn', '$passord')";

    // Utfører SQL-spørringen
    $output = mysqli_query($conn, $sporring);

    // Sjekker om spørringen ble utført vellykket
    if ($output) {
        echo 'Bruker lagt til vellykket!';
    } else {
        echo 'Feil ved innsetting av bruker: ' . mysqli_error($conn);
    }
} else {
    // Hvis passordene ikke er like, gir en feilmelding
    echo 'Pass på at passordene er skrevet likt!';
}

// Omdirigerer tilbake til index.php uavhengig av resultatet
header("Location: index.php")
?>