<?php
$locale['setup_0000'] = "Встановлення PHP-Fusion 9";
$locale['setup_0002'] = "Вітаємо у системі встановлення PHP-Fusion 9.0";
$locale['setup_0003'] = "Майстер встановлення проведе Вас через ряд кроків необхідних для встановлення на Ваш сервер CMS PHP-Fusion. Якщо буде потреба додаткової підтримки, будь ласка, ознайомтесь з нашою <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=216' target='_blank'>відкритою довідкою з встановлення</a>.";
$locale['setup_0005'] = " Мною прочитано <a href='https://php-fusion.co.uk/license/' target='_blank'>Умови використання</a> PHP-Fusion і я погоджуюсь з ними.";
$locale['setup_0006'] = "PHP-Fusion 9 потребує принаймні PHP 5.5.9. Ознайомтесь з повним переліком <a href=\"https://www.php-fusion.co.uk/requirements\">системних вимог</a>.";
$locale['setup_0007'] = "У системах з встановленим OPcache має бути ввімкнено параметр <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a>.";
$locale['setup_5000'] = "Для використання PHP-Fusion, Ви маєте ознайомитись і погодитись з <a href='https://php-fusion.co.uk/license/'>умовами використання</a>.";
$locale['setup_0010'] = "9.0";
$locale['setup_0011'] = "ua";
$locale['setup_0012'] = "utf-8";
$locale['setup_0020'] = "Оновлення PHP-Fusion";
$locale['setup_0022'] = "Вітаємо у службі оновлення PHP-Fusion";
$locale['setup_0023'] = "Служба оновлення проведе Вас через кілька кроків, необхідних для оновлення системи CMS PHP-Fusion. Будь ласка, слідуйте за цими кроками та уважно перевіряйте всю інформацію.";
$locale['setup_0050'] = "Web сервер";
$locale['setup_0051'] = "Версія PHP";
$locale['setup_0052'] = "Розширення PHP";
$locale['setup_0053'] = "Підтримка OPCache";
$locale['setup_0054'] = "Підтримка PDO баз даних";
$locale['setup_0055'] = "Обмеження пам&lsquo;яті PHP";
$locale['setup_0056'] = "Вимоги перевірки файлів";
$locale['setup_0101'] = "Введення";
$locale['setup_0102'] = "Перевірка файлів і каталогів";
$locale['setup_0103'] = "Налаштування бази даних";
$locale['setup_0104'] = "Налаштування / Встановлення бази даних";
$locale['setup_0105'] = "Налаштування базової системи";
$locale['setup_0106'] = "Налаштування головного адміністратора";
$locale['setup_0107'] = "Завершення";
$locale['setup_0109'] = "Для запуску PHP-Fusion без ввімкнення функції mod_rewrite мінімально необхідна версія Apache не нижче 2.2.16.";
$locale['setup_0110'] = "В зв&lsquo;язку з налаштуваннями ключів у файлі httpd.confg, неможливо визначити версію Apache без функції mod_rewrite. Мінімально необхідна версія: 2.2.16.";
$locale['setup_0112'] = "Функцію phpinfo() заборонено з міркувань безпеки. Для перегляду інформації phpinfo(), будь ласка, переналаштуйте параметри PHP або зверніться до адміністратора цього серверу.";
$locale['setup_0113'] = "Ви маєте застарілу версію PHP. Система PHP-Fusion потребує PHP версії, принаймні, 5.5.21. Версія 5.5.21 та вищі ніж 5.6.5 забезпечує вбудований захист від SQL ін&lsquo;єкцій у бази даних MySQL. Рекомендується оновлення.";
$locale['setup_0114'] = "PHP-Fusion потребує дозволу наведеного переліку розширень PHP:";
$locale['setup_0115'] = "увімкнено";
$locale['setup_0115a'] = "вимкнено";
$locale['setup_0116'] = "Кешування OPcode в PHP може значно покращити швидкодію Вашого сайту. <strong>Настійливо рекомендується</strong> встановлення <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPcache</a> на Вашому сервері.";
$locale['setup_0118'] = "Здається, Ваш сервер не підтримує PDO (PHP Data Objects). Запитайте у свого провайдера хостингу про наявність вбудованого розширення PDO.";
$locale['setup_0119a'] = "Врахуйте, що збільшення ліміту пам&lsquo;яті для PHP, принаймні, до %memory_minimum_limit, допоможе уникнути помилок під час встановлення.";
$locale['setup_0119b'] = "Збільште ліміт пам&lsquo;яті редагуванням параметра memory_limit у файлі ".get_cfg_var('cfg_file_path')." та перезавантажте Ваш сервер (або зверніться за допомогою до системного адміністратора чи провайдера хостингу).";
$locale['setup_0119c'] = "Зверніться за допомогою до системного адміністратора чи провайдера хостингу для збільшення ліміту пам&lsquo;яті для PHP.";
$locale['setup_stepx'] = "Крок %1\$d: %2\$s";

