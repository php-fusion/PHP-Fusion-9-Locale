<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Czech/admin/members_email.php
| Author: Kvido, phpfusion.cz, 10.04.2017
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['email_create_subject'] = "Účet byl vytvořen na [SITENAME]";
$locale['email_create_message'] = "Ahoj [USER_NAME],\n
Váš účet na [SITENAME] byl vytvořen.\nNyní můžete přihlásit pomocí následujících podrobností:\n
Uživatelské jméno: [USER_NAME]\n
Heslo: [PASSWORD]\n\nS pozdravem,\n[SITEUSERNAME]";
$locale['email_activate_subject'] = "Účet aktivován na [SITENAME]";
$locale['email_activate_message'] = "Ahoj [USER_NAME],\nVáš účet na [SITENAME] byl aktivován.\n
Nyní můžete přihlásit pomocí zvoleného uživatelského jména a hesla.\n\nS pozdravem,\n[SITEUSERNAME]";
$locale['email_deactivate_subject'] = "Reaktivace účtu je požadována na [SITENAME]";
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],\nBylo to [DEACTIVATION_PERIOD] dnů(y) od vašeho přihlášení naposledy [SITENAME]. Uživatel byl označen jako neaktivní, ale veškeré údaje o účtu a obsah zůstávají nedotčeny.\n\n
Chcete-li účet znovu aktivovat, stačí kliknout na následující odkaz: [REACTIVATION_LINK]\n\nS pozdravem,\n[SITEUSERNAME]";
$locale['email_ban_subject'] = "Váš účet je zapnutý [SITENAME] byl zakázán";
$locale['email_ban_message'] = "Ahoj [USER_NAME],\nVáš účet je zapnutý [SITENAME] byl zakázán [ADMIN_USERNAME] z následujícího důvodu:\n
[REASON]\nChcete-li získat další informace o tomto zákazu, obraťte se na správce webu na adrese [SITENAME].\n\nS pozdravem,\n[SITEUSERNAME]";
$locale['email_secban_subject'] = "Váš účet je zapnutý [SITENAME] byl zakázán";
$locale['email_secban_message'] = "Ahoj [USER_NAME],\nVáš účet je zapnutý [SITENAME] byl zakázán [ADMIN_USERNAME] protože některé akce akreditované nebo spojené s vaším účtem byly považovány za bezpečnostní hrozbu pro web.\n
Chcete-li získat další informace o tomto zákazu zabezpečení, obraťte se na správce webu na adrese [SITENAME].\n\nS pozdravem,\n[SITEUSERNAME]";
$locale['email_suspend_subject'] = "Váš účet je zapnutý [SITENAME] byl pozastaven";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],\n
Váš účet je zapnutý [SITENAME] byl pozastaven [ADMIN_USERNAME] až do [DATE] (čas na webu) z následujícího důvodu:\n
[REASON]\nChcete-li získat další informace o tomto pozastavení, kontaktujte administrátora webu na adrese [SITENAME].\n\nS pozdravem,\n[SITEUSERNAME]";
