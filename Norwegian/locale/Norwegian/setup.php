<?php
// Index
$locale['setup_0000'] = "PHP-Fusion Versjon 9 innstallasjon";
$locale['setup_0001'] = "PHP-Fusion Version 9 innstallasjon";
$locale['setup_0002'] = 'Velkommen til innstallasjonsprogrammet for PHP-Fusion 9.00';
$locale['setup_0003'] = "Guiden her vil føre deg gjennom de nødvendige trin til innstallasjonen av CMS løsningen PHP-Fusion på din server. Har du bruk for mere hjelp, så se våres online <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=208'>innstallasjonshjelp</a>.";
$locale['setup_0005'] = " Jeg har lest og akseptert de relevante PHP-Fusion <a href='https://php-fusion.co.uk/license/'>betingelser</a>.";
$locale['setup_5000'] = "For å kunne bruke PHP-Fusion, skal du akseptere betingelsene</a>.";
$locale['setup_0010'] = '9.0';
$locale['setup_0011'] = "no";
$locale['setup_0012'] = "UTF-8";
$locale['setup_0101'] = "Trin 1: Inntroduksjon";
$locale['setup_0102'] = "Trin 2: Diagnose på mapper og filer";
$locale['setup_0103'] = "Trin 3: Databaseoppsetning";
$locale['setup_0104'] = "Trin 4: Konfigurasjon / Oppsetning av database";
$locale['setup_0105'] = "Trin 6: Oppsetning av selve systemet";
$locale['setup_0106'] = "Trin 5: De viktigste administrator innformasjoner";
$locale['setup_0107'] = "Trin 7: Avsluttende oppsetning";
$locale['setup_stepx'] = "Trinn %1\$d: %2\$s";

// Buttons
$locale['setup_0120'] = "Gjør konfigurasjonen ferdig";
$locale['setup_0121'] = "Neste";
$locale['setup_0122'] = "Forsøk igjen";
$locale['setup_0123'] = "Avslutt";

// Step 1
$locale['setup_1000'] = "Du må velge språkversjon (språk):";
$locale['setup_1001'] = "Hent flere lokale språkversjoner fra <a href='https://www.php-fusion.co.uk/downloads.php#langpacks'><strong>PHP-Fusions offisielle støtteside</strong></a>";
$locale['setup_1002'] = 'Velkommen til PHP-Fusion version 9.00 Opprettelse.';
$locale['setup_1003'] = 'Vi kan se, at det allerede er en versjon av systemet installert.<br/><br/>Velg en blant nedenforstående allternativer for åt fortsette.';
$locale['setup_1004'] = 'Installer';
$locale['setup_1005'] = 'Du kan avinstallere og rense databasen og så starte opp en ny installasjon.';
$locale['setup_1006'] = 'LAG FØRST EN SIKKERHETSKOPI AV CONFIG.PHP. DEN VIL BLI SLETTET UNDER AVINSTALLERINGEN.';
$locale['setup_1007'] = 'Avinstaller og start forfra';
$locale['setup_1008'] = 'Installasjonsfungsjon til kjernefungsjonene';
$locale['setup_1009'] = 'Lag systemoppsetningen om.';
$locale['setup_1010'] = 'Gå videre til systeminstallasjonen';
$locale['setup_1011'] = 'Rediger innstillingene for den primære brukerkonto';
$locale['setup_1012'] = 'Rediger verdiene for systemets superadministrator uten å gjenopprette kontoens passord eller uten å overføre eierskapet til en annen bruker.';
$locale['setup_1013'] = 'Rediger data for superadministrator';
$locale['setup_1014'] = 'Gjenoppbygg .htaccess';
$locale['setup_1015'] = 'Slett den aktuelle filen og erstatt den med standarutgaven av filen .htaccess';
$locale['setup_1016'] = 'Bygg opp filen';

$locale['setup_1017'] = 'Avbryt og forlat denne installatsjonsprosess';
$locale['setup_1018'] = 'Du kan forlate installasjonen ved å klikke på knappen under. Gjør du det, blir filen config_temp.php døpt om til config.php.';
$locale['setup_1019'] = 'Forlat installasjonsprogrammet';