// Buttons
$locale['setup_0120'] = "Завершення встановлення";
$locale['setup_0121'] = "Далі";
$locale['setup_0122'] = "Спробувати ще раз";
$locale['setup_0124'] = "Перейти до відновлення";
$locale['setup_0125'] = "Виконується видалення. Будь ласка, зачекайте...";
$locale['setup_0130'] = "Налаштування Xdebug";
$locale['setup_0131'] = "xdebug.max_nesting_level встановлено як";
$locale['setup_0132'] = "Додайте код {%code%} до конфігурації PHP, інакше, при низькому значенні цього параметру, деякі сторінки Вашого сайту не зможуть працювати.";
$locale['setup_0134'] = "Усі необхідні файли перевірено на доступність запису.";
$locale['setup_0135'] = "Для продовження встановлення, ці файли і каталоги мають бути доступними для запису. Будь ласка, налаштуйте права доступу (CHMOD) на значення 755 або 777.";
$locale['setup_0136'] = "Запис блоковано (Помилка)";
$locale['setup_0137'] = "Запис успішний (Пройдено)";
$locale['setup_0138'] = "Зв&lsquo;язок з базою даних успішно встановлено";
$locale['setup_0139'] = "Стовпці бази даних успішно визначено";
$locale['setup_0140'] = "База даних доступна і готова до встановлення системи";
$locale['setup_0141'] = "Доступ до бази даних та права запису успішно перевірено";
$locale['setup_0142'] = "Файл config.php успішно створено";
$locale['setup_0143'] = "Вказаний префікс таблиць успішно використано і активовано. Встановлення продовжить оновлення бази даних.";
$locale['setup_0144'] = "Перевірку бази даних успішно завершено";

// Step 1
$locale['setup_1000'] = "Будь ласка, виберіть необхідну локалізацію (мову):";
$locale['setup_1001'] = "Завантажити інші локалізації можна з <a href='https://www.php-fusion.co.uk/downloads.php#langpacks' target='_blank'>Офіційного сайту підтримки PHP-Fusion</a>";
$locale['setup_1002'] = "Вітаємо у режимі відновлення PHP-Fusion 9.0.";
$locale['setup_1003'] = "Виявлено існуюче встановлення системи.\r\nБудь ласка, виберіть одну із запропонованих дій для продовження.";
$locale['setup_1004'] = "Чисте встановлення";
$locale['setup_1005'] = "Ви можете видалити та очистити Вашу базу даних і розпочати чисте встановлення.";
$locale['setup_1006'] = "БУДЬ ЛАСКА, ЗБЕРЕЖІТЬ ОКРЕМО ВАШ ФАЙЛ CONFIG.PHP. ПІД ЧАС ОЧИЩЕННЯ ЙОГО БУДЕ ВИДАЛЕНО РАЗОМ З ІНШИМИ ДАНИМИ.";
$locale['setup_1007'] = "Видалити та почати встановлення знову";
$locale['setup_1008'] = "Встановлювач базової системи";
$locale['setup_1009'] = "Змінити базові налаштування системи.";
$locale['setup_1010'] = "Перейти до встановлення системи";
$locale['setup_1011'] = "Змінити налаштування головного облікового запису";
$locale['setup_1012'] = "Змінити налаштування головного адміністратора без потреби відновлення паролю або передачі його прав іншій особі.";
$locale['setup_1013'] = "Змінити налаштування головного адміністратора";
$locale['setup_1014'] = "Перебудувати файл .htaccess";
$locale['setup_1015'] = "Скасувати наявні налаштування файлу та замінити їх стандартними";
$locale['setup_1017'] = "Скасувати все та закрити скрипт встановлення";
$locale['setup_1018'] = "Ви можете припинити встановлення в будь-який час, натиснувши кнопку, розташовану нижче. Після цього файл config_temp.php буде перейменовано знову в config.php.";
$locale['setup_1019'] = "Вихід";
$locale['setup_1020'] = "Файл .htaccess успішно створено/оновлено";

