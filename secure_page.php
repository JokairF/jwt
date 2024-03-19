<?php

session_start();

require __DIR__ . "vendor/autoload.php";

use Firebase\JWT;
use Firebase\Key;

if (!isset($_SESSION["username"]) || $_SESSION["username"] == "") {
    header("Location: index.php?error=1");
}

echo "<h1>Bienvenue, " . $_SESSION["username"] . "!</h1>";
echo "<p>Vous êtes connecté à la page sécurisée.</p>";
