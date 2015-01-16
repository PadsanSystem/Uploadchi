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
require_once LOCALESET.'commons.php';
require_once LOCALESET.'contactus.php';

if(isset($_POST['submit'])){
	$subject=secure_itext($_POST['subject']);
	$message=secure_itextarea(nl2br($_POST['message']));
	$name=secure_itext($_POST['name']);
	$email=secure_itext($_POST['email']);
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
	$headers.="From: $email";
	
	@mail($department, 'Request [ Uploadchi ]', $body, $headers);
	$message="<div class='alert alert-success' role='alert'>
				<span class='glyphicon glyphicon-info-sign'></span>".$locale['contactus_116']."
			</div>";
}
?>
<!-- Begin page content -->
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="Home"><?php echo $locale['commons_108']; ?></a></li>
		<li class="active"><?php echo $locale['contactus_100']; ?></li>
	</ol>
	<?php
	if(isset($message))
		echo $message;
	?>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-phone-alt"></span><?php echo $locale['contactus_111']; ?></div>
		<div class="panel-body">
			<div class="form-group col-lg-5 text-center">
				<img src="<?php echo IMAGES."contact.jpg"; ?>" alt="<?php echo $locale['contactus_100']; ?>" title="<?php echo $locale['contactus_100']; ?>" class="img-responsive img-thumbnail">
			</div>
			<form name="form_contactus" class="form-vertical" role="form" method="post" action="contactus.php">
				<div class="form-group col-lg-7">
					<label for="department" class="control-label"><?php echo $locale['contactus_101']; ?></label><br>
					<select name="department" class="form-control col-lg-12">
						<option value="1"><?php echo $locale['contactus_112']; ?></option>
						<option value="2"><?php echo $locale['contactus_113']; ?></option>
						<option value="3"><?php echo $locale['contactus_114']; ?></option>
						<option value="4"><?php echo $locale['contactus_115']; ?></option>
					</select>
				</div>
				<div class="form-group col-lg-7">
					<label for="name" class="control-label"><?php echo $locale['contactus_102']; ?></label><br>
					<input id="name" name="name" type="text" class="form-control" placeholder="<?php echo $locale['contactus_106']; ?>">
				</div>
				<div class="form-group col-lg-7">
					<label for="email" class="control-label"><?php echo $locale['contactus_103']; ?></label><br>
					<input id="email" name="email" type="text" class="form-control" placeholder="<?php echo $locale['contactus_107']; ?>">
				</div>
				<div class="form-group col-lg-7">
					<label for="subject" class="control-label"><?php echo $locale['contactus_104']; ?></label><br>
					<input id="subject" name="subject" type="text" class="form-control" placeholder="<?php echo $locale['contactus_108']; ?>">
				</div>
				<div class="form-group col-lg-12">
					<label for="message" class="control-label"><?php echo $locale['contactus_105']; ?></label><br>
					<textarea id="message" name="message" class="form-control" rows="3" placeholder="<?php echo $locale['contactus_109']; ?>"></textarea>
				</div>
				<div class="col-lg-6 col-lg-offset-3 text-center">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-envelope"></span><?php echo $locale['contactus_110']; ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>