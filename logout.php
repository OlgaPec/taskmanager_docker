<?php

session_start();
// Odstranění uživatele z relace (odhlášení)

session_destroy();
// Přesměrování na úvodní stránku
header("Location: index.php");
exit(); // Důležité pro ukončení dalšího zpracování skriptu po přesměrování
?>