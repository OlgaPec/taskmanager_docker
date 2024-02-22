<?php
session_start();
 require_once('config.php');

// Funkce pro ověření hesla
function verifyPassword($enteredPassword, $hashedPassword) {
    return password_verify($enteredPassword, $hashedPassword);
}

// Zpracování přihlášení
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Získání zadaného uživatelského jména a hesla z formuláře
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION['username'] = $username;
    echo "uživatel: ".$username."<br>";
    echo "session uživatel: ".  $_SESSION['username']."<br>"; 
    // Připojení k MySQL databázi
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Kontrola připojení
    if (!$conn) {
        die("Připojení k databázi selhalo: " . mysqli_connect_error());
    }

    // Příprava dotazu pro získání uživatele z databáze
    $sql = "SELECT * FROM users WHERE username = '$username'";

    // Spuštění dotazu
    $result = mysqli_query($conn, $sql);

    // Kontrola, zda byl nalezen uživatel
    if (mysqli_num_rows($result) === 1) {
        // Načtení dat uživatele z databáze
        $row = mysqli_fetch_assoc($result);

        // Ověření hesla
        if (verifyPassword($password, $row["pass"])) {
            // Přihlášení bylo úspěšné
            echo '<script>
                  window.location.href = "index_ukoly.php";
                </script>';
            exit();
        } else {
          echo '<script>
          alert("Chybné heslo, zkuste to prosím znovu.");
          window.history.back();
          </script>';
        }
    } else {
        // Uživatel nebyl nalezen
        echo '<script>
          alert("Uživatel s tímto jménem neexistuje.");
          window.history.back();
          </script>';
    }

    // Uzavření spojení s databází
    mysqli_close($conn);
}
?>