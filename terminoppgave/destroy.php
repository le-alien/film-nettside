<?php
// Gjenopptar en eksisterende økt
session_start();

// Ødelegger alle data lagret i økten
session_destroy();

// Omdirigerer brukeren til "index.php" etter å ha ødelagt økten
header("Location: index.php");

// Avslutter skriptet, hindrer ytterligere utførelse
exit();
?>
