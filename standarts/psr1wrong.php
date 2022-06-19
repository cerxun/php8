<?php
// Подключаем ранее объявленные функции
require_once('psr1right.php');

echo title('PRS-1');
echo dump('Тестовое сообщение');

// Нарушение PRS-1, нельзя смешивать вывод и объявления функций
function title(mixed $str) : void
{
    echo '<h1>';
    print_r($str);
    echo '</h1>';
}
