<?php

// Blacklist Eintrag loeschen
$locale['400'] = "Blacklisteintrag l&ouml;schen";
$locale['401'] = "Der Backlisteintrag wurde gel&ouml;scht.";
$locale['402'] = "Zur&uuml;ck zur Blacklistverwaltung";
$locale['403'] = "Zur&uuml;ck zur Administrations&uuml;bersicht";
$locale['404'] = "Du musst eine Blacklist-IP oder Blacklist E-Mail angeben.";
$locale['405'] = "Die Blacklist E-Mail Adresse ist keine g&uuml;ltige E-Mail Adresse.";
$locale['406'] = "Blacklist";

// Hinzufuegen/Bearbeiten Titel
$locale['420'] = "Blacklist - Eintrag hinzuf&uuml;gen";
$locale['421'] = "Blacklist - Eintrag bearbeiten";

// Hinzufuegen/Bearbeiten Formular 
$locale['440']  = "Gibst du eine IP-Adresse an, wird dem Benutzer welche diese IP-Adresse besitzt, der Zugang zur Seite verwehrt. \n";
$locale['440'] .= "Du kannst die vollst&auml;ndige IP-Adresse angeben wie <em>123.45.67.89</em> oder nur einen Teil wie <em>123.45.67</em> oder <em>123.45</em>.<br />\n";
$locale['440'] .= "<strong>Hinweis:</strong> IPv6-Adressen werden in ihre komplette L&auml;nge umgewandelt, sprich aus <em>ABCD:1234:5:6:7:8:9:FF</em> wird <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>. \n";
$locale['440'] .= "Gemischte IP-Adressen (enthalten Teile von IPv6 und IPv4) werden nicht auf teilweise &Uuml;bereinstimmungen gepr&uuml;ft.<br /><br />\n";
$locale['440'] .= "Ebenfalls kannst du E-Mail Adressen f&uuml;r die Registrierung sperren. \n";
$locale['440'] .= "Du kannst eine vollst&auml;ndige Adresse wie <em>foo@bar.com</em> sperren oder aber auch den E-Mail Anbieter wie <em>bar.com</em>.\n";
$locale['440'] .= "% - Steht f&uuml;r eine beliebige Zeichenkette.<br /><br />\n";
$locale['440'] .= "%.%.%.%@domain.tld blockiert alle Adressen, die mehr als 3 Punkte beinhalten.<br />\n";
$locale['440'] .= "%+%@domain.tld blockiert alle Adressen, die ein Pluszeichen beinhalten.<br />\n";
$locale['440'] .= "%@domain.tld blockiert alle Adressen von domain.tld.<br /\n";
$locale['440'] .= "%.domain.tld blockiert alle Subdomains von domain.tld.<br />\n";
$locale['440'] .= "%payday% blockiert alle Adressen, die das Wort &quot;<em>payday</em>&quot; beinhalten.<br />\n";
$locale['440'] .= "domain.tld ist ein Alias von %@domain.tld, um mit den Regeln, welche in v7 definiert wurden, kompatibel zu sein.<br />";
$locale['441']  = "IP-Adresse:<br /><strong>oder</strong>";
$locale['442']  = "E-Mail Adresse:";
$locale['443']  = "Grund:";
$locale['444']  = "Eintrag speichern";

// Aktuelle Blacklist Eintraege
$locale['460'] = "Aktuell vorhandene Blacklisteintr&auml;ge";
$locale['461'] = "Informationen";
$locale['462'] = "Optionen";
$locale['463'] = "Bearbeiten";
$locale['464'] = "L&ouml;schen";
$locale['465'] = "Keine Blacklisteintr&auml;ge vorhanden.";
$locale['466'] = "Nicht verf&uuml;gbar";
$locale['467'] = "Administrator";
$locale['468'] = "Datum";

?>