// Step 2
$locale['setup_1100'] = 'I orden';
$locale['setup_1101'] = 'Ikke i orden';
$locale['setup_1102'] = 'Hvis installasjonen skal kunne fortsette, så må nedenforstående filer / mapper settes som <span class="label label-success">skrivbare</span> og skulle testen feile alligevel, så bruk kommandoen chmod til å endre rettighetene til 755 eller 777';
$locale['setup_1103'] = 'Skriverettighetene står korrekt, klikk på Neste for å fortsette.';
$locale['setup_1104'] = 'Skriverettighetene står ikke korrekt. Du må bruke kommandoen CHMOD på de filer/ mapper, som er markert med feil.';
$locale['setup_1105'] = 'Oppdater';
$locale['setup_1106'] = 'Diagnose på filstrukturen';

// Step 3 - Access criteria
$locale['setup_1200'] = 'Oppsetning av database verdier og stier på serveren';
$locale['setup_1201'] = 'Skriv inn adgangsopplysningene til din MySQL database.';
$locale['setup_1202'] = "Databasens servernavn:";
$locale['setup_1203'] = "Databasens brukernavn:";
$locale['setup_1204'] = "Databasens passord:";
$locale['setup_1205'] = "Databasens navn:";
$locale['setup_1206'] = "Fornavn til tabeller:";
$locale['setup_1207'] = "Fornavn til cookie:";
$locale['setup_1208'] = "Skal PDO slås aktiveres";
$locale['setup_1209'] = "Det ser ikke ut til, at PDO er tilgjengelig";
$locale['setup_1210'] = "Nei";
$locale['setup_1211'] = "Ja";
$locale['setup_1212'] = "Bruk det språk, som skal annvendes:";
$locale['setup_1213'] = "Sideeierens navn";

// Step 4 - Database Setup
$locale['setup_1300'] = "Det er etablert en forbindelse til databasen.";
$locale['setup_1301'] = "Configfilen er opprettet.";
$locale['setup_1302'] = "Tabellene i databasen er opprettet.";
$locale['setup_1303'] = "Feil:";
$locale['setup_1304'] = "Kunne ikke oppnå forbindelse med databaseserveren.";
$locale['setup_1305'] = "Kontroller at brukernavn og passord til din MySQL- database er korrekte.";
$locale['setup_1306'] = "Var ikke i stand til å opprette config-filen.";
$locale['setup_1307'] = "Kontroller at din config.php har de korrekte rettigheter.";
$locale['setup_1308'] = "Kunne ikke opprette tabellene i databasen.";
$locale['setup_1309'] = "Du må oppgi navnet på din database.";
$locale['setup_1310'] = "Kunne ikke komme i kontakt med din MySQL database.";
$locale['setup_1311'] = "Den oppgitte MySQL database eksisterer ikke.";
$locale['setup_1312'] = "Feil i tabellenes fornavn.";
$locale['setup_1313'] = "Det oppgitte tabellfornavn brukes allerede.";
$locale['setup_1314'] = "Kunne ikke danne eller slette tabeller i din MySQL-database.";
$locale['setup_1315'] = "Du må sikre deg, at den opgitte bruker til databasen har lese, skrive og slette tillatelse i den oppgitte database.";
$locale['setup_1316'] = "Tomme felter.";
$locale['setup_1317'] = "Kontroller at du har utfylt alle feltene i forbindelse med tilkopling til databasen.";

// Step 5
$locale['setup_1400'] = "Sett opp verdier i forhold til selve systemet.";
$locale['setup_1401'] = "VIKTIG: Lag en sikkerhetskopi, før du går videre. Når en installasjon fjernes, så blir all informasjon fullstendigt slettet.";
$locale['setup_1402'] = "Hovedsystemet er klart til bruk.";
$locale['setup_1403'] = "Din side er nå satt helt opp.<br/><br/>Hvis du ennu ikke har opprettet din superadministrator, så gå videre til neste trinn. Ellers kan du nå slette installasjonsprogrammet.";
$locale['setup_1404'] = 'Installér';
$locale['setup_1405'] = 'Avinstaller';
$locale['setup_1406'] = '%s systemet er installert korrekt.';
$locale['setup_1407'] = '%s installasjonen lykktes ikke.';
$locale['setup_1408'] = '%s systemet er blitt fjernet.';
$locale['setup_1409'] = '%s systemet kan ikke fjernes eller fikk feil.';

