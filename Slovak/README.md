# Slovenský preklad

Pre správne skolňovanie času napr.: pred 5 minútami,  vložte tento kód do ```theme.php``` alebo ```acp_theme.php```, kód musí byť umiestnený pred ```require_once INCLUDES.'theme_functions_include.php';```, ak tam nie je jednoducho ho vložte na vrch súboru.

```php
if (LANGUAGE === 'Slovak') {
    function timer($updated = FALSE) {
        $locale = fusion_get_locale('', LOCALE.LOCALESET.'global.php');

        if (!$updated) {
            $updated = time();
        }

        $updated    = stripinput($updated);
        $current    = time();
        $calculated = $current - $updated;
        $second     = 1;
        $minute     = $second * 60;
        $hour       = $minute * 60;
        $day        = 24 * $hour;
        $month      = days_current_month() * $day;
        $year       = (date('L', $updated) > 0) ? 366 * $day : 365 * $day;

        if ($calculated < 1) {
            return '<abbr class="atooltip" data-toggle="tooltip" data-placement="top" title="'.showdate('longdate', $updated).'">'.$locale['just_now'].'</abbr>';
        }

        $timer = array(
            $year   => 'rokom|rokmi|rokmi',
            $month  => 'mesiacom|mesiacmi|mesiacmi',
            $day    => 'dňom|dňami|dňami',
            $hour   => 'hodinou|hodinami|hodinami',
            $minute => 'minútou|minútami|minútami',
            $second => 'sekundou|sekundami|sekundami'
        );

        foreach ($timer as $arr => $unit) {
            $calc = $calculated / $arr;
            if ($calc >= 1) {
                $answer = round($calc);
                $string = \PHPFusion\Locale::format_word($answer, $unit, array('add_count' => FALSE));
                return '<abbr class="atooltip" data-toggle="tooltip" data-placement="top" title="'.showdate('longdate', $updated).'">'.$locale['ago'].' '.$answer.' '.$string.'</abbr>';
            }
        }

        return NULL;
    }
}
```