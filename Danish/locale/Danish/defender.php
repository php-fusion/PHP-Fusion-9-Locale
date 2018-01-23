<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/defender.php
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
$locale['validate'] = "Kontroller og gentag valideringen af feltet.";
$locale['error_request'] = "Der opstod en fejl i forbindelse med din anmodning."; // to be moved
$locale['regex_error'] = "Kontroller og feltet %s"; // to be moved
// Text fields errors
$locale['error_input_username'] = "Venligst indtast et gyldigt brugernavn";
$locale['error_input_default']	= "Du skal udfylde dette felt.";
$locale['error_input_password']	= "Du skal angive et gyldigt kodeord";
$locale['error_input_email']	= "Du skal angive en gyldig mailadresse";
$locale['error_input_number']	= "Du skal angive et gyldigt tal";
$locale['error_input_url']		= "Du skal skrive en gyldig webadresse - URL";
$locale['error_input_regex']	= "Du skal angive et gyldigt mønster";
$locale['error_input_safemode']	= "Du skal udfylde dette felt korrekt";
$locale['error_input_check'] = "Husk at udfylde alle felter med korrekte værdier";
$locale['df_error_text'] = "%s er fejlbehæftet og har brug for opmærksomhed.";
$locale['error_invalid_theme'] = "Du skal bruge et gyldigt tema.";// to be moved
$locale['error_input_checkbox'] = "Denne boks skal klikkes af"; // to be moved
$locale['error_input_file'] = "Du skal vælge en gyldig fil";
// Admin Login
$locale['cookie_title'] = "Din session fik timeout";
$locale['cookie_description'] = "Valideringen kunne ikke gennemføres eller også har din session fået timeout. Prøv at logge på igen.";
$locale['cookie_expired'] = "Administrationscookien er udløbet. Log på igen.";
$locale['password_invalid'] = "Forkert eller ubrugeligt kodeord";
$locale['password_invalid_description'] = "Kodeordet var forkert. Prøv igen.";
$locale['cookie_error'] = "Fejl i forbindelse med cookie";
$locale['cookie_error_description'] = "Du skal tillade din browser at bruge cookies for at komme ind i administrationen.";
$locale['validate_title'] = "Måske er der noget, du skal kontrollere!";
// Address errors
$locale['street_error'] = "Adressen har fejl.";
$locale['country_error'] = "Landeangivelsen har fejl.";
$locale['state_error'] = "Distriktsangivelsen har fejl.";
$locale['city_error'] = "Bynavnet har fejl.";
$locale['postcode_error'] = "Postnummeret skal kontrolleres.";
$locale['field_error_blank'] = "%s må ikke være tomt.";
// Name errors
$locale['firstname_error'] = "Fornavn skal kontrolleres.";
$locale['lastname_error'] = "Efternavn skal kontrolleres.";
$locale['name_error'] = "Fornavn og efternavn må ikke være identiske.";
// Document errors
$locale['doc_type_error'] = "Dokumenttypen skal kontrolleres.";
$locale['doc_series_error'] = "Dokumentserien er fejlbehæftet.";
$locale['doc_number_error'] = "Dokumentnummeret skal kontrolleres.";
$locale['doc_authority_error'] = "Dokumentets integritet skal gennemses.";
$locale['date_issue_error'] = "Dokumentdatoen skal kontrolleres.";
// Tokens
$locale['token_error_title'] = "Fejl i forbindelse med token";
$locale['token_error'] = "Vi beklager, men vi er rendt ind i en fejl. Gå tilbage, genopfrisk siden og prøv igen.";
$locale['token_error_1'] = "Din session blev ikke startet.";
$locale['token_error_2'] = "Din token blev ikke gemt.";
$locale['token_error_3'] = "Din token er forkert.";
$locale['token_error_4'] = "Der er brugt et forkert brugernavn i forbindelse med din token.";
$locale['token_error_5'] = "Datoen i din token er ikke anvendelig.";
$locale['token_error_6'] = "Indlægget blev lavet for hurtigt.";
$locale['token_error_7'] = "Der er brugt en forkert nøgle.";
$locale['token_error_8'] = "Formatet for din token er forkert.";
$locale['token_error_9'] = "Kunne ikke finde nogen token til denne formular.";
$locale['token_error_10'] = "Kunne ikke finde nogen token for lagerenhed: ";

$locale['df_300'] = "Klik for at tilføje filer";
$locale['df_301'] = "Klik for at tilføje billede/billeder";
$locale['df_302'] = "Klik for at tilføje video";
$locale['df_303'] = "Klik for at tilføje lydfiler";
$locale['df_304'] = "Fjern dem valgte fil";

$locale['df_400'] = "%s indeholder forbudte karakterer.";
$locale['df_401'] = "%s er ikke en gyldig mailadresse.";
$locale['df_402'] = "%s er ikke et gyldigt kodeord.";
$locale['df_403'] = "%s er ikke et gyldigt tal.";
$locale['df_404'] = "%s er ikke en gyldig dato.";
$locale['df_405'] = "%s er ikke en gyldig URL.";

$locale['df_415'] = "Fejlagtigt filnavn.";
$locale['df_416'] = "Din fil er for stor. Filer til upload skal være mindre end %s.";
$locale['df_417'] = "Filtypen er ikke tilladt. Billedfiler skal være en af følgende typer: - %s";
$locale['df_418'] = "Filen er i orden, men den har et forbudt typenavn. Giv filen et nyt navn og prøv igen.";
$locale['df_419'] = "Grafikfilen fik fejl i kontrollen. Lav en ny fil.";
$locale['df_420'] = "Folderen eksisterer ikke. Lav folderen med din FTP-klient og prøv så igen.";
$locale['df_421'] = "Billedet må ikke være større end %uw x %uh pixels.";
$locale['df_422'] = "Ukendt fejl (Query)";
$locale['df_423'] = "Billedet blev ikke uploadet korrekt. Prøv igen";
$locale['df_424'] = "Der er udpeget flere filer til upload, end det er tilladt. Prøv igen og tilknyt færre filer.";

// ReCaptcha2
$locale['grecaptcha'] = "Google Recaptcha";
$locale['grecaptcha_desc'] = "Google Recaptcha Field Module";
$locale['grecaptcha_placeholder_1'] = "SITE KEY from Google";
$locale['grecaptcha_placeholder_2'] = "SECRET-KEY from Google";
$locale['no_keys'] = "Det ser ud til, at du ikke har nogen nøgler endnu. Opret dig og få din [RECAPTCHA_LINK]offentlige nøgle her[/RECAPTCHA_LINK]";
// here
//$locale['review_keys'] = "<a href='https://www.google.com/recaptcha/admin' target='_BLANK'><button class='button'>Review your keys at Google reCAPTCHA</button></a>";
$locale['grecaptcha_0100'] = "Site nøgle ";
$locale['grecaptcha_0101'] = "Hemmelig nøgle ";
$locale['grecaptcha_0102'] = "Tema ";
$locale['grecaptcha_0102a'] = "Lys";
$locale['grecaptcha_0102b'] = "Mørk";
$locale['grecaptcha_0103'] = "Valideringstype ";
$locale['grecaptcha_0103a'] = "Tekst";
$locale['grecaptcha_0103b'] = "Audio";
$locale['grecaptcha_warn'] = "Indsæt din offentlige og private reCAPTCHA nøgle";