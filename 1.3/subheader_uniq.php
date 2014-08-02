<?php
/*
|-------------------------------|
| PadsanSystem Corporation		|
|-------------------------------|
| Upload Center Version			|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
session_start();
require_once 'maincore.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $settings['setting_description']; ?>">
	<meta name="keywords" content="<?php echo $settings['setting_keywords']; ?>">
	<meta name="author" content="PadsanSystem Corporation">
	<link rel="shortcut icon" href="favicon.png">
	<title><?php echo $settings['setting_title']; ?></title>
	<link href="<?php echo CSS.'bootstrap.min.css'; ?>" rel="stylesheet">
	<link href="<?php echo CSS.'sb-admin-2.css'; ?>" rel="stylesheet">
	<link href="<?php echo CSS.'jasny-bootstrap.min.css'; ?>" rel="stylesheet">
	<link href="<?php echo CSS.'ui-lightness/jquery-ui.min.css'; ?>" rel="stylesheet"/>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>