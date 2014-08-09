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

if(!iMEMBER) { redirect(BASEDIR.'index.php'); }
if (!isset($rowstart)) { $rowstart = 0; }
if (isset($rowstart) && !isnum($rowstart)) { redirect(BASEDIR.'user_statistics.php'); }
?>
<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-stats"></span> View Statistics</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered col-lg-12">
					<tr class="active">
						<td class="text-center col-lg-5">
							<a href="#">Name</a>
						</td>
						<td class="text-center col-lg-1">
							<a href="#">Date Modified</a>
						</td>
						<td class="text-center col-lg-1">
							<a href="#">Type</a>
						</td>
						<td class="text-center col-lg-1">
							<a href="#">Size</a>
						</td>
						<td class="text-center col-lg-1">
							<a href="#">Views</a>
						</td>
						<td class="text-center col-lg-1">
							<a href="#">Operation</a>
						</td>
					</tr>
					<?php
					$result_attachment_count=dbrows(dbquery("SELECT a.*, s.* FROM ".DB_PREFIX."attachments a, ".DB_PREFIX."servers s WHERE a.attachment_status='Enable' AND a.attachment_user='".$userdata['user_id']."' AND a.attachment_server=s.server_id"));
					
					$limitrow=10;
					
					$result_attachment_view=dbquery("SELECT a.*, s.* FROM ".DB_PREFIX."attachments a, ".DB_PREFIX."servers s WHERE a.attachment_status='Enable' AND a.attachment_user='".$userdata['user_id']."' AND a.attachment_server=s.server_id ORDER BY a.attachment_time DESC LIMIT $rowstart, $limitrow");
					
					if($rowstart>$result_attachment_count || $rowstart%$limitrow!=0){
						redirect(BASEDIR.'user_statistics.php');
					}else if(dbrows($result_attachment_view)==0){
						?>
						<tr>
							<td colspan="6" class="text-center col-lg-1 text-muted">
								<small>There is no any uploaded files.</small>
							</td>
						</tr>
						<?php
					}else{
						while($data_attachment_view=dbarray($result_attachment_view)){
							$attachment_link="http://www.".$data_attachment_view['server_name']."/download.php?url=".$data_attachment_view['attachment_uid'];
							?>
							<tr>
								<td class="text-left col-lg-5">
									<a href="<?php echo BASEDIR."download.php?url=".$data_attachment_view['attachment_uid']; ?>" target="_blank">
									<img src="<?php echo IMAGES_TYPES.get_type($data_attachment_view['attachment_uid']).".png"; ?>"/>
									<?php echo $data_attachment_view['attachment_uid']; ?>
									</a>
								</td>
								<td class="text-center col-lg-1 text-muted">
									<small><?php echo date("m/d/Y H:m:s A", $data_attachment_view['attachment_time']); ?></small>
								</td>
								<td class="text-center col-lg-1 text-muted">
									<small><?php echo strtoupper(get_type($data_attachment_view['attachment_uid']))." File"; ?></small>
								</td>
								<td class="text-center col-lg-1 text-muted">
									<small><?php echo parsebytesize($data_attachment_view['attachment_size'], 2); ?></small>
								</td>
								<td class="text-center col-lg-1 text-muted">
									<small>
									<?php
										$result_attachment_view_count=dbquery("SELECT distinct(attachment_view_ip) FROM ".DB_PREFIX."attachments_views WHERE attachment_view_attachment='".$data_attachment_view['attachment_id']."'");
										echo number_format(dbrows($result_attachment_view_count));
									?>
									</small>
								</td>
								<td class="text-center col-lg-1">
									<a href="<?php echo BASEDIR."download.php?url=".$data_attachment_view['attachment_uid']; ?>" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a>
									<a href="#" data-toggle="modal" data-target="#file_info"><span class="glyphicon glyphicon-info-sign"></span></a>
								</td>
							</tr>
							<?php
						}
					}
					?>
				</table>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<?php
					if($result_attachment_count>$limitrow)
						echo makepagenav($start=$rowstart, $count=$limitrow, $total=$result_attachment_count, $range = 1, $link = "", $getname = "rowstart");
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>