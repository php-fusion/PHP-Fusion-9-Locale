<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/members_email.php
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
$locale['email_create_subject'] = "En brugerkonto er oprettet på [SITENAME]";
$locale['email_create_message'] = "Hej [USER_NAME],<br/>
Din brugerkonto på [SITENAME] er blevet oprettet.<br/>Du kan nu logge ind med følgende oplysninger:<br/>
brugernavn: [USER_NAME]<br/>
kodeord: [PASSWORD]<br/>Venlig hilsen,<br/>[SITEUSERNAME]";
$locale['email_activate_subject'] = "Din konto er blevet aktiveret på [SITENAME]";
$locale['email_activate_message'] = "Hej [USER_NAME],<br/>Din konto på [SITENAME] er nu blevet aktiveret.<br/>
Derfor kan du nu logge på siden med det brugernavn og det kodeord, du valgte ved oprettelsen.<br/>Venlig hilsen,<br/>[SITEUSERNAME]";
$locale['email_deactivate_subject'] = "Det er nødvendigt at genaktivere kontoen på [SITENAME]";
$locale['email_deactivate_message'] = "Hej [USER_NAME],<br/>Der er gået [DEACTIVATION_PERIOD] dag(e) siden du sidst loggede ind på [SITENAME]. Din konto er derfor blevet sat som inaktiv, men alle oplysninger og alt indhold er intakt.<br/>
For at genaktivere din konto, skal du ganske enkelt klikke på følgende link: [REACTIVATION_LINK]<br/>Venlig hilsen,<br/>[SITEUSERNAME]";
$locale['email_ban_subject'] = "Din konto på [SITENAME] er blevet udelukket";
$locale['email_ban_message'] = "Hej [USER_NAME],<br/>Din konto på [SITENAME] er blevet udelukket af [ADMIN_USERNAME] af følgende årsag:<br/>
[REASON]\nHvis du vil have yderligere information om udelukkelsen, kan du kontakte en administrator på [SITENAME].<br/>Venlig hilsen,\n[SITEUSERNAME]";
$locale['email_secban_subject'] = "Din konto på [SITENAME] er blevet udelukket";
$locale['email_secban_message'] = "Hej [USER_NAME],<br/>Din konto på [SITENAME] er blevet udelukket af [ADMIN_USERNAME] på grund af at aktiviteter, du har udført eller aktiviteter knyttet til din konto betragtes som en sikkerhedsrisiko for siden.<br/>
Hvis du vil vide mere om denne sikkerhedsudelukkelse, kan du kontakte en administrator på [SITENAME].<br/>Venlig hilsen,<br/>[SITEUSERNAME]";
$locale['email_suspend_subject'] = "Din konto på [SITENAME] er blevet suspenderet";
$locale['email_suspend_message'] = "Hej [USER_NAME],<br/>
Din konto på [SITENAME] er blevet suspenderet af [ADMIN_USERNAME] indtil [DATE] (sidens tidszone) af følgende årsag:<br/>
[REASON]<br/>Hvis du vil vide mere om denne suspendering, så kontakt en administrator på [SITENAME].<br/>Venlig hilsen,<br/>[SITEUSERNAME]";