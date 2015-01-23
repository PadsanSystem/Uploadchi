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

// Load Language
include_once LOCALESET.'contact_us.php';

if(isset($_POST['submit'])){
	$name=secure_itext($_POST['name']);
	$email=secure_itext($_POST['email']);
	$subject=secure_itext($_POST['subject']);
	$message=secure_itextarea(nl2br($_POST['message']));
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		// Load Language
		include_once LOCALESET.'errors.php';
		
		$error=104;
		$error_string=show_error($error, 'errors');
		$error_message=$locale["$error_string"];
		
		// Assign Alert Message
		$templates->assign('name', $name);
		$templates->assign('email', $email);
		$templates->assign('subject', $subject);
		$templates->assign('message', $message);
		
		// Assign Alert Message
		$templates->assign('lang_errors_123', $locale['errors_123']);
		$templates->assign('lang_error_message', $error_message);
		$templates->assign('error_number', $error);
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
		$templates->assign('lang_alert_message', $locale['contact_us_116']);
	}
}

// Assign Locale
$templates->assign('lang_contact_us_100', $locale['contact_us_100']);
$templates->assign('lang_contact_us_101', $locale['contact_us_101']);
$templates->assign('lang_contact_us_102', $locale['contact_us_102']);
$templates->assign('lang_contact_us_103', $locale['contact_us_103']);
$templates->assign('lang_contact_us_104', $locale['contact_us_104']);
$templates->assign('lang_contact_us_105', $locale['contact_us_105']);
$templates->assign('lang_contact_us_106', $locale['contact_us_106']);
$templates->assign('lang_contact_us_107', $locale['contact_us_107']);
$templates->assign('lang_contact_us_108', $locale['contact_us_108']);
$templates->assign('lang_contact_us_109', $locale['contact_us_109']);
$templates->assign('lang_contact_us_110', $locale['contact_us_110']);
$templates->assign('lang_contact_us_111', $locale['contact_us_111']);
$templates->assign('lang_contact_us_112', $locale['contact_us_112']);
$templates->assign('lang_contact_us_113', $locale['contact_us_113']);
$templates->assign('lang_contact_us_114', $locale['contact_us_114']);
$templates->assign('lang_contact_us_115', $locale['contact_us_115']);

// Assign Images
$templates->assign('img_contact_us', IMAGES.'contact_us.jpg');

// Render Contact Us
$templates->display('contact_us.tpl');

require_once BASEDIR.'footer.php';
?>