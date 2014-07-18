<?php
/*
 |----------------------------------|
|	PadsanSystem					|
|-----------------------------------|
|	Uploadcenter Version			|
|-----------------------------------|
|	Web   : www.PadsanSystem.com	|
|	Email : Info@PadsanSystem.com	|
|	Tel   : +98 - 26 325 45 700		|
|	Fax   : +98 - 26 325 45 701		|
|-----------------------------------|
*/
if(isset($_POST['send_file'])){
	// Include class ftp_upload
	include_once("class.ftp_upload.php");
	
	// Explode name
	$get=$_FILES['file_hosting']['name'];
	$get_explode=explode(".", $get);
	$get_explode_count=count($get_explode);
	$type=$get_explode[$get_explode_count-1];
	
	// Generate name
	$name=time();
	$name+=rand(10, 100);
	$name+=rand(100, 1000);
	$name+=rand(1000, 10000);
	$name+=rand(10000, 100000);
	$name+=rand(100000, 1000000);
	$name+=rand(1000000, 10000000);
	$name+=rand(10000000, 100000000);
	$name+=rand(100000000, 1000000000);
	$name+=rand(1000000000, 10000000000);
	
	// String of name and type file
	$upload_name=$name.".".$type;
	
	// Create object as ftp_upload
	$ftp_upload=new ftp_upload();
	
	// Initialize FTP server
	$ftp_upload->initialize();
	
	// Upload file in FTP Server
	$status=$ftp_upload->upload($_FILES['file_hosting']['tmp_name'], $upload_name);
	
	// Close ftp connection
	$ftp_upload->close_connection();
}
?>