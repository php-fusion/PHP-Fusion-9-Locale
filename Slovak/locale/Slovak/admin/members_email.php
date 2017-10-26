<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Slovak/admin/members_email.php
| Author: RobiNN
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['email_create_subject'] = "Účet vytvorený na [SITENAME]";
$locale['email_create_message'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] bol vytvorený.<br/>Pre prihlásenie použite nasledovné údaje:<br/>
meno: [USER_NAME]<br/>
heslo: [PASSWORD]<br/>S pozdravom,<br/>[SITEUSERNAME]";
$locale['email_activate_subject'] = "Účet aktivovaný na [SITENAME]";
$locale['email_activate_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] bol aktivovaný.<br/>
Teraz sa môžete prihlásiť pomocou zvoleného mena a hesla.<br/>S pozdravom,<br/>[SITEUSERNAME]";
$locale['email_deactivate_subject'] = "Vyžaduje sa reaktivácia účtu na [SITENAME]";
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],<br/>Uplynulo [DEACTIVATION_PERIOD] dní od vášho posledného prihlásenia na [SITENAME]. Boli ste označený ako neaktívny, ale údaje vášho účtu ostávajú nezmenené.<br/>
Na reaktiváciu vášho účtu kliknite na tento odkaz: [REACTIVATION_LINK]<br/>S pozdravom,<br/>[SITEUSERNAME]";
$locale['email_ban_subject'] = "Váš účet na [SITENAME] bol zabanovaný";
$locale['email_ban_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] z tohto dôvodu:<br/>
[REASON]<br/>Ak chcete získať viac informácií o tomto zákaze, kontaktujte správcu webu na [SITENAME].<br/>S pozdravom,<br/>[SITEUSERNAME]";
$locale['email_secban_subject'] = "Váš účet na [SITENAME] bol zabanovaný";
$locale['email_secban_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] pretože niektoré vami vykonané akcie boli považované za bezpečnostnú hrozbu pre web.<br/>
Ak chcete získať ďalšie informácie o tomto bezpečnostnom zákaze, kontaktujte správcu webu na [SITENAME].<br/>S pozdravom,<br/>[SITEUSERNAME]";
$locale['email_suspend_subject'] = "Váš účet na [SITENAME] bol pozastavený";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] od [DATE] (čas stránky) z týchto dôvodov:<br/>
[REASON]<br/>Ak chcete získať ďalšie informácie o tomto pozastavení, obráťte sa na správcu webu na [SITENAME].<br/>S pozdravom,<br/>[SITEUSERNAME]";
