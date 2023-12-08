<!-- Ytre HTML-tag for hele dokumentet -->
<html lang="en">

<!-- Indre HTML-tag som inneholder metadata og stilreferanser -->
<head>
    <!-- Definerer tegnsettet som skal brukes i dokumentet -->
    <meta charset="UTF-8">

    <!-- Angir visningsinnstillinger for enheter med ulike skjermstørrelser -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tittelen som vises i nettleserens tittelrad -->
    <title>Document</title>

    <!-- Kobler til et eksternt stilark med filnavnet "style.css" -->
    <link rel="stylesheet" href="style.css">
</head>

<!-- Hovedinnholdet i HTML-dokumentet -->
<body>
    <!-- En divisjon (div) med id "Header" som inneholder header-elementene -->
    <div id="Header">
        <!-- Et bilde med en ukjent kilde, bredde auto og høyde 40px -->
        <img src="" width="auto" height="40px" id="logo">

        <!-- En annen divisjon med id "tittel" som inneholder en overskrift (h2) -->
        <div id="tittel">
            <h2>film nettside</h2>
        </div>

        <!-- En uordnet liste (ul) med ett listeelement (li) -->
        <ul>
            <!-- Innholdet i listeelementet -->
            <li>
                <!-- En divisjon med klassen "abc" som inneholder en lenke (a) med klassen "ab" og href-attributtet "index.php" -->
                <div class="abc"><a class="ab" href="index.php">Hjemmeside</a></div>
                
                <!-- Kommentert ut kode: En divisjon med klassen "knapp" som inneholder en lenke til "loginpage.php" -->
                <!-- <div class="knapp"><button></button></div> -->

                <!-- En divisjon med klassen "knapp" som inneholder en lenke (a) til "loginpage.php" -->
                <div class="knapp"><a href="loginpage.php">log inn</a></div>
            </li>
        </ul>
    </div>
</body>

<!-- Avslutter den ytre HTML-taggen -->
</html>
