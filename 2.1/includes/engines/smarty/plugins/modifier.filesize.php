<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty date_format modifier plugin
 * Type:     modifier<br>
 * Name:     date_format<br>
 * Purpose:  format datestamps via strftime<br>
 * Input:<br>
 *          - string: input date string
 *          - format: strftime format for output
 *          - default_date: default date if $string is empty
 *
 * @link   http://www.smarty.net/manual/en/language.modifier.date.format.php date_format (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 *
 * @param string $string       input date string
 * @param string $format       strftime format for output
 * @param string $default_date default date if $string is empty
 * @param string $formatter    either 'strftime' or 'auto'
 *
 * @return string |void
 * @uses   smarty_make_timestamp()
 */
function smarty_modifier_filesize($size, $digits=2){
    $kb=1024; $mb=1024*$kb; $gb=1024*$mb; $tb=1024*$gb;
    if (($size==0)&&($dir)) { return "Empty"; }
    elseif ($size<$kb) { return $size." Byte"; }
    elseif ($size<$mb) { return round($size/$kb,$digits)." KB"; }
    elseif ($size<$gb) { return round($size/$mb,$digits)." MB"; }
    elseif ($size<$tb) { return round($size/$gb,$digits)." GB"; }
    else { return round($size/$tb,$digits)." TB"; }
}
