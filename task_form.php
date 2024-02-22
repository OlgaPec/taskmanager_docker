<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Správa úkolů</title>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script src="script.js"></script>
<form class="tasks-container" action="process_task.php" method="POST">
    <input type="text" id="task-input" name="task-input" placeholder="Zadejte úkol ...">
    <input type="text" id="task-input" name="task-podrobnosti" placeholder="Zadejte podrobnosti ...">
    <input type="date" id="task-input-pul" name="task-termin">
    <select id="task-input-pul" name="task-priorita">
        <option value="" disabled selected>Priorita...</option>
        <option value="Nízká">Nízká</option>
        <option value="Střední">Střední</option>
        <option value="Vysoká">Vysoká</option>
    </select>
    <button type="submit">Přidat&nbsp;úkol</button>
</form>

</body>
</html>