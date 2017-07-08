<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Slovak/setup.php
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
$locale['setup_0000'] = "PHP-Fusion - Inštalácia";
$locale['setup_0002'] = "Vitajte v inštalácii PHP-Fusion";
$locale['setup_0003'] = "Inštalačný sprievodca vás prevedie krokmi potrebnými na inštaláciu PHP-Fusion CMS na Váš server. Ak potrebujete ďalšiu pomoc, prosím skontrolujte našu <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=216' target='_blank'>Online dokumentáciu inštalácie</a>.";
$locale['setup_0005'] = " Prečítal som a súhlasim s PHP-Fusion <a href='https://php-fusion.co.uk/license/' target='_blank'>podmienkami používania</a>";
$locale['setup_0006'] = "PHP-Fusion 9 vyžaduje minimálne PHP 5.5.9. Pre viac informácií si pozrite <a href=\"https://www.php-fusion.co.uk/requirements\">systémové požiadavky</a>.";
$locale['setup_0007'] = "Systémy s nainštalovaným OPCache musia mať povolené <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a>.";
$locale['setup_5000'] = "Aby ste mohli používať PHP-Fusion, musíte skontrolovať a súhlasiť s podmienkami PHP-Fusion.";
$locale['setup_0010'] = "Aktuálna verzia zostavy: ";
$locale['setup_0011'] = "sk";
$locale['setup_0012'] = "utf-8";
$locale['setup_0020'] = "Aktualizácia PHP-Fusion";
$locale['setup_0022'] = "Vitajte v aktualizačnej službe PHP-Fusion";
$locale['setup_0023'] = "Služba inovácií vás prevedie krokmi potrebnými na inováciu PHP-Fusion CMS na váš server. Postupujte podľa týchto krokov a overte si všetky požadované informácie.";
$locale['setup_0050'] = "Webový server";
$locale['setup_0051'] = "PHP verzia";
$locale['setup_0052'] = "Rozširenia PHP";
$locale['setup_0053'] = "Podpora OPCache";
$locale['setup_0054'] = "Podpora databázy PDO";
$locale['setup_0055'] = "Obmedzenie pamäte PHP";
$locale['setup_0056'] = "Kontrola požiadaviek súborov";
$locale['setup_0101'] = "Úvod";
$locale['setup_0102'] = "Diagnostika súborov a priečinkov";
$locale['setup_0103'] = "Nastavenia databázy";
$locale['setup_0104'] = "Konfigurácia / Nastavenie databázy";
$locale['setup_0105'] = "Konfigurácia jadra systému";
$locale['setup_0106'] = "Primárne podrobnosti admina";
$locale['setup_0107'] = "Finálne nastavenia";
$locale['setup_0109'] = "Minimálna verzia Apache potrebná na spustenie PHP-Fusion bez povoleného mod_rewrite je 2.2.16.";
$locale['setup_0110'] = "Kvôli nastaveniam Servertokenov v httpd.conf nie je možné určiť verziu Apache bez mod_rewrite, je potrebná minimálna verzia 2.2.16.";
$locale['setup_0112'] = "Funkcia phpinfo() bola z bezpečnostných dôvodov zakázaná. Ak chcete zobraziť informácie o vašom serveri phpinfo(), zmeňte svoje nastavenia PHP alebo kontaktujte svojho správcu servera.";
$locale['setup_0113'] = "Vaša PHP inštalácia je príliš stará. PHP-Fusion vyžaduje minimálne 5.5.21. PHP verzie vyššie ako 5.6.5 alebo 5.5.21 poskytujú zabudovanú ochranu proti SQL injection pre mysql databázy. Odporúča sa aktualizovať.";
$locale['setup_0114'] = "PHP-Fusion vyžaduje, aby ste povolili rozšírenie PHP v nasledujúcom zozname";
$locale['setup_0115'] = "Povolené";
$locale['setup_0115a'] = "Nepovolené";
$locale['setup_0116'] = "PHP OPCache môže výrazne zlepšiť rýchlosť vášho webu. Je <strong>vysoko odporúčané</strong> mať <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPcache</a> nainštalované na serveri.";
$locale['setup_0118'] = "Nezdá sa, že váš webový server podporuje PDO (PHP Data Objects). Spýtajte sa svojho poskytovateľa web hostingu, či podporuje natívne rozšírenie PDO.";
$locale['setup_0119a'] = "Zvážte zvýšenie limitu PHP pamäte na %memory_minimum_limit, aby ste zabránili chybám v procese inštalácie.";
$locale['setup_0119b'] = "Zvýšte limit pamäte úpravou parametra memory_limit v súbore ".get_cfg_var('cfg_file_path')." a potom reštartujte webový server (alebo kontaktujte svojho správcu systému alebo poskytovateľa hostingu).";
$locale['setup_0119c'] = "Kontaktujte správcu systému alebo poskytovateľa hostingu pri zvyšovaní limitu vašej pamäte PHP.";
$locale['setup_stepx'] = "%2\$s";
// Buttons
$locale['setup_0120'] = "Dokončiť konfiguráciu";
$locale['setup_0121'] = "Uložiť a pokračovať";
$locale['setup_0122'] = "Skúsiť znova";
$locale['setup_0124'] = "Prejdite na možnosti obnovenia";
$locale['setup_0125'] = "Prebieha odinštalovanie. Prosím čakajte...";
$locale['setup_0130'] = "Xdebug nastavenia";
$locale['setup_0131'] = "xdebug.max_nesting_level je nastavený na";
$locale['setup_0132'] = "Nastavte {%code%} v konfigurácii PHP ako niektoré stránky v PHP-Fusion nebudú fungovať, ak je toto nastavenie príliš nízke.";
$locale['setup_0134'] = "Všetky požadované súbory prešli kontrolou zapisovateľnosti";
$locale['setup_0135'] = "Ak chcete pokračovať v inštalácii, mali by byť zapisovateľné nasledujúce súbory a priečinky. Ak chcete pokračovať, atribúty súborov na 755 alebo 777";
$locale['setup_0136'] = "Nezapisovateľné (zlyhalo)";
$locale['setup_0137'] = "Zapisovateľné (prešlo)";
$locale['setup_0138'] = "Založenie databázového pripojenia";
$locale['setup_0139'] = "Bol vytvorený výber stĺpca databázy";
$locale['setup_0140'] = "Databáza je dostupná a pripravená na inštaláciu";
$locale['setup_0141'] = "Povolenia databázy a overený prístup";
$locale['setup_0142'] = "Bol vytvorený súbor config.php";
$locale['setup_0143'] = "Zadaná predpona tabuľky sa už používa a je spustená. Inštalátor bude pokračovať s aktualizáciou rozdielmi podľa potreby.";
$locale['setup_0144'] = "Diagnostika databázy bola dokončená";
// Step 1
$locale['setup_1000'] = "Vyberte svoj jazyk";
$locale['setup_1001'] = "Stiahnuť viac lokalizácií z <a href='https://www.php-fusion.co.uk/downloads.php#langpacks' target='_blank'><strong>Oficiálnej PHP-Fusion podpori</strong></a>";
$locale['setup_1002'] = "Vitajte v režime obnovy PHP-Fusion 9.0.";
$locale['setup_1003'] = "Zistili sme, že existujúci systém je nainštalovaný. Ak chcete pokračovať, vyberte jednu z nasledujúcich možností.";
$locale['setup_1004'] = "Čistá inštalácia";
$locale['setup_1005'] = "Databázu môžete odinštalovať a vyčistiť a znova spustiť čistú inštaláciu.";
$locale['setup_1006'] = "PROSÍM ZÁLOHUJTE VÁŠ CONFIG.PHP. POČAS INŠTALÁCIE BUDE ODSTRÁNENÝ ZO SYSTÉMU.";
$locale['setup_1007'] = "Odinštalovať a začat znova";
$locale['setup_1008'] = "Inštalátor jadra systému";
$locale['setup_1009'] = "Zmeniť konfiguráciu jadra";
$locale['setup_1010'] = "Prejsť na inštalátor systému";
$locale['setup_1011'] = "Zmeniť podrobnosti primárneho účtu";
$locale['setup_1012'] = "Zmena podrobnotí hlavného administrátora bez potreby obnovenia hesla alebo prenosu HA vlastníctvo účtu na inú osobu.";
$locale['setup_1013'] = "Zmeniť detaily hlavného administrátora";
$locale['setup_1014'] = "Prestavať .htaccess";
$locale['setup_1015'] = "Zrušte aktuálny súbor a nahraďte ho štandardnou verziou súboru .htaccess";
$locale['setup_1017'] = "Zrušiť a ukončiť inštaláciu";
$locale['setup_1018'] = "Inštalátor môžete ukončiť hneď kliknutím na tlačidlo nižšie. Týmto premenujete súbor config_temp.php na config.php.";
$locale['setup_1019'] = "Ukončiť inštaláciu";
$locale['setup_1020'] = "Súbor .htaccess bol vytvorený / aktualizovaný";
// Step 2
$locale['setup_1090'] = "Súbory";
$locale['setup_1091'] = "Stav";
$locale['setup_1092'] = "Konfigurácia databázy a ovládačov";
$locale['setup_1106'] = "Diagnostika požiadaviek servera a súborov";
// Step 3 - Access criteria
$locale['setup_1200'] = "Nastavenia databázy a cesty servera";
$locale['setup_1201'] = "Zadajte nastavenia pre prístup do MySQL databázy.";
$locale['setup_1202'] = "Server databázy:";
$locale['setup_1203'] = "Užívateľské meno db:";
$locale['setup_1204'] = "Heslo db:";
$locale['setup_1205'] = "Názov db:";
$locale['setup_1206'] = "Predpona tabuliek:";
$locale['setup_1207'] = "Predpona cookie:";
$locale['setup_1208'] = "Ovládač databázy";
// Step 4 - Database Setup
$locale['setup_1210'] = "Chyby inštalácie PHP-Fusion. Reštartujte inštalátor.";
$locale['setup_1211'] = "Bola dokončená nová inštalácia PHP-Fusion. Prejdite k ďalšiemu kroku.";
$locale['setup_1212'] = "Konfigurácia stránky a hlavného administrátora";
$locale['setup_1213'] = "Informácie o stránke";
$locale['setup_1214'] = "Názov stránky";
$locale['setup_1215'] = "Stránku poháňa PHP-Fusion";
$locale['setup_1216'] = "PHP-Fusion je ľahký open source redakčný systém (CMS) napísaný v PHP.";
$locale['setup_1217'] = "Váš účet je aktualizovaný. Odterar použite nové poverenia.";
$locale['setup_1220'] = "Názov databázy, na ktorej chcete spustiť PHP-Fusion";
$locale['setup_1221'] = "Vaše MYSQL meno";
$locale['setup_1222'] = "...a vaše MYSQL heslo";
$locale['setup_1223'] = "Urobte to jedinečné pre zabezpečenie vašej databázy";
$locale['setup_1224'] = "Predpona súborov cookie";
$locale['setup_1225'] = "napr. localhost";
$locale['setup_1307'] = "Uistite sa, že config.php je zapisovateľný.";
$locale['setup_1310'] = "Nedá sa pripojiť k databáze.";
$locale['setup_1311'] = "Zadaná databáza neexistuje.";
$locale['setup_1313'] = "Zadaná predpona tabuľky sa už používa a je spustená. Nebudú nainštalované žiadne tabuľky. Začnite znova alebo prejdite na ďalší krok.";
$locale['setup_1315'] = "Uistite sa, že MySQL používateľ má oprávnenie na čítanie, zápis a odstraňovanie vybranej databázy.";
$locale['setup_1317'] = "Uistite sa, že ste vyplnili všetky polia MySQL pripojenia.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Primárny účet hlavného administrátora";
$locale['setup_1501'] = "Nakonfigurujte podrobnosti správcu.";
$locale['setup_1504'] = "Meno:";
$locale['setup_1505'] = "Heslo:";
$locale['setup_1506'] = "Zopakujte heslo:";
$locale['setup_1507'] = "Admin heslo:";
$locale['setup_1508'] = "Zopakujte admin heslo:";
$locale['setup_1509'] = "E-mail:";
$locale['setup_1510'] = "E-mail stránky:";
$locale['setup_1511'] = "Vyberte oblasť stránky:";
$locale['setup_1512'] = "Inštalácia jazyka stránky:";
$locale['setup_1513'] = "Meno majiteľa stránky";
// Progress Reports
$locale['setup_1600'] = "Inštalovanie ";
$locale['setup_1601'] = "Aktualizácia štruktúry tabuľky na ";
$locale['setup_1602'] = "Pridávanie nového stĺpca ";
$locale['setup_1603'] = "Populácia údajov ";
// Step 6 - User details validation
$locale['setup_5010'] = "Použivateľské meno obsahuje neplatné znaky.";
$locale['setup_5011'] = "Pole užívateľského mena nemôže byť prázdne.";
$locale['setup_5012'] = "Heslá sa nezhodujú.";
$locale['setup_5013'] = "Neplatné prihlasovacie heslo, použite iba alfanumerické znaky.<br />Heslo musí mať minimálne 8 znakov.";
$locale['setup_5015'] = "Admin heslá sa nezhodujú.";
$locale['setup_5016'] = "Heslo a admin heslo sa nesmú zhodovať.";
$locale['setup_5017'] = "Neplatné admin heslo, použite iba alfanumerické znaky.<br />Heslo musí mať minimálne 8 znakov.";
$locale['setup_5020'] = "Pole e-mailu nemôže byť prázdne.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administrátori";
$locale['setup_3002'] = "Články";
$locale['setup_3003'] = "Bannery";
$locale['setup_3004'] = "BB kódy";
$locale['setup_3005'] = "Čierna listina";
$locale['setup_3006'] = "Komentáre";
$locale['setup_3007'] = "Vlastné stránky";
$locale['setup_3008'] = "Zálohovanie databázy";
$locale['setup_3010'] = "Downloady";
$locale['setup_3011'] = "FAQ";
$locale['setup_3012'] = "Fórum";
$locale['setup_3013'] = "Obrázky";
$locale['setup_3014'] = "Infúzie";
$locale['setup_3015'] = "Panel infúzií";
$locale['setup_3016'] = "Užívatelia";
$locale['setup_3018'] = "Novinky";
$locale['setup_3019'] = "Panely";
$locale['setup_3020'] = "Fotoalbumy";
$locale['setup_3021'] = "PHP Info";
$locale['setup_3022'] = "Ankety";
$locale['setup_3023'] = "Odkazy v menu";
$locale['setup_3024'] = "Smajlíky";
$locale['setup_3026'] = "Aktualizácia";
$locale['setup_3027'] = "Užívateľské skupiny";
$locale['setup_3029'] = "Odkazy";
$locale['setup_3030'] = "Hlavné";
$locale['setup_3031'] = "Čas a dátum";
$locale['setup_3033'] = "Registrácia";
$locale['setup_3035'] = "Ostatné";
$locale['setup_3036'] = "Súkromné správy";
$locale['setup_3037'] = "Užívateľské polia";
$locale['setup_3038'] = "Hodnosti fóra";
$locale['setup_3041'] = "Správa užívateľov";
$locale['setup_3044'] = "Bezpečnosť";
$locale['setup_3047'] = "Obnovenie admin hesla";
$locale['setup_3048'] = "Záznam chýb";
$locale['setup_3049'] = "Záznam o užívateľoch";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Nastavenie jazyka";
$locale['setup_3052'] = "Trvalé odkazy";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Správca tém";
$locale['setup_3057'] = "Migračný nástroj";
$locale['setup_3058'] = "Nastavenia tém";
// Multilanguage table rights
$locale['setup_3200'] = "Články";
$locale['setup_3201'] = "Vlastné stránky";
$locale['setup_3202'] = "Na stiahnutie";
$locale['setup_3203'] = "FAQ";
$locale['setup_3204'] = "Fórum";
$locale['setup_3205'] = "Novinky";
$locale['setup_3206'] = "Galéria";
$locale['setup_3207'] = "Ankety";
$locale['setup_3208'] = "Šablóny e-mailov";
$locale['setup_3209'] = "Odkazy";
$locale['setup_3210'] = "Odkazy v menu";
$locale['setup_3211'] = "Panely";
$locale['setup_3212'] = "Hodnosti fóra";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Domov";
$locale['setup_3302'] = "Na stiahnutie";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Diskusné fórum";
$locale['setup_3305'] = "Kontakt";
$locale['setup_3307'] = "Odkazy";
$locale['setup_3308'] = "Galéria";
$locale['setup_3309'] = "Vyhľadávanie";
$locale['setup_3310'] = "Pridať odkaz";
$locale['setup_3311'] = "Pridať novinku";
$locale['setup_3312'] = "Pridať článok";
$locale['setup_3313'] = "Pridať fotku";
$locale['setup_3314'] = "Pridať download";
$locale['setup_3315'] = "Na schválenie";
$locale['setup_3316'] = "Shoutbox";
$locale['setup_3317'] = "Pridať Blog";
$locale['setup_3318'] = "Panel archivov blogov";
$locale['setup_3319'] = "Najnovšie diskusie";
$locale['setup_3320'] = "Zúčastnili sa diskusií";
$locale['setup_3321'] = "Sledované vlákna";
$locale['setup_3322'] = "Nezodpovedané vlákna";
$locale['setup_3323'] = "Nevyriešené otázky";
$locale['setup_3324'] = "Začať nové vlákno";
$locale['setup_3325'] = "Najnovšie články";
$locale['setup_3326'] = "Najnovšie downloady";
$locale['setup_3327'] = "Pridať FAQ";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigácia";
$locale['setup_3401'] = "Online užívatelia";
$locale['setup_3402'] = "Témy fóra";
$locale['setup_3404'] = "Privítacia správa";
$locale['setup_3405'] = "Zoznam tém fóra";
$locale['setup_3406'] = "Info o užívateľovi";
$locale['setup_3407'] = "Ankety užívateľov";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Chyby";
$locale['setup_3501'] = "Na stiahnutie";
$locale['setup_3502'] = "Hry";
$locale['setup_3503'] = "Grafika";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Tlač";
$locale['setup_3506'] = "Užívatelia";
$locale['setup_3507'] = "Modifikácie";
$locale['setup_3508'] = "Filmy";
$locale['setup_3509'] = "Sieť";
$locale['setup_3510'] = "Novinky";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Bezpečnosť";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Vzhľady";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Hlavný administrátor";
$locale['setup_3601'] = "Administrátor";
$locale['setup_3602'] = "Moderátor";
$locale['setup_3603'] = "Nováčik";
$locale['setup_3604'] = "Junior";
$locale['setup_3605'] = "Užívateľ";
$locale['setup_3606'] = "Senior";
$locale['setup_3607'] = "Veterán";
$locale['setup_3608'] = "Fusionista";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Úsmev";
$locale['setup_3621'] = "Žmrknutie";
$locale['setup_3622'] = "Smutný";
$locale['setup_3623'] = "Mračiť";
$locale['setup_3624'] = "Šokovať";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Cool";
$locale['setup_3627'] = "Škeriť sa";
$locale['setup_3628'] = "Nahnevaný";
$locale['setup_3629'] = "Like";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Kontaktné informácie";
$locale['setup_3642'] = "Rôzne informácie";
$locale['setup_3643'] = "Možnosti";
$locale['setup_3644'] = "Štatistiky";
$locale['setup_3645'] = "Súkromie";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Informácie o stránke";
$locale['setup_3661'] = "Diskusie týkajúce sa správy tejto webovej stránky";

