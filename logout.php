<?php
session_start();

// Controleer of de gebruiker is ingelogd
if(isset($_SESSION['user_id'])) {
    // Gebruiker is ingelogd, dus vernietig de sessie om uit te loggen
    session_destroy();
}

// Stuur de gebruiker terug naar de inlogpagina
header("Location: login.php");
exit();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uitloggen</title>
</head>
<body>
    <h2>Je bent uitgelogd</h2>
    <p>Klik <a href="login.php">hier</a> om opnieuw in te loggen.</p>
</body>
</html>
