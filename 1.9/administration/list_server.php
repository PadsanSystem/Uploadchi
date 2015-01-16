<?php
if(isset($_GET['id']) && isset($_GET['action']) && ($_GET['action']=='delete')){
	dbquery("DELETE FROM ".DB_PREFIX."servers WHERE server_id='$id'");
}else if(isset($_GET['id']) && isset($_GET['action']) && ($_GET['action']=='Enable')){
	dbquery("UPDATE ".DB_PREFIX."servers SET server_status='Disable' WHERE server_id='$id'");
}else if(isset($_GET['id']) && isset($_GET['action']) && ($_GET['action']=='Disable')){
	dbquery("UPDATE ".DB_PREFIX."servers SET server_status='Enable' WHERE server_id='$id'");
}
?>
<table class="table table-striped table-bordered table-hover" id="tables">
	<thead>
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">Name</th>
			<th class="text-center">IP</th>
			<th class="text-center">Hard Disk</th>
			<th class="text-center">RAM</th>
			<th class="text-center">Bandwidth</th>
			<th class="text-center">Operations</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$result_server=dbquery("CALL sp_servers()");
	if(dbrows($result_server)!=0){
		$i=1;
		while($data_server=dbarray($result_server)){
			?>
			<tr class="odd gradeX">
				<td><?php echo $i; ?>.</td>
				<td><?php echo $data_server['server_name']; ?></td>
				<td><?php echo $data_server['server_ip']; ?></td>
				<td><?php echo parsesize($data_server['server_hdd'], 2); ?></td>
				<td><?php echo $data_server['server_ram']; ?> GB</td>
				<td><?php echo parsesize($data_server['server_bandwidth'], 2); ?></td>
				<td class="text-center">
					<a href="<?php echo ADMIN.'list_server.php'.$aidlink.'&id='.$data_server['server_id'].'&action=delete'; ?>"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
					<a href="<?php echo ADMIN.'list_server.php'.$aidlink.'&id='.$data_server['server_id'].'&action=edit'; ?>"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
					<a href="<?php echo ADMIN.'list_server.php'.$aidlink.'&id='.$data_server['server_id'].'&action='.$data_server['server_status']; ?>">
					<?php
					if($data_server['user_status']=='Enable'){
						?>
						<i class="fa fa-unlock"></i>&nbsp;
						<?php
					}else{
						?>
						<span class="glyphicon glyphicon-lock"></span>&nbsp;
						<?php
					}
					?>
					</a>
					<a href="<?php echo ADMIN.'list_server.php'.$aidlink.'&id='.$data_server['user_id'].'&action=info'; ?>"><span class="glyphicon glyphicon-info-sign"></span></a>
				</td>
			</tr>
			<?php
			$i++;
		}
	}
	?>
	</tbody>
</table>