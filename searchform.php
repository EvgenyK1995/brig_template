<form role="search" method="GET" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="input-group">
		<input class="form-control" type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="Поиск..."/>
		<span class="input-group-btn">
			<button class="btn btn-info" type="submit" id="searchsubmit"><span class="glyphicon glyphicon-search"></span></button>
		</span>
	</div>
</form>