<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v1.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/

// Get php version
$phpver = phpversion();

// If register_globals is turned off, extract super globals (php 4.2.0+)
if (ini_get('register_globals') != 1) {
	if ((isset($_POST) == true) && (is_array($_POST) == true)) extract($_POST, EXTR_OVERWRITE);
	if ((isset($_GET) == true) && (is_array($_GET) == true)) extract($_GET, EXTR_OVERWRITE);
}

// Prevent any possible XSS attacks via $_GET.
if (stripget($_GET)) {
	die("Prevented a XSS attack through a GET variable!");
}

// Start Output Buffering
ob_start("ob_gzhandler");

// Locate config.php and set the basedir path
$folder_level = "";
while(!file_exists($folder_level."config.php")){
	$folder_level .= "../";
}

require_once $folder_level.'config.php';
define("BASEDIR", $folder_level);

// Establish mySQL database connection
$link = dbconnect($db_host, $db_user, $db_pass, $db_name);

$settings=dbarray(dbquery("SELECT * FROM ".DB_PREFIX."settings LIMIT 1"));

// Sanitise $_SERVER globals
$_SERVER['PHP_SELF'] = cleanurl($_SERVER['PHP_SELF']);
$_SERVER['QUERY_STRING'] = isset($_SERVER['QUERY_STRING']) ? cleanurl($_SERVER['QUERY_STRING']) : "";
$_SERVER['REQUEST_URI'] = isset($_SERVER['REQUEST_URI']) ? cleanurl($_SERVER['REQUEST_URI']) : "";
$PHP_SELF = cleanurl($_SERVER['PHP_SELF']);

// Common definitions
define("FUSION_REQUEST", isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != "" ? $_SERVER['REQUEST_URI'] : $_SERVER['SCRIPT_NAME']);
define("FUSION_QUERY", isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : "");
define("FUSION_SELF", basename($_SERVER['PHP_SELF']));

// Set defines
define("ADMIN", BASEDIR."administration/");
define("IMAGES", BASEDIR."images/");
define("IMAGES_NEWS", IMAGES."news/");
define("AVATARS", IMAGES."avatars/");
define("IMAGES_ADVERTISING", IMAGES."advertising/");
define("IMAGES_TYPES", IMAGES."types/");
define("INCLUDES", BASEDIR."includes/");
define("LOCALE", BASEDIR."locale/");
define("LOCALESET", LOCALE."english/");
define("FUNCTIONS", INCLUDES."functions/");
define("CLASSES", INCLUDES."classes/");
define("JAVASCRIPTS", INCLUDES."javascripts/");
define("THEMES", BASEDIR."themes/default/");
define("THEMES_CSS", THEMES."css/");
define("PAGES", INCLUDES."pages/");

