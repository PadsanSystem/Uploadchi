<?php /*%%SmartyHeaderCode:94554c2cc655927b1-20097297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '454b718d7f07c916e94cab7deecbd48fb748d3a3' => 
    array (
      0 => 'templates\\default\\index.tpl',
      1 => 1421871171,
      2 => 'file',
    ),
    '24c81e219940e9d26e43596d9bc0aebb536a47e9' => 
    array (
      0 => 'templates\\default\\local_upload.tpl',
      1 => 1421971665,
      2 => 'file',
    ),
    '12cd62a0cced778f0d90230a475b5237520ff744' => 
    array (
      0 => 'templates\\default\\remote_upload.tpl',
      1 => 1421871164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94554c2cc655927b1-20097297',
  'variables' => 
  array (
    'lang_commons_120' => 0,
    'lang_commons_121' => 0,
    'lang_commons_122' => 0,
    'lang_commons_123' => 0,
    'lang_commons_124' => 0,
    'lang_commons_125' => 0,
    'lang_commons_126' => 0,
    'lang_commons_127' => 0,
    'img_banners' => 0,
    'settings_description' => 0,
    'lang_upload_103' => 0,
    'lang_upload_101' => 0,
    'lang_upload_104' => 0,
    'lang_upload_102' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c2cc656949e2_84861154',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2cc656949e2_84861154')) {function content_54c2cc656949e2_84861154($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<h1>
				Welcome to Uploadchi.com<br>
				<small class="text-success">Easily store, manage and share files with anyone</small>
			</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<div class="well well-lg">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<small>
							<ul class="no-more-left">
								<li>even more place to store and capture all your life fleeting moments</li>
								<li>with SSL data encryption your data will stay protected</li>
								<li>let your friends instantly download files, which you send them</li>
								<li>absolutely no interruptions</li>
								<li>enjoy better performance and speed</li>
								<li>restore even deleted files</li>
							</ul>
						</small>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" align="center">
						<img src="images/banners.png" alt="Easily store, manage and share files with anyone" title="Easily store, manage and share files with anyone" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs" id="tabs" style="border-bottom:0">
	  <li class="active"><a href="#local_upload" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;Local Upload</a></li>
	  <li><a href="#remote_upload" data-toggle="tab"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;Remote Upload</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="local_upload">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
						<form name="form_local_upload" class="form-horizontal" role="form" method="post" action="upload.php" enctype="multipart/form-data">
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
				  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
				  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Browse</span><span class="fileinput-exists">Change</span><input type="file" name="local_upload"></span>
				</div>
				<br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-4 col-lg-offset-4 text-center">
				<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;Upload Files</button>
			</div>
		</div>
	</form>

				</div>
			</div>
		</div>
		<div class="tab-pane" id="remote_upload">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<form name="form_remote_upload" class="form-horizontal" role="form" method="post" action="upload.php">
	<div class="form-group">
		<div class="col-lg-8 col-lg-offset-2 text-center">
			<div class="input-group">
				<input name="remote_upload" type="text" class="form-control">
				<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
			</div>
			<br>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-4 col-lg-offset-4 text-center">
			<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;Transfer Links</button>
		</div>
	</div>
</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
