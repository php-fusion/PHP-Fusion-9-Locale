<?php
$locale['BLS_000'] = "Feketelista";
//Blacklist message
$locale['BLS_010'] = "Hibás E-mail vagy IP cím.";
$locale['BLS_011'] = "Felhasználó Hozzáadva a Feketelistához.";
$locale['BLS_012'] = "Felhasználó Módosítva a Feketelistában.";
$locale['BLS_013'] = "Felhasználó törölve a feketelistáról";
$locale['BLS_014'] = "Biztosan Törölni szeretnéd ezt a Bejegyzést?";
$locale['BLS_015'] = "A feketelista jelenleg üres.";
$locale['BLS_016'] = "A feketelistás email nem valós vagy hibás.";

$locale['BLS_020'] = "Feketelistás felhasználó";
$locale['BLS_021'] = "Feketelistás felhasználó szerkesztése";
$locale['BLS_022'] = "Feketelistás felhasználó Hozzáadása";
$locale['BLS_023'] = "Jelenleg %d megjelenítve a %d feketelistából.";

$locale['BLS_030'] = "Információ";
$locale['BLS_031'] = "Admin";
$locale['BLS_032'] = "Dátum";
$locale['BLS_033'] = "Lehetőségek";
$locale['BLS_034'] = "IP cím [STRONG]vagy[STRONG]";
$locale['BLS_035'] = "E-mail";
$locale['BLS_036'] = "Kitiltás oka";
$locale['BLS_037'] = "Kitilt";
$locale['BLS_038'] = "Módosít";
$locale['BLS_039'] = "Összes kijelölése";

$locale['BLS_MS'] = "Egy IP cím megadásával letilthatod az onnan érkező oldallekéréseket.
Beírhatsz egy teljes IP címet (<em>pl. 123.45.67.89</em>), vagy megadhatsz IP tartományokat is (<em>pl. 123.45.67 vagy 123.45</em>).
Megjegyzés: az IPv6 címek a teljes hosszúságú változatukra lesznek konvertálva az oldalon,
pl. az <em>ABCD:1234:5:6:7:8:9:FF</em> így fog megjelenni: <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
A vegyes típusú IP címek (amelyek IPv6 és IPv4 résszel is rendelkeznek) nem lesznek ellenőrizve a részleges egyezésre.
<br /><br />
Egy e-mail cím megadásával megtilthatod az adott címmel való regisztrációt.
Megadhatsz teljes címet (<em>pl. valaki@valami.hu</em>), vagy az e-mail cím domain részét (<em>pl. valami.hu</em>).<br /><br />

% - bármilyen karakterláncot.<br /><br />

%.%.%.%@domain.tld tiltja azokat a címeket amelyben legalább 3 pont van.<br />
%+%@domain.tld tiltja azokat a címeket amelyekben legalább egy + jel van.<br />
%@domain.tld egy cím tiltása domain.tld<br />
%.domain.tld Tilt az altartományból domain.tld<br />
%payday% tiltja azokat a címeket amelyben szerepel /payday/ szó, melyet gyakran használnak.<br />
domain.tld egy alias név a %@domain.tld, hogy ez kompatibilis a definiált szabályokat v7.<br />";