// MySQL database functions
function dbquery($query) {
	$result = @mysql_query($query);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

function dbcount($field, $table, $conditions="") {
	$cond = ($conditions ? " WHERE ".$conditions : "");
	$result = @mysql_query("SELECT Count".$field." FROM ".DB_PREFIX.$table.$cond);
	if(!$result){
		echo mysql_error();
		return false;
	}else{
		$rows=mysql_result($result, 0);
		return $rows;
	}
}

function dbresult($query, $row) {
	$result=@mysql_result($query, $row);
	if(!$result){
		echo mysql_error();
		return false;
	}else{
		return $result;
	}
}

function dbrows($query){
	$result=@mysql_num_rows($query);
	return $result;
}

function dbarray($query) {
	$result=@mysql_fetch_assoc($query);
	if(!$result){
		echo mysql_error();
		return false;
	}else{
		return $result;
	}
}

function dbarraynum($query) {
	$result = @mysql_fetch_row($query);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

function secure_itext($text){
	// SQL Injection
	$text=addslashes($text);
	$text=mysql_real_escape_string($text);
	// Strip Input Function, prevents HTML in unwanted places$text=htmlspecialchars($text);
	$text=htmlspecialchars($text);
	$text = html_entity_decode($text, ENT_QUOTES, "utf-8");
	// Censorwords
	$text=censorwords($text);
	// Trim text
	$text=trim($text);
	// Return text
	return $text;
}

function secure_itextarea($text){
	return $text;
}

function dbconnect($db_host, $db_user, $db_pass, $db_name) {
	global $db_connect;

	$db_connect = @mysql_connect($db_host, $db_user, $db_pass);
	$db_select = @mysql_select_db($db_name);
	if (!$db_connect) {
		die("<strong>Unable to establish connection to MySQL</strong><br />".mysql_errno()." : ".mysql_error());
	} elseif (!$db_select) {
		die("<strong>Unable to select MySQL database</strong><br />".mysql_errno()." : ".mysql_error());
	}
	@mysql_query("SET NAMES utf8", $db_connect);
	@mysql_query("SET CHARACTER SET utf8", $db_connect );
}

// Redirect browser using header or script function
function redirect($location, $type="header"){
	if ($type=="header"){
		header("Location: ".str_replace("&amp;", "&", $location));
	}else{
		echo "<script type='text/javascript'>document.location.href='".str_replace("&amp;", "&", $location)."'</script>\n";
	}
}

// Validate numeric input
function isnum($value) {
	return (preg_match("/^[0-9]+$/", $value));
}

// Trim a line of text to a preferred length
function trimlink($text, $length) {
	$dec = array("&", "\"", "'", "\\", '\"', "\'", "<", ">");
	$enc = array("&amp;", "&quot;", "&#39;", "&#92;", "&quot;", "&#39;", "&lt;", "&gt;");
	$text = str_replace($enc, $dec, $text);
	if (strlen($text) > $length) $text = substr($text, 0, ($length-3))."...";
	$text = str_replace($dec, $enc, $text);
	return $text;
}

// Strip Input Function, prevents HTML in unwanted places
function stripinput($text) {
	if (!is_array($text)) {
		$text = stripslash(trim($text));
		$text = preg_replace("/(&amp;)+(?=\#([0-9]{2,3});)/i", "&", $text);
		$search = array("&", "\"", "'", "\\", '\"', "\'", "<", ">", "&nbsp;");
		$replace = array("&amp;", "&quot;", "&#39;", "&#92;", "&quot;", "&#39;", "&lt;", "&gt;", " ");
		$text = str_replace($search, $replace, $text);
	} else {
		foreach ($text as $key => $value) {
			$text[$key] = stripinput($value);
		}
	}
	return $text;
}

// Strip Slash Function, only stripslashes if magic_quotes_gpc is on
function stripslash($text) {
	if (QUOTES_GPC) { $text = stripslashes($text); }
	return $text;
}

// Get uid names
function set_uid($name, $type, $separator){
	$uid=$name;
	$uid.=$separator;
	$uid.=random_text('number');
	$uid.='.';
	$uid.=$type;
	return $uid;
}

// Get file names
function get_name($url, $method){
	if($method!='post')
		$url=$url['name'];
	else
		$url='file';
	// Explode name
	$get_explode=explode(".", $url);
	$name=$get_explode[0];
	return $name;
}

// Get file types
function get_type($url, $method='file'){
	if($method!='post'){
		$url=$url['name'];
	}
	// Explode name
	$get_explode=explode(".", $url);
	$type=$get_explode[count($get_explode)-1];
	$type=strtolower($type);
	
	return $type;
}

// Get file size
function get_size($url, $method){
	if($method!='post'){
		return $url['size'];
	}else{
		$ch=curl_init($url);
		curl_setopt($ch, CURLOPT_NOBODY, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Uploadchibot/1.0');
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.uploadchi.com'); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
		curl_exec($ch);
		$filesize = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
		curl_close($ch);
		if($filesize)
			return $filesize;
	}
}

// Making Page Navigation
function makepagenav($start, $count, $total, $range = 0, $link = "", $getname = "rowstart") {
	if ($link == "") { $link = BASEDIR."?"; }
	if (!preg_match("#[0-9]+#", $count) || $count == 0) return false;
	
	$pg_cnt = ceil($total / $count);
	if ($pg_cnt <= 1) { return ""; }

	$idx_back = $start - $count;
	$idx_next = $start + $count;
	$cur_page = ceil(($start + 1) / $count);

	$res = "";
	if ($idx_back >= 0) {
		if ($cur_page > ($range + 1)) {
			$res .= "<li><a href='".$link.$getname."=0'>1</a></li>";
			if ($cur_page != ($range + 2)) {
				$res .= "";
			}
		}
	}
	$idx_fst = max($cur_page - $range, 1);
	$idx_lst = min($cur_page + $range, $pg_cnt);
	if ($range == 0) {
		$idx_fst = 1;
		$idx_lst = $pg_cnt;
	}
	for ($i = $idx_fst; $i <= $idx_lst; $i++) {
		$offset_page = ($i - 1) * $count;
		if ($i == $cur_page) {
			$res .= "<li class='active'><a href=''>".$i."</a></li>";
		} else {
			$res .= "<li><a href='".$link.$getname."=".$offset_page."'>".$i."</a></li>";
		}
	}
	if ($idx_next < $total) {
		if ($cur_page < ($pg_cnt - $range)) {
			if ($cur_page != ($pg_cnt - $range - 1)) {
				$res .= "";
			}
			$res .= "<li><a href='".$link.$getname."=".($pg_cnt - 1) * $count."'>".$pg_cnt."</a></li>\n";
		}
	}

	return "<ul class='pagination'>\n".$res."</ul>\n";
}

if(isset($_POST['login'])){
	$username=strtolower(secure_itext($_POST['username']));
	$password=md5(md5(secure_itext($_POST['password'])));

	$result=dbquery("SELECT users.*, users_groups.* FROM ".DB_PREFIX."users users, ".DB_PREFIX."users_groups users_groups WHERE users.user_username='$username' AND users.user_password='$password' AND users.user_status='Enable' AND users_groups.user_group_status='Enable' AND users.user_group=users_groups.user_group_id LIMIT 1");

	if(dbrows($result)!=0){
		$data=dbarray($result);
		$expired=time()+604800;
		
		if($_POST['remember']==1){
			setcookie("user_id", $data['user_id'], $expired, "/", "", "0", "1");
		}else{
			$_SESSION['user_id']=$data['user_id'];
		}
		$userdata=$data;
	}else{
		$error=120;
	}
}
$login_type=(isset($_SESSION) && ($_SESSION['user_id']!='') ? $_SESSION['user_id'] : $_COOKIE['user_id']);

if(iMEMBER){
	$result_member=dbquery("SELECT users.*, users_groups.* FROM ".DB_PREFIX."users users, ".DB_PREFIX."users_groups users_groups WHERE users.user_id='$login_type'");
	if(dbrows($result_member)!=0){
		$userdata=dbarray($result_member);
	}
}

if(isset($_GET['logout']) && $_GET['logout']=='yes'){
	session_destroy();
	setcookie("user_id", $data['user_id'], -100, '/', '', 1);
	redirect(BASEDIR.'index.php');
}

function show_error($error_id, $section=''){
	$string=$section;
	$string.='_';
	$string.=$error_id;
	return $string;
}

function remove_avatars($name){
	unlink(AVATARS.$name);
	$seprate=explode('.', $name);
	unlink(AVATARS.$seprate[0].'_2.'.$seprate[1]);
	unlink(AVATARS.$seprate[0].'_3.'.$seprate[1]);
	unlink(AVATARS.$seprate[0].'_4.'.$seprate[1]);
}

function show_avatars($number){
	global $userdata;
	$seprate=explode('.', $userdata['user_avatar']);
	$show=AVATARS.$seprate[0].'_'.$number.'.'.$seprate[1];
	return $show;
}

function censorwords($text){
	return $text;
}

// Translate bytes into kb, mb, gb or tb by CrappoMan
function parsebytesize($size, $digits=2, $dir=false) {
	$kb=1024; $mb=1024*$kb; $gb=1024*$mb; $tb=1024*$gb;
	if (($size==0)&&($dir)) { return "Empty"; }
	elseif ($size<$kb) { return $size." Byte"; }
	elseif ($size<$mb) { return round($size/$kb,$digits)." KB"; }
	elseif ($size<$gb) { return round($size/$mb,$digits)." MB"; }
	elseif ($size<$tb) { return round($size/$gb,$digits)." GB"; }
	else { return round($size/$tb,$digits)." TB"; }
}

// Clean URL Function, prevents entities in server globals
function cleanurl($url) {
	$bad_entities = array("&", "\"", "'", '\"', "\'", "<", ">", "(", ")", "*");
	$safe_entities = array("&amp;", "", "", "", "", "", "", "", "", "");
	$url = str_replace($bad_entities, $safe_entities, $url);
	$url=stripslashes($url);
	return $url;
}

// Prevent any possible XSS attacks via $_GET.
function stripget($check_url) {
	$return = false;
	if (is_array($check_url)) {
		foreach ($check_url as $value) {
			if (stripget($value) == true) {
				return true;
			}
		}
	} else {
		$check_url = str_replace(array("\"", "\'"), array("", ""), urldecode($check_url));
		if (preg_match("/<[^<>]+>/i", $check_url)) {
			return true;
		}
	}
	return $return;
}

// Scan image files for malicious code
function verify_image($file) {
	$txt = file_get_contents($file);
	$image_safe = true;
	
	if (preg_match('#<?php#i', $txt)) { $image_safe = false; } //edit
	elseif (preg_match('#&(quot|lt|gt|nbsp|<?php);#i', $txt)) { $image_safe = false; }
	elseif (preg_match("#&\#x([0-9a-f]+);#i", $txt)) { $image_safe = false; }
	elseif (preg_match('#&\#([0-9]+);#i', $txt)) { $image_safe = false; }
	elseif (preg_match("#([a-z]*)=([\`\'\"]*)script:#iU", $txt)) { $image_safe = false; }
	elseif (preg_match("#([a-z]*)=([\`\'\"]*)javascript:#iU", $txt)) { $image_safe = false; }
	elseif (preg_match("#([a-z]*)=([\'\"]*)vbscript:#iU", $txt)) { $image_safe = false; }
	elseif (preg_match("#(<[^>]+)style=([\`\'\"]*).*expression\([^>]*>#iU", $txt)) { $image_safe = false; }
	elseif (preg_match("#(<[^>]+)style=([\`\'\"]*).*behaviour\([^>]*>#iU", $txt)) { $image_safe = false; }
	elseif (preg_match("#</*(applet|link|style|script|iframe|frame|frameset)[^>]*>#i", $txt)) { $image_safe = false; }
	return $image_safe;
}

function store_in_session($key,$value){
	if (isset($_SESSION)){
		$_SESSION[$key]=$value;
	}
}

function unset_session($key){
	$_SESSION[$key]=' ';
	unset($_SESSION[$key]);
}

function get_from_session($key){
	if (isset($_SESSION[$key])){
		return $_SESSION[$key];
	}else{
		return false;
	}
}

function csrfguard_generate_token($unique_form_name){
	if (function_exists("hash_algos") and in_array("sha512",hash_algos())){
		$token=hash("sha512",mt_rand(0,mt_getrandmax()));
	}else{
		$token=' ';
		for ($i=0;$i<128;++$i){
			$r=mt_rand(0,35);
			if ($r<26){
				$c=chr(ord('a')+$r);
			}else{ 
				$c=chr(ord('0')+$r-26);
			} 
			$token.=$c;
		}
	}
	store_in_session($unique_form_name,$token);
	return $token;
}

function csrfguard_validate_token($unique_form_name,$token_value){
	$token=get_from_session($unique_form_name);
	if ($token===false){
		return false;
	}elseif ($token===$token_value){
		$result=true;
	}else{ 
		$result=false;
	} 
	unset_session($unique_form_name);
	return $result;
}

function csrfguard_replace_forms($form_data_html){
	$count=preg_match_all("/<form(.*?)>(.*?)<\\/form>/is", $form_data_html, $matches, PREG_SET_ORDER);
	if (is_array($matches)){
		foreach ($matches as $m){
			if (strpos($m[1],"nocsrf")!==false) { continue; }
			$name="CSRFGuard_".mt_rand(0,mt_getrandmax());
			$token=csrfguard_generate_token($name);
			$form_data_html=str_replace($m[0],
				"<form{$m[1]}>
					<input type='hidden' name='CSRFName' value='{$name}' />
					<input type='hidden' name='CSRFToken' value='{$token}' />{$m[2]}</form>",$form_data_html);
		}
	}
	return $form_data_html;
}

function csrfguard_inject(){
	$data=ob_get_clean();
	$data=csrfguard_replace_forms($data);
	echo $data;
}

function csrfguard_start(){
	if (count($_POST)){
		if (!isset($_POST['CSRFName']) or !isset($_POST['CSRFToken'])){
			redirect(BASEDIR.'index.php');
		} 
		$name =$_POST['CSRFName'];
		$token=$_POST['CSRFToken'];
		if (!csrfguard_validate_token($name, $token)){ 
			redirect(BASEDIR.'index.php');
		}
	}
	/* adding double quotes for "csrfguard_inject" to prevent: 
	Notice: Use of undefined constant csrfguard_inject - assumed 'csrfguard_inject' */
	register_shutdown_function("csrfguard_inject");	
}

// Generate random text
function random_text($type){
	if($type=='number'){
		$text=time();
		$text+=mt_rand(10, 100);
		$text+=mt_rand(100, 1000);
		$text+=mt_rand(1000, 10000);
		$text+=mt_rand(10000, 100000);
		$text+=mt_rand(100000, 1000000);
		$text+=mt_rand(1000000, 10000000);
		$text+=mt_rand(10000000, 100000000);
		$text+=mt_rand(100000000, 1000000000);
		$text+=mt_rand(1000000000, 10000000000);
	}else if($type=='text'){
	
	}else if($type=='mixed'){
		
	}
	
	return $text;
}

// Function to get the client ip address
function get_ip(){
	if (getenv('HTTP_CLIENT_IP'))
		$ipaddress = getenv('HTTP_CLIENT_IP');
	else if(getenv('HTTP_X_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	else if(getenv('HTTP_X_FORWARDED'))
		$ipaddress = getenv('HTTP_X_FORWARDED');
	else if(getenv('HTTP_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	else if(getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
	else if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
	else
		$ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}

function cpress_css($buffer){
	// remove comments
	// $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	// remove tabs, spaces, newlines, etc.
	// $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
	/* remove other spaces before/after ) */
	// $buffer = preg_replace(array('(( )+\))','(\)( )+)'), ')', $buffer);
	
	return $buffer;
}

function cpress_js($buffer){
	//remove comments
	// $buffer = str_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	//remove tabs, spaces, newlines, etc.
	// $buffer = str_replace(array("\n"), '', $buffer);
	// /* remove other spaces before/after ) */
	// $buffer = str_replace(array('(( )+\))','(\)( )+)'), ')', $buffer);
	
	return $buffer;
}

function compress_file($array_file, $type){
	if(iADMIN && isset($_GET['aid'])){
		if($type=='css'){
			$create_file=ADMIN_THEMES_CSS.'cstyles.min.css';
		}else if($type=='javascript'){
			$create_file=ADMIN_JSCRIPTS.'cjscript.min.js';
		}
	}else{
		if($type=='css'){
			$create_file=THEMES_CSS.'cstyles.min.css';
		}else if($type=='javascript'){
			$create_file=JAVASCRIPTS.'cjscript.min.js';
		}
	}
	
	foreach($array_file as $sheet){
		$sheets = trim($sheet);
		if(file_exists($sheets)){
			if($type=='css'){
				$content.=cpress_css(file_get_contents($sheets));
			}else if($type=='javascript'){
				$content.=cpress_js(file_get_contents($sheets));
			}
			
		}
	}
	
	if(file_exists($create_file)){
		$md5=md5(file_get_contents($create_file));
	}
	if($md5!=md5($content)){
		file_put_contents($create_file, $content);
	}
}

if (iADMIN) {
	define("iAUTH", substr(md5($userdata['user_password']), 16, 16));
	$aidlink = "?aid=".iAUTH;
}

// User level, Admin Rights & User Group definitions
define("iGUEST", $userdata['user_group_access'] == 0 ? 1 : 0);
define("iMEMBER", $userdata['user_group_access'] >= 100 ? 1 : 0);
define("iADMIN", $userdata['user_group_access'] == 200 ? 1 : 0);
?>