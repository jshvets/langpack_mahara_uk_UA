<?php

defined('INTERNAL') || die();

$string['locales'] = 'uk_UA.UTF8,ukrainian';
$string['pieform_calendar_dateformat'] = '%%d/%%m/%%Y';
$string['pieform_calendar_timeformat'] = '%%H:%%M';
$string['strfdateofbirth'] = '%%Y/%%m/%%d';
$string['strfdaymonthyearshort'] = '%%d.%%m.%%Y';
$string['strftimedate'] = '%%d %%B %%Y';
$string['strftimedateshort'] = '%%d %%B';
$string['strftimedatetime'] = '%%d %%B %%Y, %%H:%%M';
$string['strftimedatetimeshort'] = '%%d/%%m/%%Y %%H:%%M';
$string['strftimedaydate'] = '%%A %%d %%B %%Y';
$string['strftimedaydatetime'] = '%%A %%d %%B %%Y, %%H:%%M';
$string['strftimedayshort'] = '%%A %%d %%B';
$string['strftimedaytime'] = '%%a, %%H:%%M';
$string['strftimemonthyear'] = '%%B %%Y';
$string['strftimenotspecified'] = 'Non spécifié';
$string['strftimerecent'] = '%%d %%b, %%H:%%M';
$string['strftimerecentfull'] = '%%a %%d %%b %%Y, %%H:%%M';
$string['strftimerecentyear'] = '%%d %%b %%Y, %%k:%%M';
$string['strftimetime'] = '%%H:%%M';
$string['strftimew3cdate'] = '%%Y-%%m-%%d';
$string['strftimew3cdatetime'] = '%%Y-%%m-%%dT%%H:%%I:%%S%%z';
$string['thislanguage'] = 'Українська';

// Plural forms, added by language pack generator
$string['pluralrule'] = 'n > 1';
$string['pluralfunction'] = 'plural_uk_utf8';
function plural_uk_utf8($n) {
    return $n > 1;
}
