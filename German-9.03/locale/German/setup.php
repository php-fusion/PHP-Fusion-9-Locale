<?php
// Index
$locale['setup_0000'] = "PHP-Fusion 9.0 Edition Installation";
$locale['setup_0002'] = "Herzlich Willkommen zur PHP-Fusion 9.0 Installation";
$locale['setup_0003'] = "Der Installer f&uuml;hrt dich durch die notwendigen Schritte, um das Content Management System PHP-Fusion auf deinen Server zu installieren.<br /><br />\n";
$locale['setup_0003'] .= "Solltest du in Zukunft weitere Hilfe ben&ouml;tigen, k&ouml;nntest du einen Blick in die <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=208' title='Online Dokumentation (Englisch)' target='_blank'>Online Dokumentation (Englisch)</a> von PHP-Fusion.co.uk werfen.<br /><br />";
$locale['setup_0003'] .= "Alternativ kannst du dich auch an die offiziellen Supportseiten f&uuml;r den deutschen Sprachraum wenden.<br />\n";
$locale['setup_0003'] .= "&raquo; <a href='http://www.php-fusion.at/' title='PHP-Fusion &Ouml;sterreich' target='_blank' class='strong'>PHP-Fusion &Ouml;sterreich</a><br />\n";
$locale['setup_0003'] .= "&raquo; <a href='http://www.phpfusion-deutschland.de/' title='PHP-Fusion Deutschland' target='_blank' class='strong'>PHP-Fusion Deutschland</a><br />\n";
$locale['setup_0005'] = "Ich habe die aktuellen <a href='https://php-fusion.co.uk/license/' target='_blank' title='Lizenzbedienungen'>Lizenzbedienungen</a> gelesen und akzeptiere diese ";
$locale['setup_0006'] = "PHP-Fusion 9 braucht mindestens PHP 5.5.9. Siehe unter <a href='https://www.php-fusion.co.uk/infusions/wiki/documentation.php?page=215'>System vorraussetzung</a> f&uuml;r mehr information.";
$locale['setup_0007'] = "Systems with OPCache installed must have <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> enabled.";
$locale['setup_5000'] = "Wenn du PHP-Fusion nutzten m&ouml;chtest, musst du die aktuellen Lizenzbedinungen akzeptieren.";
$locale['setup_0010'] = "9.0";
$locale['setup_0011'] = "de";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "PHP-Fusion Update";
$locale['setup_0022'] = "Willkommen zum PHP-Fusion Update Service";
$locale['setup_0023'] = "The upgrade service will guide you through the steps required to upgrade PHP-Fusion CMS on your server. Please follow these steps through and verify each information required.";
$locale['setup_0050'] = "Web Server";
$locale['setup_0051'] = "PHP Version";
$locale['setup_0052'] = "PHP Extension";
$locale['setup_0053'] = "OPCache Support";
$locale['setup_0054'] = "PDO Database Support";
$locale['setup_0055'] = "PHP Memory limit";
$locale['setup_0056'] = "Files Check Requirements";
$locale['setup_0101'] = "Einf&uuml;hrung";
$locale['setup_0102'] = "Datei und Ordner";
$locale['setup_0103'] = "Datenbankeinstellungen";
$locale['setup_0104'] = "Konfiguration und Datenbank";
$locale['setup_0105'] = "Core System konfigurieren";
$locale['setup_0106'] = "Administrator Account";
$locale['setup_0107'] = "Installation abgeschlossen";
$locale['setup_0109'] = "The minimum version of Apache needed to run PHP-Fusion without mod_rewrite enabled is 2.2.16.";
$locale['setup_0110'] = "Due to the settings for Server tokens in httpd.confg, it is impossible to determine the version of Apache without mod_rewrite, a minimum version of 2.2.16 is needed.";
$locale['setup_0112'] = "The phpinfo() function has been disabled for security reasons. To see your server's phpinfo() information, change your PHP settings or contact your server administrator.";
$locale['setup_0113'] = "Your PHP installation is too old. PHP-Fusion requires at least a minimum of 5.5.21. PHP versions higher than 5.6.5 or 5.5.21 provide built-in SQL injection protection for mysql databases. It is recommended to update.";
$locale['setup_0114'] = "PHP-Fusion requires you to enable the PHP extension in the following list";
$locale['setup_0115'] = "Enabled";
$locale['setup_0115a'] = "Not Enabled";
$locale['setup_0116'] = "PHP OPCache caching can improve your site's performance considerably. It is <strong>highly recommended</strong> to have <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPCache</a> installed on your server.";
$locale['setup_0118'] = "Your web server does not appear to support PDO (PHP Data Objects). Ask your hosting provider if they support the native PDO extension.";
$locale['setup_0119a'] = "Consider increasing your PHP memory limit to %memory_minimum_limit to help prevent errors in the installation process.";
$locale['setup_0119b'] = "Increase the memory limit by editing the memory_limit parameter in the file ".get_cfg_var('cfg_file_path')." and then restart your web server (or contact your system administrator or hosting provider for assistance).";
$locale['setup_0119c'] = "Contact your system administrator or hosting provider for assistance with increasing your PHP memory limit.";
$locale['setup_stepx'] = "Schritt %1\$d: %2\$s";