// Step 6 - Super Admin login
$locale['setup_1500'] = "Primær superadministrator";
$locale['setup_1501'] = "Sett opp verdier for din primære superadministratorkonto.";
$locale['setup_1502'] = "Rediger verdiene for den primære superadministrator";
$locale['setup_1503'] = "Vi kan se, at det allerede eksisterer en superadministrator.Hvis du har bruk for å endre data for denne bruker, så tast inn nye opplysninger for å oppdatere systemet med disse informasjoner. ";
$locale['setup_1504'] = "Brukernavn:";
$locale['setup_1505'] = "Passord:";
$locale['setup_1506'] = "Gjenta passordet:";
$locale['setup_1507'] = "Administrator passord:";
$locale['setup_1508'] = "Gjenta administratorpassordet:";
$locale['setup_1509'] = "E-Post adresse:";

// Step 6 - User details validation
$locale['setup_5010'] = "Brukernavnet inndeholder forbudte karakterer.";
$locale['setup_5011'] = "Brukernavnet må oppgis.";
$locale['setup_5012'] = "De to passordene er ikke identiske.";
$locale['setup_5013'] = "Passordet overholder ikke reglene. Det må kun brukes alfanumeriske karakter.<br />Og passordet må være på minst 8 tegn.";
$locale['setup_5014'] = "Det må oppgis passord i begge feltene";
$locale['setup_5015'] = "De to administrator passordene er ikke identiske.";
$locale['setup_5016'] = "Passord og administrator passordkan ikke være like.";
$locale['setup_5017'] = "Administrator passordet har feil format. Det må kun anvendes alfanumeriske karakterer.<br />Og administrator passordet må være på minst 8 tegn.";
$locale['setup_5018'] = "Det må oppgis et innhold i feltene til administrator passordet.";
$locale['setup_5019'] = "Det ser ut som om din e-post adresse er lagt til feil.";
$locale['setup_5020'] = "Det må oppgis en e-post adresse.";
$locale['setup_5021'] = "Din brukeroppsetning er ikke korrekt:";

// Step 6 - Admin Panels
$locale['setup_3000'] = "Administratorer";
$locale['setup_3001'] = "Artikelkategorier";
$locale['setup_3002'] = "Artikler";
$locale['setup_3003'] = "Bannerere";
$locale['setup_3004'] = "BB koder";
$locale['setup_3005'] = "Svarteliste";
$locale['setup_3006'] = "Kommentarer";
$locale['setup_3007'] = "Brukeropprettede sider";
$locale['setup_3008'] = "Database sikkerhetskopi";
$locale['setup_3009'] = "Nedlastingskategorier";
$locale['setup_3010'] = "Nedlastinger";
$locale['setup_3011'] = "FAQs";
$locale['setup_3012'] = "Debatter";
$locale['setup_3013'] = "Bilder";
$locale['setup_3014'] = "Infusjoner";
$locale['setup_3015'] = "Infusjonselementer";
$locale['setup_3016'] = "Brukere";
$locale['setup_3017'] = "Nyhetskategorier";
$locale['setup_3018'] = "Nyheter";
$locale['setup_3019'] = "Elementer";
$locale['setup_3020'] = "Fotoalbums";
$locale['setup_3021'] = "PHP informasjon";
$locale['setup_3022'] = "Brukeravstemninger";
$locale['setup_3023'] = "Interne lenker";
$locale['setup_3024'] = "Smilefjes";
$locale['setup_3025'] = "Forslag";
$locale['setup_3026'] = "Oppgradering";
$locale['setup_3027'] = "Brukergrupper";
$locale['setup_3028'] = "Lenkekategorier";
$locale['setup_3029'] = "Lenker";
$locale['setup_3030'] = "Hovedoppsetning";
$locale['setup_3031'] = "Tidspunkter og datoer";
$locale['setup_3032'] = "Debatt";
$locale['setup_3033'] = "Brukeropprettelse";
$locale['setup_3034'] = "Fotoalbums";
$locale['setup_3035'] = "Diverse";
$locale['setup_3036'] = "Private beskjeder";
$locale['setup_3037'] = "Brukgerfelter";
$locale['setup_3038'] = "Debatt: Brukerkategorier";
$locale['setup_3039'] = "Kategorier for brukerfelter";
$locale['setup_3040'] = "Nyheter";
$locale['setup_3041'] = "Brukeradministrasjon";
$locale['setup_3042'] = "Nedlastinger";
$locale['setup_3043'] = "Antall elementer pr. side";
$locale['setup_3044'] = "Sikkerhet";
$locale['setup_3045'] = "Nyhetsoppsetning";
$locale['setup_3046'] = "Last ned oppsetning";
$locale['setup_3047'] = "Nullstill administrator passord";
$locale['setup_3048'] = "Feil logg";
$locale['setup_3049'] = "Bruker logg";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Språk oppsetning";
$locale['setup_3052'] = "Permalenker";
$locale['setup_3053'] = "eShop";
$locale['setup_3054'] = "Bloggkategorier";
$locale['setup_3055'] = "Blogg";
$locale['setup_3056'] = "Tema Kustom";
$locale['setup_3057'] = "Migreringsverktøy";
$locale['setup_3058'] = "Tema oppsettning";

