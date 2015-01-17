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
require_once 'subheader.php';

// Assign Locale
include_once LOCALESET.'contactus.php';
include_once LOCALESET.'errors.php';

if(isset($_POST['submit'])){
	$subject=secure_itext($_POST['subject']);
	$message=secure_itextarea(nl2br($_POST['message']));
	$name=secure_itext($_POST['name']);
	
	$email=secure_itext($_POST['email']);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error=104;
		$error_string=show_error($error, 'errors');
		$error_message=$locale["$error_string"];
		
		// Assign Alert Message
		$templates->assign('lang_errors_123', $locale['errors_123']);
		$templates->assign('error_number', $error);
		$templates->assign('lang_error_message', $error_message);
	}else{
		$email=strtolower($email);
	}
	
	$department=isNum($_POST['department']) ? $_POST['department'] : 1;
	switch($department){
		case 1:
			$department="support@uploadchi.com";
			break;
		case 2:
			$department="sales@uploadchi.com";
			break;
		case 3:
			$department="billing@uploadchi.com";
			break;
		case 4:
			$department="mahmoodi@uploadchi.com";
			break;
	}
	
	if(!isset($error)){
		$headers='MIME-Version: 1.0'."\r\n";
		$headers.='Content-type: text/html; charset=utf-8'."\r\n";
		$headers.='FROM: '.$department;
		$body="<table style='border:1px solid #ccc;height:197px;width:640px' border='0' cellspacing='1' cellpadding='5' align='center'>
					<thead>
						<tr style='background-color:#0c64f2; height: 30px;' align='left' valign='middle'>
							<td><span style='color:#ffffff;'><strong><span style='font-size:11px;font-family:verdana;'>Uploadchi</span></strong><br><span style='font-size:9px;font-family:verdana'>Easily store, manage and share files with anyone</span></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<p style='text-align:left;' dir='ltr'><span style='font-size:11px;font-family: verdana;'>Hi,</span></p>
								<p dir='ltr'><span style='font-size:11px;font-family:verdana;'>".$_POST['message']."</span></p>
								<br><br>
							</td>
						</tr>
						<tr style='background-color:#eeeeee;'>
							<td>
								<p style='text-align:left;' dir='ltr'><span style='font-size:11px;font-family:verdana;'>Regards,<br/>Uploadchi<br/><br/>http://www.uploadchi.com<br>$department</span></p>
							</td>
						</tr>
					</tbody>
				</table>";
		$headers='Content-type: text/html; charset=utf-8'."\r\n";
		$headers.='From: '.$email;
		
		@mail($department, 'Request [ Uploadchi ]', $body, $headers);

		// Assign Alert Message
		$templates->assign('alert_message', $locale['contactus_116']);
	}
}

// Assign Locale
$templates->assign('lang_contactus_100', $locale['contactus_100']);
$templates->assign('lang_contactus_101', $locale['contactus_101']);
$templates->assign('lang_contactus_102', $locale['contactus_102']);
$templates->assign('lang_contactus_103', $locale['contactus_103']);
$templates->assign('lang_contactus_104', $locale['contactus_104']);
$templates->assign('lang_contactus_105', $locale['contactus_105']);
$templates->assign('lang_contactus_106', $locale['contactus_106']);
$templates->assign('lang_contactus_107', $locale['contactus_107']);
$templates->assign('lang_contactus_108', $locale['contactus_108']);
$templates->assign('lang_contactus_109', $locale['contactus_109']);
$templates->assign('lang_contactus_110', $locale['contactus_110']);
$templates->assign('lang_contactus_111', $locale['contactus_111']);
$templates->assign('lang_contactus_112', $locale['contactus_112']);
$templates->assign('lang_contactus_113', $locale['contactus_113']);
$templates->assign('lang_contactus_114', $locale['contactus_114']);
$templates->assign('lang_contactus_115', $locale['contactus_115']);

// Assign Images
$templates->assign('img_contactus', IMAGES.'contact.jpg');

// Render Contact Us
$templates->display('contactus.tpl');

require_once BASEDIR.'footer.php';
?>