// Buttons
$locale['setup_0120'] = "Konfiguration beenden";
$locale['setup_0121'] = "Weiter";
$locale['setup_0122'] = "Nochmals versuchen";
$locale['setup_0124'] = "Go to Recovery Options";
$locale['setup_0125'] = "Uninstalling in Progress. Please wait...";
$locale['setup_0130'] = "Xdebug settings";
$locale['setup_0131'] = "xdebug.max_nesting_level is set to";
$locale['setup_0132'] = "Set {%code%} in your PHP configuration as some pages in your PHP-Fusion site will not work when this setting is too low.";
$locale['setup_0134'] = "All required files passed the file writable requirements.";
$locale['setup_0135'] = "In order for setup to continue, the following files and folders should be writable. Please chmod the files to 755 o 777 to continue";
$locale['setup_0136'] = "Not Writable (Failed)";
$locale['setup_0137'] = "Writable (Pass)";
$locale['setup_0138'] = "Database connection established";
$locale['setup_0139'] = "Database column selection established";
$locale['setup_0140'] = "Database is available and ready for installation";
$locale['setup_0141'] = "Database permissions and access verified";
$locale['setup_0142'] = "config.php file created";
$locale['setup_0143'] = "The specified table prefix is already in use and is running. The installer will proceed with updating differences as required";
$locale['setup_0144'] = "Database Diagnostics Completed";

// Step 1
$locale['setup_1000'] = "Bitte w&auml;hle deine Sprache";
$locale['setup_1001'] = "Du kannst weitere Sprachpakete auf der <a href='https://www.php-fusion.co.uk/downloads.php#langpacks' target='_blank' title='Offizielle PHP-Fusion Support Seite (Englisch)'><strong>offiziellen PHP-Fusion Supportseite (Englisch)</strong></a> herunterladen.";
$locale['setup_1002'] = "Willkommen zum PHP-Fusion 9.0 Wiederherstellungsprogramm";
$locale['setup_1003'] = "Wir haben festgestellt, dass bereits eine PHP-Fusion Installation installiert ist. Bitte w&auml;hle einen der nachfolgenden Schritte.";
$locale['setup_1004'] = "Installation erneuern";
$locale['setup_1005'] = "Du kannst die Installation komplett erneuern. Das bedeutet, alle Datenbanktabellen werden sammt Inhalt entfernt und eine neue Installation wird ausgef&uuml;hrt.<br />";
$locale['setup_1006'] = "Bitte erstelle ein Backup deiner <em>config.php</em>-Datei! Diese Datei wird bei einer Neuinstallation entfernt.";
$locale['setup_1007'] = "Deinstallieren und Neu Starten";
$locale['setup_1008'] = "Coresystem Installer";
$locale['setup_1009'] = "Hier kannst du deine Coresysteme installieren beziehungsweise deinstallieren.";
$locale['setup_1010'] = "Zum Coresystem Installer";
$locale['setup_1011'] = "Seiteninhaber-Account bearbeiten";
$locale['setup_1012'] = "Seiteninhaber-Account-Details k&ouml;nnen hier bearbeitet werden, ohne ein neues Passwort anzufordern oder einen neuen Benutzer als neuen Seiteninhaber anzulegen.";
$locale['setup_1013'] = "Seiteninhaber-Account bearbeiten";
$locale['setup_1014'] = ".htaccess neu schreiben";
$locale['setup_1015'] = "Die vorhandene Datei wird geleert und mit dem Standardinhalt beschrieben.";
$locale['setup_1017'] = "Installer verlassen";
$locale['setup_1018'] = "Du kannst den Installer einfach verlassen, in dem du auf den Button unterhalb klickst.<br />Die Datei <em>config_temp.php</em> wird wieder auf <em>config.php</em> umbenannt.";
$locale['setup_1019'] = "Installer verlassen";
$locale['setup_1020'] = ".htaccess file created/updated";

