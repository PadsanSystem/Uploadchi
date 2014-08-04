<?php
require_once 'subheader.php';
if (!iADMIN || !defined("iAUTH") || !isset($aid) || $aid != iAUTH) { redirect('../index.php'); }
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Attachments Management</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					DataTables Advanced Tables
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>ID</th>
									<th>Username</th>
									<th>Name</th>
									<th>Family</th>
									<th>Signup Date</th>
									<th>Last visit</th>
									<th>Operations</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$result_users=dbquery("SELECT * FROM ".DB_PREFIX."attachments ORDER BY attachment_time DESC");
							if(dbrows($result_users)!=0){
								$i=1;
								while($data_users=dbarray($result_users)){
									?>
									<tr class="odd gradeX">
										<td><?php echo $i; ?>.</td>
										<td><?php echo $data_users['attachment_uid']; ?></td>
										<td><?php echo parsebytesize($data_users['attachment_size'], 2); ?></td>
										<td><?php echo $data_users['user_family']; ?></td>
										<td></td>
									</tr>
									<?php
									$i++;
								}
							}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
	$('#dataTables-example').dataTable({
		"paging":   true,
        "ordering": true
	});
});
</script>
<?php
require_once ADMINISTRATION.'footer.php';
?>