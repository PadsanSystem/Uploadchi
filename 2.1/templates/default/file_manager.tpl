<div class="well well-sm">
	<div class="btn-group">
		<button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;{$lang_commons_108}</button>
		<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" data-toggle="modal" data-target="#create_folder"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;{$lang_file_manager_100}</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-open-file"></span>&nbsp;&nbsp;{$lang_file_manager_101}</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-duplicate"></span>&nbsp;&nbsp;{$lang_file_manager_102}</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-paste"></span>&nbsp;&nbsp;{$lang_file_manager_103}</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;{$lang_file_manager_104}</a></li>
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;{$lang_file_manager_105}</button>
		<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;{$lang_file_manager_106}</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-compressed"></span>&nbsp;&nbsp;{$lang_file_manager_107}</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;{$lang_file_manager_108}</a></li>
		</ul>
	</div>
</div>
{if isset($up_one_level)}
<ol class="breadcrumb">
	<li><small><a href="{$up_one_level}" title="{$lang_file_manager_115}">{$lang_file_manager_115}</a></small></li>
	<li class="active">{$lang_commons_119}</li>
</ol>
{/if}

<form name="frm_filemanager" method="post" action="">
	<table class="table table-striped table-bordered table-hover" id="tables">
		<thead>
			<tr>
				<td class="text-center col-lg-1"></td>
				<td class="text-left col-lg-5"><a href="#"><small>{$lang_file_manager_110}</small></a></td>
				<td class="text-left col-lg-2"><a href="#"><small>{$lang_file_manager_111}</small></a></td>
				<td class="text-left col-lg-2"><a href="#"><small>{$lang_file_manager_112}</small></a></td>
				<td class="text-left col-lg-2"><a href="#"><small>{$lang_file_manager_113}</small></a></td>
			</tr>
		</thead>
		<tbody>
			{foreach $user_attachments_folders as $data_user_attachments_folders}
				<tr>
					<td class="text-center col-lg-1">
						<input name="no[]" type="checkbox"/>
					</td>
					<td class="text-left col-lg-5">
						<a href="{$link_user_dashboard}?route=file_manager&folder_name={$data_user_attachments_folders.attachment_folder_id}" title="{$data_user_attachments_folders.attachment_folder_name}">
							<span class="glyphicon glyphicon-folder-open"></span>&nbsp;
							<small>{$data_user_attachments_folders.attachment_folder_name}</small>
						</a>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small>{$data_user_attachments_folders.attachment_folder_time|date_format:"%m/%d/%Y %l:%m %p"}</small>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small>{$lang_file_manager_116}</small>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small></small>
					</td>
				</tr>
			{/foreach}
			{foreach $user_attachments as $data_user_attachments}
				<tr>
					<td class="text-center col-lg-1">
						<input name="checkbox_attachments" type="checkbox" value="{$data_user_attachments.attachment_id}"/>
					</td>
					<td class="text-left col-lg-5">
						<a href="{$download_link}{$data_user_attachments.attachment_uid}" target="_blank" title="{$data_user_attachments.attachment_uid}">
							<img src="{$img_attachments_types}{$data_user_attachments.attachment_ext_name}.png" alt="{$data_user_attachments.attachment_uid}" title="{$data_user_attachments.attachment_uid}"/>
							<small>{$data_user_attachments.attachment_uid}</small>
						</a>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small>{$data_user_attachments.attachment_time|date_format:"%m/%d/%Y %l:%m %p"}</small>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small>{$data_user_attachments.attachment_ext_name|upper}&nbsp;{$lang_file_manager_120}</small>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small>{$data_user_attachments.attachment_size|filesize}</small>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</form>