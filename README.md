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

### [Глава 19. Загрузка файлов на сервер](upload)

- Multipart-формы
- Тег выбора файла
- Закачка файлов и безопасность
- Поддержка закачки в PHP
    - Простые имена полей закачки
    - Получение закачанного файла
    - Пример: фотоальбом
    - Сложные имена полей
- Резюме

### [Глава 20. Суперглобальные массивы](superblobals)

- Типы суперглобальных массивов
- Cookie
- Сессии
- Переменные окружения
- Массив `$_SERVER`
    - Элемент `$_SERVER['DOCUMENT_ROOT']`
    - Элемент `$_SERVER['HTTP_ACCEPT']`
    - Элемент `$_SERVER['HTTP_HOST']`
    - Элемент `$_SERVER['HTTP_REFERER']`
    - Элемент `$_SERVER['HTTP_USER_AGENT']`
    - Элемент `$_SERVER['REMOTE_ADDR']`
    - Элемент `$_SERVER['SERVER_NAME']`
    - Элемент `$_SERVER['REQUEST_METHOD']`
    - Элемент `$_SERVER['QUERY_STRING']`
    - Элемент `$_SERVER['PHP_SELF']`
    - Элемент `$_SERVER['REQUEST_URI']`
- Резюме

### [Глава 21. Фильтрация и проверка данных](filters)

- Фильтрация или проверка?
- Проверка данных
- Фильтры проверки
- Значения по умолчанию
- Фильтры очистки
- Пользовательская фильтрация данных
- Фильтрация внешних данных
- Конфигурационный файл php.ini
- Резюме

## Часть IV. Стандартные функции PHP

### [Глава 22. Математические функции](math)

- Встроенные константы
- Функции округления
    - Функция abs()
    - Функция round()
    - Функция ceil()
    - Функция floor()
- Случайные числа
    - Функция rand()
    - Функция getrandmax()
    - Функция random_int()
- Перевод в различные системы счисления
    - Функция base_convert()
    - Функции bindec(), hexdec() и octdec()
    - Функции decbin(), decoct() и dechex()
- Минимум и максимум
    - Функция min()
    - Функция max()
- Не-числа
    - Функция is_nan()
    - Функция is_infinite()
- Степенные функции
    - Функция sqrt()
    - Функция log()
    - Функция exp()
    - Функция pow()
- Тригонометрия
- Резюме

### [Глава 23. Работа с файлами](files)

- О текстовых и бинарных файлах
- Открытие файла
    - Различия текстового и бинарного режимов
    - Сетевые соединения
    - Прямые и обратные слеши
    - Безымянные временные файлы
- Закрытие файла
- Чтение и запись
    - Блочные чтение/запись
    - Построчные чтение/запись
    - Чтение CSV-файла
- Положение указателя текущей позиции
- Работа с путями
- Манипулирование целыми файлами
    - Чтение и запись целого файла
    - Чтение INI-файла
- Другие функции
- Блокирование файла
    - Рекомендательная и жесткая блокировки
    - Функция flock()
    - Типы блокировок
    - Блокировки с запретом «подвисания»
    - Пример счетчика
- Резюме

### [Глава 24. Работа с каталогами](dirs)

- Текущий каталог
- Создание каталога
- Работа с записями
- Рекурсивный обход каталога
- Фильтрация содержимого каталога
- Удаление каталога
- Класс Directory
- Резюме

### [Глава 25. Права доступа и атрибуты файлов](permissions)

- Идентификатор пользователя
- Идентификатор группы
- Владелец файла
- Права доступа
    - Числовое представление прав доступа
    - Особенности каталогов
    - Примеры
- Функции PHP
    - Назначение прав доступа
    - Определение атрибутов файла
    - Определение возможности доступа
- Ссылки
    - Символические ссылки
    - Жесткие ссылки
- Резюме

### [Глава 26. Запуск внешних программ](exec)

- Запуск утилит
- Оператор «обратные кавычки»
- Экранирование командной строки
- Каналы
    - Временные файлы
    - Открытие канала
    - Взаимная блокировка (deadlock)
