<?php
session_start();
?>
<script src="script.js"></script>
<?php
require_once('config.php'); 
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) {
    die("Připojení k databázi selhalo: " . mysqli_connect_error());
}
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
}
$sql = "SELECT * FROM tasks WHERE username='$username' ORDER BY termin, priorita DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table class='responsive-table'>";
    echo "<tr><th class='hidden-column'>ID</th><th>Úkol</th><th>Podrobnosti</th><th>Termín</th><th>Priorita</th><th>Akce</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo '<td class="hidden-column" name="task_id">' . $row['id'] . '</td>';
        echo '<td class="editable-cell" name="task_name" onclick="editText(this)">' . $row['task_name'] . ' <img class="tuzka" src="tuzka.png" alt="Editovat"></td>';
        echo '<td class="editable-cell" name="podrobnosti" onclick="editText(this)">' . $row['podrobnosti'] . ' <img class="tuzka" src="tuzka.png" alt="Editovat"></td>';
        echo '<td class="editable-cell" name="termin" onclick="editText(this)">' . $row['termin'] . ' <img class="tuzka" src="tuzka.png" alt="Editovat"></td>';
        echo '<td class="editable-cell" name="priorita" onclick="editCell(' . $row['id'] . ', this)">' . $row['priorita'] . ' <img class="tuzka" src="tuzka.png" alt="Editovat"></td>';
        echo "<td><button class='tab_button' type='button' data-task-id='" . $row["id"] . "' onclick='deleteTask(" . $row["id"] . ")'>Smazat</button></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Žádné úkoly k zobrazení.";
}
mysqli_close($conn);
?>
<script src="script.js"></script>