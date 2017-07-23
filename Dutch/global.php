<?php
/**
 * Dutch Locale
 *
 * @locale charset      ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region       ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale select2      refer to path includes/dynamics/select2/select2_locale_{value}.js
 * @locale tinymce      refer to path includes/jscripts/tinymce/langs/{value}.js
 * @locale phpmailer         refer to path includes/classes/PHPMailer/language/phpmailer.lang-{value}.php
 * @locale password_strength refer to path includes/dynamics/password/lang/{value}.js
* @package locale/Dutch
 
 * Vertaald door Douwe Yntema
 * Nederlandstalige support site: http://www.phpfusion-nederlands.info 
 */
 
// setlocale(LC_TIME, "nl","NL"); // Voor Windows Server
setlocale(LC_TIME, "nl_NL"); // Voor Linux Server
$locale['charset'] = "ISO-8859-1";
$locale['region'] = "NL";
$locale['xml_lang'] = "nl";
$locale['short_lang_name'] = "nl";
$locale['tinymce'] = "nl";
$locale['select2'] =  "nl";
$locale['phpmailer'] = "nl";
$locale['datepicker'] = "nl-nl";
$locale['datepicker_js'] = "DD-M-YYYY H:mm:ss";
$locale['datepicker_php'] = "d-m-Y H:i:s";
$locale['password_strength'] = "nl";
// Full & Short Months
$locale['months'] = "&nbsp|Januari|Februari|Maart|April|Mei|Juni|Juli|Augustus|September|Oktober|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Maa|Apr|Mei|Jun|Jul|Aug|Sept|Okt|Nov|Dec";
$locale['weekdays'] = "Zondag|Maandag|Dinsdag|Woensdag|Donderdag|VrijdagFriday|Zaterdag";
// Timers
$locale['year'] = "jaar";
$locale['year_a'] = "jaren";
$locale['month'] = "maand";
$locale['month_a'] = "maanden";
$locale['day'] = "dag";
$locale['day_a'] = "dagen";
$locale['hour'] = "uur";
$locale['hour_a'] = "uren";
$locale['minute'] = "minuut";
$locale['minute_a'] = "minuten";
$locale['second'] = "seconde";
$locale['second_a'] = "seconden";
$locale['just_now'] = "op dit moment";
$locale['ago'] = "geleden";
// Geo
$locale['street1'] = "Adres 1";
$locale['street2'] = "Adres 2";
$locale['city'] = "Woonplaats";
$locale['postcode'] = "Postcode";
$locale['sel_country'] = "Selecteer land";
$locale['sel_state'] = "Selecteer Provincie";
$locale['sel_user'] = "Geef a.u.b. een gebruikersnaam op";
$locale['add_language'] = "Voeg vertaling toe";
$locale['add_lang'] = "Toevoegen %s";
$locale['other_states'] = "Andere provincie";
// Name
$locale['name'] = 'Volledige Naam';
$locale['username_pretext'] = 'Jou openbare gebruikersnaam is dezelfde als jou gebruikersprofiel op: %s %s';
$locale['first_name'] = 'Voornaam';
$locale['middle_name'] = 'Tussenvoegsel';
$locale['last_name'] = 'Achternaam';
// Documents
$locale['doc_type'] = "Document type";
$locale['doc_series'] = "Serie";
$locale['doc_number'] = "Nummer";
$locale['doc_authority'] = "Eigenaar";
$locale['doc_date_issue'] = "Uitgiftedatum";
$locale['doc_date_expire'] = "Verloopt op";
// Standard User Levels
$locale['user0'] = "Publiek";
$locale['user1'] = "Lid";
$locale['user2'] = "Beheerder";
$locale['user3'] = "Superbeheerder";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Gast";
$locale['user_anonymous'] = "Anonieme Gebruiker";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Actief";
$locale['status1'] = "Geband";
$locale['status2'] = "Nog te activeren";
$locale['status3'] = "Geschorst";
$locale['status4'] = "Veiligheids Verbanning";
$locale['status5'] = "Geannuleerd";
$locale['status6'] = "Anoniem";
$locale['status7'] = "Gedeactiveerd";
$locale['status8'] = "Inactief";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Navigatie";
$locale['global_002'] = "Geen links aangemaakt\n";
$locale['global_003'] = "Niets om voorvertoning van te geven";
// Users Online
$locale['global_010'] = "Gebruikers Online";
$locale['global_011'] = "Gasten online";
$locale['global_012'] = "Leden online";
$locale['global_013'] = "Geen leden online";
$locale['global_014'] = "Totaal aantal leden";
$locale['global_015'] = "Niet-geactiveerde leden";
$locale['global_016'] = "Nieuwste lid";
$locale['global_017'] = "Navigatie aan/uit";
// Forum Side panel
$locale['global_020'] = "Forum Onderwerpen";
$locale['global_021'] = "Nieuwste onderwerpen";
$locale['global_022'] = "Actiefste onderwerpen";
$locale['global_023'] = "Geen onderwerpen aanwezig";
$locale['global_024'] = "Participated Discussions";
$locale['global_027'] = "Onbeantwoorde Onderwerpen";
$locale['global_028'] = "Onopgeloste Vragen";
// Comments Side panel
$locale['global_025'] = "Laatste Commentaar";
$locale['global_026'] = "Geen commentaar beschikbaar";
// Articles Side panel
$locale['global_030'] = "Laatste Artikelen";
$locale['global_031'] = "Geen artikelen beschikbaar";
// Downloads Side panel
$locale['global_032'] = "Laatste Downloads";
$locale['global_033'] = "Geen Downloads beschikbaar";
// Welcome panel
$locale['global_035'] = "Welkom";
// Latest Active Forum Threads panel
$locale['global_040'] = "Hieronder de recente Forum onderwerpen.";
$locale['global_041'] = "Mijn recente onderwerpen";
$locale['global_042'] = "Mijn recente berichten";
$locale['global_043'] = "Nieuwe berichten";
$locale['global_044'] = "Onderwerpen";
$locale['global_045'] = "X bekeken";
$locale['global_046'] = "Antw.";
$locale['global_047'] = "Laatste bericht";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Gepost";
$locale['global_050'] = "Auteur";
$locale['global_051'] = "Enquête";
$locale['global_052'] = "Verplaatst";
$locale['global_053'] = "U heeft nog geen onderwerpen in het forum gestart.";
$locale['global_054'] = "U heeft nog geen berichten in het forum geplaatst.";
$locale['global_055'] = "Er zijn %u nieuwe berichten sinds uw laatste bezoek.";
$locale['global_056'] = "Onderwerpen die ik volg";
$locale['global_057'] = "Opties";
$locale['global_058'] = "Stop";
$locale['global_059'] = "U volgt geen enkel onderwerp.";
$locale['global_060'] = "Stop met volgen van dit onderwerp?";
// Blog, News & Articles
$locale['global_070'] = "Gepost door ";
$locale['global_070b'] = "Toon alle posts door %s";
$locale['global_071'] = "op ";
$locale['global_071b'] = "Auteur";
$locale['global_072'] = "Lees meer";
$locale['global_073'] = " reacties";
$locale['global_073b'] = " reactie";
$locale['global_074'] = " keer gelezen";
$locale['global_074b'] = " Lees";
$locale['global_075'] = "Afdrukken";
$locale['print'] = 'Afdrukken';
$locale['global_076'] = "Wijzigen";
$locale['global_077'] = "Nieuws";
$locale['global_078'] = "Er is nog geen nieuws geplaatst";
$locale['global_079'] = "In ";
$locale['global_080'] = "Nog niet gecategoriseerd";
$locale['global_081'] = "Nieuws Index";
$locale['global_082'] = "Nieuws";
$locale['global_083'] = "Last Updated";
$locale['global_084'] = "Nieuws Categorie";
$locale['global_085'] = "Alle Andere Categorieen";
$locale['global_086'] = "Meest Recente Nieuws";
$locale['global_087'] = "Meest Gereageerde Nieuws";
$locale['global_088'] = "Hoogst gewardeerde Nieuws";
$locale['global_089'] = "Wees de eerste om te reageren op %s";
$locale['global_089a'] = "Wees de eerste om te beoordelen van %s";
$locale['global_089b'] = "Afbeelding overzicht";
$locale['global_089c'] = "Lijst overzicht";
// Page Navigation
$locale['global_090'] = "Vorige";
$locale['global_091'] = "Volgende";
$locale['global_092'] = "Pagina ";
$locale['global_093'] = " van ";
$locale['global_094'] = " van ";
// Guest User Menu
$locale['global_100'] = "Inloggen";
$locale['global_101'] = "Aanmeldings-ID";
$locale['global_101a'] = "Gebruikersnaam";
$locale['global_101b'] = "E-mail";
$locale['global_101c'] = "E-mail or Gebruikersnaam";
$locale['global_102'] = "Wachtwoord";
$locale['global_103'] = "Onthouden";
$locale['global_104'] = "Inloggen";
$locale['global_105'] = "Nog geen lid? [LINK]Klik hier[/LINK] om aan te melden.";
$locale['global_106'] = "[LINK]Wachtwoord kwijt?[/LINK]";
$locale['global_107'] = "Aanmelden";
$locale['global_108'] = "Wachtwoord kwijt";
$locale['global_109'] = "Aanmelden";
// Member User Menu
$locale['global_120'] = "Profiel Wijzigen";
$locale['global_121'] = "Priv&eacute; Berichten";
$locale['global_122'] = "Ledenlijst";
$locale['global_123'] = "Beheerder Paneel";
$locale['global_124'] = "Uitloggen";
$locale['global_125'] = "%u "; //U heeft
$locale['global_126'] = "nieuw bericht";
$locale['global_127'] = "nieuwe berichten";
$locale['global_128'] = "inzending";
$locale['global_129'] = "inzendingen";
// User Menu
$locale['UM060'] = "Inloggen";
$locale['UM061'] = "Gebruikersnaam";
$locale['UM061a'] = "E-mail";
$locale['UM061b'] = "Gebruikersnaam of E-mail";
$locale['UM062'] = "Wachtwoord";
$locale['UM063'] = "Onthouden Me";
$locale['UM064'] = "Inloggen";
$locale['UM065'] = "Nog geen lid? [LINK]Klik hier[/LINK] om aan te melden.";
$locale['UM066'] = "Wachtwoord vergeten?\n[LINK]Vraag een nieuwe[/LINK].";
$locale['UM067'] = "(niet aanbevolen voor publieke of gedeelde computer)";
$locale['UM080'] = "Profiel aanpassen";
$locale['UM081'] = "Priv&eacute; Berichten";
$locale['UM082'] = "Leden lijst";
$locale['UM083'] = "Beheerder Paneel";
$locale['UM084'] = "Uitloggen";
$locale['UM085'] = "%u ";
$locale['UM086'] = "bericht";
$locale['UM087'] = "berichten";
$locale['UM088'] = "Gevolgde onderwerpen";
// Submit (news, link, article)
$locale['UM089'] = "Inzenden...";
$locale['UM090'] = "Inzenden Nieuws";
$locale['UM091'] = "Inzenden Link";
$locale['UM092'] = "Inzenden Artikel";
$locale['UM093'] = "Inzenden Foto";
$locale['UM094'] = "Inzenden Download";
$locale['UM095'] = "Inzenden Blog";
$locale['UM102'] = "Inzenden FAQ";
// User Panel
$locale['UM096'] = "Welkom: ";
$locale['UM097'] = "Persoonlijk menu";
$locale['UM101'] = "Verander Taal";
// Gauges
$locale['UM098'] = "PM Inbox :";
$locale['UM099'] = "PM Uitbox :";
$locale['UM100'] = "PM Archief :";
// Keywords and Meta
$locale['tags'] = "Tags";
// Captcha
$locale['global_150'] = "Validatie Code:";
$locale['global_151'] = "Voer Validatie Code in:";
// Footer Counter
$locale['global_170'] = "uniek bezoek";
$locale['global_171'] = "unieke bezoeken";
$locale['global_172'] = "Verwerkingstijd: %s seconden";
$locale['global_173'] = "Queries";
$locale['global_174'] = "Geheugen gebruik";
$locale['global_175'] = "Gemiddeld: %s seconden";
$locale['global_176'] = "privacybeleid";
// Admin Navigation
$locale['global_180'] = "Beheerder Index";
$locale['global_181'] = "Terug naar de Site";
$locale['global_182'] = "<strong>Waarschuwing:</strong> Beheerderwachtwoord niet opgegeven of incorrect";
// Miscellaneous
$locale['global_190'] = "Onderhoudsmodus geactiveerd";
$locale['global_191'] = "Uw IP-adres staat op dit moment op de zwarte lijst.";
$locale['global_192'] = "Uw cookie is verlopen! Log opnieuw in om verder te gaan.";
$locale['global_193'] = "Kan geen cookie instellen! Sta a.u.b. cookies toe, controleer de instellingen van uw firewall of uw browser, om correct in te kunnen loggen.";
$locale['global_194'] = "Dit account is momenteel geschorst.";
$locale['global_195'] = "Dit account is nog niet geactiveerd.";
$locale['global_196'] = "Ongeldige gebruikersnaam of wachtwoord.";

