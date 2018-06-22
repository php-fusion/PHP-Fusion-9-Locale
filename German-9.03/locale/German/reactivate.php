<?php

// Fehler Nachrichten
$locale['500']  = "Es ist ein Feler aufgetreten.";
$locale['501']  = "Der Reaktivierungslink ist nicht mehr l&auml;nger g&uuml;ltig.<br /><br />\n";
$locale['501'] .= "Kontaktiere bitte den Seitenadministrator unter <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a>, falls du eine manuelle Reaktivierung w&uuml;scht.";
$locale['502']  = "Der Reaktivierungslink ist nicht g&uuml;ltig.<br /><br />\n";
$locale['502'] .= "Kontaktiere bitte den Seitenadministrator unter <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a>, falls du eine manuelle Reaktivierung w&uuml;scht.";
$locale['503']  = "Der Reaktivierungslink kann deinen Account nicht reaktivieren.<br />\n";
$locale['503'] .= "M&ouml;glicherweise wurde dein Account bereits reaktiviert und du kannst dich <a href='".fusion_get_settings('siteurl')."login.php'>hier</a> anmelden.<br /><br />\n";
$locale['503'] .= "Solltest du dich dennoch nicht anmelden k&ouml;nnen, kontaktiere bitte den Seitenadministrator unter <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a>, falls du eine manuelle Reaktivierung w&uuml;scht.";

// E-Mail
$locale['504']  = "Account reaktiviert auf ".fusion_get_settings('sitename');
$locale['505']  = "Hallo [USER_NAME],\n\n";
$locale['505'] .= "dein Account auf ".fusion_get_settings('sitename')." wurde reaktiviert.\n";
$locale['505'] .= "Wir hoffen, dich in Zukunft &ouml;fters auf unserer Seite zu sehen.\n\n";
$locale['505'] .= "Mit freundlichen Grüßen ".fusion_get_settings('siteusername');
$locale['506']  = "Reaktivierung durch Benutzer.";

?>