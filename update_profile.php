<?php
session_start(); // Start de sessie

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Als de gebruiker niet is ingelogd, stuur hem/haar door naar de inlogpagina
    exit(); // Zorg ervoor dat het script hier stopt
}

require_once 'db.php'; // Inclusief het bestand met databaseverbinding

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de gebruikersinformatie op uit het formulier
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash het nieuwe wachtwoord voordat je het opslaat
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Voorbereid de SQL-query om gebruikersinformatie bij te werken, maar gebruik het gehashte wachtwoord
    $stmt = $pdo->prepare("UPDATE users SET username=?, email=?, password=? WHERE id=?");
    $stmt->execute([$username, $email, $hashed_password, $_SESSION['user_id']]);

    // Optioneel: geef een succesbericht weer
    echo "Gebruikersinformatie succesvol bijgewerkt.";

    // Je kunt de gebruiker nu bijvoorbeeld doorsturen naar een andere pagina
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiel bewerken</title>
    <link rel="stylesheet" href="main.css">
</head>
<body class="profile-edit"> <!-- Voeg de class "profile-edit" toe -->
    <div class="container">
        <h2>Profiel bewerken</h2>
        <form action="update_profile.php" method="POST">
            <!-- Formulier velden voor het bijwerken van gebruikersinformatie -->
            <input type="text" name="username" placeholder="Nieuwe gebruikersnaam" required>
            <input type="email" name="email" placeholder="Nieuw e-mailadres" required>
            <input type="password" name="password" placeholder="Nieuw wachtwoord" required>
            <button type="submit">Opslaan</button>
        </form>
    </div>
</body>
</html>