// Step 2
$locale['setup_1090'] = "Files";
$locale['setup_1091'] = "Status";
$locale['setup_1092'] = "Database Configurations and Driver";
$locale['setup_1106'] = "Server and File Structure Requirements Diagnostics";

// Step 3 - Access criteria
$locale['setup_1200'] = "Datenbank- und Seiteneinstellungen";
$locale['setup_1201'] = "Bitte gib im nachstehenden Formular deine Datenbank Zugangsdaten an.";
$locale['setup_1202'] = "Datenbank Host";
$locale['setup_1203'] = "Datenbank Benutzername";
$locale['setup_1204'] = "Datenbank Passwort";
$locale['setup_1205'] = "Datenbank Name";
$locale['setup_1206'] = "Tabellenprefix";
$locale['setup_1207'] = "Cookieprefix";
$locale['setup_1208'] = "PDO aktivieren?";

// Step 4 - Database Setup
$locale['setup_1210'] = "Nein";
$locale['setup_1211'] = "Ja";
$locale['setup_1212'] = "W&auml;hle die Sprachen aus,<br />die du benutzen m&ouml;chtst";
$locale['setup_1213'] = "Name des Seiteninhabers";
$locale['setup_1214'] = "Site Name";
$locale['setup_1215'] = "PHP-Fusion Powered Website";
$locale['setup_1216'] = "PHP-Fusion is a lightweight open source content management system (CMS) written in PHP.";
$locale['setup_1217'] = "Your account is updated. Please use the new credentials from now on.";
$locale['setup_1220'] = "The name of the database you want to run PHP-Fusion";
$locale['setup_1221'] = "Your MYSQL username";
$locale['setup_1222'] = "...and your MYSQL password";
$locale['setup_1223'] = "Make this very unique to secure your database";
$locale['setup_1224'] = "Browser Cookie Identifier Prefix";
$locale['setup_1225'] = "e.g. localhost";
$locale['setup_1307'] = "Bitte &uuml;berpr&uuml;fe ob die <em>config.php</em>-Datei schreibbar ist.";
$locale['setup_1310'] = "Es konnte keine Verbindung hergestellt werden.";
$locale['setup_1311'] = "Die angegebene MySQL-Datenbank existiert nicht.";
$locale['setup_1313'] = "Das Tabellenprefix ist in Verwendung. Die Datenbanktabellen werden nicht erstellt. Bitte beginne neu oder &uuml;berspringe den Schritt.";
$locale['setup_1315'] = "Bitte &uuml;berpr&uuml;fe, ob dein MySQL-Benutzer Lese-, Schreib- und L&ouml;sch-Berechtigungen f&uuml;r die angegebene Datenbank besitzt.";
$locale['setup_1317'] = "Du musst alle MySQL-Datenbankfelder ausf&uuml;llen, damit die Verbindung zu stande kommen kann.";

// Step 6 - Super Admin login
$locale['setup_1500'] = "Seiteninhaber-Account";
$locale['setup_1501'] = "Einstellungen zu dem Seiteninhaber-Account.";
$locale['setup_1504'] = "Benutzername";
$locale['setup_1505'] = "Loginpasswort";
$locale['setup_1506'] = "Loginpasswort wiederholen";
$locale['setup_1507'] = "Administrationspasswort";
$locale['setup_1508'] = "Administrationspasswort wiederholen";
$locale['setup_1509'] = "E-Mail Adresse";
$locale['setup_1510'] = "Website Email address:";
$locale['setup_1511'] = "Auswahl der Website Region:";
$locale['setup_1512'] = "Seiten Sprachen Installation:";
$locale['setup_1513'] = "Seiten eigentuemer";

