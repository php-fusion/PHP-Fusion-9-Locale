<?php
$locale['email_create_subject'] = "Brukerkonto opprettet ";
$locale['email_create_message'] = "Hei [USER_NAME],\n
Din brukerkonto på ".$settings['sitename']." har blitt opprettet.\n
Du kan nå logge inn med følgende detaljer:\n
Brukernavn: [USER_NAME]\n
Passord: [PASSWORD]\n\n
Vennlig hilsen,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Brukerkonto aktivert ";
$locale['email_activate_message'] = "Hei [USER_NAME],\n
Din konto på ".$settings['sitename']." har blitt aktivert.\n
Du kan nå logge inn med ditt valgte brukernavn og passord.\n\n
Vennlig hilsen,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Konto reaktivering kreves på ".$settings['sitename'];
$locale['email_deactivate_message'] = "Hei [USER_NAME],\n
Det har gått ".$settings['deactivation_period']." dag(er) siden du sist logget inn på ".$settings['sitename'].". Din brukerkonto har blitt markert som inaktiv, men alle dine kontoopplysninger og alt innholdet er intakt.\n\n
For å reaktivere kontoen din klikk på denne lenken: 
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Venlig hilsen\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Din brukerkonto på ".$settings['sitename']." har blitt utestengt";
$locale['email_ban_message'] = "Hei [USER_NAME],\n
Brukerkontoen din på ".$settings['sitename']." har blitt utestengt av ".$userdata['user_name']." av følgende grunn:\n
[REASON].\n
Hvis du vil ha mer informasjon rundt denne utestengelsen, vennligst kontakt sidens administrator på ".$settings['siteemail'].".\n\n
Vennlig hilsen,\n
".$settings['siteusername'];
$locale['email_secban_subject'] = "Din konto på ".$settings['sitename']." har blitt utestengt";
$locale['email_secban_message'] = "Hei [USER_NAME],\n
Din konto på ".$settings['sitename']." har blitt utestengt av ".$userdata['user_name']." på grunn av at handlinger akkreditert deg eller koblet til din konto var å regne som en sikkerhetstrussel mot siden.\n
Hvis du vil ha mer informasjon rundt sikkerhetsutestengelsen, vennligst kontakt sidens administrator på ".$settings['siteemail'].".\n
Vennlig hilsen,\n
".$settings['siteusername'];
$locale['email_suspend_subject'] = "Din konto på ".$settings['sitename']." har blitt suspendert";
$locale['email_suspend_message'] = "Hei [USER_NAME],\n
Din brukerkonto på ".$settings['sitename']." har blitt suspendert av ".$userdata['user_name']." inntil [DATE] (site time) av følgende gunn:\n
[REASON].\n
Hvis du ønsker mer informasjon omkring suspenderingen, vennligst kontakt sidens administrator på ".$settings['siteemail'].".\n
Regards,\n
".$settings['siteusername'];
