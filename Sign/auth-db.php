<?php
session_start();

include "../connect.php"; 

// Подключение к базе данных
$hostname = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "penguins_nasridinov";


// Обработка формы авторизации
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  // Запрос к базе данных для проверки введенных данных
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($result) == 1) {
    // Авторизация успешна
    $_SESSION["username"] = $username;
    header("Location: ../index.php"); // Перенаправление на домашнюю страницу после успешной авторизации
    exit();
  } else {
    // Авторизация не удалась
    echo "Неверные логин или пароль.";
  }
}

mysqli_close($con);
?>
