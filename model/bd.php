
<?php 
	 define("HOST", "localhost");//хост
	 define("USER", "user");//пользователь
	 define("PASS", "12345");//пароль
	 define("DB", "test");//название БД		
	 mysql_connect(HOST, USER, PASS) or die ("не удалось подключиться к серверу");//установливаем соединение с сервером
	 mysql_select_db(DB) or die ("не удалось подключиться к БД");//установливаем соединение с БД
	 mysql_query("SET NAMES 'UTF8'") or die ("не удалось установить кодировку");// установливаем кодировку
?>