// Step 2
$locale['setup_1090'] = "Файли";
$locale['setup_1091'] = "Стан";
$locale['setup_1092'] = "Налаштування та драйвер бази даних";
$locale['setup_1106'] = "Перевірка структури файлів";

// Step 3 - Access criteria
$locale['setup_1200'] = "Налаштування бази даних та шляхів доступу на сервері";
$locale['setup_1201'] = "Будь ласка, введіть параметри доступу до Вашої бази даних MySQL.";
$locale['setup_1202'] = "Назва хосту:";
$locale['setup_1203'] = "Ім&lsquo;я користувача:";
$locale['setup_1204'] = "Пароль користувача:";
$locale['setup_1205'] = "Назва бази даних:";
$locale['setup_1206'] = "Префікс для таблиць:";
$locale['setup_1207'] = "Префікс для коржиків (cookie):";
$locale['setup_1208'] = "Драйвер бази даних";

// Step 4 - Database Setup
$locale['setup_1210'] = "Ні";
$locale['setup_1211'] = "Так";
$locale['setup_1212'] = "Виберіть мови, що будуть використовуватися:";
$locale['setup_1213'] = "Ім&lsquo;я власника сайту";
$locale['setup_1214'] = "Назва сайту";
$locale['setup_1215'] = "Ваш сайт на PHP-Fusion";
$locale['setup_1216'] = "PHP-Fusion є полегшеною системою керування змістом (CMS) з відкритим кодом, створеною на PHP.";
$locale['setup_1217'] = "Ваш обліковий запис успішно оновлено. Будь ласка, відтепер використовуйте свої нові облікові дані.";
$locale['setup_1220'] = "Назва бази даних, до якої Ви бажаєте встановити PHP-Fusion";
$locale['setup_1221'] = "Ім&lsquo;я користувача MySQL";
$locale['setup_1222'] = "...та пароль доступу";
$locale['setup_1223'] = "Переконайтесь у достатній унікальності цих значень для підвищення безпеки Вашої бази даних";
$locale['setup_1224'] = "Префікс коржиків (cookie)";
$locale['setup_1225'] = "наприклад, localhost";
$locale['setup_1307'] = "Будь ласка, перевірте права на дозвіл запису для файлу config.php.";
$locale['setup_1310'] = "Неможливо з&lsquo;єднатися із базою даних MySQL.";
$locale['setup_1311'] = "База даних з вказаною назвою не існує.";
$locale['setup_1313'] = "Вказаний префікс таблиць вже використовується. Жодні таблиці не буде встановлено. Будь ласка, розпочніть спочатку або перейдіть до наступного кроку.";
$locale['setup_1315'] = "Будь ласка, перевірте, чи має вказаний користувач права для читання, запису та видалення таблиць бази даних MySQL.";
$locale['setup_1317'] = "Будь ласка, заповніть усі поля для налаштування з&lsquo;єднання із базою даних MySQL.";

// Step 6 - Super Admin login
$locale['setup_1500'] = "Обліковий запис головного адміністратора";
$locale['setup_1501'] = "Налаштуйте Ваш обліковий запис головного адміністратора.";
$locale['setup_1504'] = "Ім&lsquo;я користувача:";
$locale['setup_1505'] = "Пароль авторизації:";
$locale['setup_1506'] = "Підтвердження паролю:";
$locale['setup_1507'] = "Пароль адміністрування";
$locale['setup_1508'] = "Підтвердження паролю:";
$locale['setup_1509'] = "Електронна адреса:";
$locale['setup_1510'] = "Електронна адреса сайту:";
$locale['setup_1511'] = "Регіон:";
$locale['setup_1512'] = "Мови:";
$locale['setup_1513'] = "Власник сайту:";

