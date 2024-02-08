<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
   <form action="check.php" method="POST">
    <label for="userName">Введите имя:</label>
    <input type="text" id="userName" name="userName">
    <br>
    <label for="userAge">Введите возраст:</label>
    <input type="number" id="userAge" name="userAge">
    <br>
    <input type="submit" value="Отправить">
   </form>
   
</body>
</html>