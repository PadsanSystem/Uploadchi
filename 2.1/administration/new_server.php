<form name="new_server" class="form-vertical" role="form" method="post" action="<?php echo ADMIN.'servers.php'.$aidlink; ?>">
	<div class="form-group col-lg-12">
		<label for="server_name" class="control-label">Name</label><br>
		<input name="server_name" type="text" value="" class="form-control" placeholder="Enter Server Name" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_username" class="control-label">Username</label><br>
		<input name="server_username" type="text" value="" class="form-control" placeholder="Enter Server Username" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_password" class="control-label">Password</label><br>
		<input name="server_password" type="password" value="" class="form-control" placeholder="Enter Server Password" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_ip" class="control-label">IP Address</label><br>
		<input name="server_ip" type="text" value="" class="form-control" placeholder="Enter main IP" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_hdd" class="control-label">Hard Disk</label><br>
		<input name="server_hdd" type="text" value="" class="form-control" placeholder="Enter size of Hard Disk" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_cpu" class="control-label">CPU Core</label><br>
		<input name="server_cpu" type="text" value="" class="form-control" placeholder="Number of CPU Cores" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_ram" class="control-label">RAM</label><br>
		<input name="server_ram" type="text" value="" class="form-control" placeholder="Dedicated server RAM (xGB)" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_bandwidth" class="control-label">Bandwidth</label><br>
		<input name="server_bandwidth" type="text" value="" class="form-control" placeholder="Available Bandwidth (xGB)" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_connectivity" class="control-label">Network Connectivity</label><br>
		<input name="server_connectivity" type="text" value="" class="form-control" placeholder="Network Connectivity (xMB)" required>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_datacenter" class="control-label">Datacenter Location</label><br>
		<select name="server_datacenter" class="form-control">
			<?php
			$result_datacenters=dbquery("CALL sp_datacenters()");
			if(dbrows($result_datacenters)!=0){
				?>
				<option value="0">- None -</option>
				<?php
				while($data_datacenters=dbarray($result_datacenters)){
					?>
					<option value="<?php echo $data_datacenters['datacenter_id']; ?>"><?php echo $data_datacenters['datacenter_name']; ?></option>
					<?php
				}
			}
			?>
		</select>
	</div>
	<div class="form-group col-lg-12">
		<label for="server_status" class="control-label">Status</label><br>
		<select name="server_status" class="form-control">
			<option value="Enable">Enable</option>
			<option value="Disable">Disable</option>
		</select>
	</div>
	<div class="col-md-6 col-md-offset-3 text-center">
		<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Server</button>
	</div>
</form>