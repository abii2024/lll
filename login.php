<?php
session_start();
require_once 'db.php';

// Controleren of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Gebruiker opzoeken in de database op basis van e-mail
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Controleren of de gebruiker bestaat en of het wachtwoord overeenkomt
    if ($user && password_verify($password, $user['password'])) {
        // Gebruiker is succesvol ingelogd, maak een sessie aan
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php"); // Doorverwijzen naar het dashboard
        exit(); // Zorg ervoor dat het script hier stopt
    } else {
        // Ongeldige inloggegevens, toon een foutmelding
        echo "Ongeldige e-mail of wachtwoord.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body class="login"> <!-- Voeg de class "login" toe -->
    <div class="container">
        <img src="images/logo.png" alt="" width="60"> <!-- Afbeelding toegevoegd -->
        <h2>Login</h2>
        <form method="post">
            <label>Email:</label><br>
            <input type="email" name="email" required><br>
            <label>Wachtwoord:</label><br>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Inloggen">
        </form>
        <p>Heb je nog geen account? <a href="register.php">Registreer hier</a></p>
    </div>
</body>
</html>
