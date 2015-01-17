<?php
require_once(CLASSES.'medoo.php');

class database extends medoo{
   function __construct(){
        // These automatically get set with each new instance.

        parent::__construct();
		[
			'database_type'=>'mysql',
			'server'=>'localhost',
			'username'=>'root',
			'password'=>'',
			'database_name'=>'uploadchi_database',
			'port'=>3306,
			'option'=>[PDO::ATTR_CASE => PDO::CASE_NATURAL]
		]
	}
}

	// [
		// 'database_type'=>'mysql',
		// 'database_name'=>DB_NAME,
		// 'server'=>DB_HOST,
		// 'username'=>DB_USER,
		// 'password'=>DB_PASS,
		// optional
		// 'port'=>DB_PORT,
		// 'charset'=>DB_CHARSET,
		// driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
		// 'option'=>[PDO::ATTR_CASE => PDO::CASE_NATURAL]
	// ]
?>