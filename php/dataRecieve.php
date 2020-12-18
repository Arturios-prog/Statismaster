<?php
require_once 'connection.php'; // подключаем скрипт

if(isset($_POST['request_time']) &&
	isset($_POST['site_name']) && isset($_POST['visits_month']) && isset($_POST['visits_day'])
	&& isset($_POST['visits_online']))

{
    // подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link)); 
	$date = date_format(date_create(strtotime($_POST['request_time'])), 'Y-m-d H:i:s');
    // экранирования символов для mysql
	$request_time = htmlentities(mysqli_real_escape_string($link, $date));
	$site_name = htmlentities(mysqli_real_escape_string($link, $_POST['site_name']));
	$visits_month = htmlentities(mysqli_real_escape_string($link, $_POST['visits_month']));
	$visits_day = htmlentities(mysqli_real_escape_string($link, $_POST['visits_day']));
	$visits_online = htmlentities(mysqli_real_escape_string($link, $_POST['visits_online']));
	var_dump($_POST);
    // создание строки запроса
	$query ="INSERT INTO visits_history VALUES(NULL, '$request_time','$site_name', '$visits_month', '$visits_day', '$visits_online')";
	
    // выполняем запрос
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
		echo "<span style='color:blue;'>Данные добавлены</span>";
	}
    // закрываем подключение
	mysqli_close($link);
}
?>