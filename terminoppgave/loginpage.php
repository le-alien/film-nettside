<?php
session_start();

// Sjekker om brukeren allerede er logget inn, i så fall omdiriger til hjemmesiden
if (isset($_SESSION['id']) && isset($_SESSION['brukernavn'])) {
    header('Location: home.php');
    exit();
}
else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Login-skjema -->
    <form action="login.php" method="post">
        <h2>Login:</h2>
        <label>Bruker: </label>
        <input type="text" name="brukernavn" placeholder="Brukernavn"><br/>
        <label>Passord: </label>
        <input type="password" name="passord" placeholder="Passord"><br/>
        <button type="submit">Login</button><br/>
    </form>

    <!-- Lenke til registreringssiden -->
    <a href="nybruker.php"><button>Ny? lag bruker</button></a>
</body>
</html>
<?php
}
?>
