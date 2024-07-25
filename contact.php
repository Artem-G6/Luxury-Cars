<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Cars - Premium auto for elites</title>
    <link rel="stylesheet" href="styles.css">
	<link rel="manifest" href="manifest.json">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-container"> 
                <a href="index.html"> <img src="Logo.png" width="330" height = "auto" alt="Логотип Luxury Cars" class="logo"> </a>
            </div>
            <div class="title-container">
                <a href="index.html" text-decoration:none> <h1 class="title">Luxury Cars - Premium auto for elites</h1></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="deals.html">Актуальные предложения</a></li>
                    <li><a href="about.html">О нас</a></li>
                    <li><a href="partners.html">Партнеры</a></li>
                    <li><a href="come_in.html" class="login-button">Войти</a></li>
                </ul>
            </nav>
        </div>
	</header>

    <main>
        <section id="contact" class="contact">
            <div class="container">
                <h2>Контакты</h2>
                <p>Есть вопросы? Свяжитесь с нами!</p>
                <ul>
                    <li>Email: info@luxurycars.ru</li>
                    <li>Телефон: +7 (495) 123-45-67</li>
                    <li><a href="https://www.figma.com/design/5T4ezZpy04t2bZ7LOhS8mU/Basics-of-Mobile-Applications?node-id=0-1&t=ajR1UWhdPitiux7B-1" target="_blank">Наше приложение</a></li>
                </ul>
            </div>
        </section>
		<div class="container">
			<h2>ОФОРМЛЕНИЕ ЗАКАЗА:</h2>
				<form name="form1" method="post" action="test.php"><p> 
				Имя: <input type="text" name="name"></p><p> 
				Ваш Email: <input  type="text" name="email"></p>
				<p> Сообщение 
				<textarea name="message"></textarea> (поле сообщения) </p>
				<p><input type="submit" name="send" value="Отправить"></p>
				</form>
		 </div>
		 <?php
		/* Подключаемся к базе данных */
		  $link = mysqli_connect("localhost", "root", "");
		  mysqli_select_db($link, "LuxuryCars");

		/* Выбираем данные */
		$sql="SELECT name, email, message FROM Clients";
		$result=mysqli_query($link, $sql);

		while ($line=mysqli_fetch_row($result)) {
		echo "<b>Имя:</b>".$line[0]."<br>";
		echo "<b>Email:</b>".$line[1]."<br>";
		echo "<b>Сообщение:</b>".$line[2]."<br><br>";
		}
		?>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Luxury Cars. Все права защищены.</p>
        </div>
    </footer>

    <script src="/pwabuilder-sw-register.js"></script>
</body>
</html>
