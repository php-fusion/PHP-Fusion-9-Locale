<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Slovak/global.php
| Author: RobiNN
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
/**
 * @locale charset           ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region            ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale tinymce           refer to path includes/jscripts/tinymce/langs/{value}.js
 * @locale select2           refer to path includes/dynamics/select2/select2_locale_{value}.js
 * @locale phpmailer         refer to path includes/classes/PHPMailer/language/phpmailer.lang-{value}.php
 * @locale password_strength refer to path includes/dynamics/password/lang/{value}.js
 */
setlocale(LC_ALL, "sk_SK.utf8", "sk-SK", "slovak");
$locale['charset'] = "utf-8";
$locale['region'] = "SK";
$locale['xml_lang'] = "sk";
$locale['short_lang_name'] = "sk";
$locale['tinymce'] = "sk";
$locale['select2'] = "sk";
$locale['phpmailer'] = "sk";
$locale['datepicker'] = "sk";
$locale['datepicker_js'] = "M-DD-YYYY H:mm:ss";
$locale['datepicker_php'] = "m-d-Y H:i:s";
$locale['password_strength'] = "sk";
$locale['date_day'] = "%d %b";
$locale['text-direction'] = "ltr";
// Full & Short Months
$locale['months'] = "&nbsp;|Január|Február|Marec|Apríl|Máj|Jún|Júl|August|September|Október|November|December";
$locale['shortmonths'] = "&nbsp;|Jan|Feb|Mar|Apr|Máj|Jún|Júl|Aug|Sep|Okt|Nov|Dec";
$locale['weekdays'] = "Nedeľa|Pondelok|Utorok|Streda|Štvrtok|Piatok|Sobota";
// Timers
$locale['year'] = "rok";
$locale['year_a'] = "roky";
$locale['month'] = "mesiac";
$locale['month_a'] = "mesiace";
$locale['week'] = "týždeň";
$locale['week_a'] = "týždne";
$locale['day'] = "deň";
$locale['day_a'] = "dní";
$locale['hour'] = "hodina";
$locale['hour_a'] = "hodín";
$locale['minute'] = "minúta";
$locale['minute_a'] = "minút";
$locale['second'] = "sekunda";
$locale['second_a'] = "sekúnd";
$locale['just_now'] = "práve teraz";
$locale['now'] = 'teraz';
$locale['ago'] = "pred";
// Geo
$locale['street1'] = "Ulica 1";
$locale['street2'] = "Ulica 2";
$locale['city'] = "Mesto";
$locale['postcode'] = "PSČ";
$locale['sel_country'] = "Vyberte krajinu";
$locale['sel_state'] = "Vyberte oblasť";
$locale['sel_user'] = "Zadajte prosím užívateľské meno";
$locale['add_language'] = "Pridať jazykové preklady";
$locale['add_lang'] = "Pridať %s";
$locale['other_states'] = "Iné štáty";
// Name
$locale['name'] = "Celé meno";
$locale['username_pretext'] = "Vaše verejné užívateľské meno je rovnaké ako vaša adresa profilu používateľa, umiestnená na adrese: %s %s";
$locale['first_name'] = "Meno";
$locale['middle_name'] = "Stredné meno";
$locale['last_name'] = "Priezvisko";
// Documents
$locale['doc_type'] = "Typ dokumentu";
$locale['doc_series'] = "Série";
$locale['doc_number'] = "Číslo";
$locale['doc_authority'] = "Autorita";
$locale['doc_date_issue'] = "Dátum vydania";
$locale['doc_date_expire'] = "Dátum exspirovania";
// Standard User Levels
$locale['user0'] = "Verejnosť";
$locale['user1'] = "Člen";
$locale['user2'] = "Administrátor";
$locale['user3'] = "Hlavný administrátor";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Hosť";
$locale['user_anonymous'] = "Anonym";
$locale['genitive'] = "%s %s";
// Standard User Status
$locale['status0'] = "Aktivovaný";
$locale['status1'] = "Zabanovaný";
$locale['status2'] = "Neaktivovaný";
$locale['status3'] = "Pozastavený";
$locale['status4'] = "Bezpečnostný BAN";
$locale['status5'] = "Zrušený";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktivovaný";
$locale['status8'] = "Neaktívny";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderátor";
// Navigation
$locale['global_001'] = "Navigácia";
$locale['global_002'] = "Neboli pridané žiadne odkazy";
$locale['global_003'] = "Nič na zobrazenie";
// Users Online
$locale['global_010'] = "Kto je online";
$locale['global_011'] = "Hostí online";
$locale['global_012'] = "Užívateľov online";
$locale['global_013'] = "Žiadny užívateľ nie je online";
$locale['global_014'] = "Celkom členov";
$locale['global_015'] = "Neaktivovaní členovia";
$locale['global_016'] = "Najnovší člen";
$locale['global_017'] = "Prepnúť navigáciu";
// Forum Side panel
$locale['global_020'] = "Témy fóra";
$locale['global_021'] = "Najnovšie diskusie";
$locale['global_022'] = "Najhorúcejšie témy";
$locale['global_023'] = "Žiadne témy";
$locale['global_024'] = "Participované diskusie";
$locale['global_027'] = "Nezodpovedané témy";
$locale['global_028'] = "Nevyriešené otázky";
// Comments Side panel
$locale['global_025'] = "Najnovšie komentáre";
$locale['global_026'] = "Žiadne komentáre";
// Articles Side panel
$locale['global_030'] = "Najnovšie články";
$locale['global_031'] = "Neboli pridané žiadne články";
// Downloads Side panel
$locale['global_032'] = "Najnovšie súbory na stiahnutie";
$locale['global_033'] = "Žiadne súbory na stiahnutie";
// Welcome panel
$locale['global_035'] = "Vitajte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Najnovšie aktívne vlákna vo fóre";
$locale['global_041'] = "Moje vlákna";
$locale['global_042'] = "Moje najnovšie vlákna";
$locale['global_043'] = "Moje posledné príspevky";
$locale['global_044'] = "Téma";
$locale['global_045'] = "Zobrazení";
$locale['global_046'] = "Odpovede";
$locale['global_047'] = "Posledný príspevok";
$locale['global_048'] = "Fórum";
$locale['global_049'] = "Pridané";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Presunul";
$locale['global_053'] = "Nezaložili ste ešte žiadnu tému.";
$locale['global_054'] = "Nezverejnili ste ešte žiadne príspevky vo fóre.";
$locale['global_055'] = "Bolo napísaných %u nových príspevkov, od vašej poslednej návštevy.";
$locale['global_056'] = "Moje sledované vlákna";
$locale['global_057'] = "Možnosti";
$locale['global_058'] = "Zastaviť sledovanie";
$locale['global_059'] = "Nemáte žiadne sledované vlákna.";
$locale['global_060'] = "Zastaviť sledovanie vlákien?";
// Blog, News & Articles
$locale['global_070'] = "Pridal/a ";
$locale['global_070b'] = "Zobraziť všetky príspevky od %s";
$locale['global_071'] = "dňa ";
$locale['global_071b'] = "Autor";
$locale['global_072'] = "Pokračovať v čítaní";
$locale['global_073'] = " Komentáre";
$locale['global_073b'] = " Komentár";
$locale['global_074'] = " prečítaní";
$locale['global_074b'] = " prečítanie";
$locale['global_075'] = "Tlačiť";
$locale['print'] = "Tlačiť";
$locale['global_076'] = "Upraviť";
$locale['global_077'] = "Novinky";
$locale['global_078'] = "Žiadne novinky ešte neboli napísané";
$locale['global_079'] = "V ";
$locale['global_080'] = "Nekategorizované";
$locale['global_081'] = "Domovská stránka správ";
$locale['global_082'] = "Novinky";
$locale['global_083'] = "Naposledy aktualizované";
$locale['global_084'] = "Kategórie správ";
$locale['global_085'] = "Všetky ostatné kategórie";
$locale['global_086'] = "Najaktuálnejšie správy";
$locale['global_087'] = "Najviac komentované správy";
$locale['global_088'] = "Najviac hodnotené správy";
$locale['global_089'] = "Buďte prví, kto napíše komentár na %s";
$locale['global_089a'] = "Buďte prví, kto ohodnotí toto %s";
$locale['global_089b'] = "Náhľad";
$locale['global_089c'] = "Zoznam";
// Page Navigation
$locale['global_090'] = "Späť";
$locale['global_091'] = "Ďalej";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " z ";
$locale['global_094'] = " z celkových ";
// Guest User Menu
$locale['global_100'] = "Prihlásenie";
$locale['global_101'] = "Meno";
$locale['global_101a'] = "Zadajte užívateľské meno";
$locale['global_101b'] = "Zadajte e-mail";
$locale['global_101c'] = "Zadajte e-mail alebo užívateľské meno";
$locale['global_102'] = "Heslo";
$locale['global_103'] = "Neodhlasovať";
$locale['global_104'] = "Prihlásiť";
$locale['global_105'] = "Ešte nie ste členom? [LINK]Kliknite sem[/LINK] a zaregistrujte sa.";
$locale['global_106'] = "[LINK]Zabudli ste heslo?[/LINK]";
$locale['global_107'] = "Registrácia";
$locale['global_108'] = "Zabudnuté heslo";
$locale['global_109'] = "Prihlásiť sa";
// Member User Menu
$locale['global_120'] = "Upraviť profil";
$locale['global_121'] = "Súkromné správy";
$locale['global_122'] = "Užívatelia";
$locale['global_123'] = "Administrácia";
$locale['global_124'] = "Odhlásiť";
$locale['global_125'] = "Máte %u novú/é ";
$locale['global_126'] = "správu";
$locale['global_127'] = "správy";
$locale['global_128'] = "príspevok na schválenie";
$locale['global_129'] = "príspevky na schválenie";
// User Menu
$locale['UM060'] = "Prihlásiť sa";
$locale['UM061'] = "Užívateľské meno";
$locale['UM061a'] = "E-mail";
$locale['UM061b'] = "Užívateľské meno alebo e-mail";
$locale['UM062'] = "Heslo";
$locale['UM063'] = "Pamätať si ma na tomto počítači";
$locale['UM064'] = "Prihlásiť sa";
$locale['UM065'] = "Ešte nie ste členom? [LINK]Kliknite sem[/LINK] a zaregistrujte sa.";
$locale['UM066'] = "Zabudli ste heslo?<br/>[LINK]Požiadať o nové[/LINK].";
$locale['UM067'] = "(neodporúča na verejnom alebo zdieľanom počítači)";
$locale['UM080'] = "Upraviť profil";
$locale['UM081'] = "Súkromné správy";
$locale['UM082'] = "Zoznam členov";
$locale['UM083'] = "Administrácia";
$locale['UM084'] = "Odhlásiť sa";
$locale['UM085'] = "Máte %u novú/é ";
$locale['UM086'] = "správu";
$locale['UM087'] = "správy";
$locale['UM088'] = "Sledované vlákna";
// Submit (news, link, article)
$locale['UM089'] = "Pridať...";
$locale['UM090'] = "Pridať novinku";
$locale['UM091'] = "Pridať odkaz";
$locale['UM092'] = "Pridať článok";
$locale['UM093'] = "Pridať fotku";
$locale['UM094'] = "Pridať súbor na stiahnutie";
$locale['UM095'] = "Pridať blog";
$locale['UM102'] = "Pridať FAQ";
// User Panel
$locale['UM096'] = "Vitaj ";
$locale['UM097'] = "Osobné menu";
$locale['UM101'] = "Prepnúť jazyk";
// Gauges
$locale['UM098'] = "Doručená pošta: ";
$locale['UM099'] = "Odoslaná pošta: ";
$locale['UM100'] = "Archív: ";
// Keywords and Meta
$locale['tags'] = "Tagy";
// Captcha
$locale['global_150'] = "Validačný kód:";
$locale['global_151'] = "Vložte validačný kód:";
// Footer Counter
$locale['global_170'] = "unikátne návštevy";
$locale['global_171'] = "unikátnych návštev";
$locale['global_172'] = "Vygenerované za: %s sekúnd";
$locale['global_173'] = "Dotazy";
$locale['global_174'] = "Použitá pamäť";
$locale['global_175'] = "Priemerne za: %s sekúnd";
$locale['global_176'] = "Zásady ochrany osobných údajov";
// Admin Navigation
$locale['global_180'] = "Administrácia";
$locale['global_181'] = "Späť na stránku";
$locale['global_182'] = "Heslo správcu nebolo zadané alebo je nesprávne.";
// Miscellaneous
$locale['global_190'] = "Režim údržby bol aktivovaný";
$locale['global_191'] = "Z tejto IP adresy nemáte povolenie pristupovať na túto stránku.";
$locale['global_192'] = "Platnosť vašej prihlasovacej relácie uplynula. Ak chcete pokračovať, prihláste sa znova.";
$locale['global_193'] = "Nepodarilo sa nastaviť súbor cookie. Uistite sa, že máte povolené súbory cookie, aby ste sa mohli správne prihlásiť.";
$locale['global_194'] = "Tento účet je momentálne pozastavený.";
$locale['global_195'] = "Tento účet nebol aktivovaný.";
$locale['global_196'] = "Nesprávne meno alebo heslo.";
$locale['global_197'] = "Počkajte prosím, prihlasovanie môže chvíľu trvať...<br/><br/>[LINK]Alebo kliknite sem, ak nechcete čakať[/LINK]";
$locale['global_198'] = "UPOZORNENIE: INŠTALAČNÝ SÚBOR BOL DETEKOVANÝ, PROSÍM VYMAŽTE INSTALL.PHP.";
$locale['global_199'] = "UPOZORNENIE: heslo administrátora nie je nastavené, kliknite na [LINK]Upraviť profil[/LINK] a nastavte ho.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Vyhľadávanie";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Fórum";
//Themes
$locale['global_210'] = "Prejsť na obsah";
$locale['global_300'] = "nebola nájdená žiadna téma";
$locale['global_301'] = "Je nám ľúto, ale táto stránka sa nedá zobraziť. Z nejakých okolností nie je možné nájsť tému webu.
 Ak ste administrátorom stráky, použite svoj FTP klient na nahrávanie akejkoľvek témy určenej pre PHP-Fusion 9 do priečinka tém.
 Po nahraní skontrolujte nastavenia témy, či ste správne nahrali vybranú tému do priečinka tém.
 Upozorňujeme, že nahraná zložka témy musí mať presne rovnaký názov (vrátane znakovej sady, ktorá je dôležitá na Unixových serveroch)
 ako je vybraná na stránke Nastavenie tém.<br/><br/>Ak ste pravidelný člen tejto stránky, prosím kontaktujte administrátora cez [SITE_EMAIL] e-mail a nahláste tento problém.";