// Step 6 - User details validation
$locale['setup_5010'] = "Der Benutzername enth&auml;hlt ung&uuml;ltige Zeichen.";
$locale['setup_5011'] = "Du musst einen Benutzernamen angeben.";
$locale['setup_5012'] = "Deine beiden Loginpassw&ouml;rter stimmen nicht &uuml;berein.";
$locale['setup_5013'] = "Das Loginpasswort ist ung&uuml;ltig, bitte ben&uuml;tzte nur Alphanummerische Zeichen.<br />Das Loginpasswort muss mindestens 8 Zeichen lang sein.";
$locale['setup_5015'] = "Deine beiden Administrationspassw&ouml;rter stimmen nicht &uuml;berein";
$locale['setup_5016'] = "Dein Loginpasswort darf nicht identisch mit dem Administrations Passwort sein.";
$locale['setup_5017'] = "Das Administrationspasswort ist ung&uuml;ltig, bitte benutzte nur Alphanummerische Zeichen.<br />Das Administrationspasswort muss mindestens 8 Zeichen lang sein.";
$locale['setup_5020'] = "Du musst deine E-Mail Adresse angeben.";

// Progress Reports
$locale['setup_1600'] = "Installing ";
$locale['setup_1601'] = "Updating table structure on ";
$locale['setup_1602'] = "Adding new column on ";
$locale['setup_1603'] = "Populating data ";

// Step 6 - Admin Panels
$locale['setup_3000'] = "Administratoren";
$locale['setup_3002'] = "Artikel";
$locale['setup_3003'] = "Banner";
$locale['setup_3004'] = "BB Codes";
$locale['setup_3005'] = "Blacklist";
$locale['setup_3006'] = "Kommentare";
$locale['setup_3007'] = "Eigene Seiten";
$locale['setup_3008'] = "Datenbankbackup";
$locale['setup_3010'] = "Downloads";
$locale['setup_3011'] = "FAQs";
$locale['setup_3012'] = "Foren";
$locale['setup_3013'] = "Bilder";
$locale['setup_3014'] = "Infusionen";
$locale['setup_3015'] = "Infusionen Panels";
$locale['setup_3016'] = "Mitglieder";
$locale['setup_3018'] = "News";
$locale['setup_3019'] = "Panels";
$locale['setup_3020'] = "Galerie";
$locale['setup_3021'] = "PHP Info";
$locale['setup_3022'] = "Umfragen";
$locale['setup_3023'] = "Navigationslinks";
$locale['setup_3024'] = "Smileys";
$locale['setup_3026'] = "Update";
$locale['setup_3027'] = "Benutzergruppen";
$locale['setup_3029'] = "Weblinks";
$locale['setup_3030'] = "Allgemeines";
$locale['setup_3031'] = "Zeit und Datum";
$locale['setup_3033'] = "Registrierung";
$locale['setup_3035'] = "Sonstiges";
$locale['setup_3036'] = "Private Nachrichten";
$locale['setup_3037'] = "Benutzerfelder";
$locale['setup_3038'] = "Forenr&auml;nge";
$locale['setup_3041'] = "Benutzerverwaltung";
$locale['setup_3044'] = "Sicherheit";
$locale['setup_3047'] = "Adminpassw&ouml;rter zur&uuml;cksetzten";
$locale['setup_3048'] = "Fehlerlog";
$locale['setup_3049'] = "Benutzerlog";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Spracheinstellungen";
$locale['setup_3052'] = "Permalinks";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Theme";
$locale['setup_3057'] = "Migrationstool";
$locale['setup_3058'] = "Themeeinstellungen";

//Multilanguage table rights
$locale['setup_3200'] = "Artikel";
$locale['setup_3201'] = "Eigene Seiten";
$locale['setup_3202'] = "Downloads";
$locale['setup_3203'] = "FAQs";
$locale['setup_3204'] = "Foren";
$locale['setup_3205'] = "News";
$locale['setup_3206'] = "Galerie";
$locale['setup_3207'] = "Umfragen";
$locale['setup_3208'] = "E-Mail Templates";
$locale['setup_3209'] = "Weblinks";
$locale['setup_3210'] = "Navigationslinks";
$locale['setup_3211'] = "Panels";
$locale['setup_3212'] = "Forumr&auml;nge";
$locale['setup_3213'] = "Blog";

