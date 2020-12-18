<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="ADD ";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    $visitsArray = [];
    while ($row = mysqli_fetch_assoc($result)){
    	$visitsArray[]=$row;
    }
    echo json_encode($visitsArray);
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>