// Stage 6 - User Fields
require_once(dirname(__FILE__)."/user_fields/user_aim.php");
require_once(dirname(__FILE__)."/user_fields/user_birthdate.php");
require_once(dirname(__FILE__)."/user_fields/user_icq.php");
require_once(dirname(__FILE__)."/user_fields/user_location.php");
require_once(dirname(__FILE__)."/user_fields/user_sig.php");
require_once(dirname(__FILE__)."/user_fields/user_skype.php");
require_once(dirname(__FILE__)."/user_fields/user_theme.php");
require_once(dirname(__FILE__)."/user_fields/user_web.php");
require_once(dirname(__FILE__)."/user_fields/user_yahoo.php");
require_once(dirname(__FILE__)."/user_fields/user_timezone.php");
require_once(dirname(__FILE__)."/user_fields/user_blacklist.php");

// Welcome message
$locale['setup_3650'] = "Vitajte na vašich stránkach";
// Final message
$locale['setup_1700'] = "Inštalácia je dokončená";
$locale['setup_1701'] = "PHP-Fusion 9.0 je teraz pripravený na použitie. Kliknutím na tlačidlo Dokončiť prepíše sa súbor config_temp.php na config.php<br/>";
$locale['setup_1702'] = "<strong>Poznámka: Po vstupe na stránku by ste mali vymazať install.php súbor a z bezpečnostných dôvodov zmeňte atribúty config.php späť na 0644.</strong>";
$locale['setup_1703'] = "Ďakujeme, že ste si vybrali PHP-Fusion.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Šablóny e-mailov";
$locale['setup_3801'] = "Oznámenie o novej SS";
$locale['setup_3802'] = "Máte novú súkromnú správu od [USER] čakajúca na [SITENAME]";
$locale['setup_3803'] = "Ahoj [RECEIVER],\r\nDostali ste novú súkromnú správu s názvom [SUBJECT] od [USER] na [SITENAME]. Môžete si prečítať súkromnú správu na adrese [SITEURL]messages.php\r\n\r\nSpráva: [MESSAGE]\r\n\r\nYAk už nechcete dostávať nové správy, môžete vypnúť upozornenie e-mailom, prostredníctvom panelu možností na stránke Súkromná správa.\r\n\r\nS pozdravom,\r\n[SENDER].";
$locale['setup_3804'] = "Oznámenie o nových príspevkoch na fóre";
$locale['setup_3805'] = "Oznámenie odpovede na vlákno - [SUBJECT]";
$locale['setup_3806'] = "Ahoj [RECEIVER],\r\n\r\nOdpoveď bola zverejnená vo fóre \'[SUBJECT]\', ktoré sledujete na [SITENAME]. Na zobrazenie odpovede môžete použiť nasledujúci odkaz:\r\n\r\n[THREAD_URL]\r\n\r\nAk už nechcete sledovať túto vlákno, môžete kliknúť na \'Zastaviť sledovanie tohto vlákna\' odkaz umiestnený v hornej časti vlákna.\r\n\r\nS pozdravom,\r\n[SENDER].";
$locale['setup_3807'] = "Kontaktný formulár";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Články";
$locale['articles']['description'] = "Štandardný dokumentačný systém.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Štandardný blogovací systém.";
$locale['downloads']['title'] = "Na stiahnutie";
$locale['downloads']['description'] = "Štandardný download systém.";
$locale['faqs']['title'] = "FAQ";
$locale['faqs']['description'] = "Štandardný FAQ systém";
$locale['forums']['title'] = "Fórum";
$locale['forums']['description'] = "Štandardný fórum systém";
$locale['news']['title'] = "Novinky";
$locale['news']['description'] = "Publikačný systém pre správy.";
$locale['photos']['title'] = "Galéria";
$locale['photos']['description'] = "Fotografický publikačný systém.";
$locale['polls']['title'] = "Ankety";
$locale['polls']['description'] = "Systém hlasovania a hlasovania používateľov.";
$locale['weblinks']['title'] = "Odkazy";
$locale['weblinks']['description'] = "Webový systém odkazov.";
$locale['install'] = "Inštalovať jadro";
