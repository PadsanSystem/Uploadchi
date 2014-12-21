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
function get_server(){
	include_once FUNCTIONS.'function.attachments_exts.php';
	$types=check_validate_exts('jpg');
	
	$result=dbquery("SELECT server.server_ram, server.server_hdd, server.server_cpu, server.server_bandwidth, server.server_connectivity, server.server_name, datacenter.datacenter_status, server_access.server_access_attachment_ext, server_access.server_access_server, server_access.server_access_status FROM ".DB_PREFIX."servers server, ".DB_PREFIX."datacenters datacenter, ".DB_PREFIX."servers_access server_access WHERE datacenter.datacenter_id=server.server_datacenter AND server_access.server_access_attachment_ext=true AND server_access.server_access_server=server.server_id AND server_access.server_access_status='Enable' AND datacenter.datacenter_status='Enable' AND server.server_status='Enable' GROUP BY server.server_name");
	
	if(dbrows($result)!=0){
		
	}else{
		$error='We are sorry!';
	}
}
?>