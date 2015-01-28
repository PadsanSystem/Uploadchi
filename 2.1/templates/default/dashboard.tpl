<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;{$lang_user_dashboard_100}</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12">
							<div class="list-group">
								<small>
									<a href="{$link_user_dashboard}" class="list-group-item {$navigation_user_dashboard}"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;{$lang_user_dashboard_101}</a>
									<a href="{$link_user_file_manager}" class="list-group-item {$navigation_user_file_manager}"><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;{$lang_user_dashboard_107}</a>
									<a href="{$link_user_reports}" class="list-group-item {$navigation_user_reports}"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;{$lang_user_dashboard_102}</a>
								</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="well well-sm">
								<span class="glyphicon glyphicon-stats"></span>&nbsp;{$lang_user_dashboard_112}
							</div>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge"><small>{$user_allocate_attachments_size_display}&nbsp;{$lang_user_dashboard_104}&nbsp;{$user_define_attachment_percent_display}</small></span>
									<small>{$lang_user_dashboard_103}</small>
								</li>
								
							</ul>
							<div class="well well-sm">
								<span class="glyphicon glyphicon-stats"></span>&nbsp;{$lang_user_dashboard_111}
							</div>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge"><small>{$user_attachments_count}</small></span>
									<small>{$lang_user_dashboard_108}</small>
								</li>
								<li class="list-group-item">
									<span class="badge"><small>{$user_attachments_views}</small></span>
									<small>{$lang_user_dashboard_109}</small>
								</li>
								<li class="list-group-item">
									<span class="badge"><small>0 Rial's</small></span>
									<small>{$lang_user_dashboard_110}</small>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					{if isset($navigation_user_file_manager)}
						{include file='file_manager.tpl'}
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>