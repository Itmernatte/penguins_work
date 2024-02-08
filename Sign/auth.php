<!DOCTYPE html>
<html>
<head>
  <title>Окно авторизации</title>
</head>
<body>
  <h2>Авторизация</h2>
  <form method="POST" action="auth-db.php">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Войти">
  </form>
</body>
</html>