// Progress Reports
$locale['setup_1600'] = "Встановлення ";
$locale['setup_1601'] = "Оновлення структури таблиць ";
$locale['setup_1602'] = "Створення нових стовпців ";
$locale['setup_1603'] = "Запис даних ";

// Step 6 - User details validation
$locale['setup_5010'] = "Ім&lsquo;я користувача містить недопустимі символи.";
$locale['setup_5011'] = "Поле з іменем користувача не можна залишати порожнім.";
$locale['setup_5012'] = "Паролі авторизації не співпадають.";
$locale['setup_5013'] = "Недопустимий пароль авторизації, будь ласка, використовуйте лише латинські літери та цифри.\nДовжина паролю повинна бути не менше 8 символів.";
$locale['setup_5015'] = "Паролі адміністрування не співпадають.";
$locale['setup_5016'] = "Паролі авторизації та адміністрування повинні відрізнятися.";
$locale['setup_5017'] = "Недопустимий пароль адміністрування, будь ласка, використовуйте лише латинські літери та цифри.\nДовжина паролю повинна бути не менше 8 символів";
$locale['setup_5020'] = "Поле з електронною адресою не можна залишати порожнім.";

// Step 6 - Admin Panels
$locale['setup_3000'] = "Адміністратори";
$locale['setup_3002'] = "Статті";
$locale['setup_3003'] = "Баннери";
$locale['setup_3004'] = "BB-коди";
$locale['setup_3005'] = "Чорний список";
$locale['setup_3006'] = "Коментарі";
$locale['setup_3007'] = "Сторінки";
$locale['setup_3008'] = "Резервна копія";
$locale['setup_3010'] = "Завантаження";
$locale['setup_3011'] = "ЧАП";
$locale['setup_3012'] = "Форум";
$locale['setup_3013'] = "Зображення";
$locale['setup_3014'] = "Додатки";
$locale['setup_3015'] = "Панель додатків";
$locale['setup_3016'] = "Користувачі";
$locale['setup_3018'] = "Новини";
$locale['setup_3019'] = "Панелі";
$locale['setup_3020'] = "Фотоальбоми";
$locale['setup_3021'] = "Інформація про PHP";
$locale['setup_3022'] = "Опитування";
$locale['setup_3023'] = "Навігація";
$locale['setup_3024'] = "Усміхайлики";
$locale['setup_3026'] = "Оновлення";
$locale['setup_3027'] = "Групи користувачів";
$locale['setup_3029'] = "Посилання";
$locale['setup_3030'] = "Головне";
$locale['setup_3031'] = "Час і дата";
$locale['setup_3033'] = "Реєстрація";
$locale['setup_3035'] = "Різне";
$locale['setup_3036'] = "Приватні повідомлення";
$locale['setup_3037'] = "Поля користувача";
$locale['setup_3038'] = "Ранги на форумі";
$locale['setup_3041'] = "Користувачі";
$locale['setup_3044'] = "Безпека";
$locale['setup_3047'] = "Скидання паролю адміністрування";
$locale['setup_3048'] = "Журнал помилок";
$locale['setup_3049'] = "Журнал користувача";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Мова";
$locale['setup_3052'] = "Статичні посилання";
$locale['setup_3055'] = "Блог";
$locale['setup_3056'] = "Теми";
$locale['setup_3057'] = "Міграція";
$locale['setup_3058'] = "Тема";

//Multilanguage table rights
$locale['setup_3200'] = "Статті";
$locale['setup_3201'] = "Сторінки";
$locale['setup_3202'] = "Завантаження";
$locale['setup_3203'] = "ЧАП";
$locale['setup_3204'] = "Форум";
$locale['setup_3205'] = "Новини";
$locale['setup_3206'] = "Галерея";
$locale['setup_3207'] = "Опитування";
$locale['setup_3208'] = "Поштові шаблони";
$locale['setup_3209'] = "Посилання";
$locale['setup_3210'] = "Внутрішні посилання";
$locale['setup_3211'] = "Панелі";
$locale['setup_3212'] = "Ранги на форумі";
$locale['setup_3213'] = "Блог";

