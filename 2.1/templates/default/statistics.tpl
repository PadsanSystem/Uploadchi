<div class="container">
	<ol class="breadcrumb">
		<li><a href="{$link_home}" title="{$lang_commons_117}">{$lang_commons_117}</a></li>
		<li class="active">{$lang_commons_119}</li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-stats"></span>&nbsp;{$lang_statistics_100}</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="badge">{$count_all_attachments|number_format}</span>{$lang_statistics_101}
				</li>
				<li class="list-group-item">
					<span class="badge">{$count_all_attachments_views|number_format}</span>{$lang_statistics_102}
				</li>
				<li class="list-group-item">
					<span class="badge">{$count_all_servers|number_format}</span>{$lang_statistics_103}
				</li>
				<li class="list-group-item">
					<span class="badge">{$count_all_users|number_format}</span>{$lang_statistics_104}
				</li>
			</ul>
		</div>
	</div>
</div>