- Резюме

### [Глава 27. Работа с датой и временем](date)

- Представление времени в формате timestamp
    - Вычисление времени работы скрипта
    - Большие вещественные числа
    - Построение строкового представления даты
    - Построение timestamp
    - Разбор timestamp
- Календарик
- Географическая привязка
    - Хранение абсолютного времени
    - Перевод времени
    - Окончательное решение задачи
- Календарные классы PHP
    - Класс DateTime
    - Класс DateTimeZone
    - Класс DateInterval
    - Класс DatePeriod

### [Глава 28. Основы регулярных выражений](regexp)

- Начнем с примеров
    - Пример первый
    - Пример второй
    - Пример третий
    - Пример четвертый
- Что такое регулярные выражения?
- Терминология
- Использование регулярных выражений в PHP
    - Сопоставление
    - Сопоставление с заменой
- Язык регулярных выражений
    - Ограничители
    - Простые символы
    - Квантификаторы повторений
    - Мнимые символы
    - Оператор альтернативы
    - Группирующие скобки
    - «Карманы»
    - «Жадность» квантификаторов
    - Модификаторы
    - Незахватывающий поиск
    - Другие возможности регулярных выражений
- Функции PHP
    - Поиск совпадений
    - Замена совпадений
    - Разбиение по регулярному выражению
    - Экранирование символов
    - Фильтрация массива
- Примеры регулярных выражений
    - Преобразование адресов e-mail
    - Преобразование гиперссылок
- Быть или не быть?
- Ссылки
- Резюме

### [Глава 29. Разные функции](others)

- Информационные функции
- Принудительное завершение программы
- Генерация кода во время выполнения
- Функции хеширования
- Подсветка PHP-кода
- Резюме

## Часть V. Основы объектно-ориентированного программирования

### [Глава 30. Наследование](inherit)

- Расширение класса
    - Метод включения
    - Наследование
    - Переопределение методов
    - Константы `__CLASS__` и `__METHOD__`
    - Позднее статическое связывание
- Анонимные классы
- Полиморфизм
    - Абстрагирование
    - Виртуальные методы
    - Расширение иерархии
- Абстрактные классы и методы
- Совместимость родственных типов
    - Уточнение типа в функциях
    - Оператор instanceof
    - Обратное преобразование типа
- Резюме

### [Глава 31. Интерфейсы](interfaces)

- Ограничения наследования
- Создание интерфейса
- Наследование интерфейсов
- Реализация нескольких интерфейсов
- Реализует ли объект интерфейс?
- Резюме

### [Глава 32. Трейты](traits)

- Создание трейта
- Трейты и наследование
- Разрешение конфликтов
- Вложенные трейты
- Резюме

### [Глава 33. Перечисления](enums)

- Создание перечисления
- Типизированные перечисления
- Сравнение значений
- Перечисления как классы
    - Ограничения перечислений
    - Методы перечислений
    - Использование трейтов
    - Константы
- Резюме

### [Глава 34. Исключения](exceptions)

- Базовый синтаксис
- Конструкция throw
- Раскрутка стека
- Исключения и деструкторы
- Интерфейс класса Exception
- Генерация исключений в классах
- Создание собственных исключений
- Перехват собственных исключений
- Повторная генерация исключений
- Блок finally
- Использование интерфейсов
- Резюме

### [Глава 35. Обработка ошибок](errors)

- Что такое ошибка?
    - Роли ошибок
    - Виды ошибок
- Ошибки и исключения
- Контроль ошибок
    - Директивы контроля ошибок
    - Установка режима вывода ошибок
    - Оператор отключения ошибок
    - Перехват ошибок
    - Генерация ошибок
    - Стек вызовов функций
- Резюме

### [Глава 36. Пространство имен](namespace)

- Проблема именования
- Объявление пространства имен
- Иерархия пространства имен
- Текущее пространство имен
- Импортирование
- Автозагрузка классов
    - Функция `spl_autoload_register()`
- Резюме

...
