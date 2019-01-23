<?php
/**
 * Polski pakiet językowy dla PHP-Fusion 9.0
 * Dziękujemy wszystkim którzy przyłożyli się do prac nad polskim pakietem językowym dla PHP-Fusion 9!
 *
 * @author Xyroqs (https://github.com/Xyroqs)
 * @author Inventer89 (https://nfszone.pl)
 * @link https://www.php-fusion.pl Oficjalny Polski Support PHP-Fusion
 * @package locale/Polish
 */


setlocale(LC_TIME, "pl_PL.utf8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "PL";
$locale['xml_lang'] = "pl";
$locale['short_lang_name'] = "pl";
$locale['tinymce'] = "pl";
$locale['select2'] = "pl";
$locale['phpmailer'] = "pl";
$locale['datepicker'] = "pl";
$locale['datepicker_js'] = "DD-MM-YYYY H:mm:ss";
$locale['datepicker_php'] = "d-m-Y H:i:s";
$locale['password_strength'] = "pl";
$locale['date_day'] = "%d %b";
$locale['text-direction'] = "ltr";
// Full & Short Months
$locale['months'] = "&nbsp|styczeń|luty|marzec|kwiecień|maj|czerwiec|lipiec|sierpień|wrzesień|październik|listopad|grudzień";
$locale['shortmonths'] = "&nbsp|st.|lt.|mar.|kwi.|maj|czer.|lip.|sier.|wrz.|paź.|lis.|gru.";
$locale['weekdays'] = "Niedziela|Poniedziałek|Wtorek|Środa|Czwartek|Piątek|Sobota";
// Timers
$locale['year'] = "rok";
$locale['year_a'] = "lata";
$locale['month'] = "miesiąc";
$locale['month_a'] = "miesiące";
$locale['week'] = "tydzień";
$locale['week_a'] = "tygodnie";
$locale['day'] = "dzień";
$locale['day_a'] = "dni";
$locale['hour'] = "godzina";
$locale['hour_a'] = "godziny";
$locale['minute'] = "minuta";
$locale['minute_a'] = "minut";
$locale['second'] = "sekunda";
$locale['second_a'] = "sekundy";
$locale['just_now'] = "właśnie teraz";
$locale['now'] = 'teraz';
$locale['ago'] = "temu";
// Geo
$locale['street1'] = "Ulica 1";
$locale['street2'] = "Ulica 2";
$locale['city'] = "Miasto";
$locale['postcode'] = "Kod pocztowy";
$locale['sel_country'] = "Wybierz kraj";
$locale['sel_state'] = "Wybierz państwo";
$locale['sel_user'] = "Proszę wpisać nazwę użytkownika";
$locale['add_language'] = "Dodaj tłumaczenia";
$locale['add_lang'] = "Dodaj %";
$locale['other_states'] = "Inne państwa";
// Name
$locale['name'] = 'Pełna Nazwa';
$locale['username_pretext'] = 'Twoja nazwa użytkownika jest taka sama, jak profil użytkownika, który znajduje się na stronie:<div class="alert alert-info m-t-10 p-10">%s<strong>%s</strong></div>';
$locale['first_name'] = 'Imię';
$locale['middle_name'] = 'Drugie imię';
$locale['last_name'] = 'Nazwisko';
// Documents
$locale['doc_type'] = "Typ dokumentu";
$locale['doc_series'] = "Seria";
$locale['doc_number'] = "Numer";
$locale['doc_authority'] = "Ważność";
$locale['doc_date_issue'] = "Data od";
$locale['doc_date_expire'] = "Data do";
// Standard Poziom użytkownikas
$locale['user0'] = "Publiczny";
$locale['user1'] = "Użytkownik";
$locale['user2'] = "Administrator";
$locale['user3'] = "Super administrator";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Gość";
$locale['user_anonymous'] = "Konto ukryte";
$locale['genitive'] = "% %";
// Standard User Status
$locale['status0'] = "Aktywne";
$locale['status1'] = "Zablokowane";
$locale['status2'] = "Nieaktywne";
$locale['status3'] = "Zawieszone";
$locale['status4'] = "Zablokowane zp. bezpieczeństwa";
$locale['status5'] = "Wyłączone zp. bezczynności";
$locale['status6'] = "Ukryte";
$locale['status7'] = "Wyłączone";
$locale['status8'] = "Bezczynne";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Nawigacja";
$locale['global_002'] = "Brak linków\n";
$locale['global_003'] = "Brak podglądu";
// Users Online
$locale['global_010'] = "Aktualnie online";
$locale['global_011'] = "Gości online";
$locale['global_012'] = "Użytkowników online";
$locale['global_013'] = "Brak użytkowników online";
$locale['global_014'] = "Łącznie użytkowników";
$locale['global_015'] = "Nieaktywnych użytkowników";
$locale['global_016'] = "Najnowszy użytkownik";
$locale['global_017'] = "Przełącz nawigację";
// Forum Side panel
$locale['global_020'] = "Ostatnio na forum";
$locale['global_021'] = "Najnowsze tematy";
$locale['global_022'] = "Najciekawsze tematy";
$locale['global_023'] = "Brak tematów na forum";
$locale['global_024'] = "Udział w dyskusji";
$locale['global_027'] = "Tematy bez odpowiedzi";
$locale['global_028'] = "Nierozwiązane pytania";
// Comments Side panel
$locale['global_025'] = "Ostatnie komentarze";
$locale['global_026'] = "Brak komentarzy";
// Articles Side panel
$locale['global_030'] = "Ostatnie artykuły";
$locale['global_031'] = "Brak artykułów";
// Downloads Side panel
$locale['global_032'] = "Ostatnie pliki";
$locale['global_033'] = "Brak plików";
// Welcome panel
$locale['global_035'] = "Powitanie";
// Latest Active Forum Threads panel
$locale['global_040'] = "Ostatnio poruszane tematy";
$locale['global_041'] = "Moje ostatnie tematy";
$locale['global_042'] = "Moje ostatnie posty";
$locale['global_043'] = "Nowe posty";
$locale['global_044'] = "Temat";
$locale['global_045'] = "Wyświetleń";
$locale['global_046'] = "Odpowiedzi";
$locale['global_047'] = "Ostatni post";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Napisane przez";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Ankieta";
$locale['global_052'] = "Przeniesiony";
$locale['global_053'] = "Brak rozpoczętych przez Ciebie tematów.";
$locale['global_054'] = "Brak napisanych przez Ciebie postów.";
$locale['global_055'] = "Nowych postów od Twojej ostatniej wizyty: %u w %u tematach";
$locale['global_056'] = "Moje obserwowane tematy";
$locale['global_057'] = "Opcje";
$locale['global_058'] = "Przestań <br /> obserwować";
$locale['global_059'] = "Brak obserwowanych przez Ciebie tematów.";
$locale['global_060'] = "Przestać obserwować temat?";
// Blog, News & Articles
$locale['global_070'] = "Napisał ";
$locale['global_071b'] = "Pokaż wszystkie posty %s";
$locale['global_071'] = "w ";
$locale['global_071b'] = "Autor";
$locale['global_072'] = "Czytaj dalej";
$locale['global_073'] = " Komentarze";
$locale['global_073b'] = " Komentarz";
$locale['global_074'] = " Czytań";
$locale['global_074b'] = " Czytań";
$locale['global_075'] = "Drukuj";
$locale['print'] = 'Drukuj';
$locale['global_076'] = "Edytuj";
$locale['global_077'] = "News";
$locale['global_078'] = "Brak opublikowanych newsów";
$locale['global_079'] = "w ";
$locale['global_080'] = "Brak kategorii";
$locale['global_081'] = "Strona główna nowości";
$locale['global_082'] = "News";
$locale['global_083'] = "Ostatnia aktualizacja";
$locale['global_084'] = "Kategoria news'a";
$locale['global_085'] = "Zobacz wszystkie kategorie";
$locale['global_086'] = "Najczęściej czytane newsy";
$locale['global_087'] = "Najwięcej komentowane newsy";
$locale['global_088'] = "Najwyżej oceniany news";
$locale['global_089'] = "Bądź pierwszym komentującym %s";
$locale['global_089a'] = "Bądź pierwszym głosującym %s";
$locale['global_089b'] = "Zobacz podgląd";
$locale['global_089c'] = "Widok listy";
// Page Navigation
$locale['global_090'] = "Poprzednia";
$locale['global_091'] = "Następna";
$locale['global_092'] = "Strona ";
$locale['global_093'] = " z&nbsp;";
$locale['global_094'] = " z ";
// Guest User Menu
$locale['global_100'] = "Zaloguj";
$locale['global_101'] = "Login ID";
$locale['global_101a'] = "Nazwa użytkownika";
$locale['global_101b'] = "Email";
$locale['global_101c'] = "Wpisz nazwę użytkownika oraz email";
$locale['global_102'] = "Hasło";
$locale['global_103'] = "Zapamiętaj mnie";
$locale['global_104'] = "Zaloguj";
$locale['global_105'] = "Nie masz jeszcze konta? [LINK]Zarejestruj się[/LINK].";
$locale['global_106'] = "[LINK]Zgubione hasło?[/LINK]";
$locale['global_107'] = "Rejestracja";
$locale['global_108'] = "Zapomniane hasło";
$locale['global_109'] = "Rejestracja";
// Member User Menu
$locale['global_120'] = "Dostosuj stronę profilu";
$locale['global_121'] = "Prywatne wiadomości";
$locale['global_122'] = "Lista użytkowników";
$locale['global_123'] = "Panel administratora";
$locale['global_124'] = "Wyloguj";
$locale['global_125'] = "Masz %u  ";
$locale['global_126'] = "wiadomość";
$locale['global_127'] = "wiadomości";
$locale['global_128'] = "zgłoszenie";
$locale['global_129'] = "zgłoszenia";
// User Menu
$locale['UM060'] = "Login";
$locale['UM061'] = "Nazwa użytkownika";
$locale['UM061a'] = "Email";
$locale['UM061b'] = "Nazwa użytkownika lub email";
$locale['UM062'] = "Hasło";
$locale['UM063'] = "Zapamiętaj mnie na tym komputerze";
$locale['UM064'] = "Zaloguj";
$locale['UM065'] = "Nie masz jeszcze konta? [LINK]Zarejestruj się[/LINK].";
$locale['UM066'] = "Nie możesz się zalogować?\n Poproś o nowe hasło[LINK]Poproś o nowe hasłnowe hasło[/LINK].";
$locale['UM067'] = "(nie zalecane na komputerach publicznych)";
$locale['UM080'] = "Edytuj profil";
$locale['UM081'] = "Prywatne wiadomości";
$locale['UM082'] = "Lista użytkowników";
$locale['UM083'] = "Panel administratora";
$locale['UM084'] = "Wyloguj";
$locale['UM085'] = "Masz %u ";
$locale['UM086'] = "wiadomość";
$locale['UM087'] = "Wiadomości";
$locale['UM088'] = "Obserwowane tematy";
// Submit (news, link, article)
$locale['UM089'] = "Wyślij...";
$locale['UM090'] = "Wyślij Newsa";
$locale['UM091'] = "Wyślij Link";
$locale['UM092'] = "Wyślij Artykuł";
$locale['UM093'] = "Wyślij Zdjęcie";
$locale['UM094'] = "Wyślij Plik";
$locale['UM095'] = "Wyślij Blog";
$locale['UM102'] = "Wyślij FAQ";
// User Panel
$locale['UM096'] = "Witaj: ";
$locale['UM097'] = "Menu osobiste";
$locale['UM101'] = "Zmień język";
// Gauges
$locale['UM098'] = "PW Odebrane :";
$locale['UM099'] = "PW Wysłane :";
$locale['UM100'] = "PW Archiwum :";
// Keywords and Meta
$locale['tags'] = "Tagi";
// Captcha
$locale['global_150'] = "Kod weryfikacyjny:";
$locale['global_151'] = "Wprowadź kod weryfikacyjny:";
// Footer Counter
$locale['global_170'] = "unikalna wizyta";
$locale['global_171'] = "unikalnych wizyt";
$locale['global_172'] = "Czas generowania: %s sekund";
$locale['global_173'] = "Zapytań";
$locale['global_174'] = "Użyta pamięć";
$locale['global_175'] = "Średnio: %s sekund";
$locale['global_176'] = "Polityka Prywatności";
// Admin Navigation
$locale['global_180'] = "Admin Home";
$locale['global_181'] = "Return to Site";
$locale['global_182'] = "Admin Password not entered or incorrect.";
// Miscellaneous
$locale['global_190'] = "Maintenance Mode Activated";
$locale['global_191'] = "Your IP address is currently blacklisted.";
$locale['global_192'] = "Your login session has expired. Please log in again to proceed.";
$locale['global_193'] = "Could not set document cookie. Please make sure you have cookies enabled to be able to log in properly.";
$locale['global_194'] = "This account is currently suspended.";
$locale['global_195'] = "This account has not been activated.";
$locale['global_196'] = "Invalid username or password.";
$locale['global_197'] = "Please wait while we transfer you...\n\n[ [LINK]Or click here if you do not wish to wait[/LINK] ]";
$locale['global_198'] = "OSTRZEŻENIE: WYKRYTO INSTALATOR, PROSZĘ O NATYCHMIASTOWE USUNIĘCIE PLIKU INSTALL-PHP.";
$locale['global_199'] = "OSTRZEŻENIE: nie ustawiono hasła administratora, kliknij [LINK]Edytuj profil[/ LINK], aby go ustawić.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Szukaj";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Forum";
//Themes
$locale['global_210'] = "Skip to content";
$locale['global_300'] = "no theme found";
$locale['global_301'] = "We are really sorry but this page cannot be displayed. Due to some circumstances no site theme can be found.
 If you are a Site Administrator, please use your FTP client to upload any theme designed for PHP-Fusion 9 to the themes folder.
 After upload check in Theme Settings to see if the selected theme was correctly uploaded to your themes directory.
 Please note that the uploaded theme folder has to have the exact same name (including character case, which is important on Unix based servers)
 as chosen in Theme Settings page.\n\nIf you are regular member of this site, please contact the site\'s administrator via [SITE_EMAIL] e-mail and report this issue.";
$locale['global_302'] = "The Theme chosen in Main Settings does not exist or is incomplete!";
// JavaScript Not Enabled
$locale['global_303'] = "Oh no! Where's the JavaScript?\nYour Web browser does not have JavaScript enabled or does not support JavaScript.
Please enable JavaScript on your Web browser to properly view this Web site, or upgrade to a Web browser that does support JavaScript.";
// User Management
$locale['global_400'] = "suspended";
$locale['global_401'] = "Zablokowane";
$locale['global_402'] = "deactivated";
$locale['global_403'] = "account terminated";
$locale['global_404'] = "account anonymised";
$locale['global_405'] = "konto ukryte";
$locale['global_406'] = "This account has been banned for the following reason:";
$locale['global_407'] = "This account has been suspended until ";
$locale['global_408'] = " for the following reason:";
$locale['global_409'] = "This account has been banned for security reasons.";
$locale['global_410'] = "The reason for this is: ";
$locale['global_411'] = "This account has been cancelled.";
$locale['global_412'] = "This account has been anonymized, probably because of inactivity.";
// Flood control
$locale['global_440'] = "Automatic Ban by Flood Control";
$locale['global_441'] = "Your account on [SITENAME] has been banned";
$locale['global_442'] = "Witaj [USER_NAME],\n
Your account on [SITENAME] was caught posting too many items to the system in very short time from the IP [USER_IP], and have therefor been banned. This is done to prevent bots from submitting spam messages in rapid succession.\n
Please contact the site administrator at [SITE_EMAIL] to have your account restored or report if this was not you causing this security ban.\n\n
Pozdrawiamy,\n[SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Suspension automatically lifted by system";
$locale['global_451'] = "Suspension lifted at [SITENAME]";
$locale['global_452'] = "Witaj USER_NAME,\n
The suspension of your account at [SITEURL] has been lifted. Here are your login details:\n
Username: USER_NAME\nPassword: Hidden for security reasons\n
If you have forgot your password you can reset it via the following link: LOST_PASSWORD\n\n
Pozdrawiamy,\n[SITEUSERNAME]";
$locale['global_453'] = "Witaj USER_NAME,\nThe suspension of your account at [SITEURL] has been lifted.\n\n
Regards,\n[SITEUSERNAME]";
$locale['global_454'] = "Account reactivated at [SITENAME]";
$locale['global_455'] = "Witaj USER_NAME,\n
Last time you logged in your account was reactivated at [SITEURL] and your account is no longer marked as inactive.\n\n
Pozdrawiamy,\n[SITEUSERNAME]";
$locale['global_456'] = "New password notification for [SITENAME]";
$locale['global_457'] = "Cześć USER_NAME,
\n\nDla Twojego konta zostało ustawione nowe hasło w [SITENAME]. Sprawdź swoje nowe dane logowania:\n\n
Nazwa użytkownika: USER_NAME\nHasło: [PASSWORD]\n\nPozdrawiamy,\n[SITEUSERNAME]";
$locale['global_458'] = "New password has been set for USER_NAME";
$locale['global_459'] = "New password has been set for USER_NAME, and email was not sent. Please ensure to tell the user of the new details.";
// Function parseBajtyize()
$locale['global_460'] = "Puste";
$locale['global_461'] = "Bajty";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "You are being redirected to %s, please wait. If you're not redirected, click here.";
// Captcha Locales
$locale['global_600'] = "Kod weryfikacyjny";
$locale['global_601'] = "Musisz wprowadzić poprawnie kod weryfikacyjny";
$locale['recaptcha'] = "pl";
// Site links
$locale['global_700'] = "Pokaż więcej";
//Miscellaneous
$locale['global_900'] = "Unable to convert HEX to DEC";
$locale['global_901'] = "Insert Media";
//Language Selection
$locale['global_ML100'] = "Język:";
$locale['global_ML101'] = "- Wybierz język -";
$locale['global_ML102'] = "Język witryny";
$locale['global_ML103'] = "Przełącz język";
// Flood Control
$locale['flood'] = "You are barred to post until the flood period cooldown is over. Please wait for %s.";
$locale['no_image'] = "No Image";
$locale['send_message'] = "Send Message";
$locale['go_profile'] = "Go to %s Profile Page";
// Global one word locales
$locale['hello'] = "Witaj!";
$locale['goodbye'] = "Żegnaj!";
$locale['welcome'] = "Witamy ponownie";
$locale['home'] = "Strona głowna";
// Status
$locale['error'] = "Błąd!";
$locale['success'] = "Sukces!";
$locale['enable'] = "Włączone";
$locale['disable'] = "Wyłączone";
$locale['can'] = "can";
$locale['cannot'] = "cannot";
$locale['no'] = "Nie";
$locale['yes'] = "Tak";
$locale['off'] = "Wyłączone";
$locale['on'] = "Włączone";
$locale['or'] = "lub";
$locale['by'] = "przez";
$locale['in'] = "w";
$locale['of'] = "z";
$locale['and'] = "i";
$locale['na'] = "Brak informacji";
$locale['joined'] = "Joined since: ";
// Navigation
$locale['next'] = "Dalej";
$locale['previous'] = "Poprzedni";
$locale['back'] = "Powrót";
$locale['forward'] = "Forward";
$locale['go'] = "Przejdź";
$locale['cancel'] = "Anuluj";
$locale['clear'] = "Wyczyść";
$locale['move'] = "Przenieś";
$locale['move_up'] = "Przenieś w górę";
$locale['move_down'] = "Przenieś w dół";
$locale['load_more'] = "Load more Items";
$locale['load_end'] = "Load from Beginning";
// Actions
$locale['add'] = "Add";
$locale['save'] = "Zapisz";
$locale['save_changes'] = "Save Changes";
$locale['save_and_close'] = "Zapisz i zamknij";
$locale['confirm'] = "Confirm";
$locale['update'] = "Update";
$locale['updated'] = "Updated";
$locale['remove'] = "RePrzenieś";
$locale['delete'] = "Usuń";
$locale['search'] = "Szukaj";
$locale['help'] = "Pomoc";
$locale['register'] = "Zarejestruj się";
$locale['ban'] = "Ban";
$locale['reactivate'] = "Reactivate";
$locale['user'] = "Użytkownik";
$locale['promote'] = "Promote";
$locale['show'] = "Pokaż";
$locale['actions'] = "Działania";
$locale['language'] = "Język";
$locale['loading'] = "Ładowanie...";
// Persons & Identifiers
$locale['you'] = "You";
$locale['me'] = "Me";
$locale['they'] = "They";
$locale['we'] = "We";
$locale['us'] = "Us";
$locale['he'] = "He";
$locale['she'] = "She";
$locale['it'] = "It";
//Tables
$locale['order'] = "Order";
$locale['sort'] = "Sortuj";
$locale['id'] = "ID";
$locale['title'] = "Tytuł";
$locale['rights'] = "Rights";
$locale['info'] = "Info";
$locale['image'] = "Grafika";
// Forms
$locale['choose'] = "Proszę wybrać jedną...";
$locale['no_opts'] = "Brak wyboru";
$locale['root'] = "Jako rodzic";
$locale['choose-Użytkownik'] = "Wybierz użytkownika...";
$locale['choose-location'] = "Proszę wybrać lokalizację";
$locale['parent'] = "Utwórz jako nowy rodzic...";
$locale['item_order'] = "Item Ordering";
$locale['status'] = "Status";
$locale['note'] = "Make a note of this item";
$locale['publish'] = "Opublikuj";
$locale['unpublish'] = "Cofnij publikacje";
$locale['published'] = "Opublikowane";
$locale['unpublished'] = "Nieopublikowane";
$locale['sticky'] = "Przypięty";
$locale['unsticky'] = "Unsticky";
$locale['draft'] = "Szkic";
$locale['settings'] = "Ustawienia";
$locale['posted'] = "posted";
$locale['profile'] = "Profil";
$locale['edit'] = "Edytuj";
$locale['qedit'] = "Szybka edycja";
$locale['view'] = "Zobacz";
$locale['login'] = "Zaloguj się";
$locale['logout'] = "Wyloguj";
$locale['admin-logout'] = "Wyloguj z panelu";
$locale['message'] = "Prywatne wiadomości";
$locale['logged'] = "Zalogowano jako ";
$locale['version'] = "Wersja ";
$locale['browse'] = "Przeglądaj ...";
$locale['close'] = "Zamknij";
$locale['nopreview'] = "Nie ma nic do podglądu";
$locale['mark_as'] = "Oznacz jako";
$locale['preview'] = "Podgląd";
$locale['custom'] = "Niestandardowe";
$locale['submit'] = "Wślij";
// Alignment
$locale['left'] = "Lewa";
$locale['center'] = "Wyśrodkuj";
$locale['right'] = "Prawa";
// Comments and ratings
$locale['comments'] = "Komentarze";
$locale['ratings'] = "Oceny";
$locale['comments_ratings'] = "Komentarze i oceny";
$locale['user_account'] = "Konto użytkownika";
$locale['about'] = "O mnie";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "zgłoszenie|zgłoszenia";
$locale['fmt_article'] = "artykuł|artykuły";
$locale['fmt_blog'] = "blog|blogi";
$locale['fmt_comment'] = "komentarz|komentarze";
$locale['fmt_vote'] = "głos|głosy";
$locale['fmt_rating'] = "ocena|oceny";
$locale['fmt_day'] = "dzień|dni";
$locale['fmt_download'] = "pobranie|pobrania";
$locale['fmt_follower'] = "obserwujący|obserwujących";
$locale['fmt_forum'] = "forum|fora";
$locale['fmt_guest'] = "gość|goście";
$locale['fmt_hour'] = "godzina|godziny";
$locale['fmt_item'] = "element|elementy";
$locale['fmt_member'] = "użytkownik|użytkownicy";
$locale['fmt_message'] = "wiadomość|wiadomości";
$locale['fmt_minute'] = "minuta|minuty";
$locale['fmt_month'] = "miesiąc|miesiące";
$locale['fmt_news'] = "news|news";
$locale['fmt_photo'] = "grafika|grafiki";
$locale['fmt_post'] = "post|posty";
$locale['fmt_question'] = "pytanie|pytania";
$locale['fmt_read'] = "czytanie|czytania";
$locale['fmt_second'] = "sekunda|sekundy";
$locale['fmt_shouts'] = "wpis|wpisy";
$locale['fmt_thread'] = "wątek|wątki";
$locale['fmt_user'] = "użytkownik|użytkownicy";
$locale['fmt_views'] = "wyświetlenie|wyświetlenia";
$locale['fmt_weblink'] = "link|linki";
$locale['fmt_week'] = "tydzień|tygodnie";
$locale['fmt_year'] = "rok|lata";
$locale['fmt_points'] = "punkt|punkty";
$locale['fmt_admin'] = "admin|admini";
$locale['fmt_group'] = "grupa|grupy";
$locale['fmt_category'] = "kategoria|kategorie";
$locale['fmt_review'] = "review|reviews";
$locale['fmt_infusion'] = "infusion|infusions";
// include Defender locales
include_once __DIR__."/defender.php";
