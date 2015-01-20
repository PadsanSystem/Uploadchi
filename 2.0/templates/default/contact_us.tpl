<div class="container">
	<ol class="breadcrumb">
		<li><a href="{$link_home}" title="{$lang_commons_108}">{$lang_commons_108}</a></li>
		<li class="active">{$lang_contact_us_100}</li>
	</ol>
	{if isset($lang_alert_message)}
		<div class="alert alert-success" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp;{$lang_alert_message}
		</div>
	{elseif isset($error_number)}
		<div class="alert alert-danger" role="alert">
			<p class="text-danger"><b>{$lang_errors_123}&nbsp;{$error_number}</b></p>
			{$lang_error_message}
		</div>
	{/if}
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;{$lang_contact_us_111}</div>
		<div class="panel-body">
			<div class="form-group col-lg-5 text-center">
				<img src="{$img_contact_us}" alt="{$lang_contact_us_100}" title="{$lang_contact_us_100}" class="img-responsive img-thumbnail">
			</div>
			<form name="form_contact_us" class="form-vertical" role="form" method="post" action="{$link_contact_us}">
				<div class="form-group col-lg-7">
					<label for="department" class="control-label">{$lang_contact_us_101}</label><br>
					<select name="department" class="form-control col-lg-12">
						<option value="1">{$lang_contact_us_112}</option>
						<option value="2">{$lang_contact_us_113}</option>
						<option value="3">{$lang_contact_us_114}</option>
						<option value="4">{$lang_contact_us_115}</option>
					</select>
				</div>
				<div class="form-group col-lg-7">
					<label for="name" class="control-label">{$lang_contact_us_102}</label><br>
					<input id="name" name="name" type="text" class="form-control" placeholder="{$lang_contact_us_106}" required>
				</div>
				<div class="form-group col-lg-7">
					<label for="email" class="control-label">{$lang_contact_us_103}</label><br>
					<input id="email" name="email" type="text" class="form-control" placeholder="{$lang_contact_us_107}" required>
				</div>
				<div class="form-group col-lg-7">
					<label for="subject" class="control-label">{$lang_contact_us_104}</label><br>
					<input id="subject" name="subject" type="text" class="form-control" placeholder="{$lang_contact_us_108}" required>
				</div>
				<div class="form-group col-lg-12">
					<label for="message" class="control-label">{$lang_contact_us_105}</label><br>
					<textarea id="message" name="message" class="form-control" rows="3" placeholder="{$lang_contact_us_109}"></textarea>
				</div>
				<div class="col-lg-6 col-lg-offset-3 text-center">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-envelope"></span>&nbsp;{$lang_contact_us_110}</button>
				</div>
			</form>
		</div>
	</div>
</div>