// Step 6 - Navigation Links
$locale['setup_3300'] = "Startseite";
$locale['setup_3302'] = "Downloads";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Forum";
$locale['setup_3305'] = "Kontakt";
$locale['setup_3307'] = "Weblinks";
$locale['setup_3308'] = "Galerie";
$locale['setup_3309'] = "Suche";
$locale['setup_3310'] = "Weblink einsenden";
$locale['setup_3311'] = "News einsenden";
$locale['setup_3312'] = "Artikel einsenden";
$locale['setup_3313'] = "Foto einsenden";
$locale['setup_3314'] = "Download einsenden";
$locale['setup_3315'] = "Einsendungen";
$locale['setup_3316'] = "Shoutbox";
$locale['setup_3317'] = "Blog einsenden";
$locale['setup_3318'] = "Blogarchiv";
$locale['setup_3319'] = "Neueste Diskussionen";
$locale['setup_3320'] = "Eigene Diskussionen";
$locale['setup_3321'] = "Verfolgte Forenthemen";
$locale['setup_3322'] = "Unbeantwortete Forenthemen";
$locale['setup_3323'] = "Ungel&ouml;ste Forenthemen";
$locale['setup_3324'] = "Neues Forenthema er&ouml;ffnen";
$locale['setup_3325'] = "letzter Artikel";
$locale['setup_3326'] = "Letzter Download";
$locale['setup_3327'] = "FAQ einsenden";

// Stage 6 - Panels
$locale['setup_3400'] = "Navigation";
$locale['setup_3401'] = "Benutzer Online";
$locale['setup_3402'] = "Forenthemen";
$locale['setup_3404'] = "Willkommensnachricht";
$locale['setup_3405'] = "Forenthemenliste";
$locale['setup_3406'] = "Benutzerinformationen";
$locale['setup_3407'] = "Mitgliederumfragen";
$locale['setup_3408'] = "RSS";

// Stage 6 - News Categories
$locale['setup_3500'] = "Fehler";
$locale['setup_3501'] = "Downloads";
$locale['setup_3502'] = "Spiele";
$locale['setup_3503'] = "Grafiken";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Journal";
$locale['setup_3506'] = "Mitglieder";
$locale['setup_3507'] = "Modifikationen";
$locale['setup_3508'] = "Filme";
$locale['setup_3509'] = "Netzwerk";
$locale['setup_3510'] = "News";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Sicherheit";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Themes";
$locale['setup_3515'] = "Betriebssystem";

// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Seiten Administrator";
$locale['setup_3601'] = "Administrator";
$locale['setup_3602'] = "Moderator";
$locale['setup_3603'] = "Anf&auml;nger";
$locale['setup_3604'] = "Jung Mitglied";
$locale['setup_3605'] = "Mitglied";
$locale['setup_3606'] = "Senior Mitglied";
$locale['setup_3607'] = "Veteran Mitglied";
$locale['setup_3608'] = "Fusioneer";

// Stage 6 - Sample Smileys
$locale['setup_3620'] = "L&auml;cheln";
$locale['setup_3621'] = "Zwinkern";
$locale['setup_3622'] = "Traurig";
$locale['setup_3623'] = "Stirnrunzeln";
$locale['setup_3624'] = "Geschockt";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Cool";
$locale['setup_3627'] = "Grinsen";
$locale['setup_3628'] = "B&ouml;se";
$locale['setup_3629'] = "Like";

// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Kontaktinformationen";
$locale['setup_3642'] = "Sonstige Informationen";
$locale['setup_3643'] = "Optionen";
$locale['setup_3644'] = "Statistiken";
$locale['setup_3645'] = "Privatsph&auml;hre";

// Stage 6 - Forum Tags
$locale['setup_3660'] = "Seiten Information";
$locale['setup_3661'] = "Discussions regarding the management of this website";

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
$locale['setup_3650'] = "Herzlich Willkommen auf deiner neuen Webseite!<br /><br />";

