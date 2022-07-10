<?php
// Соединяемся с Web-сервером localhost. Обратите внимание,
// что префикс "http://" не используется - информация о протоколе
// и так содержится в номере порта (4000).
$fp = fsockopen('localhost', 4000);
// Посылаем запрос главной страницы сервера. Конец строки
// в виде "\r\n" соответствует стандарту протокола HTTP.
fputs($fp, "GET / HTTP/1.1\r\n");
// Посылаем обязательный для HTTP 1.1 заголовок Host.
fputs($fp, "Host: localhost\r\n");
// Отключаем режим Keep-alive, что заставляет сервер СРАЗУ ЖЕ закрыть
// соединение после посылки ответа, а не ожидать следующего запроса.
// Попробуйте убрать эту строчку - и работа скрипта сильно замедлится.
fputs($fp, "Connection: close\r\n");
// Конец заголовков
fputs($fp, "\r\n");
// Теперь читаем по одной строке и выводим ответ
echo '<pre>';
while (!feof($fp)) {
    echo htmlspecialchars(fgets($fp, 1000));
}
echo '</pre>';
// Отключаемся от сервера
fclose($fp);
