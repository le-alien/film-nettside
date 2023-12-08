<?php
// Inkluderer filen som inneholder tilkoblingsinformasjon til databasen
include "db_connect.php";

// Starter en økt for å kunne bruke sesjonsvariabler
session_start();

// Inkluderer header.php som antas å inneholde HTML-koden for toppen av nettsiden
include "header.php";

// Sjekker om brukeren er pålogget ved å se etter eksistensen av sesjonsvariabler
if(isset($_SESSION['id']) && isset($_SESSION['brukernavn'])) {
    // Dette markerer starten på HTML-delen av koden hvis brukeren er pålogget
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bare Vifter</title>
    <!-- Inkluderer en stilarkfil for å formatere nettsiden -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Viser en hilsen med brukernavnet til den påloggede brukeren -->
    <h1> Hei, <?php echo $_SESSION['brukernavn']; ?> </h1>
    
    <!-- Gir en lenke for å logge ut brukeren og peker til destroy.php -->
    <a href="destroy.php">Logg ut</a>

    <?php
    // Utfører en SQL-spørring for å hente alle poster fra tabellen "film"
    $query = "SELECT * FROM film";
    // Utfører spørringen og lagrer resultatet i $result
    $result = mysqli_query($conn, $query);

    // Bruker en løkke for å iterere gjennom hvert resultat i $result
    while ($row = mysqli_fetch_assoc($result)) {
        // Her kan du legge til koden for å vise informasjonen om hver film, men for øyeblikket er løkken tom
    }
    ?>
</body>
</html>

<?php
// Avslutter if-setningen som sjekker om brukeren er pålogget
}
else {
    // Hvis brukeren ikke er pålogget, omdirigerer til hemmelig.php
    header("Location: hemmelig.php");
    // Avslutter skriptet etter å ha utført omdirigeringen
    exit();
}
?>
