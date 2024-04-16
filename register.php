<?php
require_once 'db.php'; // Inclusie van het bestand met de databaseverbinding

// Controleren of het formulier is ingediend via POST-methode
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $username = $_POST['username']; // Ophalen van de gebruikersnaam uit het formulier
    $email = $_POST['email']; // Ophalen van het e-mailadres uit het formulier
    $password = $_POST['password']; // Ophalen van het wachtwoord uit het formulier

    // Controleren of de e-mail al bestaat in de database
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email=?"); // Voorbereiden van de SQL-query om het e-mailadres te controleren
    $stmt->execute([$email]); // Uitvoeren van de SQL-query met het opgegeven e-mailadres
    $count = $stmt->rowCount(); // Aantal rijen ophalen dat overeenkomt met het opgegeven e-mailadres

    // Controleren of het opgegeven e-mailadres al bestaat in de database
    if ($count == 0) {
        // Als het e-mailadres nog niet bestaat, wordt het wachtwoord gehasht voordat het wordt opgeslagen in de database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Wachtwoord hashen met het standaard wachtwoord-hashalgoritme
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)"); // Voorbereiden van de SQL-query om een nieuwe gebruiker toe te voegen
        $stmt->execute([$username, $email, $hashed_password]); // Uitvoeren van de SQL-query om een nieuwe gebruiker toe te voegen met gehasht wachtwoord
        // Gebruiker is succesvol geregistreerd, doorverwijzen naar de inlogpagina
        header("Location: login.php"); // Doorverwijzen naar de inlogpagina
        exit(); // Stoppen van het script
    } else {
        // Als het e-mailadres al bestaat, wordt er een foutmelding weergegeven
        echo "Dit e-mailadres is al geregistreerd."; // Weergeven van een foutmelding
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
    <link rel="stylesheet" href="main.css">
</head>
<body class="register"> <!-- Voeg de class "register" toe -->
    <div class="container">
        <img src="images/logo.png" alt="" width="60"> <!-- Afbeelding toegevoegd -->
        <h2>Registratie</h2>
        <form method="post">
            <label>Gebruikersnaam:</label><br>
            <input type="text" name="username" required><br>
            <label>Email:</label><br>
            <input type="email" name="email" required><br>
            <label>Wachtwoord:</label><br>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Registreren">
        </form>
        <p>Heb je al een account? <a href="login.php">Log hier in</a></p>
    </div>
</body>
</html>
