<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/global.php
| Authors: Jan Mølgaard (janmol) & Helmuth Mikkelsen (helmuth)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
// Locale Settings
//setlocale(LC_ALL, "da_DK.UTF-8");
setlocale( LC_ALL, "da", "dan", "da_DK", "da_DK.DK.UTF-8", "danish" );
$locale['charset'] = "utf-8";
$locale['region'] = "DK";
$locale['xml_lang'] = "da";
$locale['short_lang_name'] = "da";
$locale['tinymce'] = "da";
$locale['select2'] = "da";
$locale['phpmailer'] = "da";
$locale['datepicker'] = "da";
$locale['datepicker_js'] = "DD-M-YYYY, H:mm:ss";
$locale['datepicker_php'] = "d-m-Y, H:i:s";
$locale['password_strength'] = "da";
$locale['date_day'] = "%b %d";
$locale['text-direction'] = "ltr";
// Full & Short Months
$locale['months'] = "&nbsp;|Januar|Februar|Marts|April|Maj|Juni|Juli|August|September|Oktober|November|December";
$locale['shortmonths'] = "&nbsp;|Jan|Feb|Mar|Apr|Maj|Jun|Jul|Aug|Sep|Okt|Nov|Dec";
$locale['weekdays'] = "Søndag|Mandag|Tirsdag|Onsdag|Torsdag|Fredag|Lørdag";
// Timers
$locale['year'] = "år";
$locale['year_a'] = "år";
$locale['month'] = "måned";
$locale['month_a'] = "måneder";
$locale['week'] = "uge";
$locale['week_a'] = "uger";
$locale['day'] = "dag";
$locale['day_a'] = "dage";
$locale['hour'] = "time";
$locale['hour_a'] = "timer";
$locale['minute'] = "minut";
$locale['minute_a'] = "minutter";
$locale['second'] = "sekund";
$locale['second_a'] = "sekunder";
$locale['just_now'] = "lige nu";
$locale['ago'] = "siden";
// Geo
$locale['street1'] = "Gadenavn 1";
$locale['street2'] = "Gadenavn 2";
$locale['city'] = "By";
$locale['postcode'] = "Postnummer";
$locale['sel_country'] = "Vælg land";
$locale['sel_state'] = "Vælg region";
$locale['sel_user'] = "Indskriv et brugernavn";
$locale['add_language'] = "Tilføj sprogversioner";
$locale['add_lang'] = "Tilføj %s";
$locale['other_states'] = "Andet område";
// Name
$locale['name'] = "Fulde navn";
$locale['username_pretext'] = "Dit offentlige brugernavn er det samme som din profiladresse:<div class='alert alert-info m-t-10 p-10'>%s<strong>%s</strong></div>";
$locale['first_name'] = "Fornavn";
$locale['middle_name'] = "Mellemnavn";
$locale['last_name'] = "Efternavn";
// Documents
$locale['doc_type'] = "Dokumenttype";
$locale['doc_series'] = "Serie";
$locale['doc_number'] = "Nummer";
$locale['doc_authority'] = "Autoritet";
$locale['doc_date_issue'] = "Udgivelsesdato";
$locale['doc_date_expire'] = "Udløbsdato";
// Standard User Levels
$locale['user0'] = "Gæst";
$locale['user1'] = "Bruger";
$locale['user2'] = "Administrator";
$locale['user3'] = "Super Administrator";
$locale['user_na'] = "N/A";
$locale['user_guest'] = "Gæst";
$locale['user_anonymous'] = "Anonym Bruger";
$locale['genitive'] = "%s'ere %eres";
// Standard User Status
$locale['status0'] = "Aktiv";
$locale['status1'] = "Udelukket";
$locale['status2'] = "Ikke aktiveret";
$locale['status3'] = "Suspenderet";
$locale['status4'] = "Udelukket af sikkerhedsårsager";
$locale['status5'] = "Annulleret";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktiveret";
$locale['status8'] = "Inaktiv";
// Forum Moderator Level(s)
$locale['userf1'] = "Ordstyrer";
// Navigation
$locale['global_001'] = "Navigation";
$locale['global_002'] = "Der er ikke oprettet links<br/>";
$locale['global_003'] = "Intet at vise";
// Users Online
$locale['global_010'] = "Besøgende";
$locale['global_011'] = "Gæster online";
$locale['global_012'] = "Brugere online";
$locale['global_013'] = "Ingen brugere online";
$locale['global_014'] = "Antal brugere";
$locale['global_015'] = "Ikke aktiverede";
$locale['global_016'] = "Nyeste bruger";
$locale['global_017'] = "Skift navigation";
// Forum Side panel
$locale['global_020'] = "Debatemner";
$locale['global_021'] = "Nyeste emne";
$locale['global_022'] = "Mest aktive emner";
$locale['global_023'] = "Ingen emner oprettet.";
$locale['global_024'] = "Antal debatter";
$locale['global_027'] = "Ubesvarede indlæg";
$locale['global_028'] = "Uløste spørgsmål";
// Comments Side panel
$locale['global_025'] = "Seneste kommentarer";
$locale['global_026'] = "Der er ikke skrevet kommentarer";
// Articles Side panel
$locale['global_030'] = "Nyeste artikler";
$locale['global_031'] = "Ingen artikler tilgængelige";
// Downloads Side panel
$locale['global_032'] = "Seneste downloads";
$locale['global_033'] = "Der er ikke oprettet downloads.";
// Welcome panel
$locale['global_035'] = "Velkommen";
// Latest Active Forum Threads panel
$locale['global_040'] = "Senest aktive debatemner";
$locale['global_041'] = "Mine nyeste emner";
$locale['global_042'] = "Mine nyeste indlæg";
$locale['global_043'] = "Nye indlæg";
$locale['global_044'] = "Debat";
$locale['global_045'] = "Visninger";
$locale['global_046'] = "Svar";
$locale['global_047'] = "Nyeste indlæg";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Skrevet for ";
$locale['global_050'] = "Forfatter";
$locale['global_051'] = "Afstemning";
$locale['global_052'] = "Flyttet";
$locale['global_053'] = "Du har ikke oprettet debatemner endnu.";
$locale['global_054'] = "Du har ikke oprettet debatindlæg endnu.";
$locale['global_055'] = "Der er kommet %u nye indlæg siden dit sidste besøg.";
$locale['global_056'] = "Mine udvalgte emner";
$locale['global_057'] = "Valgmuligheder";
$locale['global_058'] = "Stop med at følge emner";
$locale['global_059'] = "Du følger ingen emner.";
$locale['global_060'] = "Hold op med at følge dette emne?";
// Blogs, News & Articles
$locale['global_070'] = "Skrevet af ";
$locale['global_070b'] = "Se alle indlæg af %s";
$locale['global_071'] = "d. ";
$locale['global_071b'] = "Se alle indlæg fra %s";
$locale['global_072'] = "Læs mere";
$locale['global_073'] = " Kommentarer";
$locale['global_073b'] = " Kommentar";
$locale['global_074'] = " Fremvisninger";
$locale['global_074b'] = " Fremvisning";
$locale['global_075'] = "Udskriv";
$locale['print'] = 'Udskriv';
$locale['global_076'] = "Rediger";
$locale['global_077'] = "Nyheder";
$locale['global_078'] = "Der er ikke oprettet nyheder endnu";
$locale['global_079'] = "I ";
$locale['global_080'] = "Ukategoriseret";
$locale['global_081'] = "Nyhederne startside";
$locale['global_082'] = "Nyhedscenter";
$locale['global_083'] = "Senest opdateret";
$locale['global_084'] = "Nyhedskategori";
$locale['global_085'] = "Alle andre kategorier";
$locale['global_086'] = "Seneste nyt";
$locale['global_087'] = "Mest kommenterede nyheder";
$locale['global_088'] = "Nyheder med højeste vurdering";
$locale['global_089'] = "Bliv den første til at kommentere på %s";
$locale['global_089a'] = "Bliv den første til at vurdere dette %s";
$locale['global_089b'] = "Vis miniaturer";
$locale['global_089c'] = "Vis liste";
// Page Navigation
$locale['global_090'] = "Foregående";
$locale['global_091'] = "Næste";
$locale['global_092'] = "Side ";
$locale['global_093'] = " af ";
$locale['global_094'] = " ud af ";
// Guest User Menu
$locale['global_100'] = "Log ind";
$locale['global_101'] = "Brugernavn";
$locale['global_101a'] = "Du skal angive dit brugernavn";
$locale['global_101b'] = "Indskriv mail";
$locale['global_101c'] = "Indskriv mailadresse eller brugernavn";
$locale['global_102'] = "Kodeord";
$locale['global_103'] = "Husk mig";
$locale['global_104'] = $locale['global_100'];
$locale['global_105'] = "Er du endnu ikke registreret bruger? <a href='".BASEDIR."register.php' class='side'>Klik her</a> for at oprette dig.";
$locale['global_106'] = "Har du glemt dit kodeord? Bed om et nyt <a href='".BASEDIR."lostpassword.php' class='side'>ved at klikke her</a>.";
$locale['global_107'] = "Tilmelding";
$locale['global_108'] = "Glemt kodeord";
$locale['global_109'] = "Opret dig";
// Member User Menu
$locale['global_120'] = "Ret i din profil";
$locale['global_121'] = "Private beskeder";
$locale['global_122'] = "Brugerliste";
$locale['global_123'] = "Administration";
$locale['global_124'] = "Log ud";
$locale['global_125'] = "Du har %u ";
$locale['global_126'] = "ny besked";
$locale['global_127'] = "nye beskeder";
$locale['global_128'] = "brugerforslag";
$locale['global_129'] = "brugerforslag";
// User Menu
$locale['UM060'] = "Log ind";
$locale['UM061'] = "Brugernavn";
$locale['UM061a'] = "Mail";
$locale['UM061b'] = "Brugernavn eller mailadresse";
$locale['UM062'] = "Kodeord";
$locale['UM063'] = "Husk mig";
$locale['UM064'] = "Log ind";
$locale['UM065'] = "Er du ikke bruger endnu? <a href='".BASEDIR."register.php' class='side'>Klik her</a> for at oprette dig.";
$locale['UM066'] = "Har du glemt dit kodeord?<br/>[LINK]Bed om at få et nyt ved at klikke her[/LINK].";
$locale['UM067'] = "(frarådes på en offentligt tilgængelig eller delt computer)";
$locale['UM080'] = "Rediger profil";
$locale['UM081'] = "Private beskeder";
$locale['UM082'] = "Brugerliste";
$locale['UM083'] = "Administration";
$locale['UM084'] = "Log ud";
$locale['UM085'] = "Du har %u ny(e) ";
$locale['UM086'] = "besked";
$locale['UM087'] = "beskeder";
$locale['UM088'] = "Fulgte debatter";
// Submit (news, link, article)
$locale['UM089'] = "Foreslå...";
$locale['UM090'] = "Foreslå nyhed";
$locale['UM091'] = "Foreslå link";
$locale['UM092'] = "Foreslå artikel";
$locale['UM093'] = "Foreslå billede";
$locale['UM094'] = "Foreslå download";
$locale['UM095'] = "Foreslå blogindlæg";
$locale['UM102'] = "Foreslå FAQ";
// User Panel
$locale['UM096'] = "Velkommen: ";
$locale['UM097'] = "Privat menu";
$locale['UM101'] = "Skift sprog";
// Gauges
$locale['UM098'] = "Indbakke";
$locale['UM099'] = "Udbakke";
$locale['UM100'] = "Arkiv";
// Keywords and Meta
$locale['tags'] = "Tags";
// Captcha
$locale['global_150'] = "Sikkerhedskode";
$locale['global_151'] = "Indskriv sikkerhedskode";
// Footer Counter
$locale['global_170'] = "unikt besøg";
$locale['global_171'] = "unikke besøg";
$locale['global_172'] = "Tid forbrugt til at danne siden: %s sekunder";
$locale['global_173'] = "Opslag";
$locale['global_174'] = "Anvendt hukommelse";
$locale['global_175'] = "I gennemsnit: %s sekunder";
$locale['global_176'] = "Privatlivspolitik";
// Admin Navigation
$locale['global_180'] = "Administration";
$locale['global_181'] = "Tilbage til siden";
$locale['global_182'] = "<strong>Bemærk:</strong> Administratorkodeord er ikke angivet eller ukorrekt.";
// Miscellaneous
$locale['global_190'] = "Vedligeholdelsestilstand er aktiveret";
$locale['global_191'] = "Din IP-adresse er aktuelt udelukket.";
$locale['global_192'] = "Logger ud som ";
$locale['global_193'] = "Logger ind som ";
$locale['global_194'] = "Denne konto er aktuelt lukket.";
$locale['global_195'] = "Denne konto er endnu ikke aktiveret.";
$locale['global_196'] = "Forkert brugernavn eller kodeord.";
$locale['global_197'] = "Vent et øjeblik, mens vi overfører dig... <br/>
[ [LINK]Eller klik her, hvis du ikke ønsker at vente[/LINK] ]";
$locale['global_198'] = "<strong>Advarsel:</strong> INSTALLATIONSPROGRAMMERNE ER IKKE SLETTET. SLET FILEN install.php MED DET SAMME!";
$locale['global_199'] = "<strong>Advarsel:</strong> administratorkodeord er ikke oprettet. Klik på [LINK]Rediger profil[/LINK] for at oprette det.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Søg";
$locale['global_203'] = " - FAQ";
$locale['global_204'] = " - Debat";
//Themes
$locale['global_210'] = "Spring til indhold";
$locale['global_300'] = "Intet tema fundet";
$locale['global_301'] = "Vi beklager meget, men siden kan ikke vises. Af ukendte årsager kan sidens tema ikke findes.
Hvis du er administrator på siden, så brug din FTP-klient til at uploade et tema designet til brug i forbindelse med
<strong>PHP-Fusion version 9</strong> til folderen <strong>themes/</strong>. Efter at du har gjort det, skal du se
under <strong>Hovedopsætning</strong> for at sikre dig, at det uploadede tema er kommet korrekt op på siden.
Bemærk at den uploadede temafolder skal have nøjagtig samme navn inklusive store og små bogstaver som navnet
på det tema, du vælger under <strong>Hovedopsætning</strong>.<br/><br/> Hvis du er medlem på siden, så skal
du kontakte sidens administrator via [SITE_EMAIL] mail og rapportere om problemet.";
$locale['global_302'] = "Det tema, som du har valgt under hovedopsætning eksisterer ikke eller er inkompatibelt!";
// JavaScript Not Enabled
$locale['global_303'] = "Jamen dog! Hvor er <strong>JavaScript</strong> henne?<br/>Din browser understøtter ikke
JavaScript eller har ikke understøttelsen slået til. Slå <strong>JavaScript til</strong> i din browser for at se denne side
ordentligt,<br/> eller <strong>opgrader</strong> til en browser, der understøtter JavaScript.";
// User Management
$locale['global_400'] = "suspenderet";
$locale['global_401'] = "udelukket";
$locale['global_402'] = "deaktiveret";
$locale['global_403'] = "brugerkontoen lukket";
$locale['global_404'] = "brugerkontoen anonymiseret";
$locale['global_405'] = "anonym bruger";
$locale['global_406'] = "Denne brugerkonto er udelukket af følgende årsag";
$locale['global_407'] = "Denne brugerkonto er suspenderet indtil ";
$locale['global_408'] = " af følgende årsag";
$locale['global_409'] = "Denne konto er blevet udelukket af sikkerhedsårsager.";
$locale['global_410'] = "Begrundelsen er ";
$locale['global_411'] = "Denne konto er blevet sat i passiv tilstand.";
$locale['global_412'] = "Denne konto er blevet anonymiseret sandsynligvis på grund af manglende aktivitet.";
// Flood control
$locale['global_440'] = "Automatisk udelukkelse via Flood Control";
$locale['global_441'] = "Din brugerkonto på ".fusion_get_settings('sitename')."er blevet udelukket";
$locale['global_442'] = "Hej [USER_NAME],<br/>
Din konto på [SITENAME] har offentliggjort for meget indhold på meget kort tid fra IP-adressen [USER_IP], og er derfor blevet udelukket. Udelukkelsen er gennemført for at forhindre automatfunktioner i at offentliggøre spam meget hurtigt.<br/>
Kontakt administratoren på [SITE_EMAIL] for at få genaktiveret din konto eller for at godtgøre, at det ikke var dig, som udløste denne sikkerhedsudelukkelse.<br/>[SITEUSERNAME]";
// Lifting of suspension
$locale['global_450'] = "Udelukkelsen er automatisk ophævet af systemet";
$locale['global_451'] = "Suspendering er ophævet på [SITENAME]";
$locale['global_452'] = "Hej USER_NAME,<br/>
Suspenderingen af din konto på [SITEURL] er blevet ophævet. Herunder følger dine pålogningsdata:<br/>
Brugernavn: USER_NAME<br/>Kodeord: Skjult af sikkerhedsmæssige årsager<br/>
Hvis du har glemt dit kodeord kan du klikke på dette link for at få et nyt: LOST_PASSWORD<br/>
Venlig hilsen.<br/>[SITEUSERNAME]";
$locale['global_453'] = "Hej USER_NAME,<br/>Suspenderingen af din konto på [SITEURL] er blevet ophævet.<br/>
Venlig hilsen.<br/>[SITEUSERNAME]";
$locale['global_454'] = "Din konto er blevet genaktiveret på [SITENAME]";
$locale['global_455'] = "Hej USER_NAME,<br/>
Sidste gang, hvor du loggede på [SITEURL] blev din konto genaktiveret, og du er nu ikke længere registreret som inaktiv.<br/>
Venlig hilsen.<br/>[SITEUSERNAME]";
$locale['global_456'] = "Orientering om nyt kodeord på [SITENAME]";
$locale['global_457'] = "Hej USER_NAME,
<br/>Der er blevet lavet et nyt kodeord for din konto på [SITENAME]. Herunder kan du se dine nye data:<br/>
Brugernavn: USER_NAME<br/>Kodeord: [PASSWORD]<br/>Venlig hilsen.<br/>[SITEUSERNAME]";
$locale['global_458'] = "Der er oprettet et nyt kodeord for USER_NAME";
$locale['global_459'] = "Der er oprettet et nyt kodeord for USER_NAME, og der blev ikke sendt en mail. Husk at underrette brugeren om ændringen.";

