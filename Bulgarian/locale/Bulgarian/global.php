<?php
/**
 * Bulgarian Locale
 * charset as ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * region as ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 */
setlocale(LC_TIME, "bg_BG.utf8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "BG";
$locale['xml_lang'] = "bg";
$locale['tinymce'] = "bg_BG";
$locale['select2'] = "bg";
$locale['phpmailer'] = "bg";
$locale['datepicker'] = "bg-bg";
// Full & Short Months
$locale['months'] = "&nbsp|януари|февруари|март|април|май|юни|юли|август|септември|октомври|ноември|декември";
$locale['shortmonths'] = "&nbsp|яну|февр|март|апр|май|юни|юли|авг|септ|окт|ное|дек";
$locale['weekdays'] = "неделя|понеделник|вторник|сряда|четвъртък|петък|събота";
// Timers
$locale['year'] = "година";
$locale['year_a'] = "години";
$locale['month'] = "месец";
$locale['month_a'] = "месеци";
$locale['day'] = "ден";
$locale['day_a'] = "дни";
$locale['hour'] = "час";
$locale['hour_a'] = "часове";
$locale['minute'] = "минута";
$locale['minute_a'] = "минути";
$locale['second'] = "секунда";
$locale['second_a'] = "секунди";
$locale['just_now'] = "току що";
$locale['ago'] = "от тогава";
// Geo
$locale['street1'] = "Адрес 1";
$locale['street2'] = "Адрес 2";
$locale['city'] = "Град";
$locale['postcode'] = "Пощенски код";
$locale['sel_country'] = "Изберете град";
$locale['sel_state'] = "Изберете област";
$locale['sel_user'] = "Моля напишете потребителско име";
$locale['add_language'] = "Добавете преводи";
$locale['add_lang'] = "Добави %s";
// Name
$locale['name'] = 'Пълно име';
$locale['username_pretext'] = 'Потребителското Ви име е същото, като Вашия адрес на профила в: %s %s';
$locale['first_name'] = 'Име';
$locale['middle_name'] = 'Бащино име';
$locale['last_name'] = 'Фамилно име';
// Documents
$locale['doc_type'] = "Тип на документа";
$locale['doc_series'] = "Серия";
$locale['doc_number'] = "Брой";
$locale['doc_authority'] = "Пълномощие";
$locale['doc_date_issue'] = "Дата на издаване";
$locale['doc_date_expire'] = "Валидедн до";
// Standard User Levels
$locale['user0'] = "Публичен";
$locale['user1'] = "Потребител";
$locale['user2'] = "Администратор";
$locale['user3'] = "Супер администратор";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Гост";
$locale['user_anonymous'] = "Анонимен потребител";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Активен";
$locale['status1'] = "Баннат";
$locale['status2'] = "Неактивиран";
$locale['status3'] = "Наказан";
$locale['status4'] = "Баннат в съображение за сигурността";
$locale['status5'] = "Прекратен";
$locale['status6'] = "Анонимен";
$locale['status7'] = "Деактивиран";
$locale['status8'] = "Неактивен";
// Forum Moderator Level(s)
$locale['userf1'] = "Модератор";
// Navigation
$locale['global_001'] = "Навигация";
$locale['global_002'] = "Няма създадени връзки\n";
// Users Online
$locale['global_010'] = "Потребители на линия";
$locale['global_011'] = "Гости на линия";
$locale['global_012'] = "Регистрирани на линия";
$locale['global_013'] = "Няма регистрирани на линия";
$locale['global_014'] = "Общ брой потребители";
$locale['global_015'] = "Неактивирани потребители";
$locale['global_016'] = "Най-нов потребител";
// Forum Side panel
$locale['global_020'] = "Теми във форума";
$locale['global_021'] = "Последни дискусии";
$locale['global_022'] = "Горещи теми";
$locale['global_023'] = "Няма създадени теми";
$locale['global_024'] = "Дискуусии, в които участвате";
$locale['global_027'] = "Теми без отговор";
$locale['global_028'] = "Въпроси без отговор";
// Comments Side panel
$locale['global_025'] = "Последни коментари";
$locale['global_026'] = "Коментарите са недостъпни";
// Articles Side panel
$locale['global_030'] = "Последни статии";
$locale['global_031'] = "Няма статии";
// Downloads Side panel
$locale['global_032'] = "Последни файлове";
$locale['global_033'] = "Няма файлове";
// Welcome panel
$locale['global_035'] = "Добре дошли";
// Latest Active Forum Threads panel
$locale['global_040'] = "Последни теми във форума";
$locale['global_041'] = "Моите последни теми";
$locale['global_042'] = "Моите скорошни отговори";
$locale['global_043'] = "Нови отговори";
$locale['global_044'] = "Тема";
$locale['global_045'] = "Видяна";
$locale['global_046'] = "Отговори";
$locale['global_047'] = "Последен отговор";
$locale['global_048'] = "Форум";
$locale['global_049'] = "Публикувано на";
$locale['global_050'] = "Автор";
$locale['global_051'] = "Анкета";
$locale['global_052'] = "Преместена";
$locale['global_053'] = "Все още не сте започнал/а никаква тема във форума.";
$locale['global_054'] = "Все още не сте публикувал/а никакви съобщения във форума.";
$locale['global_055'] = "Има %u нови отговора в %u различни теми след последната Ви визита.";
$locale['global_056'] = "Следвани теми";
$locale['global_057'] = "Опции";
$locale['global_058'] = "Спиране на следването";
$locale['global_059'] = "Не следвате нито една тема.";
$locale['global_060'] = "Да се спре ли следването на темата?";
// Blog, News & Articles
$locale['global_070'] = "Публикувано от ";
$locale['global_070b'] = "Вижте всички публикации от %s";
$locale['global_071'] = "на ";
$locale['global_071b'] = "Автор";
$locale['global_072'] = "Продължаване на четенето";
$locale['global_073'] = " Коментари";
$locale['global_073b'] = " Коментар";
$locale['global_074'] = " Прочита";
$locale['global_074b'] = " Прочит";
$locale['global_075'] = "Принтиране";
$locale['print'] = 'Принтиране';
$locale['global_076'] = "Редакция";
$locale['global_077'] = "Новини";
$locale['global_078'] = "Няма публикувани новини";
$locale['global_079'] = "В ";
$locale['global_080'] = "Некатегоризирани";
$locale['global_081'] = "Новини - начало";
$locale['global_082'] = "Новини";
$locale['global_083'] = "Последно обновяване";
$locale['global_084'] = "Категория на новините";
$locale['global_085'] = "Всички други категории";
$locale['global_086'] = "Последни новини";
$locale['global_087'] = "Най-коментирани новини";
$locale['global_088'] = "Новини с най-висок рейтинг";
$locale['global_089'] = "Бъдете първи да коментирате %s";
$locale['global_089a'] = "Бъдете първи да оцените %s";
$locale['global_089b'] = "Портретен изглед";
$locale['global_089c'] = "Списък";
// Page Navigation
$locale['global_090'] = "Предишна";
$locale['global_091'] = "Следваща";
$locale['global_092'] = "Страница ";
$locale['global_093'] = " от ";
$locale['global_094'] = " от ";
// Guest User Menu
$locale['global_100'] = "Вход";
$locale['global_101'] = "Входящ ИН";
$locale['global_101a'] = "Потребител";
$locale['global_101b'] = "Електронна поща";
$locale['global_101c'] = "Въведете потребител или електронна поща";
$locale['global_102'] = "Парола";
$locale['global_103'] = "Останете вписан в системата";
$locale['global_104'] = "Вход";
$locale['global_105'] = "Не сте потребител? [LINK]Натиснете тук[/LINK], за да се регистрирате.";
$locale['global_106'] = "[LINK]Забравена парола?[/LINK]";
$locale['global_107'] = "Регистрация";
$locale['global_108'] = "Загубена парола";
// Member User Menu
$locale['global_120'] = "Променете страницата на профила си";
$locale['global_121'] = "Лични съобщения";
$locale['global_122'] = "Потребителски списък";
$locale['global_123'] = "Административен панел";
$locale['global_124'] = "Изход";
$locale['global_125'] = "Имате %u нови ";
$locale['global_126'] = "съобщение";
$locale['global_127'] = "съобщения";
$locale['global_128'] = "публикация";
$locale['global_129'] = "публикации";
// User Menu
$locale['UM060'] = "Вход";
$locale['UM061'] = "Потребител";
$locale['UM061a'] = "Електронна поща";
$locale['UM061b'] = "Потребител или електронна поща";
$locale['UM062'] = "Парола";
$locale['UM063'] = "Запомни ме";
$locale['UM064'] = "Вход";
$locale['UM065'] = "Не сте потребител? [LINK]Натиснете тук[/LINK], за да се регистрирате.";
$locale['UM066'] = "Забравена парола?\n[LINK]Поискайте нова[/LINK].";
$locale['UM080'] = "Редакция на профила";
$locale['UM081'] = "Лични съобщения";
$locale['UM082'] = "Потребителски лист";
$locale['UM083'] = "Административен панел";
$locale['UM084'] = "Изход";
$locale['UM085'] = "Имате %u нови ";
$locale['UM086'] = "съобщение";
$locale['UM087'] = "съобщения";
$locale['UM088'] = "Следвани теми";
// Submit (news, link, article)
$locale['UM089'] = "Публикувай...";
$locale['UM090'] = "Публикувай новина";
$locale['UM091'] = "Публикувай интернет връзка";
$locale['UM092'] = "Публикувай статия";
$locale['UM093'] = "Публикувай снимка";
$locale['UM094'] = "Публикувай файл";
$locale['UM095'] = "Публикувай блог";
// User Panel
$locale['UM096'] = "Добре дошли: ";
$locale['UM097'] = "Персонално меню";
$locale['UM101'] = "Смяна на езиците";
// Gauges
$locale['UM098'] = "Входяща кутия :";
$locale['UM099'] = "Изходяща кутия :";
$locale['UM100'] = "Архив на ЛС :";
// Keywords and Meta
$locale['tags'] = "Тагове";
// Captcha
$locale['global_150'] = "Валидационен код:";
$locale['global_151'] = "Въведете валидационния код:";
// Footer Counter
$locale['global_170'] = "уникално посещение";
$locale['global_171'] = "уникални посещения";
$locale['global_172'] = "Време на зареждане: %s секунди";
$locale['global_173'] = "Заявки";
$locale['global_174'] = "Използвана памет";
$locale['global_175'] = "Средно: %s секудни";
// Admin Navigation
$locale['global_180'] = "Администрация - начало";
$locale['global_181'] = "Връщане към сайта";
$locale['global_182'] = "Административната парола е грешна.";
// Miscellaneous
$locale['global_190'] = "Активиран режим на поддръжка";
$locale['global_191'] = "IP адресът Ви е в черния списък.";
$locale['global_192'] = "Сесията Ви е изтекла. Моля влезте отново.";
$locale['global_193'] = "Невъзможно създаването и настройването на бисквитка. Моля уверете се, че сте позволили бисквитките, за да можете да влезете в системата правилно.";
$locale['global_194'] = "Този потребител в момента е наказан.";
$locale['global_195'] = "Този потребител не е активиран.";
$locale['global_196'] = "Невалидно потребителско име или парола.";

$locale['global_197'] = "Моля почакайте докато Ви прехвърлим...\n\n[ [LINK]Или натиснете тук, ако не искате да чакате[/LINK] ]";

$locale['global_198'] = "ПЕДУПРЕЖДЕНИЕ: ЗАСЕЧЕН Е ИНСТАЛАТОР, МОЛЯ ИЗТРИЙТЕ ПАПКАТА /INSTALL/ НЕЗАБАВНО.";
$locale['global_199'] = "ПЕДУПРЕЖДЕНИЕ: админитративната парола не е оказана, отидете на [LINK]редакция на профила[/LINK], за да я напишете.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Търсене";
$locale['global_203'] = " - ЧЗВ";
$locale['global_204'] = " - Форум";
//Themes
$locale['global_210'] = "Пропусни до съдържанието";
$locale['global_300'] = "няма намерена тема";
$locale['global_301'] = "Съжаляване, но страницата не може да бъде показана. Поради някои обстоятелства темата не може да бъде намерена.
 Ако сте администратора на сайта, моля използвайте FTP клиент, за да качите каквато и да е тема направена за PHP-Fusion 9 в папката с теми.
 След като качите темата, моля проверете дали избраната тема е добавена коректно в папката с теми.
 Моля забележете, че качената тема трябва да има същото име (включително и главни и малки букви, което е важно за Unix сървърите),
 като избраната в настройките на сайта.\n\nАко сте обикновен потребител, моля свържете се с администратора на сайта на [SITE_EMAIL] и съобщете за този проблем.";
$locale['global_302'] = "Избраната тема не съществува или е непълна!";
// JavaScript Not Enabled
$locale['global_303'] = "О не! Къде е JavaScript?\nВашият браузър не е включил JavaScript или не го поддържа.
Моля включете JavaScript, за да виждате страницата правилно или обновете браузъра си до такъв, който да поддържа JavaScript.";
// User Management
$locale['global_400'] = "наказан";
$locale['global_401'] = "баннат";
$locale['global_402'] = "деактивиран";
$locale['global_403'] = "потребителят премахнат";
$locale['global_404'] = "потребителят е направен анонимен";
$locale['global_405'] = "анонимен потребител";
$locale['global_406'] = "Потребителят е баннат поради следните причини:";
$locale['global_407'] = "Потребителят е наказан до ";
$locale['global_408'] = " поради следната причина:";
$locale['global_409'] = "Този потребител е баннат от съображение за сигурност.";
$locale['global_410'] = "Причината за това: ";
$locale['global_411'] = "Този потребител е бил прекратен.";
$locale['global_412'] = "Този потребител е направен анонимен, може би поради неактивност.";
// Flood control
$locale['global_440'] = "Автоматичен бан от флууд контролиране";
$locale['global_441'] = "Потребителят Ви в [SITENAME] е баннат";
$locale['global_442'] = "Здравейете [USER_NAME],\n
Потребителят Ви в [SITENAME] е публикувал твърде много информация в системата за кратър период от време от IP [USER_IP]и затова е баннат. Това се прави за защита от ботове.\n
Моля свържете се с администратора на сайта на [SITE_EMAIL], за да възстановим потребителя Ви или да докладвате, че това всъщност не сте Вие.\n\n
С уважение,\n[SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Наказанието автоматично премахнато от системата";
$locale['global_451'] = "Наказанието в [SITENAME] е премахнато";
$locale['global_452'] = "Здравейте USER_NAME,\n
Наказанието на потребителя Ви в [SITEURL] е премахнато. Данните Ви за достъп в сайта:\n
Потребител: USER_NAME\nПарола: Скрита от съображение за сигурност\n
Ако сте забравили паролата си, може да я рестартирате чрез: LOST_PASSWORD\n\n
С уважение,\n[SITEUSERNAME]";
$locale['global_453'] = "Здравейте USER_NAME,\nНаказанието на потребителя Ви в [SITEURL] е премахнато.\n\n
С уважение,\n[SITEUSERNAME]";
$locale['global_454'] = "Потребителят в [SITENAME] е активиран отново";
$locale['global_455'] = "Здравейте USER_NAME,\n
Последния път, когато влезнахте в [SITEURL] активирахте отново потребителя си и вече не сте отбелязан, като неактивен.\n\n
С уважение,\n[SITEUSERNAME]";

$locale['global_456'] = "Нова парола за потребителя Ви в [SITENAME]";
$locale['global_457'] = "Здравейте USER_NAME,
\n\nСъздаден е нова парола за потребителя Ви в [SITENAME]. Новите данни за достъп са:\n\n
Потребител: USER_NAME\nПарола: [PASSWORD]\n\nС уважение,\n[SITEUSERNAME]";
$locale['global_458'] = "Създадена е нова парола за достъп за USER_NAME";
$locale['global_459'] = "Новата парола за достъп е създадена за USER_NAME и не е изпратено писмо. Моля уверете се, че потребителят е запознат с новите си данни.";

// Function parsebytesize()
$locale['global_460'] = "Празно";
$locale['global_461'] = "Байтове";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Пренасочен сте към %s, моля изчакайте. Ако не сте пренасочен, моля натиснете тук.";
// Captcha Locales
$locale['global_600'] = "Валидационен код";
$locale['recaptcha'] = "en";
//Miscellaneous
$locale['global_900'] = "Невъзможно конвертирането на HEX към DEC";
//Language Selection
$locale['global_ML100'] = "Език:";
$locale['global_ML101'] = "- Изберете език -";
$locale['global_ML102'] = "Език на сайта";
// Flood Control
$locale['flood'] = "Спрян сте да публикувате, докато времето за флууд контрол не изтече. Моля изчакайте %s.";
$locale['no_image'] = "Няма изображение";
$locale['send_message'] = 'Изпратете съобщение';
$locale['go_profile'] = 'Отидете на профилната страница на %s';
// Global one word locales
$locale['hello'] = 'Здравейте!';
$locale['goodbye'] = 'Довиждане!';
$locale['welcome'] = 'Добре дошли отново';
$locale['home'] = 'Начало';
// Status
$locale['error'] = 'Грешка!';
$locale['success'] = 'Успех!';
$locale['enable'] = 'Разрешаване';
$locale['disable'] = 'Забрана';
$locale['can'] = 'може';
$locale['cannot'] = 'не може';
$locale['no'] = 'Не';
$locale['yes'] = 'Да';
$locale['off'] = 'Изключено';
$locale['on'] = 'Включено';
$locale['or'] = 'или';
$locale['by'] = 'от';
$locale['in'] = 'в';
$locale['of'] = 'на';
$locale['and'] = "и";
$locale['na'] = 'Не е в наличност';
$locale['joined'] = "Присъединил се от: ";
// Navigation
$locale['next'] = 'Следваща';
$locale['previous'] = 'Предишна';
$locale['back'] = 'Назад';
$locale['forward'] = 'Напред';
$locale['go'] = 'Давай';
$locale['cancel'] = 'Спри';
$locale['move_up'] = "Премести нагоре";
$locale['move_down'] = "Премести надолу";
$locale['load_more'] = "Зареди повече обекти";
$locale['load_end'] = "Зареди от начало";
// Actions
$locale['add'] = 'Добваи';
$locale['save'] = 'Запази';
$locale['save_changes'] = 'Запази промените';
$locale['confirm'] = 'Потвърди';
$locale['update'] = 'Обнови';
$locale['updated'] = 'Обновен';
$locale['remove'] = 'Премахни';
$locale['delete'] = 'Изтрий';
$locale['search'] = 'Търси';
$locale['help'] = 'Помощ';
$locale['register'] = 'Регистрация';
$locale['ban'] = 'Бан';
$locale['reactivate'] = 'Повторно активиране';
$locale['user'] = 'Потребител';
$locale['promote'] = 'Повиши';
$locale['show'] = 'Покажи';
//Tables
$locale['status'] = 'Статус';
$locale['order'] = 'Подредба';
$locale['sort'] = 'Сортирай';
$locale['id'] = 'ИН';
$locale['title'] = 'Заглавие';
$locale['rights'] = 'Права';
$locale['info'] = 'Информация';
$locale['image'] = 'Изображение';
// Forms
$locale['choose'] = 'Моля изберете едно...';
$locale['no_opts'] = 'Няма избрани';
$locale['root'] = 'Като родителя';
$locale['choose-user'] = 'Моля изберете потребител...';
$locale['choose-location'] = 'Моля изберете локация';
$locale['parent'] = 'Моля създайте нов родител..';
$locale['order'] = 'Подредба на обектите';
$locale['status'] = 'Статус';
$locale['note'] = 'Отбележете този елемент';
$locale['publish'] = 'Публикуван';
$locale['unpublish'] = 'Непубликуван';
$locale['draft'] = 'Чернова';
$locale['settings'] = 'Настройки';
$locale['posted'] = 'публикувано';
$locale['profile'] = 'Профил';
$locale['edit'] = 'Редакция';
$locale['qedit'] = 'Бърза редакция';
$locale['view'] = 'Изглед';
$locale['login'] = 'Вход';
$locale['logout'] = 'Изход';
$locale['admin-logout'] = 'Изход от администрацията';
$locale['message'] = 'Лични съобщения';
$locale['logged'] = 'Влезнал, като ';
$locale['version'] = 'Версия ';
$locale['browse'] = 'Разглеждане ...';
$locale['close'] = 'Затвори';
$locale['nopreview'] = 'Няма нищо за предварителен изглед';
$locale['mark_as'] = "Маркирай, като";
// Alignment
$locale['left'] = "Ляво";
$locale['center'] = "Център";
$locale['right'] = "Дясно";
// Comments and ratings
$locale['comments'] = "Коментари";
$locale['ratings'] = "Оценки";
$locale['comments_ratings'] = "Коментари и оценки";
$locale['user_account'] = "Потребител";
$locale['about'] = "Относно";
// User status
$locale['online'] = "На линия";
$locale['offline'] = "Извън линия";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "публикация|публикации";
$locale['fmt_article'] = "статия|статии";
$locale['fmt_blog'] = "блог|блогове";
$locale['fmt_comment'] = "коментар|коментари";
$locale['fmt_vote'] = "глас|гласове";
$locale['fmt_rating'] = "оценка|оценки";
$locale['fmt_day'] = "ден|дни";
$locale['fmt_download'] = "файл|файлове";
$locale['fmt_follower'] = "последовател|последователи";
$locale['fmt_forum'] = "форум|форуми";
$locale['fmt_guest'] = "гост|гости";
$locale['fmt_hour'] = "час|часове";
$locale['fmt_item'] = "обект|обекти";
$locale['fmt_member'] = "потребител|потребители";
$locale['fmt_message'] = "съобщение|съобщения";
$locale['fmt_minute'] = "минута|минути";
$locale['fmt_month'] = "месец|месеци";
$locale['fmt_news'] = "новина|новини";
$locale['fmt_photo'] = "снимка|снимки";
$locale['fmt_post'] = "отговор|отговори";
$locale['fmt_question'] = "въпрос|въпроси";
$locale['fmt_read'] = "прочит|прочита";
$locale['fmt_second'] = "секунда|секунди";
$locale['fmt_shouts'] = "отговор в чата|отговори в чата";
$locale['fmt_thread'] = "тема|теми";
$locale['fmt_user'] = "потребител|потребители";
$locale['fmt_views'] = "преглед|прегледа";
$locale['fmt_weblink'] = "интернет връзка|интернет връзки";
$locale['fmt_week'] = "седмица|седмици";
$locale['fmt_year'] = "година|години";
// include Defender locales
include __DIR__."/defender.php";