$locale['global_197'] = "Wacht u a.u.b. terwijl we u doorsturen...\n\n[ [LINK]Of klik hier als je niet wenst te wachten[/LINK] ]";
$locale['global_198'] = "<strong>Waarschuwing:</strong> setup.php aangetroffen, a.u.b. onmiddellijk verwijderen.";
$locale['global_199'] = "<strong>Waarschuwing:</strong> beheerderwachtwoord niet ingesteld, klik [LINK]Profiel wijzigen[/LINK] m dit in te stellen.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Zoeken";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Forum";
//Themes
$locale['global_210'] = "Ga naar inhoud";
$locale['global_300'] = "geen thema gevonden";


$locale['global_301'] = "Het spijt ons zeer, maar deze pagina kan niet worden getoond. 
Door bepaalde omstandigheden kan geen site-thema worden gevonden. 
Indien u een beheerder van de site bent, gebruik dan a.u.b. uw FTP-programma om een voor 
<em>PHP-Fusion 9</em> ontworpen thema naar de <em>themes</em> map te uploaden. 
Controleer na de upload in <em>Algemene Instellingen</em> of het geselecteerde thema correct is ge-upload. 
Houdt er rekening mee dat de ge-uploade thema map exact dezelfde naam moet hebben (inclusief eventuele hoofdletters, van belang bij Unix-servers) 
als gekozen in <em>Thema Instellingen</em>.<br /><br />Indien u een gewoon lid van de site bent, neemt u dan a.u.b. contact op met de beheerder van de site via [SITE_EMAIL] e-mail en meldt dit probleem.";
$locale['global_302'] = "Het thema gekozen in Algemene Instellingen bestaat niet of is incompleet.!";
// JavaScript Not Enabled
$locale['global_303'] = "<center>Oeps! <strong>JavaScript</strong> ontbreekt!<br />Uw Web browser heeft JavaScript uitstaan of ondersteund geen JavaScript.<br />
Om deze website optimaal te kunnen zien dient u <strong>JavaScript aan te zetten</strong> in uw Web browser en/of Firewall.<br />Of <strong>verander</strong> van Web browser die wel JavaScript ondersteund; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> nieuwer dan versie 6.</center>";

