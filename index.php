
<!DOCTYPE html>
<html>
<head>
  <title>Task manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<h1>Task manager</h1>
  
  <div class="buttons-container">
    <!-- Tlačítka pro zobrazení formulářů -->
    <button class="button" type="button"  onclick="showForm('signin-form')">Sign in</button>
    <button class="button" type="button"  onclick="showForm('login-form')">Login</button>
 
  </div>
    
  <!-- Formulář pro registraci (Sign in) -->
  <div id="signin-form" class="form-container" style="display: none;">
  <form  action="signin.php" method="POST">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Sign in</button>
      </form>
  </div>
  
  <!-- Formulář pro přihlášení (Login) -->
  <div id="login-form" class="form-container" style="display: none;">
  <form action="login.php" method="POST">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
      </form>
  </div>

<!-- Vyskakovací okno pro souhlas s cookies -->
<div id="cookie-modal" class="modal">
    <div class="modal-content">
        <p>Tato webová stránka používá soubory cookie k zajištění správného fungování. Kliknutím na „Přijmout“ souhlasíte s používáním souborů cookie.</p>
        <button id="accept-cookies-button">Přijmout</button>
    </div>
</div>


</body>
</html>