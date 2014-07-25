<?php
/*
|-----------------------------------|
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

function get_server(){
	$result=dbquery("SELECT top(server_ram), server_name FROM ".DB_PREFIX."servers WHERE server_status='Enable' GROUP BY server_name");
	while($data=dbarray($result)){
		var_dump($data);
	}
}
?>