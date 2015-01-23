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
						<img src="{$img_banners}" alt="{$settings_description}" title="{$settings_description}" class="img-responsive">
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
					{include file='local_upload.tpl'}
				</div>
			</div>
		</div>
		<div class="tab-pane" id="{$lang_upload_104}">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					{include file='remote_upload.tpl'}
				</div>
			</div>
		</div>
	</div>
</div>