// User Management
$locale['global_400'] = "geschorst";
$locale['global_401'] = "verbannen";
$locale['global_402'] = "gedeactiveerd";
$locale['global_403'] = "account beeindigd";
$locale['global_404'] = "account geanonimiseerd";
$locale['global_405'] = "annonieme gebruiker";
$locale['global_406'] = "Dit account is verbannen om de volgende reden:";
$locale['global_407'] = "Dit account is geschorst tot ";
$locale['global_408'] = " om de volgende reden:";
$locale['global_409'] = "Dit account is verbannen om veiligheidsredenen.";
$locale['global_410'] = "De reden hiervoor is: ";
$locale['global_411'] = "Dit account is geannuleerd.";
$locale['global_412'] = "Dit account is geanonimiseerd, waarschijnlijk door inactiviteit.";
// Flood control
$locale['global_440'] = "Automatische verbanning door Flood Control";
$locale['global_441'] = "Uw account op [SITENAME] is verbannen";
$locale['global_442'] = "Beste [USER_NAME],\n
Uw account op [SITENAME] heeft in korte tijd te veel berichten in het systeem geplaatst met IP [USER_IP], en is daarom verbannen. 
Dit is gedaan om snelle verspreiding van spam door robots te voorkomen.\n
Neem contact op met de site beheerder via [SITE_EMAIL] om uw account vrij te geven of om te melden dat u het niet was die dit veroorzaakt heeft.\n
[SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Uw schorsing is automatisch opgeheven door het systeem";
$locale['global_451'] = "Schorsing opgeheven op [SITENAME]";
$locale['global_452'] = "Beste USER_NAME,\n
De schorsing van uw account op [SITEURL] is opgeheven. Hier zijn uw login gegevens:\n
Gebruikersnaam: USER_NAME\n
Wachtwoord: verborgen wegens veiligheid redenen\n\n
Als u uw wachtwoord bent vergeten, kunt u hier het wachtwoord opvragen:LOST_PASSWORD\n\n
Met vriendelijke groet,\n
[SITEUSERNAME]";
$locale['global_453'] = "Hello USER_NAME,\nThe suspension of your account at [SITEURL] has been lifted.\n\n
Regards,\n[SITEUSERNAME]";
$locale['global_454'] = "Account gereactiveerd op [SITENAME]";
$locale['global_455'] = "Beste USER_NAME,\n
De laatste keer dat u bent ingelogd is uw account gereactiveerd op [SITEURL] en is uw account niet langer meer als inactief gemarkeerd.\n\n
Met vriendelijke groet,\n
[SITEUSERNAME]";
$locale['global_456'] = "Nieuw wachtwoord notificatie voor [SITENAME]";
$locale['global_457'] = "Beste USER_NAME,
\n\nEr is een nieuw wachtwoord voor je ingesteld op [SITENAME]. Hieronder staan je login gegevens vermeld:\n\n
Gebruikersnaam: USER_NAME\nWachtwoord: [PASSWORD]\n\nMet vriendelijke groet,\n[SITEUSERNAME]";
$locale['global_458'] = "Er is een nieuw wachtwoord ingesteld voor USER_NAME";
$locale['global_459'] = "NEr is een nieuw wachtwoord ingesteld voor USER_NAME, maar er is geen e-mail verstuurd. Geef de gegevens a.u.b. aan de gebruiker door.";

// Function parsebytesize()
$locale['global_460'] = "Leeg";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "U wordt doorgestuurd naar %s, wacht een moment. Als u niet wordt doorgestuurd, klikt u hier.";
// Captcha Locales
$locale['global_600'] = "Validatie Code";
$locale['global_601'] = "U dient een correcte validatie code in te invoeren";
$locale['recaptcha'] = "nl";
// Site links
$locale['global_700'] = "Toon meer";
//Miscellaneous
$locale['global_900'] = "Niet in staat om HEX naar DEC te converteren";
$locale['global_901'] = "Voeg Media in";
//Language Selection
$locale['global_ML100'] = "Taal:";
$locale['global_ML101'] = "- Selecteer Taal -";
$locale['global_ML102'] = "Site taal";
$locale['global_ML103'] = "Verander taal";
// Flood Control
$locale['flood'] = "Je moet wachten tot de afkoelingsperiode voorbij is voordat je weer kunt posten. Wacht a.u.b. nog %s.";
$locale['no_image'] = "Geen Afbeelding";
$locale['send_message'] = 'Stuur bericht';
$locale['go_profile'] = 'Ga naar %s Profiel Pagina';
// Global one word locales
$locale['hello'] = 'Hallo!';
$locale['goodbye'] = 'Tot ziens!';
$locale['welcome'] = 'Welkom terug';
$locale['home'] = 'Index';
// Status
$locale['error'] = 'Fout!';
$locale['success'] = 'Succes!';
$locale['enable'] = 'Inschakelen';
$locale['disable'] = 'Uitschakelen';
$locale['can'] = 'kan';
$locale['cannot'] = 'kan niet';
$locale['no'] = 'Nee';
$locale['yes'] = 'Ja';
$locale['off'] = 'Uit';
$locale['on'] = 'Aan';
$locale['or'] = 'of';
$locale['by'] = 'door';
$locale['in'] = 'in';
$locale['of'] = 'van';
$locale['and'] = "en";
$locale['na'] = 'Niet beschikbaar';
$locale['joined'] = "Lid sinds: ";
// Navigation
$locale['next'] = 'Volgende';
$locale['previous'] = 'Vorige';
$locale['back'] = 'Terug';
$locale['forward'] = 'Vooruit';
$locale['go'] = 'Ga';
$locale['cancel'] = 'Afbreken';
$locale['clear'] = "Wissen";
$locale['move'] = "Verplaats";
$locale['move_up'] = "Omhoog";
$locale['move_down'] = "Omlaag";
$locale['load_more'] = "Laad meer";
$locale['load_end'] = "Start vanaf Begin";
// Actions
$locale['add'] = 'Toevoegen';
$locale['save'] = 'Opslaan';
$locale['save_changes'] = 'Wijzigingen opslaan';
$locale['confirm'] = 'Bevestig';
$locale['update'] = 'Bijwerken';
$locale['updated'] = 'Bijgewerkt';
$locale['remove'] = 'Verwijder';
$locale['delete'] = 'Wissen';
$locale['search'] = 'Zoeken';
$locale['help'] = 'Help';
$locale['register'] = 'Registeer';
$locale['ban'] = 'Bannen';
$locale['reactivate'] = 'Reactiveer';
$locale['user'] = 'Lid';
$locale['promote'] = 'Promoveer';
$locale['show'] = 'Toon';

// Persons & Identifiers
$locale['you'] = "jij";
$locale['me'] = "Mij";
$locale['they'] = "Hen";
$locale['we'] = "Wij";
$locale['us'] = "Ons";
$locale['he'] = "Hij";
$locale['she'] = "zij";
$locale['it'] = "het";

//Tables
$locale['status'] = 'Status';
$locale['order'] = 'Sortering';
$locale['sort'] = 'Sorteer';
$locale['id'] = 'ID';
$locale['title'] = 'Titel';
$locale['rights'] = 'Rechten';
$locale['info'] = 'Info';
$locale['image'] = 'Afbeelding';
// Forms
$locale['choose'] = 'Kies a.u.b. Een...';
$locale['no_opts'] = 'Geen selectie';
$locale['root'] = 'Als voorgaande';
$locale['choose-user'] = 'Kies a.u.b. een Lid...';
$locale['choose-location'] = 'Kies a.u.b. een Locatie';
$locale['parent'] = 'Aanmaken als nieuwe Hoofdmap..';
$locale['order'] = 'Sortering';
$locale['status'] = 'Status';
$locale['note'] = 'Maak een notitie van dit item';
$locale['publish'] = 'Gepubliceerd';
$locale['unpublish'] = 'Ongepubliceerd';
$locale['draft'] = 'Klad';
$locale['settings'] = 'Instellingen';
$locale['posted'] = 'geplaatst';
$locale['profile'] = 'Profiel';
$locale['edit'] = 'Wijzig';
$locale['qedit'] = 'Snel Wijzigen';
$locale['view'] = 'Bekijk';
$locale['login'] = 'Aanmelden';
$locale['logout'] = 'Afmelden';
$locale['admin-logout'] = 'Beheerder Afmelden';
$locale['message'] = 'Priv&eacute; Berichten';
$locale['logged'] = 'Aangemeld als ';
$locale['version'] = 'Versie ';
$locale['browse'] = 'Bladeren ...';
$locale['close'] = 'Sluiten';
$locale['nopreview'] = 'Er is niets om te laten zien';
$locale['mark_as'] = "Markeren Als";
$locale['custom'] = "Eigen";
$locale['submit'] = "Inzenden";
// Alignment
$locale['left'] = "Links";
$locale['center'] = "Midden";
$locale['right'] = "Rechts";
// Comments and ratings
$locale['comments'] = "Reacties";
$locale['ratings'] = "Waarderingen";
$locale['comments_ratings'] = "Reacties en Waarderingen";
$locale['user_account'] = "Gebruikersaccount";
$locale['about'] = "Over";
// User status
$locale['online'] = "Online";
$locale['offline'] = "Offline";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "inzending|inzendingen";
$locale['fmt_article'] = "artikel|artikelen";
$locale['fmt_blog'] = "blog|blogs";
$locale['fmt_comment'] = "reaktie|reakties";
$locale['fmt_vote'] = "stem|stemmen";
$locale['fmt_rating'] = "waarderng|waarderingen";
$locale['fmt_day'] = "dag|dagen";
$locale['fmt_download'] = "download|downloads";
$locale['fmt_follower'] = "volger|volgers";
$locale['fmt_forum'] = "forum|forums";
$locale['fmt_guest'] = "gast|gasten";
$locale['fmt_hour'] = "uur|uren";
$locale['fmt_item'] = "item|items";
$locale['fmt_member'] = "lid|leden";
$locale['fmt_message'] = "bericht|berichten";
$locale['fmt_minute'] = "minuut|minuten";
$locale['fmt_month'] = "maand|maanden";
$locale['fmt_news'] = "nieuws|nieuws";
$locale['fmt_photo'] = "foto|fotos";
$locale['fmt_post'] = "post|posts";
$locale['fmt_question'] = "vraag|vragen";
$locale['fmt_read'] = "lezen|gelezen";
$locale['fmt_second'] = "seconde|seconden";
$locale['fmt_shouts'] = "shout|shouts";
$locale['fmt_thread'] = "onderwerp|onderwerpen";
$locale['fmt_user'] = "lid|leden";
$locale['fmt_views'] = "bekijken|bekeken";
$locale['fmt_weblink'] = "weblink|weblinks";
$locale['fmt_week'] = "week|weken";
$locale['fmt_year'] = "jaar|jaren";
$locale['fmt_points'] = "punt|punten";
$locale['fmt_admin'] = "beheerder|beheerders";
// include Defender locales
include __DIR__."/defender.php";
