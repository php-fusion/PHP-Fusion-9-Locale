<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: root/locale/Czech/global.php
| Translate Czech: Kvido, phpfusion.cz, 20.05.2017
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
 * Czech Locale
 *
 * @locale charset           ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region            ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale tinymce           refer to path includes/jscripts/tinymce/langs/{value}.js
 * @locale select2           refer to path includes/dynamics/select2/select2_locale_{value}.js
 * @locale phpmailer         refer to path includes/classes/PHPMailer/language/phpmailer.lang-{value}.php
 * @locale password_strength refer to path includes/dynamics/password/lang/{value}.js
 * @package locale/Czech
 */
setlocale(LC_ALL, "cs_CZ.utf8", "cs_CZ", "czech"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "CZ";
$locale['xml_lang'] = "cs";
$locale['short_lang_name'] = "cs";
$locale['tinymce'] = "cs";
$locale['select2'] = "cs";
$locale['phpmailer'] = "cz";
$locale['datepicker'] = "cs";
$locale['datepicker_js'] = "M-DD-YYYY H:mm:ss";
$locale['datepicker_php'] = "m-d-Y H:i:s";
$locale['password_strength'] = "cs";
$locale['date_day'] = "%d %b";
// Celé & krátké měsíce
$locale['months'] = "&nbsp|Leden|Únor|Březen|Duben|Květen|Červen|Červenec|Srpen|Září|Říjen|Listopad|Prosinec";
$locale['shortmonths'] = "&nbsp|Led|Úno|Bře|Dub|Kvě|Čer|Červ|Srp|Zář|Říj|Lis|Pro";
$locale['weekdays'] = "Neděle|Pondělí|Úterý|Středa|Čtvrtek|Pátek|Sobota";
// Časovač
$locale['year'] = "rok";
$locale['year_a'] = "roky";
$locale['month'] = "měsíc";
$locale['month_a'] = "měsíců";
$locale['week'] = "týden";
$locale['week_a'] = "týdne";
$locale['day'] = "den";
$locale['day_a'] = "dnů";
$locale['hour'] = "hodina";
$locale['hour_a'] = "hodin";
$locale['minute'] = "minuta";
$locale['minute_a'] = "minut";
$locale['second'] = "sekunda";
$locale['second_a'] = "sekund";
$locale['just_now'] = "právě teď";
$locale['now'] = 'teď';
$locale['ago'] = "před";
// Region
$locale['street1'] = "Ulice 1";
$locale['street2'] = "Ulice 2";
$locale['city'] = "Město";
$locale['postcode'] = "PSČ";
$locale['sel_country'] = "Vyberte stát";
$locale['sel_state'] = "Vyberte oblast";
$locale['sel_user'] = "Zadejte prosím uživatelské jméno";
$locale['add_language'] = "Přidat jazykové překlady";
$locale['add_lang'] = "Přidat %s";
$locale['other_states'] = "Ostatní státy";
// Jméno
$locale['name'] = "Celé jméno";
$locale['username_pretext'] = "Vaše veřejné uživatelské jméno je stejné jako vaše uživatelská profilová adresa umístěná na adrese: %s %s";
$locale['first_name'] = "Jméno";
$locale['middle_name'] = "Prostřední jméno";
$locale['last_name'] = "Příjmení";
// Dokumenty
$locale['doc_type'] = "Typ dokumentu";
$locale['doc_series'] = "Série";
$locale['doc_number'] = "Číslo";
$locale['doc_authority'] = "Autorita";
$locale['doc_date_issue'] = "Datum vydání";
$locale['doc_date_expire'] = "Datum expirace";
// Standardní uživatelské levely
$locale['user0'] = "Veřejnost";
$locale['user1'] = "Člen";
$locale['user2'] = "Administrátor";
$locale['user3'] = "Hlavní administrátor";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Host";
$locale['user_anonymous'] = "Anonymní uživatel";
$locale['genitive'] = "%s's %s";
// Standardní uživatelská nastavení
$locale['status0'] = "Aktivní";
$locale['status1'] = "Zakázáno";
$locale['status2'] = "Neaktivní";
$locale['status3'] = "Pozastaveno";
$locale['status4'] = "Zabezpečení zakázáno";
$locale['status5'] = "Zrušeno";
$locale['status6'] = "Anonymní";
$locale['status7'] = "Deaktivováno";
$locale['status8'] = "Neaktivní";
// Fórum Moderator Levely
$locale['userf1'] = "Moderátor";
// Navigace
$locale['global_001'] = "Navigace";
$locale['global_002'] = "Nebyly definovány žádné odkazy";
$locale['global_003'] = "Nic pro náhled";
// Uživatelé on-line
$locale['global_010'] = "Uživatelé online";
$locale['global_011'] = "Hosté online";
$locale['global_012'] = "Členové online";
$locale['global_013'] = "Žádní členové online";
$locale['global_014'] = "Celkem členů";
$locale['global_015'] = "Neaktivní členové";
$locale['global_016'] = "Nejnovější člen";
$locale['global_017'] = "Přepnout navigaci";
// Fórum boční panel
$locale['global_020'] = "Fórum vlákna";
$locale['global_021'] = "Poslední diskuse";
$locale['global_022'] = "Nejžhavější vlákna";
$locale['global_023'] = "Žádné vlákna nebyly vytvořeny";
$locale['global_024'] = "Zúčastněné diskuse";
$locale['global_027'] = "Nezodpovězené vlákna";
$locale['global_028'] = "Nevyřešené otázky";
// Komentáře boční panel
$locale['global_025'] = "Nejnovější komentáře";
$locale['global_026'] = "Žádné komentáře k dispozici";
// Články boční panel
$locale['global_030'] = "Nejnovější články";
$locale['global_031'] = "Žádné články k dispozici";
// Stahování boční panel
$locale['global_032'] = "Nejnovější stahování";
$locale['global_033'] = "K dispozici nejsou žádná stahování";
// Uvítací panel
$locale['global_035'] = "Vítejte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Nejnovější témata fóra";
$locale['global_041'] = "Moje nejnovější témata";
$locale['global_042'] = "Moje poslední příspěvky";
$locale['global_043'] = "Nové příspěvky";
$locale['global_044'] = "Vlákno";
$locale['global_045'] = "Zobrazení";
$locale['global_046'] = "Odpovědi";
$locale['global_047'] = "Poslední příspěvek";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Přidáno";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Přesunul";
$locale['global_053'] = "Nezačali jste zatím žádné fórum.";
$locale['global_054'] = "Dosud jste nezveřejnili žádné příspěvky ve fóru.";
$locale['global_055'] = "V poslední době jsou %u nové příspěvky v %u různých tématech";
$locale['global_056'] = "Sledovaná vlákna";
$locale['global_057'] = "Možnosti";
$locale['global_058'] = "Zastavit sledování";
$locale['global_059'] = "Nemáte žádné sledované vlákna.";
$locale['global_060'] = "Zastavit sledování tohoto vlákna?";
// Blog, News & Articles
$locale['global_070'] = "Přidal/a ";
$locale['global_070b'] = "Zobrazit všechny příspěvky od %s";
$locale['global_071'] = "dne ";
$locale['global_071b'] = "Autor";
$locale['global_072'] = "Pokračovat ve čtení";
$locale['global_073'] = " Komentáře";
$locale['global_073b'] = " Komentář";
$locale['global_074'] = " Čte";
$locale['global_074b'] = " Číst";
$locale['global_075'] = "Tisk";
$locale['print'] = "Tisk";
$locale['global_076'] = "Upravit";
$locale['global_077'] = "Zprávy";
$locale['global_078'] = "Žádné zprávy zatím nebyly zveřejněny";
$locale['global_079'] = "Kategorie:";
$locale['global_080'] = "Nekategorizováno";
$locale['global_081'] = "Domovská stránka novinky";
$locale['global_082'] = "Novinky";
$locale['global_083'] = "Naposledy aktualizováno";
$locale['global_084'] = "Zprávy kategorie";
$locale['global_085'] = "Všechny ostatní kategorie";
$locale['global_086'] = "Nejnovější zprávy";
$locale['global_087'] = "Nejvíce komentované zprávy";
$locale['global_088'] = "Nejvyšší hodnocení";
$locale['global_089'] = "Buďte první, kdo přidá komentář %s";
$locale['global_089a'] = "Buďte první, kdo ohodnotí %s";
$locale['global_089b'] = "Pohled na palec";
$locale['global_089c'] = "Zobrazení seznamu";
// Page Navigation
$locale['global_090'] = "Předchozí";
$locale['global_091'] = "Další";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " z ";
$locale['global_094'] = " mimo ";
// Host, menu
$locale['global_100'] = "Přihlásit se";
$locale['global_101'] = "Přihlašovací ID";
$locale['global_101a'] = "Zadejte uživatelské jméno";
$locale['global_101b'] = "Zadejte email";
$locale['global_101c'] = "Zadejte e-mail nebo uživatelské jméno";
$locale['global_102'] = "Heslo";
$locale['global_103'] = "Zůstat přihlášen";
$locale['global_104'] = "Přihlásit se";
$locale['global_105'] = "Ještě nejste členem? [LINK]Klikněte zde[/LINK] zaregistrovat se.";
$locale['global_106'] = "[LINK]Zapomenuté heslo?[/LINK]";
$locale['global_107'] = "Registrovat";
$locale['global_108'] = "Ztracené heslo";
$locale['global_109'] = "Přihlásit se";
// Člen menu
$locale['global_120'] = "Přizpůsobte si stránku profilu";
$locale['global_121'] = "Soukromé zprávy";
$locale['global_122'] = "Seznam členů";
$locale['global_123'] = "Administrace webu";
$locale['global_124'] = "Odhlásit se";
$locale['global_125'] = "Ty máš %u nový ";
$locale['global_126'] = "zpráva";
$locale['global_127'] = "zprávy";
$locale['global_128'] = "podáni";
$locale['global_129'] = "podání";
// Uživatel, menu
$locale['UM060'] = "Přihlášení";
$locale['UM061'] = "Uživatelské jméno";
$locale['UM061a'] = "E-mail";
$locale['UM061b'] = "Uživatelské jméno nebo email";
$locale['UM062'] = "Heslo";
$locale['UM063'] = "Zapamatovat si mě na tomto počítači";
$locale['UM064'] = "Přihlášení";
$locale['UM065'] = "Ještě nejste členem? [LINK]Klikněte zde[/LINK] zaregistrovat se.";
$locale['UM066'] = "Zapomněli jste heslo?<br/>[LINK]Požádejte o nový[/LINK].";
$locale['UM067'] = "(Nedoporučuje se na veřejném nebo sdíleném počítači)";
$locale['UM080'] = "Upravit profil";
$locale['UM081'] = "Soukromé zprávy";
$locale['UM082'] = "Seznam členů";
$locale['UM083'] = "Administrace webu";
$locale['UM084'] = "Odhlásit se";
$locale['UM085'] = "Ty máš %u nový ";
$locale['UM086'] = "zpráva";
$locale['UM087'] = "zprávy";
$locale['UM088'] = "Moje sledovaná vlákna";
// Podání (news, link, article)
$locale['UM089'] = "Přidat...";
$locale['UM090'] = "Odeslat novinku";
$locale['UM091'] = "Odeslat odkaz";
$locale['UM092'] = "Odeslat článek";
$locale['UM093'] = "Odeslat fotku";
$locale['UM094'] = "Odeslat stahování";
$locale['UM095'] = "Odeslat blog";
$locale['UM102'] = "Odeslat FAQ";
// Uživatelský panel
$locale['UM096'] = "Vítejte: ";
$locale['UM097'] = "Osobní menu";
$locale['UM101'] = "Přepnout jazyk";
// Soukromé zprávy, měřiče
$locale['UM098'] = "PM Doručená pošta :";
$locale['UM099'] = "PM Odeslaná pošta :";
$locale['UM100'] = "PM Archiv :";
// Klíčová slova a meta tagy
$locale['tags'] = "Tagy";
// Captcha
$locale['global_150'] = "Ověřovací kód:";
$locale['global_151'] = "Zadejte ověřovací kód:";
// Patička, podval, počítadlo návštěv
$locale['global_170'] = "návštěvy";
$locale['global_171'] = "návštěv";
$locale['global_172'] = "Doba vykreslování: %s sekund";
$locale['global_173'] = "Dotazy";
$locale['global_174'] = "Použitá paměť";
$locale['global_175'] = "Průměrný: %s sekund";
$locale['global_176'] = "Zásady ochrany osobních údajů";
// Admin Navigation
$locale['global_180'] = "Administrace";
$locale['global_181'] = "Vraťte se na stránku";
$locale['global_182'] = "Heslo správce není zadáno nebo je nesprávné.";
// Smíšené nastavení, údržba
$locale['global_190'] = "Režim údržby byl aktivován";
$locale['global_191'] = "Vaše IP adresa je v současné době na černé listině.";
$locale['global_192'] = "Platnost přihlašovací relace vypršela. Chcete-li pokračovat, přihlaste se znovu.";
$locale['global_193'] = "Nelze nastavit soubor cookie pro dokumenty. Ujistěte se, že máte k dispozici cookies, abyste se mohli správně přihlásit.";
$locale['global_194'] = "Tento účet je momentálně pozastaven.";
$locale['global_195'] = "Tento účet nebyl aktivován.";
$locale['global_196'] = "Neplatné uživatelské jméno či heslo.";
$locale['global_197'] = "Prosím, počkejte, než vás převezmeme ...<br/><br/>[ [LINK]Nebo klikněte zde, pokud nechcete čekat[/LINK] ]";
$locale['global_198'] = "UPOZORNĚNÍ: INSTALAČNÍ SOUBOR DETEKOVÁN, PROSÍM VYMAZEJTE SOUBOR INSTALL.PHP";
$locale['global_199'] = "UPOZORNĚNÍ: heslo administrátoru není nastaveno, klepněte na tlačítko OK [LINK]Upravit profil[/LINK] nastavit.";
//Tituly
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Hledat";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Fórum";
//Vzhledy, design
$locale['global_210'] = "Přeskočit na obsah";
$locale['global_300'] = "Žádná téma nebyla nalezena";
$locale['global_301'] = "Je nám líto, ale tuto stránku nelze zobrazit. Vzhledem k některým okolnostem nelze nalézt téma webu.
  Pokud jste správcem webu, použijte prosím FTP klienta pro nahrání libovolného motivu určeného pro PHP-Fusion 9 do složky témat.
  Po nahrání zkontrolujte nastavení tématu a zjistěte, zda je vybrané téma správně nahráno do vašeho adresáře témat.
  Vezměte prosím na vědomí, že nahraná složka témat musí mít přesně stejný název (včetně znakového případu, který je důležitý na serverech se systémem Unix)
  Jak je vybráno na stránce Nastavení témat.<br/><br/>Pokud jste řádným členem tohoto webu, kontaktujte prosím naše stránky administrátor přes [SITE_EMAIL] e-mail a nahlásit tento problém.";
$locale['global_302'] = "Téma vybraná v hlavních nastaveních neexistuje nebo je neúplná!";
// JavaScript není povolen
$locale['global_303'] = "Ach ne! Kde je JavaScript?<br/>Váš webový prohlížeč nemá povolen JavaScript nebo nepodporuje JavaScript.
Pro správné zobrazení tohoto webu nebo pro upgrade na webový prohlížeč, který podporuje JavaScript, povolte JavaScript ve webovém prohlížeči.";
// Správa uživatelů
$locale['global_400'] = "suspendovaný";
$locale['global_401'] = "zabanovaný";
$locale['global_402'] = "deaktivovaný";
$locale['global_403'] = "zrušený účet";
$locale['global_404'] = "utajený účet";
$locale['global_405'] = "utajený uživatel";
$locale['global_406'] = "Tento účet byl zakázán z tohoto důvodu:";
$locale['global_407'] = "Tento účet byl pozastaven až do ";
$locale['global_408'] = " Z následujícího důvodu:";
$locale['global_409'] = "Tento účet byl z bezpečnostních důvodů zakázán.";
$locale['global_410'] = "Důvodem je: ";
$locale['global_411'] = "Tento účet byl zrušen.";
$locale['global_412'] = "Tento účet byl anonymizovaný, pravděpodobně kvůli nečinnosti.";
// Ovládání SPAM
$locale['global_440'] = "Automatický zákaz od kontroly přetečení";
$locale['global_441'] = "Váš účet na [SITENAME] byl zakázán";
$locale['global_442'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] byl pro spoustu příspěvků v krátké době od IP [USER_IP], pozastavený. Jedná se o prevenci před SPAM-botmi s mnoha příspěvky.<br/>
Kontaktujte hlavního administrátora prostřednictvím [SITE_EMAIL], chcete-li účet obnovit, pokud se nejedná o narušení bezpečnosti.<br/>
S pozdravem,<br/>[SITEUSERNAME]";
// Ověřte třídu
$locale['global_450'] = "Dočasné pozastavení automaticky zrušené systémem";
$locale['global_451'] = "Dočasné pozastavení zrušené systémem na [SITENAME]";
$locale['global_452'] = "Ahoj USER_NAME,<br/>
Dočasné pozastavení účtu na [SITEURL] bylo zrušeno. Zde jsou vaše přihlašovací údaje:<br/>
Uživatelské jméno: USER_NAME<br/>Heslo: Skryté z bezpečnostních důvodů<br/>
Pokud jste heslo zapomněli, můžete ho obnovit pomocí následujícího odkazu: LOST_PASSWORD<br/>
S pozdravem,<br/>[SITEUSERNAME]";
$locale['global_453'] = "Ahoj USER_NAME,<br/>Dočasné pozastavení účtu na [SITEURL] bylo zrušeno.<br/>
S pozdravem,<br/>[SITEUSERNAME]";
$locale['global_454'] = "Účet byl znovu aktivován na [SITENAME]";
$locale['global_455'] = "Ahoj USER_NAME,<br/>
Byl jste naposledy přihlášeni v obnoveném účtu na [SITEURL] a váš účet již není označen jako neaktivní.<br/>
S pozdravem,<br/>[SITEUSERNAME]";
$locale['global_456'] = "Oznámení nového hesla pro [SITENAME]";
$locale['global_457'] = "Ahoj USER_NAME,
<br/>Nové heslo bylo pro váš účet nastaveno na [SITENAME]. Najdete zde nové přihlašovací údaje:<br/>
Uživatelské jméno: USER_NAME<br/>Heslo: [PASSWORD]<br/>S pozdravem,<br/>[SITEUSERNAME]";
$locale['global_458'] = "Bylo nastaveno nové heslo USER_NAME";
$locale['global_459'] = "Bylo nastaveno nové heslo USER_NAME, A e-mail nebyl odeslán. Ujistěte se, že uživatel byl informuován o nových podrobnostech.";
// Funkce velikosti bajtů
$locale['global_460'] = "Prázdný";
$locale['global_461'] = "Byty";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";

//Bezpečné přesměrování
$locale['global_500'] = "Budete přesměrováni %s, prosím, čekejte. Pokud nejste přesměrováni, klikněte sem.";
// Captcha jazyk
$locale['global_600'] = "Ověřovací kód";
$locale['global_601'] = "Musíte zadat správný ověřovací kód";
$locale['recaptcha'] = "cz";
// Odkazy na stránky
$locale['global_700'] = "Zobrazit více";
//Smíšený
$locale['global_900'] = "Nelze konvertovat HEX na DEC";
$locale['global_901'] = "Vložte médium";
//Výběr jazyka
$locale['global_ML100'] = "Jazyk:";
$locale['global_ML101'] = "- Zvolte jazyk -";
$locale['global_ML102'] = "Jazyk stránek";
$locale['global_ML103'] = "Přepnout jazyk";
// Kontrola povodní
$locale['flood'] = "Je zakázáno odeslat příspěvek, dokud nebude ukončene protečení. Počkejte prosím %s.";
$locale['no_image'] = "Bez obrázku";
$locale['send_message'] = "Poslat zprávu";
$locale['go_profile'] = "Jít na profil %s";
// Globální jedno slovo lokalizace
$locale['hello'] = "Ahoj!";
$locale['goodbye'] = "Sbohem!";
$locale['welcome'] = "Vítej zpět";
$locale['home'] = "Domů";

/// Stav
$locale['error'] = "Chyba!";
$locale['success'] = "Úspěch!";
$locale['enable'] = "Povolit";
$locale['disable'] = "Zakázat";
$locale['can'] = "můžete";
$locale['cannot'] = "nemůžete";
$locale['no'] = "Ne";
$locale['yes'] = "Ano";
$locale['off'] = "Vypnuto";
$locale['on'] = "Zapnuto";
$locale['or'] = "nebo";
$locale['by'] = "od";
$locale['in'] = "v";
$locale['of'] = "z";
$locale['and'] = "a";
$locale['na'] = "Nejsou k dispozici žádné informace";
$locale['joined'] = "Připojen od: ";

// Navigace
$locale['next'] = "Další";
$locale['previous'] = "Předchozí";
$locale['back'] = "Zpět";
$locale['forward'] = "Vpřed";
$locale['go'] = "Jít";
$locale['cancel'] = "Zrušit";
$locale['clear'] = "Vyčistit";
$locale['move'] = "Přesunout";
$locale['move_up'] = "Přesunout nahoru";
$locale['move_down'] = "Přesunout dólu";
$locale['load_more'] = "Vložte více položek";
$locale['load_end'] = "Načíst od začátku";

// Akce
$locale['add'] = "Přidat";
$locale['save'] = "Uložit";
$locale['save_changes'] = "Uložit změny";
$locale['save_and_close'] = "Uložit a Zavřít";
$locale['confirm'] = "Potvrdit";
$locale['update'] = "Aktualizace";
$locale['updated'] = "Aktualizováno";
$locale['remove'] = "Odstranit";
$locale['delete'] = "Vymazat";
$locale['search'] = "Hledat";
$locale['help'] = "Pomoc";
$locale['register'] = "Registrovat";
$locale['ban'] = "Ban";
$locale['reactivate'] = "Reaktivujte";
$locale['user'] = "Uživatel";
$locale['promote'] = "Podporovat";
$locale['show'] = "Zobrazit";
$locale['actions'] = "Akce";
$locale['language'] = "Jazyk";

// Osoby a identifikátory
$locale['you'] = "Vy";
$locale['me'] = "Mě";
$locale['they'] = "Oni";
$locale['we'] = "My";
$locale['us'] = "Nás";
$locale['he'] = "On";
$locale['she'] = "Ona";
$locale['it'] = "To";

//Tabulky
$locale['order'] = "Pořadí";
$locale['sort'] = "Seřadit";
$locale['id'] = "ID";
$locale['title'] = "Nadpis";
$locale['rights'] = "Práva";
$locale['info'] = "Info";
$locale['image'] = "Obrázek";

// Formuláře
$locale['choose'] = "Vyberte prosím jedno...";
$locale['no_opts'] = "Žádný výběr";
$locale['root'] = "Žádná kategorie";
$locale['choose-user'] = "Vyberte prosím uživatele ...";
$locale['choose-location'] = "Zvolte prosím místo";
$locale['parent'] = "Vytvořit jako nový nadřazený ..";
$locale['item_order'] = "Pořadí položek";
$locale['status'] = "Stav";
$locale['note'] = "Poznamenejte si tuto položku";
$locale['publish'] = "Publikovat";
$locale['unpublish'] = "Zrušit publikování";
$locale['sticky'] = "Připnut";
$locale['unsticky'] = "Odopnout";
$locale['draft'] = "Návrh";
$locale['settings'] = "Nastavení";
$locale['posted'] = "publikované";
$locale['profile'] = "Profil";
$locale['edit'] = "Upravit";
$locale['qedit'] = "Rychlé úpravy";
$locale['view'] = "Zobrazit";
$locale['login'] = "Přihlásit se";
$locale['logout'] = "Odhlásit se";
$locale['admin-logout'] = "Odhlášení admina";
$locale['message'] = "Soukromé zprávy";
$locale['logged'] = "Přihlášen jako ";
$locale['version'] = "Verze ";
$locale['browse'] = "Procházet...";
$locale['close'] = "Zavřít";
$locale['nopreview'] = "Náhled není k dispozici";
$locale['mark_as'] = "Označit jako";
$locale['preview'] = "Náhled";
$locale['custom'] = "Zvyk";
$locale['submit'] = "Odoslat";

// Zarovnání
$locale['left'] = "Vlevo";
$locale['center'] = "Uprostřed";
$locale['right'] = "Vpravo";

// Komentáře a hodnocení
$locale['comments'] = "Komentáře";
$locale['ratings'] = "Hodnocení";
$locale['comments_ratings'] = "Komentáře a Hodnocení";
$locale['user_account'] = "Uživatelský účet";
$locale['about'] = "O nás";

// Stav uživatele
$locale['online'] = "Online";
$locale['offline'] = "Offline";

// Slova pro formátování na jednotlivé a množné formy. Počet formulářů závisí na jazyku
$locale['fmt_submission'] = "předložení|předložení|předložení";
$locale['fmt_article'] = "článek|články|článků";
$locale['fmt_blog'] = "blog|blogy|blogů";
$locale['fmt_comment'] = "komentář|komentáře|komentářů";
$locale['fmt_vote'] = "hlas|hlasy|hlasů";
$locale['fmt_rating'] = "hodnocení|hodnocení|hodnocení";
$locale['fmt_day'] = "den|dny|dní";
$locale['fmt_download'] = "stažení|stažení|stažení";
$locale['fmt_follower'] = "sledovatel|sledovatelé|sledovatelů";
$locale['fmt_forum'] = "fórum|fóra|fór";
$locale['fmt_guest'] = "host|hosté|hostů";
$locale['fmt_hour'] = "hodina|hodiny|hodin";
$locale['fmt_item'] = "položka|položky|položek";
$locale['fmt_member'] = "člen|členové|členů";
$locale['fmt_message'] = "správa|zprávy|zpráv";
$locale['fmt_minute'] = "minuta|minuty|minut";
$locale['fmt_month'] = "měsíc|měsíce|měsíců";
$locale['fmt_news'] = "novinka|novinky|novinek";
$locale['fmt_photo'] = "fotka|fotky|fotek";
$locale['fmt_post'] = "příspěvek|příspěvky|příspěvků";
$locale['fmt_question'] = "otázka|otázky|otázek";
$locale['fmt_read'] = "přečtení|přečtení|přečtení";
$locale['fmt_second'] = "sekunda|sekundy|sekund";
$locale['fmt_shouts'] = "výkřik|výkřiky|výkřiků";
$locale['fmt_thread'] = "téma|témata|témat";
$locale['fmt_user'] = "uživatel|uživatelé|uživatelů";
$locale['fmt_views'] = "zobrazení|zobrazení|zobrazení";
$locale['fmt_weblink'] = "odkaz|odkazy|odkazů";
$locale['fmt_week'] = "týden|týdny|týdnů";
$locale['fmt_year'] = "rok|roky|let";
$locale['fmt_points'] = "bod|body|bodů";
$locale['fmt_admin'] = "admin|admini|adminů";
$locale['fmt_group'] = "skupina|skupiny|skupin";
$locale['fmt_category'] = "kategorie|kategorie|kategorií";
// include Defender locales
include __DIR__."/defender.php";
