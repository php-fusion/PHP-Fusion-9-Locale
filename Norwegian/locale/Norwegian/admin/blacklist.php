<?php
// Delete blacklisted user
$locale['400'] = "Slett bruker fra Svartelista";
$locale['401'] = "Bruker slettet fra Svartelista";
$locale['402'] = "Tilbake til Svartelistas Admin";
$locale['403'] = "Tilbake til admin Hovedside";
$locale['404'] = "Vennligst skriv inn Svartelistes IP eller Svartelistes E-Post Adresse";
$locale['405'] = "Svartelistes e-post adresse er ikke en gyldig e-post.";
$locale['406'] = "Svarteliste";
// Add/Edit Blacklist Titles
$locale['420'] = "Svartelist Bruker";
$locale['421'] = "Rediger svartelistet bruker";
// Add/Edit blacklist form
$locale['440'] = "Hvis du skriver inn en IP-adresse, vil det hindre bruker av denne IP-adressen å besøke dette nettstedet.
Du kan enten skrive inn en full IP-adresse, f.eks. <em>123.45.67.89</em>, eller en del av en IP-adresse, f.eks.<em>123.45.67</em> eller <em>123.45</em>.
VÆR OPPMERKSOM PÅ : IPv6 adresser konverteres til full lengde her på siden,
dvs. at <em>ABCD:1234:5:6:7:8:9:FF</em> vil bli vist som <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Blanende IP-adresser (som inneholder både en IPv6-del og en IPv4-del) vil ikke bli sjekket for delvis match.
<br /><br />
Å skriver inn en e-post adresse vil hindre medlemmer fra registrering ved hjelp av denne adressen.
Du kan legge inn en fullstendig e-postadresse, f.eks <Em>foo@bar.com</em>, eller en e-post domene, f.eks <Em>bar.com</em>.<br /><br />

% - matches any string.<br /><br />

%.%.%.%@domain.tld forbyr enhver adresse som inneholder minst 3 prikker.<br />
%+%@domain.tld forbyr enhver adresse som inneholder minst ett plusstegn.<br />
%@domain.tld forbyr enhver adresse fra domain.tld<br />
%.domain.tld forbyr alle underdomener av domain.tld<br />
%payday% forbyr enhver adresse som inneholder ordet \"payday\" som var veldig ofte på nettstedet.<br />
domain.tld er et alias for %@domain.tld å gjøre den kompatible med regel definert i v7.<br />";

$locale['441'] = "Svartelist IP adresse: <strong>eller</strong>";
$locale['442'] = "Svartelist e-post adresse:";
$locale['443'] = "Årsak til svartelisting";
$locale['444'] = "Svartelist bruker";
// Current blacklisted users
$locale['460'] = "Svartelistede brukere";
$locale['461'] = "Svartelisted informasjon";
$locale['462'] = "Valg";
$locale['463'] = "Rediger";
$locale['464'] = "Slett";
$locale['465'] = "Svartelisten er for tiden tom.";
$locale['466'] = "N/A";

$locale['467'] = "Admin";

$locale['468'] = "Dato";