//Multilanguage table rights
$locale['setup_3200'] = "Artikel";
$locale['setup_3201'] = "Brukeropprettede sider";
$locale['setup_3202'] = "Nedlastinger";
$locale['setup_3203'] = "FAQs";
$locale['setup_3204'] = "Debatter";
$locale['setup_3205'] = "Nyheter";
$locale['setup_3206'] = "Fotoalbum";
$locale['setup_3207'] = "Brukeravstemninger";
$locale['setup_3208'] = "E-Post maler";
$locale['setup_3209'] = "Lenker";
$locale['setup_3210'] = "Interne lenker";
$locale['setup_3211'] = "Eelementer";
$locale['setup_3212'] = "Debatt: Brukerkategorier";
$locale['setup_3213'] = "Blogg";
$locale['setup_3214'] = "eShop";

// Step 6 - Navigation Links
$locale['setup_3300'] = "Hjem";
$locale['setup_3301'] = "Artikler";
$locale['setup_3302'] = "Nedlastinger";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Debattforum";
$locale['setup_3305'] = "Kontakt meg";
$locale['setup_3306'] = "Nyhetskategorier";
$locale['setup_3307'] = "Lenker";
$locale['setup_3308'] = "Fotoalbum";
$locale['setup_3309'] = "Søk";
$locale['setup_3310'] = "Foreslå lenke";
$locale['setup_3311'] = "Foreslå nyhet";
$locale['setup_3312'] = "Foreslå artikel";
$locale['setup_3313'] = "Foreslå bilde";
$locale['setup_3314'] = "Foreslå nedlasting";
$locale['setup_3315'] = "Brukerforslag";
$locale['setup_3316'] = "Meldingsboks";
$locale['setup_3317'] = "Legg til Blogg";
$locale['setup_3318'] = "Blogg Arkiv Panel";

// Stage 6 - Panels
$locale['setup_3400'] = "Navigasjon";
$locale['setup_3401'] = "Brukere pålogget";
$locale['setup_3402'] = "Debattemner";
$locale['setup_3403'] = "Siste artikler";
$locale['setup_3404'] = "Velkomstbeskjed";
$locale['setup_3405'] = "Liste over debattemner";
$locale['setup_3406'] = "Brukerinformasjon";
$locale['setup_3407'] = "Brukeravstemning";

// Stage 6 - News Categories
$locale['setup_3500'] = "Feil";
$locale['setup_3501'] = "Nedlastinger";
$locale['setup_3502'] = "Spill";
$locale['setup_3503'] = "Grafikk";
$locale['setup_3504'] = "Maskinvare";
$locale['setup_3505'] = "Journal";
$locale['setup_3506'] = "Brukere";
$locale['setup_3507'] = "Systemmodifikasjoner";
$locale['setup_3508'] = "Film";
$locale['setup_3509'] = "Nettverk";
$locale['setup_3510'] = "Nyheter";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Sikkerhet";
$locale['setup_3513'] = "Programvare";
$locale['setup_3514'] = "Temaer";
$locale['setup_3515'] = "Windows";

// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Superadministrator";
$locale['setup_3601'] = "Admininistrator";
$locale['setup_3602'] = "Ordstyrer";
$locale['setup_3603'] = "Nytt medlem";
$locale['setup_3604'] = "Juniormedlem";
$locale['setup_3605'] = "Medlem";
$locale['setup_3606'] = "Erfaren bruker";
$locale['setup_3607'] = "Veteran";
$locale['setup_3608'] = "Fusioneer";

// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Smil";
$locale['setup_3621'] = "Blunk";
$locale['setup_3622'] = "Trist";
$locale['setup_3623'] = "Pannerynker";
$locale['setup_3624'] = "Sjokk";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Gøy";
$locale['setup_3627'] = "Høy latter";
$locale['setup_3628'] = "Sinna";

// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Kontaktinformasjon";
$locale['setup_3642'] = "Diverse informasjoner";
$locale['setup_3643'] = "Valgmuligheter";
$locale['setup_3644'] = "Statistikk";
$locale['setup_3645'] = "Privat";

// Stage 6 - User Fields
require_once("user_fields/user_aim.php");
require_once("user_fields/user_birthdate.php");
require_once("user_fields/user_blacklist.php");
require_once("user_fields/user_icq.php");
require_once("user_fields/user_location.php");
require_once("user_fields/user_sig.php");
require_once("user_fields/user_skype.php");
require_once("user_fields/user_theme.php");
require_once("user_fields/user_timezone.php");
require_once("user_fields/user_web.php");
require_once("user_fields/user_yahoo.php");

// Welcome message
$locale['setup_3650'] = "Velkommen til din side";

// Final message
$locale['setup_1600'] = "Installasjonen er ferdig";
$locale['setup_1601'] = "PHP-Fusion version9.00 er nå klar til å bli tatt i bruk. Klikk på avslutt for å få lagrett din config_temp.php fil som config.php<br/>";
$locale['setup_1602'] = "<strong>NB: Når du første gang går inn på din nye side, så må du slette hele mappen /install og endre rettigheter på din config.php til 0644 av sikkerhetsmessige årsaker.</strong>";
$locale['setup_1603'] = "Takk fordi du valgte PHP-Fusion.";

// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";

// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "E-Post mal";
$locale['setup_3801'] = "Beskjed ved ny privat melding";
$locale['setup_3802'] = "Du har mottatt en ny privat melding fra [USER]. Den kan sees på [SITENAME]";
$locale['setup_3803'] = "Hei [RECEIVER],\r\nDu har mottatt en ny privat melding med overskriften [SUBJECT] fra [USER] på [SITENAME]. Du kan se dine private meldinger på [SITEURL]messages.php\r\n\r\nBeskjed: [MESSAGE]\r\n\r\nDu kan deaktivere e-post beskjed i din profiladministrasjon.\r\n\r\nVennligst,\r\n[SENDER].";
$locale['setup_3804'] = "Beskjed ved nye debattinndlegg";
$locale['setup_3805'] = "Det er kommet et nytt innlegg - [SUBJECT]";
$locale['setup_3806'] = "Hei [RECEIVER],\r\n\r\nDet er blitt skrevet et innlegg i debatten \'[SUBJECT]\' som du følger på [SITENAME]. Du kan bruke følgende lenke til å se innlegget:\r\n\r\n[THREAD_URL]\r\n\r\nHvis du ikke lenger ønsker den slags beskjeder, kan du klikke på lenken \'Stopp med å følge denne debatt\' i toppen av debatten.\r\n\r\nVennligst,\r\n[SENDER].";
$locale['setup_3807'] = "Kontaktskjema";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";

// Language Admin
$locale['setup_3900'] = "Flerspråksutgave";

// Official Supported System List
$locale['articles']['title'] = "Artikler";
$locale['articles']['description'] = "Et dokumentasjonssystem.";
$locale['blog']['title'] = "Blogg";
$locale['blog']['description'] = "Et bloggsystem.";
$locale['downloads']['title'] = "Nedlastinger";
$locale['downloads']['description'] = "Et nedlastingssystem.";
$locale['eshop']['title'] = "E-Shop";
$locale['eshop']['description'] = "Et e-handelssystem.";
$locale['faqs']['title'] = "Frequent Asked Questions";
$locale['faqs']['description'] = "Ofte stilte spørsmål.";
$locale['forums']['title'] = "Debattforum";
$locale['forums']['description'] = "Et debattsystem.";
$locale['news']['title'] = "Nyheter";
$locale['news']['description'] = "En nyhetsløsning.";
$locale['photos']['title'] = "Bilder";
$locale['photos']['description'] = "Et system til opprettelse av fotoalbums.";
$locale['polls']['title'] = "Brukeravstemninger";
$locale['polls']['description'] = "Et system til opprettelse av brukeravstemninger.";
$locale['weblinks']['title'] = "Lenker";
$locale['weblinks']['description'] = "Et system til håndtering av lenker.";
$locale['install'] = "Installer systemet";