// Step 6 - Navigation Links
$locale['setup_3300'] = "Головна";
$locale['setup_3302'] = "Завантаження";
$locale['setup_3303'] = "ЧАП";
$locale['setup_3304'] = "Форум";
$locale['setup_3305'] = "Контакти";
$locale['setup_3307'] = "Посилання";
$locale['setup_3308'] = "Галерея";
$locale['setup_3309'] = "Пошук";
$locale['setup_3310'] = "Пропозиція посилання";
$locale['setup_3311'] = "Пропозиція новини";
$locale['setup_3312'] = "Пропозиція статті";
$locale['setup_3313'] = "Пропозиція зображення";
$locale['setup_3314'] = "Пропозиція завантаження";
$locale['setup_3315'] = "Пропозиції";
$locale['setup_3316'] = "Чат";
$locale['setup_3317'] = "Пропозиція допису в блог";
$locale['setup_3318'] = "Архів блогу";
$locale['setup_3319'] = "Активні теми";
$locale['setup_3320'] = "Задіяні теми";
$locale['setup_3321'] = "Відстежувані теми";
$locale['setup_3322'] = "Теми без відповіді";
$locale['setup_3323'] = "Запитання без відповіді";
$locale['setup_3324'] = "Створити тему";
$locale['setup_3325'] = "Останні статті";
$locale['setup_3326'] = "Останні завантаження";
$locale['setup_3327'] = "Пропозиція ЧАП";

// Stage 6 - Panels
$locale['setup_3400'] = "Навігація";
$locale['setup_3401'] = "Зараз на сайті";
$locale['setup_3402'] = "Теми форуму";
$locale['setup_3404'] = "Привітання";
$locale['setup_3405'] = "Список тем форуму";
$locale['setup_3406'] = "Користувач";
$locale['setup_3407'] = "Опитування";
$locale['setup_3408'] = "RSS";

// Stage 6 - News Categories
$locale['setup_3500'] = "Помилки";
$locale['setup_3501'] = "Завантаження";
$locale['setup_3502'] = "Ігри";
$locale['setup_3503'] = "Графіка";
$locale['setup_3504'] = "Техніка";
$locale['setup_3505'] = "Блоги";
$locale['setup_3506'] = "Користувачі";
$locale['setup_3507'] = "Додатки";
$locale['setup_3508'] = "Медіа";
$locale['setup_3509'] = "Інтернет";
$locale['setup_3510'] = "Новини";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Безпека";
$locale['setup_3513'] = "Програми";
$locale['setup_3514'] = "Теми";
$locale['setup_3515'] = "Windows";

// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Головний адміністратор";
$locale['setup_3601'] = "Адміністратор";
$locale['setup_3602'] = "Модератор";
$locale['setup_3603'] = "Новенький";
$locale['setup_3604'] = "Початківець";
$locale['setup_3605'] = "Користувач";
$locale['setup_3606'] = "Досвідчений";
$locale['setup_3607'] = "Ветеран";
$locale['setup_3608'] = "Еліта";

// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Посміхаюсь";
$locale['setup_3621'] = "Підморгую";
$locale['setup_3622'] = "Сумний";
$locale['setup_3623'] = "Похмурий";
$locale['setup_3624'] = "Здивований";
$locale['setup_3625'] = "Дражнюсь";
$locale['setup_3626'] = "Крутий";
$locale['setup_3627'] = "Сміюсь";
$locale['setup_3628'] = "Злий";
$locale['setup_3629'] = "Схвалюю";

// Stage 6 - User Field Categories
$locale['setup_3640'] = "Головне";
$locale['setup_3641'] = "Контакти";
$locale['setup_3642'] = "Різне";
$locale['setup_3643'] = "Параметри";
$locale['setup_3644'] = "Статистика";
$locale['setup_3645'] = "Конфіденційність";

