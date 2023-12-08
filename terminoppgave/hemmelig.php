<?php
// Starter eller gjenopptar en eksisterende økt
session_start();
?>

<!-- Ytre HTML-tag for hele dokumentet -->
<!DOCTYPE html>
<html lang="en">

<!-- Head-seksjon med metadata og tittel -->
<head>
    <!-- Definerer tegnsettet som skal brukes i dokumentet -->
    <meta charset="UTF-8">

    <!-- Angir visningsinnstillinger for enheter med ulike skjermstørrelser -->
    <meta name="viewport" content="width=, initial-scale=1.0">

    <!-- Tittelen som vises i nettleserens tittelrad -->
    <title>Document</title>
</head>

<!-- Hovedinnholdet i HTML-dokumentet -->
<body>
    <?php
    // Inkluderer en ekstern fil 'header.php', antatt å inneholde struktur for en nettsideheader
    include 'header.php';
    ?>

    <!-- Tekst som vises i kroppen av dokumentet når brukeren ikke er logget inn -->
    ikke logget inn
</body>

<!-- Avslutter den ytre HTML-taggen -->
</html>
