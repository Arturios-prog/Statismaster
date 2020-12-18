<?php
require_once 'connection.php'; // подключаем скрипт

    // подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link)); 

    // создание строки запроса
	$query ="DELETE FROM visits_history";
	
    // выполняем запрос
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
		echo "<span style='color:blue;'>Данные удалены</span>";
	}
    // закрываем подключение
	mysqli_close($link);
?>