<?php ## Передача пользовательского агента
// Задаем адрес удаленного сервера
$curl = curl_init('http://localhost:4000/handler.php');

// Устанавливаем User-Agent
$useragent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1';
curl_setopt($curl, CURLOPT_USERAGENT, $useragent);

// Выполняем запрос
curl_exec($curl);
// Закрываем CURL-соединение
curl_close($curl);
