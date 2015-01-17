<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="text-muted text-center">
					<small><a href="http://blog.uploadchi.com" title="{$lang_footer_101}">{$lang_footer_101}</a></small>
				</h5>
				<p class="text-muted text-center"><small>{$lang_copyright}</small></p>
				{if ($iADMIN)}
					<p class="text-muted text-center">
						<small><b>{$lang_memory_usage}</b>&nbsp;{$memory_usage}&nbsp;&nbsp;<b>{$lang_render_time}</b>&nbsp;{$render_time}&nbsp;{$lang_seconds}</small>
					</p>
				{/if}
			</div>
		</div>
	</div>
</div>
<script type="text/JavaScript">
	function callback(){
		if(req.readyState == 4){
			if(req.status == 200){
				eval(req.responseText);
			}
		}
	};
	var req=new XMLHttpRequest();
	req.onload=callback;
	req.open("get", "{$jscript}", true);
	req.send();
</script>