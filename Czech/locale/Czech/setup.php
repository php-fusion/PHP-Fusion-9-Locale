<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Czech/setup.php
| Author: https://www.phpfusion.cz/ - Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['setup_0000'] = "PHP-Fusion Instalace";
$locale['setup_0002'] = "Vítej v PHP-Fusion instalaci";
$locale['setup_0003'] = "Průvodce instalací vás provede kroky potřebnými k instalaci PHP-Fusion CMS na váš server. Pokud potřebujete další pomoc, přečtěte si naši <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=216' target='_blank'>online dokumentaci instalace</a>.";
$locale['setup_0005'] = " Četl jsem a souhlasim s PHP-Fusion <a href='https://php-fusion.co.uk/license/' target='_blank'>podmínkami používání</a>";
$locale['setup_0006'] = "PHP-Fusion 9 vyžaduje nejméně PHP 5.5.9. alší informace naleznete na stránce <a href=\"https://www.php-fusion.co.uk/requirements\">systémových požadavků</a>.";
$locale['setup_0007'] = "Systémy s nainstalovanou OPcache musí mít <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> povoleno!";
$locale['setup_5000'] = "Abyste mohli používat PHP-Fusion, musíte zkontrolovat a souhlasit s podmínkami PHP-Fusion</a>.";
$locale['setup_0010'] = "Aktuální verze - ";
$locale['setup_0011'] = "cz";
$locale['setup_0012'] = "utf-8";
$locale['setup_0020'] = "PHP-Fusion aktualizace";
$locale['setup_0022'] = "Vítejte ve službě aktualizace PHP-Fusion";
$locale['setup_0023'] = "Služba upgrade vás provede kroky potřebnými pro upgrade PHP-Fusion CMS na váš server. Postupujte podle těchto kroků a ověřte všechny požadované informace.";
$locale['setup_0050'] = "Webový server";
$locale['setup_0051'] = "PHP verze";
$locale['setup_0052'] = "PHP rozšíření";
$locale['setup_0053'] = "OPCache podpora";
$locale['setup_0054'] = "PDO databázová podpora";
$locale['setup_0055'] = "PHP limit paměti";
$locale['setup_0056'] = "Kontrola požadavků souborů";
$locale['setup_0101'] = "Úvod";
$locale['setup_0102'] = "Diagnostika souborů a složek";
$locale['setup_0103'] = "Nastavení databáze";
$locale['setup_0104'] = "Konfigurace / Nastavení databáze";
$locale['setup_0105'] = "Konfigurace jádra systému";
$locale['setup_0106'] = "Primární podrobnosti admina";
$locale['setup_0107'] = "Finální nastavení";
$locale['setup_0109'] = "Minimální verze aplikace Apache potřebná ke spuštění PHP-Fusion bez povoleného mod_rewrite je 2.2.16.";
$locale['setup_0110'] = "Vzhledem k nastavení pro serverový token v httpd.conf není možné určit verzi Apache bez mod_rewrite, je proto nutná nainstalovaná minimální Apache verze 2.2.16.";
$locale['setup_0112'] = "Funkce phpinfo() byla z bezpečnostních důvodů zakázána. Chcete-li zobrazit informace o vašem serveru phpinfo (), změňte nastavení PHP nebo kontaktujte správce serveru";
$locale['setup_0113'] = "Vaše instalace PHP je příliš stará. PHP-Fusion vyžaduje minimálně verzi 5.5.21. Verze PHP vyšší než 5.6.5 nebo 5.5.21 poskytují vestavěnou SQL injekci ochranu pro mysql databáze. Doporučuje se nutně aktualizovat!!";
$locale['setup_0114'] = "PHP-Fusion vyžaduje, abyste povolili rozšíření PHP v následujícím seznamu:";
$locale['setup_0115'] = "Povoleno";
$locale['setup_0115a'] = "Není povoleno";
$locale['setup_0116'] = "Funkce ukládání do mezipaměti PHP OPCode může výrazně zlepšit výkon vašeho webu. To je <strong>vysoce doporučeno</strong> mít <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPcache</a> na vašem serveru.";
$locale['setup_0118'] = "Váš webový server zřejmě nepodporuje PDO (PHP Data Objects). Požádejte svého poskytovatele hostingu, pokud podporuje přirozené rozšíření PDO, aby tento modul zuapnul";
$locale['setup_0119a'] = "Zvažte zvýšení limitu paměti PHP na %memory_minimum_limit, abyste zabránili chybám v procesu instalace";
$locale['setup_0119b'] = "Zvyšte limit paměti úpravou memory_limit parameter v souboru ".get_cfg_var('cfg_file_path')." A poté restartujte webový server (nebo se obraťte na správce systému nebo poskytovatele hostingu o pomoc).";
$locale['setup_0119c'] = "Obraťte se na svého správce systému nebo poskytovatele hostingu o pomoc při zvyšování limitu paměti PHP";
$locale['setup_stepx'] = "%2\$s";
// Buttons
$locale['setup_0120'] = "Dokončit konfiguraci";
$locale['setup_0121'] = "Uložit a pokračovat";
$locale['setup_0122'] = "Zkus to znovu";
$locale['setup_0124'] = "Přejděte na možnosti obnovy";
$locale['setup_0125'] = "Probíhá odinstalace. Prosím, čekejte...";
$locale['setup_0130'] = "Nastavení Xdebug";
$locale['setup_0131'] = "Xdebug.max_nesting_level je nastaven na:";
$locale['setup_0132'] = "Nastavte {%code%} v konfiguraci PHP, protože některé stránky ve vašem webu Drupalu nebudou fungovat, pokud je toto nastavení příliš nízké";
$locale['setup_0134'] = "Všechny požadované soubory prošly kontrolou zapísateľnosti";
$locale['setup_0135'] = "Chcete-li pokračovat v instalaci, měli by být zapisovatelné následující soubory a složky. Chcete-li pokračovat, změňte atributy souborů na 755 nebo 777";
$locale['setup_0136'] = "Nezapisovateľné (selhalo)";
$locale['setup_0137'] = "Zapisovatelné (prošlo)";
$locale['setup_0138'] = "Založení databázového připojení";
$locale['setup_0139'] = "Byl vytvořen výběr sloupce databáze";
$locale['setup_0140'] = "Databáze je dostupná a připravena k instalaci";
$locale['setup_0141'] = "Povolení databáze a ověřený přístup";
$locale['setup_0142'] = "Byl vytvořen soubor config.php";
$locale['setup_0143'] = "Zadaná předpona tabulky se již používá a je spuštěna. Instalátor bude pokračovat v aktualizaci rozdílů podle potřeby.";
$locale['setup_0144'] = "Diagnostika databáze byla dokončena";
// Step 1
$locale['setup_1000'] = "Zvolte prosím svůj jazyk";
$locale['setup_1001'] = "Stáhněte si další lokalizace z <a href='https://www.php-fusion.co.uk/downloads.php#langpacks' target='_blank'><strong>oficiální PHP-Fusion podpory</strong></a>";
$locale['setup_1002'] = "Vítejte v režimu obnovení PHP-Fusion 9.0.";
$locale['setup_1003'] = "Zjistili jsme, že stávající systém je nainstalován. Chcete-li pokračovat, vyberte jednu z následujících možností.";
$locale['setup_1004'] = "Čistá instalace";
$locale['setup_1005'] = "Databázi můžete odinstalovat a vyčistit a znovu spustit čistou instalaci.";
$locale['setup_1006'] = "PROSÍM ZÁLOHUJTE SI VÁŠ CONFIG.PHP BUDE ODSTRANĚN ZE SYSTÉMU BĚHEM ODINSTALOVÁNÍ.";
$locale['setup_1007'] = "Odinstalovat a znovu spustit";
$locale['setup_1008'] = "Instalátor jádra systému";
$locale['setup_1009'] = "Změna konfigurací jádra systému.";
$locale['setup_1010'] = "Přejděte na instalační systém";
$locale['setup_1011'] = "Změnit podrobnosti primárního účtu";
$locale['setup_1012'] = "Změna podrobností hlavního administrátora bez potřeby obnovení hesla nebo přenosu HA vlastnictví účtu na jinou osobu.";
$locale['setup_1013'] = "Změnit detaily hlavního administrátora";
$locale['setup_1014'] = "Znovu vytvořit .htaccess";
$locale['setup_1015'] = "Odstranit aktuální soubor a nahradit ho standardní verzí souboru .htaccess";
$locale['setup_1017'] = "Zrušte a ukončit instalační program";
$locale['setup_1018'] = "Instalaci můžete ukončit hned kliknutím na tlačítko níže. Tím přejmenujete soubor config_temp.php zpět na config.php.";
$locale['setup_1019'] = "Ukončit instalaci";
$locale['setup_1020'] = "Soubor .htaccess byl vytvořen / aktualizován";
// Step 2
$locale['setup_1090'] = "Soubory";
$locale['setup_1091'] = "Stav";
$locale['setup_1092'] = "Konfigurace databáze a ovladače";
$locale['setup_1106'] = "Diagnostika požadavků serveru a souborů";
// Step 3 - Access criteria
$locale['setup_1200'] = "Nastavení databáze a cesty serveru";
$locale['setup_1201'] = "Zadejte prosím nastavení pro přístup k databázi MySQL.";
$locale['setup_1202'] = "Název hostitele databáze:";
$locale['setup_1203'] = "Uživatelské jméno databáze:";
$locale['setup_1204'] = "Heslo databáze:";
$locale['setup_1205'] = "Název databáze:";
$locale['setup_1206'] = "Předpona tabulky:";
$locale['setup_1207'] = "Předpona cookie:";
$locale['setup_1208'] = "Ovladač databáze";
// Step 4 - Database Setup
$locale['setup_1210'] = "Chyby PHP-Fusion instalace. Restartujte instalátor.";
$locale['setup_1211'] = "Byla dokončena nová PHP-Fusion instalace. Přejděte k dalšímu kroku.";
$locale['setup_1212'] = "Konfigurace stránky a hlavního administrátora";
$locale['setup_1213'] = "Informace o stránce";
$locale['setup_1214'] = "Jméno stránky";
$locale['setup_1215'] = "Webová stránka založená na PHP-Fusion";
$locale['setup_1216'] = "PHP-Fusion je lehký open source redakční systém (CMS) napsaný v PHP.";
$locale['setup_1217'] = "Váš účet je aktualizován. Odteď použijte nové pověření.";
$locale['setup_1220'] = "Název databáze, na které chcete spustit PHP-Fusion";
$locale['setup_1221'] = "Vaše MYSQL uživatelské jméno";
$locale['setup_1222'] = "...a vaše MYSQL heslo";
$locale['setup_1223'] = "Udělejte to jedinečné pro zabezpečení vaší databáze";
$locale['setup_1224'] = "Předpona souborů cookie";
$locale['setup_1225'] = "např. localhost";
$locale['setup_1307'] = "Ujistěte se, že config.php je zapisovatelný.";
$locale['setup_1310'] = "Nelze se připojit k databázi.";
$locale['setup_1311'] = "Zadaná databáze neexistuje.";
$locale['setup_1313'] = "Zadaná předpona tabulky se již používá a je spuštěna. Nebudou nainstalovány žádné tabulky. Začněte znovu nebo přejděte na další krok.";
$locale['setup_1315'] = "Ujistěte se, že MySQL uživatel má oprávnění pro čtení, zápis a odstraňování vybrané databáze.";
$locale['setup_1317'] = "Ujistěte se, že jste vyplnili všechna pole MySQL připojení..";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Primární účet hlavního administrátora";
$locale['setup_1501'] = "Nakonfigurujte podrobnosti správce.";
$locale['setup_1504'] = "Uživatelské jméno:";
$locale['setup_1505'] = "Přihlašovací heslo:";
$locale['setup_1506'] = "Opakujte přihlašovací heslo:";
$locale['setup_1507'] = "Admin heslo:";
$locale['setup_1508'] = "Opakujte admin heslo:";
$locale['setup_1509'] = "Emailová adresa:";
$locale['setup_1510'] = "E-mailová adresa stránky:";
$locale['setup_1511'] = "Vyberte oblast stránky:";
$locale['setup_1512'] = "Instalace jazyka stránky:";
$locale['setup_1513'] = "Jméno majitele stránky";
// Progress Reports
$locale['setup_1600'] = "Instalace ";
$locale['setup_1601'] = "Aktualizace struktury tabulky na ";
$locale['setup_1602'] = "Přidání nového sloupce na ";
$locale['setup_1603'] = "Populace dat ";
// Step 6 - User details validation
$locale['setup_5010'] = "Uživatelské jméno obsahuje neplatné znaky.";
$locale['setup_5011'] = "Pole uživatelského jména nemůže zůstat prázdné.";
$locale['setup_5012'] = "Vaše dvě přihlašovací hesla neodpovídají.";
$locale['setup_5013'] = "Neplatné přihlašovací heslo, použijte pouze alfanumerické znaky.<br />Heslo musí mít délku minimálně 8 znaků.";
$locale['setup_5015'] = "Vaše dvě hesla administrátora neodpovídají.";
$locale['setup_5016'] = "Vaše uživatelské heslo a administrátorské heslo musí být jiné.";
$locale['setup_5017'] = "Neplatné přihlašovací heslo, použijte pouze alfanumerické znaky..<br />Heslo musí mít délku minimálně 8 znaků.";
$locale['setup_5020'] = "Pole e-mailu nemůže zůstat prázdné.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administrátoři";
$locale['setup_3002'] = "Články";
$locale['setup_3003'] = "Bannery";
$locale['setup_3004'] = "BB kódy";
$locale['setup_3005'] = "Černá listina";
$locale['setup_3006'] = "Komentáře";
$locale['setup_3007'] = "Vlastní stránka";
$locale['setup_3008'] = "Zálohování databáze";
$locale['setup_3010'] = "Stahování";
$locale['setup_3011'] = "FAQ";
$locale['setup_3012'] = "Fórum";
$locale['setup_3013'] = "Obrázky";
$locale['setup_3014'] = "Infuze";
$locale['setup_3015'] = "Panel infuzí";
$locale['setup_3016'] = "Členové";
$locale['setup_3018'] = "Novinky";
$locale['setup_3019'] = "Panely";
$locale['setup_3020'] = "Galérie";
$locale['setup_3021'] = "PHP Info";
$locale['setup_3022'] = "Ankety";
$locale['setup_3023'] = "Odkazy na stránku";
$locale['setup_3024'] = "Smajlíky";
$locale['setup_3026'] = "Aktualizace";
$locale['setup_3027'] = "Uživatelské skupiny";
$locale['setup_3029'] = "Webové odkazy";
$locale['setup_3030'] = "Hlavní";
$locale['setup_3031'] = "Čas a datum";
$locale['setup_3033'] = "Registrace";
$locale['setup_3035'] = "Smíšený";
$locale['setup_3036'] = "Soukromé zprávy";
$locale['setup_3037'] = "Uživatelská pole";
$locale['setup_3038'] = "Fórum hodnosti";
$locale['setup_3041'] = "Správa uživatelů";
$locale['setup_3044'] = "Bezpečnost";
$locale['setup_3047'] = "Obnovení admin hesla";
$locale['setup_3048'] = "Záznam chyb";
$locale['setup_3049'] = "Záznam o uživatelích";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Nastavení jazyka";
$locale['setup_3052'] = "Trvalé odkazy";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Správce vzhledu";
$locale['setup_3057'] = "Migrační nástroj";
$locale['setup_3058'] = "Nastavení vzhledu";
// Multilanguage table rights
$locale['setup_3200'] = "Články";
$locale['setup_3201'] = "Vlastní stránky";
$locale['setup_3202'] = "Stahování";
$locale['setup_3203'] = "FAQ";
$locale['setup_3204'] = "Fórum";
$locale['setup_3205'] = "Novinky";
$locale['setup_3206'] = "Galérie";
$locale['setup_3207'] = "Ankety";
$locale['setup_3208'] = "Vzhledy e-mailů";
$locale['setup_3209'] = "Webové odkazy";
$locale['setup_3210'] = "Odkazy na podstránky";
$locale['setup_3211'] = "Panely";
$locale['setup_3212'] = "Fórum hodnosti";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Domů";
$locale['setup_3302'] = "Ke stažení";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Diskuzní fórum";
$locale['setup_3305'] = "Kontakt";
$locale['setup_3307'] = "Webové odkazy";
$locale['setup_3308'] = "Galérie";
$locale['setup_3309'] = "Hledat";
$locale['setup_3310'] = "Přidat odkaz";
$locale['setup_3311'] = "Přidat novinku";
$locale['setup_3312'] = "Přidat článek";
$locale['setup_3313'] = "Přidat obrázek";
$locale['setup_3314'] = "Přidat stahování";
$locale['setup_3315'] = "Na schválení";
$locale['setup_3316'] = "Shoutbox";
$locale['setup_3317'] = "Přidat blog";
$locale['setup_3318'] = "Panel archivů blogů";
$locale['setup_3319'] = "Poslední diskuse";
$locale['setup_3320'] = "Zúčastněné diskuse";
$locale['setup_3321'] = "Sledovat vlákno";
$locale['setup_3322'] = "Nezodpovězené vlákna";
$locale['setup_3323'] = "Nevyřešené otázky";
$locale['setup_3324'] = "Začít nové vlákno";
$locale['setup_3325'] = "Nejnovější články";
$locale['setup_3326'] = "Nejnovější stahování";
$locale['setup_3327'] = "Přidat FAQ";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigace";
$locale['setup_3401'] = "Online uživatelé";
$locale['setup_3402'] = "Fórum vlákna";
$locale['setup_3404'] = "Uvítací zpráva";
$locale['setup_3405'] = "Seznam témat fóra";
$locale['setup_3406'] = "Informace o uživateli";
$locale['setup_3407'] = "Ankety";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Chyby";
$locale['setup_3501'] = "Ke stažení";
$locale['setup_3502'] = "Hry";
$locale['setup_3503'] = "Grafika";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Časopis";
$locale['setup_3506'] = "Členové";
$locale['setup_3507'] = "Modifikace";
$locale['setup_3508'] = "Filmy";
$locale['setup_3509'] = "Síť";
$locale['setup_3510'] = "Novinky";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Bezpečnost";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Vzhledy";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Hlavní administrátor";
$locale['setup_3601'] = "Administrátor";
$locale['setup_3602'] = "Moderátor";
$locale['setup_3603'] = "Nováček";
$locale['setup_3604'] = "Junior";
$locale['setup_3605'] = "Člen";
$locale['setup_3606'] = "Diskutující";
$locale['setup_3607'] = "Stařešina";
$locale['setup_3608'] = "Fusionista";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Usměj se";
$locale['setup_3621'] = "Mrkat";
$locale['setup_3622'] = "Smutný";
$locale['setup_3623'] = "Mračit";
$locale['setup_3624'] = "Šokovat";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Chladný";
$locale['setup_3627'] = "Úsměv";
$locale['setup_3628'] = "Rozzlobený";
$locale['setup_3629'] = "Like";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Kontaktní informace";
$locale['setup_3642'] = "Různé informace";
$locale['setup_3643'] = "Možnosti";
$locale['setup_3644'] = "Statistika";
$locale['setup_3645'] = "Soukromí";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Informace o webu";
$locale['setup_3661'] = "Diskuse týkající se správy této webové stránky";

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
$locale['setup_3650'] = "Vítejte na vašem webu";
// Final message
$locale['setup_1700'] = "Instalace je dokončena";
$locale['setup_1701'] = "PHP-Fusion 9.0 je nyní připraven k použití. Klepnutím na tlačítko Dokončit přepíšete soubor config_temp.php na config.php<br/>";
$locale['setup_1702'] = "<strong>Poznámka: Po zadání vašeho webu byste měli z bezpečnostních důvodů smazat celou / instalační složku a chmod your config.php zpět na 0644.</strong>";
$locale['setup_1703'] = "Děkujeme, že jste si vybrali PHP-Fusion.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Šablony e-mailů";
$locale['setup_3801'] = "Oznámení o nové SZ";
$locale['setup_3802'] = "Máte novou soukromou zprávu od [USER] čekající na [SITENAME]";
$locale['setup_3803'] = "Ahoj [RECEIVER],<br/>Obdrželi jste novou zprávu s názvem [SUBJECT] od [USER] na [SITENAME]. Můžete si přečíst soukromou zprávu na adrese [SITEURL]messages.php<br/>Zpráva: [MESSAGE]<br/>Pokud již nechcete být upozorněni na nové zprávy, můžete vypnout upozornění e-mailem prostřednictvím panelu možností na stránce Soukromá zpráva.<br/>S pozdravem,<br/>[SENDER].";
$locale['setup_3804'] = "Oznámení o nových příspěvcích na fóru";
$locale['setup_3805'] = "Oznámení odpovědi na téma - [SUBJECT]";
$locale['setup_3806'] = "Ahoj [RECEIVER],<br/>Odpověď byla zveřejněna ve fóru \'[SUBJECT]\' které sledujete na [SITENAME]. Pro zobrazení odpovědi můžete použít následující odkaz:<br/>[THREAD_URL]<br/>Pokud již nechcete sledovat tuto vlákno, můžete kliknout na \'Zastavit sledování tohoto vlákna\' odkaz umístěný v horní části vlákna.<br/>S pozdravem,<br/>[SENDER].";
$locale['setup_3807'] = "Kontaktní formulář";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Články";
$locale['articles']['description'] = "Standardní dokumentační systém.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Standardní blogovací systém.";
$locale['downloads']['title'] = "Stahování";
$locale['downloads']['description'] = "Standardní download systém.";
$locale['faqs']['title'] = "FAQ";
$locale['faqs']['description'] = "Standardní FAQ systém.";
$locale['forums']['title'] = "Fórum";
$locale['forums']['description'] = "Standardní fórum systém.";
$locale['news']['title'] = "Novinky";
$locale['news']['description'] = "Publikovací systém novinek.";
$locale['photos']['title'] = "Galérie";
$locale['photos']['description'] = "Fotografický publikační systém.";
$locale['polls']['title'] = "Ankety";
$locale['polls']['description'] = "Systém anket a hlasování uživatelů.";
$locale['weblinks']['title'] = "Webové odkazy";
$locale['weblinks']['description'] = "Systém odkazů.";
$locale['install'] = "Instalovat jádro";
