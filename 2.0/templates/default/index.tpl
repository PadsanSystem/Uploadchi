<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<h1>
				{$lang_commons_120}<br>
				<small class="text-success">{$lang_commons_121}</small>
			</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<div class="well well-lg">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<small>
							<ul class="no-more-left">
								<li>{$lang_commons_122}</li>
								<li>{$lang_commons_123}</li>
								<li>{$lang_commons_124}</li>
								<li>{$lang_commons_125}</li>
								<li>{$lang_commons_126}</li>
								<li>{$lang_commons_127}</li>
							</ul>
						</small>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" align="center">
						<img src="{$img_banners}" alt="{$settings_description}" title="[$settings_description]" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs" id="tabs" style="border-bottom:0">
	  <li class="active"><a href="#{$lang_upload_103}" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;{$lang_upload_101}</a></li>
	  <li><a href="#{$lang_upload_104}" data-toggle="tab"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;{$lang_upload_102}</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="{$lang_upload_103}">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<form name="form_{$lang_upload_103}" class="form-horizontal" role="form" method="post" action="{$link_upload}" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2 text-center">
								<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
								  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">{$lang_upload_107}</span><span class="fileinput-exists">{$lang_upload_108}</span><input type="file" name="{$lang_upload_103}"></span>
								</div>
								<br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-4 col-lg-offset-4 text-center">
								<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;{$lang_upload_105}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="{$lang_upload_104}">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<form name="form_{$lang_upload_104}" class="form-horizontal" role="form" method="post" action="{$link_upload}">
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2 text-center">
								<div class="input-group">
									<input name="{$lang_upload_104}" type="text" class="form-control">
									<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
								</div>
								<br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-4 col-lg-offset-4 text-center">
								<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;{$lang_upload_106}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>