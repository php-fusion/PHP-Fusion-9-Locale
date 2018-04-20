<?php
$locale['BLS_000'] = "Lista negra"; // 406
// Mensaje de lista negra
$locale['BLS_010'] = "Correo electrónico o dirección IP inválidos.";
$locale['BLS_011'] = "Agregar usuarios a la lista negra.";
$locale['BLS_012'] = "Lista negra modificada por el usuario.";
$locale['BLS_013'] = "Usuario eliminado de la lista negra"; // 401
$locale['BLS_014'] = "¿Está seguro de que desea eliminar esta entrada?";
$locale['BLS_015'] = "La lista negra está actualmente vacía."; // 465
$locale['BLS_016'] = "La dirección de correo electrónico de la lista negra no es un correo electrónico válido."; // 405

$locale['BLS_020'] = "Usuario de la lista negra"; // 420
$locale['BLS_021'] = "Editar usuario en la lista negra"; // 421
$locale['BLS_022'] = "Agregar usuario en la lista negra";
$locale['BLS_023'] = "Actualmente muestra %d de %d entradas de lista negra.";

$locale['BLS_030'] = "Información en la lista negra"; // 461
$locale['BLS_031'] = "Administrador"; // 467
$locale['BLS_032'] = "Fecha"; // 468
$locale['BLS_033'] = "Opciones"; // 462
$locale['BLS_034'] = "Dirección IP de la lista negra: <strong> o </ strong>"; // 441
$locale['BLS_035'] = "Dirección de correo electrónico de la lista negra"; // 442
$locale['BLS_036'] = "Motivo de la lista negra"; // 443
$locale['BLS_037'] = "Usuario de la lista negra"; // 444
$locale['BLS_038'] = "Actualizar";

$locale['BLS_MS'] = "Al ingresar una dirección IP evitará que un usuario cuya dirección IP coincida con la entrada visite este sitio.
Puede ingresar una dirección IP completa, p. <em>123.45.67.89.</em>, o una IP parcial, p. <em>123.45.67</em> o <em>123.45</em>.
Tenga en cuenta: las direcciones IPv6 se convierten a su forma completa en este sitio,
p.ej. <em>ABCD:1234:5:6:7:8:9:FF</em> se mostrará como <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Las direcciones IP mixtas (aquellas que contienen ambas partes, IPv6 e IPv4) no se verificarán para una coincidencia parcial.
<br /><br />
Ingresar una dirección de correo electrónico evitará que los miembros se registren usando esa dirección.
Puede ingresar una dirección de correo electrónico completa, p. <em>foo@bar.com</em>, o un dominio de correo electrónico, p. <em>bar.com</em>. <br /><br />

% - coincide con cualquier cadena. <br /> <br />

%.%.%.%@domain.tld prohíbe cualquier dirección que contenga al menos 3 puntos.<br />
%+%@domain.tld prohíbe cualquier dirección que contenga al menos un signo más.<br />
%@domain.tld prohíbe cualquier dirección de domain.tld<br />
%.domain.tld prohíbe todos los subdominios de domain.tld<br />
%payday% prohíbe cualquier dirección que contenga la palabra \"payday\" que a menudo estaba en los sitios.<br />
domain.tld es un alias de %@domain.tld para hacerlo compatible con las reglas definidas en v7.<br />"; // 440
