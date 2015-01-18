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
if (!iADMIN || !defined("iAUTH") || !isset($aid) || $aid != iAUTH) { redirect('../index.php'); }

// Load Editor
editor_advanced();

if(isset($_POST['submit'])){
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'FROM: info@uploadchi.com';
	
	$subject=$_POST['subject'];
	$message="<table style='border:1px solid #ccc;height:197px;width:640px' border='0' cellspacing='1' cellpadding='5' align='center'>
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
							<p style='text-align:left;' dir='ltr'><span style='font-size:11px;font-family:verdana;'>Regards,<br/>Uploadchi<br/><br/>http://www.uploadchi.com<br>info@uploadchi.com</span></p>
						</td>
					</tr>
				</tbody>
			</table>";
	if(is_uploaded_file($_FILES['files']['tmp_name'])){
		$handle=fopen($_FILES['files']['tmp_name'], "r");
		if($handle){
			$c=0;
			while(($buffer=fgets($handle, filesize($_FILES['files']['tmp_name'])))!==false) {
				@mail(trim($buffer), $subject, $message, $headers);
				$c++;
			}
			if(!feof($handle)) {
				echo "Error: unexpected fgets() fail";
			}
			fclose($handle);
		}
		$count=$c;
	}else{
		// Set users group
		$groups=$_POST['groups'];
		if(isset($groups) && ($groups!=0))
			$cond="WHERE user_group='$groups'";
		else
			$cond='';
		
		$result=dbquery("SELECT * FROM ".DB_PREFIX."users $cond");
		$count=dbrows($result);
		while($data=dbarray($result)){
			@mail($data['user_email'], $subject, $message, $headers);
		}
	}
}
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-bar-chart-o fa-fw"></i> Affiliate</h3>
		</div>
	</div>
	<div class="row">
		<?php
		if(isset($count)){
			?>
			<div class="col-lg-12">
				<div class="alert alert-success" role="alert"><li class="glyphicon glyphicon-envelope"></li> <?php echo number_format($count); ?> Email sent successfully.</div>
			</div>
			<?php
		}
		?>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Newsletter</div>
				<div class="panel-body">
					<form name="form_register" class="form-vertical" role="form" method="post" action="<?php echo ADMIN.'newsletter.php'.$aidlink; ?>" enctype="multipart/form-data">
						<div class="form-group col-lg-12">
							<label for="groups" class="control-label">Users Group</label><br>
							<select name="groups" class="form-control">
								<option value="0">All Groups</option>
								<?php
								$result_groups=dbquery("SELECT * FROM ".DB_PREFIX."users_groups");
								if(dbrows($result_groups)!=0){
									while($data_groups=dbarray($result_groups)){
										?>
										<option value="<?php echo $data_groups['user_group_id']; ?>"><?php echo $data_groups['user_group_name']; ?></option>
										<?php
									}
								}
								?>
							</select>
						</div>
						<div class="form-group col-lg-12">
							<label for="username" class="control-label">Subject</label><br>
							<input name="subject" type="text" value="" class="form-control" placeholder="Enter your subject" required>
						</div>
						<div class="form-group col-lg-12">
							<label for="username" class="control-label">Message</label><br>
							<textarea id="message" name="message" class="form-control" placeholder="Enter your message" rows="10" autocomplete="off"></textarea>
						</div>
							<div class="form-group col-lg-12">
								<div class="well well-sm">
									<label for="username" class="control-label">Import Files</label><br>
									<div class="fileinput fileinput-new input-group" data-provides="fileinput">
										<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
										<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Browse</span><span class="fileinput-exists">Change</span><input type="file" name="files"></span>
									</div>
								</div>
							</div>
						<div class="col-md-6 col-md-offset-3 text-center">
							<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send Message</button>
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