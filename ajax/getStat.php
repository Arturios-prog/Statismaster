

<?php
// создание нового cURL ресурса
$ch = curl_init();
$url = "https://counter.yadro.ru/values?site=".$_POST["searchUrl"];

// установка URL и других необходимых параметров
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);

// загрузка страницы и выдача её браузеру
$result = curl_exec($ch);

// завершение сеанса и освобождение ресурсов
curl_close($ch);
?>