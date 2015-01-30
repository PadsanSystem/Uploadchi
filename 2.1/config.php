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
// Database Settings
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'uploadchi_database');
define('DB_PORT', 3306);
define('DB_CHARSET', 'utf8');
define("DB_PREFIX", "");

// SMTP Settings
define('SMTP_HOST', 'mail.uploadchi.com');
define('SMTP_PORT', 25);
define('SMTP_USER', 'info@uploadchi.com');
define('SMTP_PASS', '@info123');
define('SMTP_OUTPUT', 'html');
define('SMTP_DEBUG', 0);
define('SEND_ERRORS_TO', 'support@uploadchi.com');

// Smarty Settings
define('DISPLAY_DEBUG', false);
?>