// Function parsebytesize()
$locale['global_460'] = "Tom";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Vi sender dig videre til %s, vent venligst. Hvis du ikke bliver sendt videre, så klik her.";
// Captcha Locales
$locale['global_600'] = "Sikkerhedskode";
$locale['global_601'] = "Du skal angive en korrekt sikkerhedskode";
$locale['recaptcha'] = "da";
// Site links
$locale['global_700'] = "Vis mere";
//Miscellaneous
$locale['global_900'] = "Ude af stand til at konvertere HEX til DEC";
$locale['global_901'] = "Indsæt medie";
//Language Selection
$locale['global_ML100'] = "Sprog";
$locale['global_ML101'] = "- vælg sprog -";
$locale['global_ML102'] = "Sidens sprog";
$locale['global_ML103'] = "Skift sprog";
// Flood Control
$locale['flood'] = "Du er udelukket fra at deltage i debatter, indtil karantæneperioden udløber. Vent venligst i %s.";
$locale['no_image'] = "Intet billede";
$locale['send_message'] = "Send besked";
$locale['go_profile'] = "Gå til %s brugerprofil";
// Greetings
$locale['hello'] = "Hej!";
$locale['goodbye'] = "Farvel!";
$locale['welcome'] = "Velkommen tilbage";
$locale['home'] = "Forsiden";
// Status
$locale['error'] = "Fejl!";
$locale['success'] = "Det lykkedes!";
$locale['enable'] = "Aktiveret";
$locale['disable'] = "Deaktiveret";
$locale['can'] = "kan";
$locale['cannot'] = "kan ikke";
$locale['no'] = "Nej";
$locale['yes'] = "Ja";
$locale['off'] = "Slået fra";
$locale['on'] = "Slået til";
$locale['or'] = "eller";
$locale['by'] = "af";
$locale['in'] = "i";
$locale['of'] = "af";
$locale['and'] = "og"; 
$locale['na'] = "Ingen information tilgængelig.";
$locale['joined'] = "Tilmeldt siden ";
// Navigation
$locale['next'] = "Næste";
$locale['previous'] = "Foregående";
$locale['back'] = "Tilbage";
$locale['forward'] = "Fremad";
$locale['go'] = "Gør det";
$locale['cancel'] = "Fortryd";
$locale['clear'] = "Fjern";
$locale['move'] = "Flyt";
$locale['move_up'] = "Flyt opad";
$locale['move_down'] = "Flyt nedad";
$locale['load_more'] = "Indlæs mere";
$locale['load_end'] = "Indlæse fra begyndelsen";
// Actions
$locale['add'] = "Tilføj";
$locale['save'] = "Gem";
$locale['save_changes'] = "Gem ændringer";
$locale['save_and_close'] = "Gem og luk";
$locale['confirm'] = "Bekræft";
$locale['update'] = "Opdater";
$locale['updated'] = "Opdateret";
$locale['remove'] = "Fjern";
$locale['delete'] = "Slet";
$locale['search'] = "Søg";
$locale['help'] = "Hjælp";
$locale['register'] = "Opret";
$locale['ban'] = "Udeluk";
$locale['reactivate'] = "Reaktiver";
$locale['user'] = "Bruger";
$locale['promote'] = "Forfrem";
$locale['show'] = "Vis";
$locale['actions'] = "Handlinger";
$locale['language'] = "Sprog";
$locale['loading'] = "Henter...";
// Persons & Identifiers
$locale['you'] = "Dig";
$locale['me'] = "Mig";
$locale['they'] = "De";
$locale['we'] = "Vi";
$locale['us'] = "Os";
$locale['he'] = "Han";
$locale['she'] = "Hun";
$locale['it'] = "Det/Den";
//Tables
$locale['order'] = "Rækkefølge";
$locale['sort'] = "Sorter";
$locale['id'] = "ID";
$locale['title'] = "Overskrift";
$locale['rights'] = "Rettigheder";
$locale['info'] = "Information";
$locale['image'] = "Billede";
// Forms
$locale['choose'] = "Vælg venligst en...";
$locale['no_opts'] = "Intet valg";
$locale['root'] = "Som forældre";
$locale['choose-user'] = "Du skal vælge en bruger...";
$locale['choose-location'] = "Du skal vælge et sted";
$locale['parent'] = "Opret som ny overordnet sektion...";
$locale['item_order'] = "Rækkefølge";
$locale['status'] = "Status";
$locale['note'] = "Skriv en note om dette";
$locale['publish'] = "Aktiver/Aktiveret";
$locale['unpublish'] = "Deaktiver/Deaktiveret";
$locale['sticky'] = "Fastholdt";
$locale['unsticky'] = "Ikke fastholdt";
$locale['draft'] = "Udkast";
$locale['settings'] = "Opsætning";
$locale['posted'] = "offentliggjort ";
$locale['profile'] = "Profil";
$locale['edit'] = "Rediger";
$locale['qedit'] = "Hurtig redigering";
$locale['view'] = "Se";
$locale['login'] = "Log ind";
$locale['logout'] = "Log ud";
$locale['admin-logout'] = "Log ud af administration";
$locale['message'] = "Private beskeder";
$locale['logged'] = "Logget ind som ";
$locale['version'] = "Version ";
$locale['browse'] = "Gennemse...";
$locale['close'] = "Luk";
$locale['nopreview'] = "Der er intet at vise";
$locale['mark_as'] = "Marker som";
$locale['preview'] = "Vis";
$locale['custom'] = "Tilpas";
$locale['submit'] = "Foreslå";
//Alignment
$locale['left'] = "Venstre";
$locale['center'] = "Midt i";
$locale['right'] = "Højre";
// Comments and ratings
$locale['comments'] = "Kommentarer";
$locale['ratings'] = "Vurderinger";
$locale['comments_ratings'] = "Kommentarer og vurderinger";
$locale['user_account'] = "Brugerkonto";
$locale['about'] = "Om";
// User status
$locale['online'] = "Logget på"; // please translate these 2 lines
$locale['offline'] = "Logget af";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "brugerforslag|brugerforslag";
$locale['fmt_article'] = "artikel|artikler";
$locale['fmt_blog'] = "blog|blogs";
$locale['fmt_comment'] = "kommentar|kommentarer";
$locale['fmt_vote'] = "stemme|stemmer";
$locale['fmt_rating'] = "vurdering|vurderinger";
$locale['fmt_day'] = "dag|dage";
$locale['fmt_download'] = "download|downloads";
$locale['fmt_follower'] = "følger|følgere";
$locale['fmt_forum'] = "debat|debatter";
$locale['fmt_guest'] = "gæst|gæster";
$locale['fmt_hour'] = "time|timer";
$locale['fmt_item'] = "enhed|enheder";
$locale['fmt_member'] = "bruger|brugere";
$locale['fmt_message'] = "besked|beskeder";
$locale['fmt_minute'] = "minut|minutter";
$locale['fmt_month'] = "måned|måneder";
$locale['fmt_news'] = "nyhed|nyheder";
$locale['fmt_photo'] = "billede|billeder";
$locale['fmt_post'] = "indlæg|indlæg";
$locale['fmt_question'] = "spørgsmål|spørgsmål";
$locale['fmt_read'] = "visning|visninger";
$locale['fmt_second'] = "sekund|sekunder";
$locale['fmt_shouts'] = "replik|replikker";
$locale['fmt_thread'] = "emne|emner";
$locale['fmt_user'] = "bruger|brugere";
$locale['fmt_views'] = "visning|visninger";
$locale['fmt_weblink'] = "link|links";
$locale['fmt_week'] = "uge|uger";
$locale['fmt_year'] = "år|år";
$locale['fmt_points'] = "point|points";
$locale['fmt_admin'] = "admin|admins";
$locale['fmt_group'] = "gruppe|grupper";
$locale['fmt_category'] = "kategori|kategorier";
// include Defender locales
include __DIR__."/defender.php";