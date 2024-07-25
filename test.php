<?php
/* Принимаем данные из формы */
  $name = $_POST["name"]; 
  $email = $_POST["email"];
  $message = $_POST["message"];

/* Подключаемся к базе данных */
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "LuxuryCars");

/* Записывает данные */ 
$sql = "INSERT INTO Clients(name, email, message) VALUES ('$name', '$email', '$message')";
$result=mysqli_query($link, $sql);

/* Делаем редирект обратно */
header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;
?>