// Final message
$locale['setup_1600'] = "Die Installation ist abgeschlossen.";
$locale['setup_1601'] = "PHP-Fusion 9.0 kann nun benutzt weerden. Die Installation ist abgeschlossen. Bitte benenne die Datei <em>config_temp.php</em> zu <em>config.php</em> um.<br/>";
$locale['setup_1602'] = "<strong>Hinweis! Nachdem du deine Seite aufgerufen hast, bitten wir dich, den Ordner <em>/install</em> auf deinem Webspace zu entfernen und die Schreibrechte der <em>config.php</em>-Datei auf 0644 zu setzten. Anderenfalls gehst du ein gro&szlig;es Sicherheitsrisiko ein!</strong>";
$locale['setup_1603'] = "Vielen Dank, dass du PHP-Fusion verwendest!";

// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%d. %B %Y %H:%M:%S";
$locale['setup_3702'] = "%d.%m.%Y um %H:%M";
$locale['setup_3703'] = "%d. %B %Y";
$locale['setup_3704'] = "%d. %B %Y %H:%M:%S";

// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "E-Mail Templates";
$locale['setup_3801'] = "Neue private Nachricht";
$locale['setup_3802'] = "Neue private Nachricht auf [SITENAME]";
$locale['setup_3803']  = "Hallo [RECEIVER],\n\n";
$locale['setup_3803'] .= "Du hast eine neue private Nachricht auf unserer Seite erhalten.\n\n";
$locale['setup_3803'] .= "Die Nachricht wurde von [USER] mit dem Betreff \"[SUBJECT]\" versendet. Du kannst die Nachricht, nachdem du dich mit deinem Account angemeldet hast, lesen.\n\n";
$locale['setup_3803'] .= "Wenn du keine Benachrichtungen erhalten willst, &auml;ndere bitte die Einstellungen in den privaten Nachrichten.\n\n";
$locale['setup_3803'] .= "Mit freundlichen Gr&uuml;&szlig;en [SENDER]";
$locale['setup_3804'] = "Neuer Forenbeitrag";
$locale['setup_3805'] = "Neuer Forenbeitrag auf [SITENAME]";
$locale['setup_3806']  = "Hallo [RECEIVER],\n\n";
$locale['setup_3806'] .= "es wurde ein neuer Forenbeitrag in einem von dir abonnierten Thema verfasst.\n\n";
$locale['setup_3806'] .= "Die Nachricht wurde im Thema mit dem Betreff \"[SUBJECT]\" verfasst. Du kannst das Thema hier aufrufen:\n";
$locale['setup_3806'] .= "[THREAD_URL]\n\n";
$locale['setup_3806'] .= "Wenn du keine Benachrichtung erhalten willst, klicke bitte beim Thema auf \"Thema nicht mehr verfolgen\".\n\n";
$locale['setup_3806'] .= "Mit freundlichen Gr&uuml;&szlig;en [SENDER]";
$locale['setup_3807'] = "Kontaktformular";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";

// Official Supported System List
$locale['articles']['title'] = "Artikel";
$locale['articles']['description'] = "Ein standardm&auml;&szlig;iges Dokumentationssystem.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Ein standardm&auml;&szlig;iges Blogsystem.";
$locale['downloads']['title'] = "Downloads";
$locale['downloads']['description'] = "Ein standardm&auml;&szlig;iges Downloadsystem.";
$locale['faqs']['title'] = "FAQs";
$locale['faqs']['description'] = "Ein FAQ System f&uuml;r h&auml;ufig gestellte Fragen.";
$locale['forums']['title'] = "Forum";
$locale['forums']['description'] = "Ein Bulletin Board Forum System.";
$locale['news']['title'] = "News";
$locale['news']['description'] = "Ein simples und einfaches Newssystem.";
$locale['photos']['title'] = "Galerie";
$locale['photos']['description'] = "Eine kleines Fotogaleriesystem.";
$locale['polls']['title'] = "Umfragen";
$locale['polls']['description'] = "Ein Umfragensystem, in dem angemeldete Benutzer abstimmen k&ouml;nnen.";
$locale['weblinks']['title'] = "Weblinks";
$locale['weblinks']['description'] = "Ein Weblink-Datenbanksystem.";
$locale['install'] = "System installieren";

?>