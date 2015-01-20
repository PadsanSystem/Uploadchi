<div class="container">
	<ol class="breadcrumb">
		<li><a href="{$link_home}" title="{$lang_commons_117}">{$lang_commons_117}</a></li>
		<li class="active">{$lang_privacy_100}</li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-book"></span>&nbsp;{$lang_privacy_100}</div>
		<div class="panel-body">
			<div class="col-lg-2">
				<div class="list-group">
					<a href="<?php echo BASEDIR.'dashboard.php?route=file_explorer'; ?>" class="list-group-item <?php if(($_GET['route']=='file_explorer') || (!isset($_GET['route']))) echo 'active'; ?>"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;{$lang_privacy_106}</a>
					<a href="<?php echo BASEDIR.'dashboard.php?route=file_explorer'; ?>" class="list-group-item <?php if(($_GET['route']=='file_explorer') || (!isset($_GET['route']))) echo 'active'; ?>"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;{$lang_privacy_107}</a>
				</div>
			</div>
			<div class="col-lg-10">
				{$lang_terms_101}
				<p>{$lang_privacy_101}</p>
				<ol>
					<li>{$lang_privacy_102}</li>
					<li>{$lang_privacy_103}</li>
					<li>{$lang_privacy_104}</li>
				</ol>
				<p>{$lang_privacy_105}</p>
				{$lang_terms_106}
			</div>
		</div>
	</div>
</div>