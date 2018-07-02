<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/permalinks.php
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
// Section Titles
$locale['PL_400'] = "Aktive permalinks";
$locale['PL_401'] = "Inaktive permalinks";
$locale['PL_401a'] = "Opsætning af permalinks";

// Common
$locale['PL_402'] = "Genskriv navn";
$locale['PL_403'] = "Beskrivelse";
$locale['PL_404'] = "Valgmuligheder";
$locale['PL_404a'] = "Slå til";
$locale['PL_404b'] = "Slå fra";
$locale['PL_404c'] = "Rediger";
$locale['PL_404d'] = "Geninstaller";

// Editing Permalinks
$locale['PL_405'] = "Redigerer permalinks for %s";
$locale['PL_406'] = "Tags";
$locale['PL_407'] = "Beskrivelse";
$locale['PL_408'] = "Typer";
$locale['PL_409'] = "Rediger mønster";
$locale['PL_410'] = "Type af permalink %u";
$locale['PL_411'] = "Fejl";
$locale['PL_412'] = "Kontroller de filer, der som permalink har typen %s!";
$locale['PL_413'] = "Gem";
$locale['PL_414'] = "ADVARSEL: Dette permalink og alle CA-data vil blive slettet!<br/>Er du sikker på at du vil slette linket?";
$locale['PL_415'] = "<b>Permalinks</b> fungerer således, at funktionen ændrer adresserne på siden til adresser, der er mere anvendelige af søgemaskiner der gør det muligt at tilpasse adressestrukturen på din side.<br/>
Du kan slå Permalinks til under sideopsætningen, hvis din server understøtter mod_rewrite. Du aktiverer de forskellige som kan ses under sektionen Slået Fra. Du kan også redigere reglerne yderligere for bedre at tilpasse adresserne direkte i hvert Permalinkmodul.<br/>
Bemærk venligst at mod_rewrite eller dens tilsvarende er påkrævet for at permalinks skal virke.";

// Admin Messages
$locale['PL_420'] = "Der opstod en fejl.";
$locale['PL_421'] = "Permalinks er opdateret.";
$locale['PL_422'] = "Ingen permalinkmønstre fundet for %s.";
$locale['PL_423'] = "Dette permalink kunne ikke findes.";
$locale['PL_424'] = "Slog permalinks for %s til.";
$locale['PL_425'] = "Permalinks for %s er allerede slået til.";
$locale['PL_426'] = "Slog permalinks for %s fra.";
$locale['PL_429'] = "Permalink driver til %s";
// Other
$locale['PL_427'] = "Ingen permalinks er slået til.";
$locale['PL_428'] = "Permalinks";
$locale['seo_htc_warning'] = "Bemærk venligst, at hvis du ændrer noget i denne opsætning, så vil indholdet i filen `.htaccess` blive overskrevet og alle tidligere ændringer i denne fil blive fjernet.";
$locale['rewrite_disabled'] = "Det ser ud til at `mod_rewrite` ikke er slået til hos din udbyder. Slår du SEF-adresser til, kan du risikere at ødelægge navigationen på din side. Kontakt først din udbyder for at få slået `mod_rewrite` til.";