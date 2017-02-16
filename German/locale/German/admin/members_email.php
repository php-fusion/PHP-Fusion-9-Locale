<?php

// Account erstellen
$locale['email_create_subject']  = "Account erstellt auf [SITENAME]";
$locale['email_create_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_create_message'] .= "dein Account auf [SITENAME] wurde erstellt.\n";
$locale['email_create_message'] .= "du kannst dich nun mit den folgenden Accountdaten einloggen:\n";
$locale['email_create_message'] .= "Benutzer: [USER_NAME]\n";
$locale['email_create_message'] .= "Passwort: Wird aus Datenschutzgründen nicht angezeigt\n\n";
$locale['email_create_message'] .= "Mit freundlichen Grüßen [SITEUSERNAME]\n";

// Account aktiviert
$locale['email_activate_subject']  = "Account aktiviert auf [SITENAME]";
$locale['email_activate_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_activate_message'] .= "dein Account auf [SITENAME] wurde aktiviert.\n";
$locale['email_activate_message'] .= "Du kannst dich jetzt mit deinen Benutzerdaten einloggen.\n\n";
$locale['email_activate_message'] .= "Mit freundlichen Grüßen [SITEUSERNAME]\n";

// Account deaktiviert
$locale['email_deactivate_subject']  = "Account-Reaktivierung erforderlich auf [SITENAME]";
$locale['email_deactivate_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_deactivate_message'] .= "du warst seit [DEACTIVATION_PERIOD] Tag(en) nicht mehr eingeloggt. ";
$locale['email_deactivate_message'] .= "Dein Account wurde als inaktiv markiert, aber all deine Benutzerdetails und Inhalte bleiben erhalten.\n";
$locale['email_deactivate_message'] .= "Um deinen Account zu reaktivieren, klicke einfach auf den folgenden Link:\n";
$locale['email_deactivate_message'] .= "[REACTIVATION_LINK]\n\n";
$locale['email_deactivate_message'] .= "Mit freundlichen Grüßen [SITEUSERNAME]\n";

// Account gesperrt
$locale['email_ban_subject']  = "Dein Account auf [SITENAME] wurde gesperrt";
$locale['email_ban_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_ban_message'] .= "dein Account auf [SITENAME] wurde von [ADMIN_USERNAME] gesperrt.\n";
$locale['email_ban_message'] .= "Der Grund dafür war folgender:\n";
$locale['email_ban_message'] .= "[REASON].\n";
$locale['email_ban_message'] .= "Wenn du mehr Informationen über diese Sperre erhalten möchtest, kontaktiere bitte den Administrator der Website.\n\n";
$locale['email_ban_message'] .= "Mit freundlichen Grüßen [SITEUSERNAME]\n";

// Account Sicherheitssperre
$locale['email_secban_subject']  = "Dein Account auf [SITENAME] wurde gesperrt";
$locale['email_secban_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_secban_message'] .= "dein Account auf [SITENAME] wurde von [ADMIN_USERNAME] gesperrt, weil manche Aktivit&auml;ten im Zusammenhang mit deinem Account zu einer Bedrohung von der Sicherheit der Website geworden sind.\n";
$locale['email_secban_message'] .= "Wenn du mehr Informationen über diese Sperre erhalten möchtest, kontaktiere bitte den Administrator der Website.\n\n";
$locale['email_secban_message'] .= "Mit freundlichen Grüßen [SITEUSERNAME]\n";

// Account temporär gesperrt
$locale['email_suspend_subject']  = "Dein Account auf [SITENAME] wurde temporär gesperrt";
$locale['email_suspend_message']  = "Hallo [USER_NAME],\n\n";
$locale['email_suspend_message'] .= "dein Benutzername auf [SITENAME] wurde von [ADMIN_USERNAME] bis [DATE] (Serverzeit) tempor&auml;r aus folgendem Grund gesperrt:\n";
$locale['email_suspend_message'] .= "[REASON].\n";
$locale['email_suspend_message'] .= "Wenn du mehr Informationen über diese Sperre erhalten möchtest, kontaktiere bitte den Administrator der Website.\n\n";
$locale['email_suspend_message'] .= "Mit freundlichen Grüßen [SITEUSERNAME]\n";

?>