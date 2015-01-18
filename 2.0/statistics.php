<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v2.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
require_once 'subheader.php';

// Load language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'statistics.php';

// Assign Global Locale
$templates->assign('lang_commons_117', $locale['commons_117']);
$templates->assign('lang_commons_119', $locale['commons_119']);
$templates->assign('lang_statistics_100', $locale['statistics_100']);
$templates->assign('lang_statistics_101', $locale['statistics_101']);
$templates->assign('lang_statistics_102', $locale['statistics_102']);
$templates->assign('lang_statistics_103', $locale['statistics_103']);
$templates->assign('lang_statistics_104', $locale['statistics_104']);

// Assign Global Others
$templates->assign('count_all_attachments', number_format($database->count("attachments")));
$templates->assign('count_all_attachments_views', number_format($database->count('attachments_views')));
$templates->assign('count_all_servers', number_format($database->count('servers')));
$templates->assign('count_all_users', number_format($database->count('users')));

// Render Statistics
$templates->display('statistics.tpl');

require_once BASEDIR.'footer.php';
?>