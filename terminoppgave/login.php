<?php
// Starter eller gjenopptar en eksisterende økt
session_start();

// Inkluderer filen for databasekobling
include "db_connect.php";

// Sjekker om 'brukernavn' og 'passord' er satt i POST-forespørselen
if(isset($_POST['brukernavn']) && isset($_POST['passord'])) {

    // Funksjon for validering av inndata for å forhindre SQL-injeksjoner og lignende
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

// Validerer 'brukernavn' og 'passord' fra POST-forespørselen
$brukernavn = validate($_POST['brukernavn']);
$passord = validate($_POST['passord']);

// Sjekker om 'brukernavn' er tomt, omdirigerer med feilmelding hvis det er tilfelle
if(empty($brukernavn)) {
    header ("Location: index.php?error=Mangler brukernavn!");
    exit();
}
// Sjekker om 'passord' er tomt, omdirigerer med feilmelding hvis det er tilfelle
else if(empty($passord)) {
    header ("Location: index.php?error=Mangler passord!");
    exit();
}

// SQL-spørring for å hente brukeren med matchende 'brukernavn' og 'passord'
$sql = "SELECT * FROM bruker WHERE brukernavn='$brukernavn' AND passord='$passord'";

// Utfører SQL-spørringen
$result = mysqli_query($conn, $sql);

// Sjekker om det finnes en rad i resultatet
if(mysqli_num_rows($result) > 0) {
    // Henter assosiativt array av data fra resultatet
    $row = mysqli_fetch_assoc($result);

    // Sjekker om 'brukernavn' og 'passord' fra skjemaet matcher dataene fra databasen
    if($row['brukernavn'] == $brukernavn && $row['passord'] == $passord) {
        // Melding som indikerer vellykket innlogging
        echo "Innlogget";

        // Setter sesjonsvariabler for brukernavn og bruker-ID
        $_SESSION['brukernavn'] = $row['brukernavn'];
        $_SESSION['id'] = $row['idbruker'];

        // Omdirigerer til hjemmesiden (home.php) etter vellykket innlogging
        header("Location: home.php");
        exit();
    }
    else {
        // Omdirigerer med feilmelding hvis brukernavn eller passord ikke matcher
        header("Location: index.php?error=Ugyldig brukernavn eller passord!");
        exit();
    }
}
else {
    // Omdirigerer til hemmelig.php hvis det ikke finnes noen match i databasen
    header("Location: hemmelig.php");
    exit();
}
?>
