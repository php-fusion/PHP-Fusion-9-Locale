<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+---------------------------------------------------------+
| Filename: locale/Czech/admin/blacklist.php
| Author: Kvido phpfusion.cz, 26.05.2017
+---------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['BLS_000'] = "Černá listina";
//Blacklist message
$locale['BLS_010'] = "Neplatná e-mailová adresa nebo IP adresa.";
$locale['BLS_011'] = "Přidávání uživatelů do černé listiny.";
$locale['BLS_012'] = "Uživatelská modifikovaná černá listina.";
$locale['BLS_013'] = "Uživatel byl smazán z černé listiny";
$locale['BLS_014'] = "Opravdu chcete tuto položku smazat?";
$locale['BLS_015'] = "Černá listina je momentálně prázdná.";
$locale['BLS_016'] = "E-mailová adresa černé listiny, není platná e-mailová adresa.";

$locale['BLS_020'] = "Zablokovat";
$locale['BLS_021'] = "Upravit blokovaného uživatele";
$locale['BLS_022'] = "Přidat uživatele na černou listinu";
$locale['BLS_023'] = "Aktuální zobrazení %d z %d černé listiny.";

$locale['BLS_030'] = "Info o zablokovaných";
$locale['BLS_031'] = "Admin";
$locale['BLS_032'] = "Datum";
$locale['BLS_033'] = "Možnosti";
$locale['BLS_034'] = "Blokované IP adresy: [STRONG]nebo[/STRONG]";
$locale['BLS_035'] = "Blokované e-mailové adresy";
$locale['BLS_036'] = "Důvod zablokování";
$locale['BLS_037'] = "Přidat uživatele na černou listinu";
$locale['BLS_038'] = "Aktualizovat";

$locale['BLS_MS'] = "Vložením IP adresy zabráníte všem návštěvníkům stránky s touto IP adresou vstup.
Můžete zadat celou IP adresu, např.: <em>123.45.67.89.</em>, nebo jen část IP, např.: <em>123.45.67</em> nebo <em>123.45</em>.
Upozornění: Adresy IPv6 se na této stránce konvertují na jejich plnou délku,
např. <em>ABCD:1234:5:6:7:8:9:FF</em>, se zobrazí jako <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Smíšené IP adresy (obsahují část IPv6 i IPv4) nebudou kontrolovat na částečnou shodu.
<br/><br/>
Vložením emailové adresy, zabráníte registrování návštěvníkovi s touto adresou.
Můžete vložit celý email, <em>foo@bar.com</em>, a nebo jen doménu, <em>bar.com</em>.<br/><br/>

% - odpovídá libovolnému řetězci. <br/> <br/>

%.%.%.%@domain.tld zakáže jakoukoliv adresu, která obsahuje alespoň 3 tečky.<br/>
%+%@domain.tld zakáže jakoukoli adresu, která obsahuje alespoň jeden znak plus.<br/>
%@domain.tld zakáže jakoukoli adresu od domain.tld<br/>
%.domain.tld zakáže všechny subdomény domény.tld<br/>
%payday% zakáže jakoukoli adresu, která obsahuje slovo \"payday\",které je velmi časté na stránkách.<br/>
domain.tld je alias %@domain.tld, aby byl kompatibilní s pravidly definovanými v v7<br/>";
