
<?php
     require_once "bd.php";//подкл БД 
	 if($_POST['submit']) {
		 if(!$_POST['login'] == "" && !$_POST['pass'] == "") {
			 
			 $login = $_POST['login'];
			 $login = htmlspecialchars($login);//превращаем весь html код в строку
			 $login = trim($login);//удаляем пробелы
			 $login = stripslashes($login);//удаляем обратный слэш
			 
			 $pass = $_POST['pass'];
			 $pass = htmlspecialchars($pass);
			 $pass = trim($pass);
			 $pass = stripslashes($pass);
			 
			 $pass = md5($pass);//шифруем пароль
		     $pass = strrev($pass);// для надежности добавим реверс
		     $pass = $pass."wwqwq";//добавляем соль	
			 
			 //проверяем, на существование такого же логина в бд
			 $query = mysql_query("SELECT `id` FROM `reg_user` WHERE login = '$login'");
			 if(mysql_num_rows($query) > 0) {
				 exit("<p>извините, такой логин уже существует</p>");
			 }			
			 else {
				  //заносим юзера в бд			 
				 $query2 = mysql_query("INSERT INTO `reg_user` (login, pass) VALUE ('$login', '$pass')");
				 if($query2) {
					 exit("<p>Поздравляем, Вы успешно прошли регистрацию</p>");
				 }
				 else {
					  exit("<p>Извините, регистрация не удалась</p>");
				 }
			 }
			
		 }
		 else {
			 exit("<p>извините, Вы заполнили не все поля.</p>");
		 }
	 }
	 else {
		 exit("<p>извините, ошибка. Проверьте URL</p>");
	 }
?>