<!DOCTYPE html>
<html>
<head>
    <!-- Lenker til eksternt stilark (style.css) -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Skjema for å opprette bruker. Data sendes til "brukerlager.php" ved bruk av POST-metoden -->
    <form method="POST" action="brukerlager.php">
        <!-- Fornavn-inndatafelt med maksimal lengde 45 og påkrevd -->
        Fornavn: <input type="text" maxlength="45" name="navn" required><br>
        
        <!-- Etternavn-inndatafelt med maksimal lengde 45 og påkrevd -->
        Etternavn: <input type="text" maxlength="45" name="etternavn" required><br>
        
        <!-- E-post-inndatafelt med maksimal lengde 100 og påkrevd -->
        E-mail: <input type="email" maxlength="100" name="mail" required><br>
        
        <!-- Brukernavn-inndatafelt med maksimal lengde 45 -->
        Brukernavn: <input type="text" maxlength="45" name="brukerlager"><br>
        
        <!-- Passord-inndatafelt med maksimal lengde 255 og påkrevd -->
        Passord: <input type="password" maxlength="255" name="passord3" required><br>
        
        <!-- Gjenta passord-inndatafelt med maksimal lengde 255 og påkrevd -->
        Gjenta passord: <input type="password" maxlength="255" name="passord2" required><br>
        
        <!-- Send inn knapp for å fullføre registreringen -->
        <input type="submit" value="Opprett kunde">
    </form>
</body>
</html>
