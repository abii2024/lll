<?php
session_start(); // Start de sessie

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Als de gebruiker niet is ingelogd, stuur hem/haar door naar de inlogpagina
    exit(); // Zorg ervoor dat het script hier stopt
}

// Gebruik de gebruikersgegevens uit de sessie om bijvoorbeeld de gebruikersnaam weer te geven
echo "Welkom, " . $_SESSION['username'] . "!";

// Hier kun je de rest van je HTML-pagina toevoegen
?>
  
    
    
    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Profiel - Twitter</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <h1>Mijn Profiel</h1>
        <img src="images/twitter_logo.png" alt="Profielfoto" width="100">
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Messages</a>
        <a href="update_profile.php">Profiel-bewerken</a> <!-- Link naar het profielbewerkingsformulier -->
        <a href="logout.php">Uitloggen</a> <!-- Link naar logout.php -->
    </nav>
    <div class="profile-section">
        <h2>Home</h2>
        <div class="tweet">
            <p><strong>Gebruikersnaam:</strong> Dit is een voorbeeldtweet. Hier zou de inhoud van een tweet kunnen staan. Dit is een voorbeeldtweet. Hier zou de inhoud van een tweet kunnen staan.</p>
            <p><small>10 april 2024</small></p>
        </div>
        <div class="tweet">
            <p><strong>Gebruikersnaam:</strong> Dit is een voorbeeldtweet. Hier zou de inhoud van een tweet kunnen staan. Dit is een voorbeeldtweet. Hier zou de inhoud van een tweet kunnen staan.</p>
            <p><small>10 april 2024</small></p>
        </div>
        <div class="tweet">
            <p><strong>Gebruikersnaam:</strong> Dit is een voorbeeldtweet. Hier zou de inhoud van een tweet kunnen staan. Dit is een voorbeeldtweet. Hier zou de inhoud van een tweet kunnen staan.</p>
            <p><small>10 april 2024</small></p>
        </div>
    </div>
    <footer>
        &copy; 2024 - [ABDISAMAD]
    </footer>
</body>
</html>
