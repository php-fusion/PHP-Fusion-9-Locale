<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/blacklist.php
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
$locale['BLS_000'] = "Udeluk"; //406
//Blacklist message
$locale['BLS_010'] = "Ugyldig mailadresse eller IP-adresse.";
$locale['BLS_011'] = "Tilføjer brugere til sortlisten.";
$locale['BLS_012'] = "Bruger tilføjet sortliste.";
$locale['BLS_013'] = "Bruger fjernet fra sortlisten"; //401
$locale['BLS_014'] = "Er du sikker på, at du vil slette denne post?";
$locale['BLS_015'] = "Listen er tom i øjeblikket."; //465
$locale['BLS_016'] = "Den angivne mailadresse er ikke gyldig."; //405

$locale['BLS_020'] = "Udelukkede brugere"; //420
$locale['BLS_021'] = "Rediger udelukket bruger"; //421
$locale['BLS_022'] = "Udeluk ny bruger";
$locale['BLS_023'] = "Viser aktuelt %d af i alt %d udelukkede brugere.";

$locale['BLS_030'] = "Udelukkelsesinformation"; //461
$locale['BLS_031'] = "Administration"; //467
$locale['BLS_032'] = "Dato";  //468
$locale['BLS_033'] = "Valgmuligheder"; //462
$locale['BLS_034'] = "IP-adresse [STRONG]eller[/STRONG]"; //441
$locale['BLS_035'] = "Mailadresse "; //442
$locale['BLS_036'] = "Udelukkelsesårsag "; //443
$locale['BLS_037'] = "Udeluk bruger";  //444
$locale['BLS_038'] = "Opdater";
$locale['BLS_039'] = "Vælg alle";

$locale['BLS_MS'] = "Ved at indskrive en IP-adresse vil man forhindre en bruger, hvis IP-adresse svarer til den gemte fra at besøge denne side.
Du kan indskrive en fuld IP-adresse - f. eks. <em>123.45.67.89.</em>, eller en del af en adresse f. eks. <em>123.45.67</em> eller <em>123.45</em>.
Bemærk: IPv6-adresser omsættes til fuld længde her på siden, f. eks. vil <em>ABCD:1234:5:6:7:8:9:FF</em> blive vist som <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Blandede IP-adresser (dem der indeholder både IPv6- og IPv4-elementer) vil ikke blive kontrolleret for delvist sammenfald.
<br /><br />
Indskriver du en mailadresse vil det forhindre besøgende i at oprette sig med denne adresse.
Du kan indskrive en fuld adresse f. eks. <em>foo@bar.com</em>, eller et domænenavn f. eks. <em>bar.com</em>.<br /><br />

% - alle data bruges til sammenligning.<br /><br />

%.%.%.%@domain.tld udelukker alle adresser, som indeholder mindst 3 punktummer.<br />
%+%@domain.tld udelukker alle adresser, der indeholder mindst et plustegn.<br />
%@domain.tld udelukker alle adresser på domain.tld<br />
%.domain.tld udelukker alle underdomæner under domain.tld<br />
%payday% udelukker alle adresser, der indeholder ordet \"payday\" der ofte anvendes.<br />
domain.tld er et alias for %@domain.tld, der anvendes for at gøre det gyldigt i forhold til v7.<br />"; //440