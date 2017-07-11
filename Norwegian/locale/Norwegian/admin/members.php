<?php
// Member Management Options
$locale['400'] = "Brukerbehandling";
$locale['401'] = "Brukernavn";
$locale['402'] = "Legg til ny bruker";
$locale['403'] = "Brukerstatus";
$locale['404'] = "Valgmuligheter";
$locale['405'] = "Vis";
$locale['406'] = "Endre";
$locale['407'] = "Aktiver";
$locale['408'] = "Opphev utestengelse";
$locale['409'] = "Utesteng";
$locale['410'] = "Slett";
$locale['411'] = "Det er ingen: <i>%s brukere</i>";
$locale['412'] = ", der brukernavn begynnner med ";
$locale['413'] = ", som passer til søkekriteriet";
$locale['414'] = "Vis alle";
$locale['415'] = "Søk etter bruker:";
$locale['416'] = "Søk";
$locale['417'] = "Velg handling";
$locale['418'] = "Angre";
$locale['419'] = "Gjenopprett";
// Ban/Unban/Delete Member
$locale['420'] = "Utestenging er gjennomført";
$locale['421'] = "Utestenging er opphevet";
$locale['422'] = "Medlem er slettet";
$locale['423'] = "Er du sikker på at du ønsker å slette brukeren?";
$locale['424'] = "Brukerkonto aktivert";
$locale['425'] = "<h2>Advarsel!</h2><br />
Du er i ferd med å slett bruker <strong>%s</strong> !<br />
Følgende innhold <u>lagt inn av denne brukeren</u> på denne siden vil bli slettet dersom du forsetter:<br />
- Artikler<br />
- Nyheter<br />
- Forum emner. Merk at innlegg av andre brukere i disse trådene også vil bli slettet, sammen med vurderings stemmer og velegge som eksisterer i disse trådene.<br />
- Forum Innlegg.<br />
- Forum Vedlegg.<br />
- Kommentarer<br />
- Private meldinger sendt eller mottatt av denne bruker.<br />
- Vurderings stemmer<br />
- Rangeringer gitt<br />
Med mindre dette er en f.eks. spammer. Vi anbefaler deg å utestenge, Suspendere, Kanselere eller anonymiser denne bruker.<br />
<br />
Er du sikker på at du ønsker å slette denne bruker?<br />";
$locale['426'] = "Ja";
$locale['427'] = "Nei";
// Edit Member Details
$locale['430'] = "Rediger bruker";
$locale['431'] = "Brukeropplysninger er oppdatert";
$locale['432'] = "Tilbake til brukerstyring";
$locale['433'] = "Tilkage til administrasjon";
$locale['434'] = "Var ikke i stand til å oppdatere brukeropplysninger:";
// Extra Edit Member Details form options
$locale['440'] = "Lagre endringer";
// Update Profile Errors
$locale['450'] = "Den primære administrator kan ikke redigeres.";
$locale['451'] = "Du må angi et brukernavn og en epost adresse.";
$locale['452'] = "Brukernavnet inneholder forbudte tegn.";
$locale['453'] = "Brukernavnet ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." er allerede i bruk.";
$locale['454'] = "Feil i epost adresse.";
$locale['455'] = "Epost adressen ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." er allerede i bruk.";
$locale['456'] = "De to passordene er ikke identiske.";
$locale['457'] = "Det er feil i passordet, bruk kun alfanumeriske karakterer.<br />
Passordet må være på minst 8 tegn.";
$locale['458'] = "<strong>Advarsel:</strong> feil i utførelsen av scriptet.";
// View Member Profile
$locale['470'] = "Brukerprofil";
$locale['472'] = "Statistikk";
$locale['473'] = "Brukergrupper";
// Add Member Errors
$locale['480'] = "Legg til bruker";
$locale['481'] = "Brukerkontoen ble lagt til.";
$locale['482'] = "Brukerkontoen kunne ikke legges til.";
// Suspension Log 
$locale['510s'] = "Suspensjonslogg for ";
$locale['511s'] = "Det er ingen registrerte suspenderinger for denne brukeren.";
$locale['512s'] = "Tidligere suspenderinger av ";
$locale['513'] = "Nr."; // as in number
$locale['514'] = "Dato";
$locale['515'] = "Årsak";
$locale['516'] = "Suspenderende administrator";
$locale['517'] = "System handling";
$locale['518'] = "Tilbake til brukerprofil";
$locale['519'] = "Suspenderingshistorikk for denne bruker";
$locale['520'] = "Opphevet: ";
$locale['521'] = "IP: ";
$locale['522'] = "Ikke opphevet enda";
$locale['540'] = "Feil";
$locale['541'] = "Feil: Du må oppgi en grunn for suspenderingen!";
$locale['542'] = "Feil: Du må oppgi en grunn for sikkerhets utestengingen!";
// User Management Admin
$locale['550'] = "Suspender bruker: ";
$locale['551'] = "Varighet i dager:";
$locale['552'] = "Grunn:";
$locale['553'] = "Suspender av";
$locale['554'] = "Det er ingen registrerte suspenderinger for denne brukeren.";
$locale['555'] = "Hvis du bestemmer at denne bruker skal utestenges, klikk 'Utesteng'";
$locale['556'] = "Opphev suspendering av bruker: ";
$locale['557'] = "Opphev suspendering";
$locale['558'] = "Opphev utestening av bruker: ";
$locale['559'] = "Opphev utestenging ";
$locale['560'] = "Opphev sikkerhets utestenging av bruker: ";
$locale['561'] = "Opphev sikkerhets utestenging";
$locale['562'] = "Utesteng bruker: ";
$locale['563'] = "Sikkerhets utesteng bruker: ";
$locale['585a'] = "Vennligst oppgi grunnen for at du utestenger eller opphever utestengelsen ";
$locale['566'] = "Utestenging opphevet";
$locale['568'] = "Sikkerhets utestenging gjennomført";
$locale['569'] = "Sikkerhets utestenging opphevet";
$locale['572'] = "Brukeren suspendert";
$locale['573'] = "Suspendering opphevet";
$locale['574'] = "Bruker deaktivert";
$locale['575'] = "Bruker reaktivert";
$locale['576'] = "Konto kanselert";
$locale['577'] = "Konto kanselering ikke gjenomført";
$locale['578'] = "Konto kanselert og anonymisert";
$locale['579'] = "Konto anonymisering ikke gjenomført";
$locale['580'] = "Deaktiver inaktive Brukere";
$locale['581'] = "Du har flere enn 50 inaktive medlemmer og må kjøre deaktiveringsprosessen <strong>%d ganger</strong>.";
$locale['582'] = "Reaktiver";
$locale['583'] = "Gjenninnsett";
$locale['584'] = "Velg ny status";
$locale['585'] = "Denne bruker var opprinnelig utestengt av sikkerhetsgrunner! Er du sikker på at du vil oppheve utestengingen av brukeren nå?";
$locale['585a'] = "Du må angi en årsak til, at udelukkelsen oppheves ";
$locale['590'] = "Suspender";
$locale['591'] = "Opphev suspendering";
$locale['592'] = "suspenderer";
$locale['593'] = "opphever suspendering av";
$locale['594'] = "Vennligst oppgi en grunn for at du gjør dette ";
$locale['595'] = " brukeren ";
$locale['596'] = "Varighet:";
$locale['600'] = "Sikkerhetsutestengelse";
$locale['601'] = "sikkerhetsutestengelse";
$locale['602'] = "Opphev";
$locale['603'] = "opphever";
$locale['604'] = "Grunn:";
// Deactivation System
$locale['610'] = "<strong>%d bruker (e)</strong> har ikke logget inn på <strong>%d dag(e)</strong> og har blitt merket som inaktive. Ved å deaktivere disse brukerne vil de få en frist på <strong>%d dag(er)</strong> før de blir %s.";
$locale['611'] = "Vennligst vær oppmerksom på at noen brukere kan ha bidratt med innhold til siden som foruminnlegg, kommentarer, bilder osv. Disse vil slettes når deaktiverte brukere slettes.";
$locale['612'] = "bruker";
$locale['613'] = "brukere";
$locale['614'] = "Deaktiver";
$locale['615'] = "permanent slettet";
$locale['616'] = "anonymiser";
$locale['617'] = "Advarsel:";
$locale['618'] = "Det anbefales på det sterkeste å endre handling for deaktivering til anonymiser i stedet for slette for å forhindre tap av data!";
$locale['619'] = "Du kan gjøre det her.";
$locale['620'] = "anonymiser";
$locale['621'] = "Automatisk deaktivering av inaktive brukere.";