$locale['global_302'] = "Téma vybraná v Hlavných nastaveniach neexistuje alebo je neúplná!";
// JavaScript Not Enabled
$locale['global_303'] = "Ale nie! Kde je JavaScript?<br/>Váš webový prehliadač nemá povolený JavaScript alebo nepodporuje JavaScript.
Ak chcete správne zobraziť túto webovú lokalitu, povoľte JavaScript vo svojom webovom prehliadači, alebo inovujte na webový prehliadač, ktorý podporuje JavaScript.";
// User Management
$locale['global_400'] = "suspendovaný";
$locale['global_401'] = "zabanovaný";
$locale['global_402'] = "deaktivovaný";
$locale['global_403'] = "zrušený účet";
$locale['global_404'] = "utajený účet";
$locale['global_405'] = "utajený užívateľ";
$locale['global_406'] = "Tento účet je zabanovaný z tohto dôvodu:";
$locale['global_407'] = "Tento účet je pozastavený až do ";
$locale['global_408'] = " z tohto dôvodu:";
$locale['global_409'] = "Tento účet bol z bezpečnostných dôvodov zabanovaný.";
$locale['global_410'] = "Dôvod pre toto je: ";
$locale['global_411'] = "Tento účet bol zrušený.";
$locale['global_412'] = "Tento účet bol anonymizovaný, pravdepodobne kvôli nečinnosti.";
// Flood control
$locale['global_440'] = "Automatický BAN od kontroly pretečenia";
$locale['global_441'] = "Váš účet na [SITENAME] bol zabanovaný";
$locale['global_442'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] bol pre priveľa príspevkov v krátkom čase z IP [USER_IP], pozastavený. Jedná sa o prevenciu pred SPAM-botmi s množstvom príspevkov.<br/>
Prosím kontaktujte hlavného administrátora cez [SITE_EMAIL] na obnovenie účtu, ak sa nejedná o porušenie bezpečnosti.<br/>
S pozdravom,<br/>[SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Dočasné pozastavenie automaticky zrušené systémom";
$locale['global_451'] = "Dočasné pozastavenie zrušené na [SITENAME]";
$locale['global_452'] = "Ahoj USER_NAME,<br/>
Dočasné pozastavenie vášho účtu na [SITEURL] bolo zrušené. Tu sú vaše prihlasovacie údaje:<br/>
Užívateľské meno: USER_NAME<br/>Heslo: Skryté z bezpečnostných dôvodov<br/>
Ak ste zabudli svoje heslo, môžete ho obnoviť pomocou nasledujúceho odkazu: LOST_PASSWORD<br/>
S pozdravom,<br/>[SITEUSERNAME]";
$locale['global_453'] = "Ahoj USER_NAME,<br/>Dočasné pozastavenie vášho účtu na [SITEURL] bolo zrušené.<br/>
S pozdravom,<br/>[SITEUSERNAME]";
$locale['global_454'] = "Účet bol znova aktivovaný na [SITENAME]";
$locale['global_455'] = "Ahoj USER_NAME,<br/>
Posledne ste boli prihlásený v obnovenom účte na [SITEURL] a váš účet už nie je označený ako neaktívny.<br/>
S pozdravom,<br/>[SITEUSERNAME]";
$locale['global_456'] = "Oznámenie nového hesla pre [SITENAME]";
$locale['global_457'] = "Ahoj USER_NAME,
<br/>Nové heslo bolo pre váš účet nastavené na [SITENAME]. Nájdete tu priložené nové prihlasovacie údaje:<br/>
Meno: USER_NAME<br/>heslo: [PASSWORD]<br/>S pozdravom,<br/>[SITEUSERNAME]";
$locale['global_458'] = "Bolo nastavené nové heslo USER_NAME";
$locale['global_459'] = "Bolo nastavené nové heslo USER_NAME, a e-mail nebol odoslaný. Dovoľte, aby ste používateľovi oznámili nové podrobnosti.";
// Function parsebytesize()
$locale['global_460'] = "Prázdny";
$locale['global_461'] = "Bajtov";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Budete presmerovaný na %s, prosím čakajte. Ak ste neboli presmerovaný, kliknite sem.";
// Captcha Locales
$locale['global_600'] = "Validačný kód";
$locale['global_601'] = "Musíte zadať správny overovací kód";
$locale['recaptcha'] = "sk";
// Site links
$locale['global_700'] = "Zobraziť viac";
//Miscellaneous
$locale['global_900'] = "Nepodarilo sa previesť HEX na DEC";
$locale['global_901'] = "Vložte médiá";
//Language Selection
$locale['global_ML100'] = "Jazyk:";
$locale['global_ML101'] = "- Zvoľte jazyk -";
$locale['global_ML102'] = "Jazyk stránky";
$locale['global_ML103'] = "Prepnúť jazyk";
// Flood Control
$locale['flood'] = "Je zakázané odoslať príspevok, dokedy nebude ukončené pretečenie. Počkajte prosím %s.";
$locale['no_image'] = "Žiadny obrázok";
$locale['send_message'] = "Poslať správu";
$locale['go_profile'] = "Prejsť na profil %s";
// Global one word locales
$locale['hello'] = "Ahoj!";
$locale['goodbye'] = "Zbohom!";
$locale['welcome'] = "Vitajte späť";
$locale['home'] = "Domov";
// Status
$locale['error'] = "Chyba!";
$locale['success'] = "Úspešne!";
$locale['enable'] = "Povoliť";
$locale['disable'] = "Zakázať";
$locale['can'] = "môžete";
$locale['cannot'] = "nemôžete";
$locale['no'] = "Nie";
$locale['yes'] = "Áno";
$locale['off'] = "Vyp.";
$locale['on'] = "Zap.";
$locale['or'] = "alebo";
$locale['by'] = "od";
$locale['in'] = "v";
$locale['of'] = "z";
$locale['and'] = "a";
$locale['na'] = "Nie sú k dispozícii žiadne informácie";
$locale['joined'] = "Pripojený od: ";
// Navigation
$locale['next'] = "Ďalšie";
$locale['previous'] = "Predchádzajúce";
$locale['back'] = "Späť";
$locale['forward'] = "Dopredu";
$locale['go'] = "Ísť";
$locale['cancel'] = "Zrušiť";
$locale['clear'] = "Vyčistiť";
$locale['move'] = "Hýbať";
$locale['move_up'] = "Posunúť nahor";
$locale['move_down'] = "Posunúť nadol";
$locale['load_more'] = "Načítať ďalšie položky";
$locale['load_end'] = "Načítať od začiatku";
// Actions
$locale['add'] = "Pridať";
$locale['save'] = "Uložiť";
$locale['save_changes'] = "Uložiť zmeny";
$locale['save_and_close'] = "Uložiť a zatvoriť";
$locale['confirm'] = "Potvrdiť";
$locale['update'] = "Aktualizovať";
$locale['updated'] = "Aktualizované";
$locale['remove'] = "Odstrániť";
$locale['delete'] = "Vymazať";
$locale['search'] = "Hľadať";
$locale['help'] = "Pomoc";
$locale['register'] = "Registrovať";
$locale['ban'] = "Ban";
$locale['reactivate'] = "Reaktivovať";
$locale['user'] = "Užívateľ";
$locale['promote'] = "Podporovať";
$locale['show'] = "Zobraziť";
$locale['actions'] = "Akcie";
$locale['language'] = "Jazyk";
$locale['loading'] = "Načítava...";
// Persons & Identifiers
$locale['you'] = "Ty";
$locale['me'] = "Ja";
$locale['they'] = "Oni";
$locale['we'] = "My";
$locale['us'] = "Nás";
$locale['he'] = "On";
$locale['she'] = "Ona";
$locale['it'] = "Ono";
//Tables
$locale['order'] = "Poradie";
$locale['sort'] = "Zoradiť";
$locale['id'] = "ID";
$locale['title'] = "Nadpis";
$locale['rights'] = "Práva";
$locale['info'] = "Info";
$locale['image'] = "Obrázok";
// Forms
$locale['choose'] = "Prosím, vyberte jedno...";
$locale['no_opts'] = "Žiadny výber";
$locale['root'] = "Ako rodič";
$locale['choose-user'] = "Prosím, vyberte užívateľa..";
$locale['choose-location'] = "Prosím, vyberte miesto";
$locale['parent'] = "Vytvoriť ako nový rodič..";
$locale['item_order'] = "Zoradenie položiek";
$locale['status'] = "Status";
$locale['note'] = "Poznačte si túto položku";
$locale['publish'] = "Publikovať";
$locale['unpublish'] = "Nepublikovať";
$locale['sticky'] = "Pripnúť";
$locale['unsticky'] = "Odopnúť";
$locale['draft'] = "Koncept";
$locale['settings'] = "Nastavenia";
$locale['posted'] = "publikované";
$locale['profile'] = "Profil";
$locale['edit'] = "Upraviť";
$locale['qedit'] = "Rýchla úprava";
$locale['view'] = "Zobraziť";
$locale['login'] = "Prihlásiť sa";
$locale['logout'] = "Odhlásiť sa";
$locale['admin-logout'] = "Odhlásenie správcu";
$locale['message'] = "Súkromné správy";
$locale['logged'] = "Prihlásený ako ";
$locale['version'] = "Verzia ";
$locale['browse'] = "Prezerať...";
$locale['close'] = "Zatvoriť";
$locale['nopreview'] = "Náhľad nie je k dispozícii";
$locale['mark_as'] = "Označiť ako";
$locale['preview'] = "Náhľad";
$locale['custom'] = "Vlastné";
$locale['submit'] = "Odoslať";
// Alignment
$locale['left'] = "Vľavo";
$locale['center'] = "Stred";
$locale['right'] = "Vpravo";
// Comments and ratings
$locale['comments'] = "Komentáre";
$locale['ratings'] = "Hodnotenie";
$locale['comments_ratings'] = "Komentáre a hodnotenie";
$locale['user_account'] = "Užívateľský účet";
$locale['about'] = "O nás";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "predloženie|predloženia|predložení";
$locale['fmt_article'] = "článok|články|článkov";
$locale['fmt_blog'] = "blog|blogy|blogov";
$locale['fmt_comment'] = "komentár|komentáre|komentárov";
$locale['fmt_vote'] = "hlas|hlasy|hlasov";
$locale['fmt_rating'] = "hodnotenie|hodnotenia|hodnotení";
$locale['fmt_day'] = "deň|dni|dní";
$locale['fmt_download'] = "stiahnutie|stiahnutia|stiahnutí";
$locale['fmt_follower'] = "sledovateľ|sledovatelia|sledovateľov";
$locale['fmt_forum'] = "fórum|fóra|fór";
$locale['fmt_guest'] = "hosť|hostia|hostí";
$locale['fmt_hour'] = "hodina|hodiny|hodín";
$locale['fmt_item'] = "položka|položky|položiek";
$locale['fmt_member'] = "člen|členovia|členov";
$locale['fmt_message'] = "správa|správy|správ";
$locale['fmt_minute'] = "minúta|minúty|minút";
$locale['fmt_month'] = "mesiac|mesiace|mesiacov";
$locale['fmt_news'] = "novinka|novinky|noviniek";
$locale['fmt_photo'] = "fotka|fotky|fotiek";
$locale['fmt_post'] = "príspevok|príspevky|príspevkov";
$locale['fmt_question'] = "otázka|otázky|otáziek";
$locale['fmt_read'] = "prečítanie|prečítania|prečítaní";
$locale['fmt_second'] = "sekunda|sekundy|sekúnd";
$locale['fmt_shouts'] = "výkrik|výkriky|výkrikov";
$locale['fmt_thread'] = "téma|témy|tém";
$locale['fmt_user'] = "užívateľ|užívatelia|užívateľov";
$locale['fmt_views'] = "zobrazenie|zobrazenia|zobrazení";
$locale['fmt_weblink'] = "odkaz|odkazy|odkazov";
$locale['fmt_week'] = "týždeň|týždne|týždňov";
$locale['fmt_year'] = "rok|roky|rokov";
$locale['fmt_points'] = "bod|body|bodov";
$locale['fmt_admin'] = "admin|admini|adminov";
$locale['fmt_group'] = "skupina|skupiny|skupín";
$locale['fmt_category'] = "kategória|kategórie|kategórií";
$locale['fmt_review'] = "recenzia|recenzie|recenzií";
// include Defender locales
include __DIR__."/defender.php";