// Stage 6 - Forum Tags
$locale['setup_3660'] = "Відомості про сайт";
$locale['setup_3661'] = "Обговорення налаштувань цього сайту";

// Stage 6 - User Fields
require_once __DIR__."/user_fields/user_aim.php";
require_once __DIR__."/user_fields/user_birthdate.php";
require_once __DIR__."/user_fields/user_icq.php";
require_once __DIR__."/user_fields/user_location.php";
require_once __DIR__."/user_fields/user_sig.php";
require_once __DIR__."/user_fields/user_skype.php";
require_once __DIR__."/user_fields/user_theme.php";
require_once __DIR__."/user_fields/user_web.php";
require_once __DIR__."/user_fields/user_yahoo.php";
require_once __DIR__."/user_fields/user_timezone.php";
require_once __DIR__."/user_fields/user_blacklist.php";

// Welcome message
$locale['setup_3650'] = "Ласкаво просимо на сайт!";

// Final message
$locale['setup_1700'] = "Встановлення успішно завершено";
$locale['setup_1701'] = "PHP-Fusion 9.0 тепер готова до використання. Натисніть кнопку [Завершити] для перезапису файлу config_temp.php в config.php\n";
$locale['setup_1702'] = "Примітка: З міркувань безпеки, настійливо рекомендується\nвидалити каталог /install та встановити для файлу config.php права доступу (CHMOD) в значення 644.";
$locale['setup_1703'] = "Дякуємо за вибір PHP-Fusion!";

// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";

// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Шаблони для електронної пошти";
$locale['setup_3801'] = "Сповіщення про нові приватні повідомлення";
$locale['setup_3802'] = "Ви отримали нове приватне повідомлення від [USER] на сайті [SITENAME]";
$locale['setup_3803'] = "Вітаємо [RECEIVER],\r\nВи отримали нове приватне повідомлення із заголовком [SUBJECT] від [USER] на сайті [SITENAME]. Ви можете прочитати його за цим посиланням: [SITEURL]messages.php\r\n\r\nПовідомлення: [MESSAGE]\r\n\r\nЯкщо Ви не бажаєте більше отримувати такі сповіщення, можете вимкнути сповіщення через електронну пошту в панелі керування приватними повідомленнями.\r\n\r\nЗ повагою,\r\n[SENDER].";
$locale['setup_3804'] = "Сповіщення про нові відповіді на форумі";
$locale['setup_3805'] = "Сповіщення про відповідь у темі - [SUBJECT]";
$locale['setup_3806'] = "Вітаємо [RECEIVER],\r\n\r\nУ темі \'[SUBJECT]\', за якою Ви стежите на сайті [SITENAME] з`явилась нова відповідь. Ви можете прочитати її за цим посиланням:\r\n\r\n[THREAD_URL]\r\n\r\nЯкщо Ви не бажаєте більше отримувати такі сповіщення, можете скористатись посиланням \'Припинити стежити за цією темою\' у заголовку теми.\r\n\r\nRegards,\r\n[SENDER].";
$locale['setup_3807'] = "Форма для зв&lsquo;язку";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";

// Official Supported System List
$locale['articles']['title'] = "Статті";
$locale['articles']['description'] = "Документація";
$locale['blog']['title'] = "Блог";
$locale['blog']['description'] = "Ведення блогу";
$locale['downloads']['title'] = "Завантаження";
$locale['downloads']['description'] = "Завантаження файлів";
$locale['faqs']['title'] = "ЧАП";
$locale['faqs']['description'] = "База знань запитання-відповідь";
$locale['forums']['title'] = "Форум";
$locale['forums']['description'] = "Дискусії на сайті";
$locale['news']['title'] = "Новини";
$locale['news']['description'] = "Публікація новин";
$locale['photos']['title'] = "Галерея";
$locale['photos']['description'] = "Публікація фотоальбомів";
$locale['polls']['title'] = "Опитування";
$locale['polls']['description'] = "Опитування/голосування користувачів";
$locale['weblinks']['title'] = "Посилання";
$locale['weblinks']['description'] = "Каталог зовнішніх посилань";
$locale['install'] = "Встановити базову систему";