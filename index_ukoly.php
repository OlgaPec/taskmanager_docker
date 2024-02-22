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
    <h1>Správa úkolů</h1>
    <form action="logout.php" method="post">
        <button type="submit">Odhlásit se</button>
    </form>

    <?php include('task_form.php'); ?>
    <h2>Seznam úkolů:</h2>
    <?php include('task_list.php'); ?>
    
</body>
</html>