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
if (!iADMIN || !defined("iAUTH") || !isset($aid) || $aid != iAUTH) { redirect('../index.php'); }

if(isset($_POST['submit'])){
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'FROM: support@uploadchi.com';
	
	$subject='Downtime of Uploadchi';
	$message=$_POST['message'];
	$result=dbquery("SELECT * FROM ".DB_PREFIX."users");
	while($data=dbarray($result)){
		mail($data['user_email'], $subject, $message, $headers);
	}
}
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-user"></i> Affiliate</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Newsletter</div>
				<div class="panel-body">
					<form name="form_register" class="form-vertical" role="form" method="post" action="<?php echo ADMIN.'newsletter.php'.$aidlink; ?>" enctype="multipart/form-data">
						<div class="form-group col-lg-12">
							<label for="username" class="control-label">Username</label><br>
							<textarea id="message" name="message" class="form-control" placeholder="Enter your message" rows="10" autocomplete="off" required></textarea>
						</div>
						<div class="col-md-6 col-md-offset-3 text-center">
							<button name="submit" type="submit" class="btn btn-primary">Send Mail</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once ADMIN.'footer.php';
?>