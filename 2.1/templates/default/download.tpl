<div class="container">
	{if isset($error_number)}
		<div class="alert alert-alert" role="alert">
			<div class="alert alert-danger" role="alert">
				<p class="text-danger"><b>{$lang_errors_123}&nbsp;{$error_number}</b></p>
				{$lang_error_message}&nbsp;<a href="{$link_home}">{$lang_errors_122}</a>
			</div>
		</div>
	{/if}
	{if $intro_download=='true'}
		<div class="row">
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading"><img src="{$attachment_ext_name}" alt="{$attachment_name}" title="{$attachment_name}">&nbsp;<b>{$attachment_name}</b></div>
					<div class="panel-body text-center">
						<div class="row">
							<div class="col-lg-9">
								<div align="center" class="well well-sm">
									<h6><small>Advertising</small></h6>
									<a href="{$link_contact_us}"><img src="http://ads.uploadchi.com/noads_banner-468x60.gif" alt="" title="" class="img-responsive"></a>
								</div>
							</div>
							<div class="col-lg-3">
								<div align="center" class="well well-sm">
									<h6><small>QR Code</small></h6>
									<img src="{$attachment_qrcode}" alt="{$attachment_name}" title="{$attachment_name}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="text-info">
									<h6>
									<small>
										<div class="well well-sm">
											<div class="row">
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-user"></span>&nbsp;<b>Uploaded by:</b>&nbsp;<u>{$attachment_user}</u>
												</div>
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-hdd"></span>&nbsp;<b>File size:</b>&nbsp;{$attachment_size|filesize}
												</div>
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-time"></span>&nbsp;<b>Published date:</b>&nbsp;{$attachment_time|date_format: "%m/%d/%Y %l:%m %p"}
												</div>
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-download-alt"></span>&nbsp;<b>Downloaded:</b>&nbsp;
													{$attachment_views|number_format}
												</div>
											</div>
										</div>
									</small>
									</h6>
									<a href="{$attachment_address}"><div class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;Download&nbsp;{$attachment_name}</div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="well well-sm text-center">
					<h6><small>Advertising</small></h6>
					<script type="text/javascript" src="http://www.ad2ad.ir/showad.aspx?s=8&u=635580366029368258"></script>
					<script type="text/javascript" src="http://www.ad2ad.ir/showad.aspx?s=8&u=635580366029368258"></script>
				</div>
			</div>
		</div>
	{/if}
</div>