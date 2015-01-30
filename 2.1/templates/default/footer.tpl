<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h6 class="text-muted text-center">
					<small class="text-muted text-center"><a href="http://blog.uploadchi.com" title="{$lang_footer_101}">{$lang_footer_101}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{$link_privacy}" title="{$lang_footer_102}">{$lang_footer_102}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://blog.uploadchi.com" title="{$lang_footer_103}">{$lang_footer_103}</a></small>
				</h6>
				<h6 class="text-muted text-center"><small>{$lang_copyright}</small></h6>
				{if ($iADMIN)}
					<h6 class="text-muted text-center">
						<small><b>{$lang_memory_usage}</b>&nbsp;{$memory_usage|filesize}&nbsp;&nbsp;<b>{$lang_render_time}</b>&nbsp;{$render_time}&nbsp;{$lang_seconds}</small>
					</h6>
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