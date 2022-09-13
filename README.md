# PHP 8

Дмитрий Котеров, Игорь Симдянов. PHP 8. В подлиннике

## Помощь и отзывы

Раздел [Issues](https://github.com/igorsimdyanov/php8/issues)

## Содержание

### Предисловие

- Для кого написана эта книга?
- Исходные коды
- Четвертое издание
- Общая структура книги
- Листинги
- Предметный указатель
- Благодарности от Дмитрия Котерова
- Благодарности от Игоря Симдянова

## Часть I. Основы веб-разработки

### Глава 1. Принципы работы Интернета

- Протоколы передачи данных
- Семейство TCP/IP
- Протокол IP
- Версии протокола IP
- Доменное имя
- Порт
- Резюме

### Глава 2. Протокол HTTP

- Зачем нужен протокол HTTP?
- Ресурсы
- Параметры URL
- Методы
- HTTP-сообщения
- HTTP-заголовки
    - Content-Type
    - Host
    - User-Agent
    - Referer
    - Content-length
    - Cookie
    - Accept
- HTTP-коды ответов
- Утилита curl
- Резюме

### [Глава 3. Установка PHP](install)

- Установка PHP в Windows
- Переменная окружения PATH
- Установка PHP в macos
- Установка PHP в Linux (Ubuntu)
- Проверочный скрипт
- Ошибки в скриптах
- Запуск встроенного сервера
- Файл hosts
- Вещание вовне
- Конфигурирование PHP
- Интерактивный PHP
- Документация
- Проверка стиля кода
- Docker
- Резюме

## Часть II. Основы языка PHP

### [Глава 4. Характеристика языка PHP](phpbasics)

- Что умеет PHP?
- Веб-программирование до PHP
- История PHP
- Что нового в PHP 8?
    - Нововведения PHP 7.1
    - Нововведения PHP 7.2
    - Нововведения PHP 7.3
    - Нововведения PHP 7.4
    - Нововведения PHP 8.0
    - Нововведения PHP 8.1
- Пример PHP-программы
- Начальные и конечные теги
- Использование точки с запятой
- Фигурные скобки
- Комментарии
- Включение PHP-файла
- Элементы языка
- Резюме

### [Глава 5. Переменные и типы данных](variables)

- Переменные
- Типы переменных
- Целые числа: integer
- Вещественные числа: double
- Логический тип: boolean
- Строки: string
    - Кавычки
    - Оператор <<<
    - Устройство строки
- Массивы: array
- Объект: object
- Ресурс: resource
- Специальный тип null
- Действия с переменными
    - Присвоение значения
    - Уничтожение
    - Проверка существования
- Определение типа переменной
- Некоторые условные обозначения
- Неявное приведение типа
- Явное приведение типа
- Ссылочные переменные
    - Жесткие ссылки
    - «Сбор мусора»
    - Символические ссылки
    - Ссылки на объекты
- Отладочные функции
- Резюме

### [Глава 6. Классы и объекты](classes)

- Объектно-ориентированное программирование
    - Коды
    - Ассемблер
    - Язык высокого уровня
    - Специализированный язык программирования
    - Объектно-ориентированные языки программирования
- Зачем нужны классы?
- Использование готовых классов
- Создание классов
- Разделение классов и остального кода
- Создание объекта
- Область видимости переменных класса
- Типы переменных класса
- Спецификаторы доступа
- Свойства «только для чтения»
- Дамп объекта
- Статические переменные класса
- Ссылки на переменные
- Клонирование объектов
- Резюме

### [Глава 7. Константы](constants)

- Предопределенные константы
- Создание константы
- Проверка существования константы
- Константы с динамическими именами
- Абсолютный и относительный пути к файлу
- Константы класса
- Резюме

### [Глава 8. Операторы PHP](expr)

- Оператор «точка с запятой»
- Оператор «точка»
- Оператор «запятая»
- Арифметические операторы
- Битовые операторы
- Операторы сравнения
    - Особенности операторов == и !=
    - Сравнение вещественных чисел
    - Сравнение строк
    - Сравнение составных переменных
    - Оператор эквивалентности
- Приоритет операторов
- Резюме

### [Глава 9. Условия](conditions)

- Зачем в программе нужно ветвление?
- Конструкция if
- Логические операторы
    - Логическое И: оператор &&
    - Логическое ИЛИ: оператор ||
    - Логическое отрицание: оператор !
- Условный оператор x ? y : z
- Оператор ??
- Конструкция switch
- Конструкция match
- Конструкция goto
- Резюме

### [Глава 10. Циклы](loops)

- Зачем нужны циклы?
- Способы организации циклов в PHP
- Цикл while
- Вложенные циклы
- Досрочное прекращение циклов
- Цикл do ... while
- Цикл for
- Резюме

### [Глава 11. Ассоциативные массивы](arrays)

- Создание массива
- Ассоциативные и индексные массивы
- Многомерные массивы
- Интерполяция элементов массива в строки
- Конструкция list()
- Обход массива
- Цикл foreach
- Сечения массива
- Слияние массивов
- Сравнение массивов
- Проверка существования элементов массива
- Строки как массивы
- Количество элементов в массиве
- Сумма элементов массива
- Случайный элемент массива
- Сортировка массива
- Добавление/удаление элементов
- Работа с ключами массива
- Резюме

### [Глава 12. Функции и области видимости](functions)

- Зачем нужны функции?
- Создание функции
    - Ключевое слово return
    - Объявление и вызов функции
- Параметры и аргументы
    - Параметры по умолчанию
    - Переменное число параметров
    - Именованные аргументы
- Типы аргументов и возвращаемого значения
- Передача параметров по ссылке
- Локальные переменные
- Глобальные переменные
    - Массив $GLOBALS
    - Как работает инструкция global?
- Статические переменные
- Резюме

### [Глава 13. Сложные функции](complicated_functions)

- Рекурсивные функции
- Вложенные функции
- Переменные функции
- Функции обратного вызова
- Анонимные функции
- Замыкания
- Стрелочные функции
- Резюме

### [Глава 14. Методы класса](methods)

- Создание метода
- Обращение к методам объекта
- Проверка существования метода
- Специальные методы
- Конструктор __construct()
- Параметры конструктора
- Деструктор __destruct()
- Методы-аксессоры
- Статические методы
- Класс — self, объект — $this
- Динамические методы
- Интерполяция объекта
- Тип callable
- Оператор ?-&gt;
- Резюме

### [Глава 15. Генераторы](generators)

- Отложенные вычисления
- Манипуляция массивами
- Делегирование генераторов
- Экономия ресурсов
- Использование ключей
- Использование ссылки
- Связь генераторов c объектами
- Резюме

## Часть III. Обработка текста и язык разметки HTML

### [Глава 16. Строковые функции](strings)

- Кодировки
- Строки как массивы
- UTF-8: расширение mbstring
- Поиск в строке
- Отрезание пробелов
- Замена в тексте
- Установка локали (локальных настроек)
- Работа с HTML-кодом
- Функции форматных преобразований
- Объединение и разбиение строк
- Сериализация объектов и массивов
- JSON-формат
- Резюме

### [Глава 17. Язык разметки HTML](html)

- Зачем нужен HTML?
- HTML-код страницы
- Устройство HTML-страницы
    - Параграф: тег &lt;p&gt;
    - Гиперссылки: тег &lt;a&gt;
    - Комментарии
    - Заголовки: теги &lt;h1&gt;...&lt;h6&gt;
    - Блоки: тег &lt;div&gt;
    - Списки: теги &lt;ul&gt;, &lt;ol&gt; и &lt;li&gt;
    - HTML на уровне текста
    - Изображения: тег &lt;img&gt;
- Каскадные таблицы стилей
- Резюме

### [Глава 18. Работа с данными формы](forms)

- Передача параметров методом GET
- HTML-форма и ее обработчик
- Текстовое поле
- Поле для приема пароля
- Текстовая область
- Скрытое поле
- Флажок
- Список
- Переключатель
- Переадресация
- Резюме

...
