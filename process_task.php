<?php
session_start();
?>
<script src="script.js"></script>
<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["task-input"])) {
    $task = $_POST["task-input"];
    $taskpodr = $_POST["task-podrobnosti"];
    $taskterm = $_POST["task-termin"];
    if (isset($_POST["task-priorita"]))
        $taskprior = $_POST["task-priorita"];
        else
        $taskprior ="Nízká";
    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
    }
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die("Připojení k databázi selhalo: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO tasks (username, task_name, podrobnosti, termin, priorita) VALUES ('$username', '$task', '$taskpodr','$taskterm', '$taskprior')";
    if (mysqli_query($conn, $sql)) {
    } else {
        echo '<script>
        alert("Chyba při ukládání úkolu.");
        window.history.back();
        </script>';
    }
    mysqli_close($conn);
    echo "<script>window.location.href='index_ukoly.php';</script>";
}
?>