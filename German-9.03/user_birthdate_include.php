<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_birthdate_include.php
| Author: PHP-Fusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) {
    die("Access Denied");
}


//get local;
$dateform_js = substr($locale['datepicker_js'], 0, -8);
//$dateform_php = substr($locale['datepicker_php'], 0, -6);
$dateform_php = "Y-m-d";
		
// Display user field input
if ($profile_method == "input") {
    if (isset($field_value) && $field_value != "1900-01-01") {
		$user_birthDate = date('Y-m-d', strtotime($field_value));
    } else {
        $user_birthDate = date('Y-m-d', strtotime('today'));
    }
    $options += [
        'inline'          => TRUE,
        'type'            => 'date',
        'width'           => '250px',
        'showTime'        => FALSE,
		'date_format_js'  => $dateform_js,
        'date_format_php' => $dateform_php,
    ];
    $user_fields = form_datepicker('user_birthdate', $locale['uf_birthdate'], $user_birthDate, $options);

    // Display in profile
} else if ($profile_method == "display") {
    if ($field_value != "1900-01-01") {
        $user_birthDate = explode("-", $field_value);
        $lastday = mktime(0, 0, 0, $user_birthDate[1], $user_birthDate[2], $user_birthDate[0]);
        $user_fields = [
            'title' => $locale['uf_birthdate'],
            'value' => showdate($locale['uf_birthdate_date'], $lastday)
        ];
    } else {
        $user_fields = [
            'title' => $locale['uf_birthdate'],
            'value' => $locale['na']
        ];
    }
}
