<div class="col-xs-8  col-sm-12 col-md-4 pull-right search-div">
	<form class="navbar-form colapsable-btn" role="search" method="get" action="<?=esc_url( home_url( '/' ))?>">
		<div class="input-group">
			<input type="text" class="form-control form-search" placeholder="<?=esc_attr_x( 'Cauta &hellip;', 'placeholder' )?>" value="<?=get_search_query()?>" name="s" title="<?=esc_attr_x( 'Search for:', 'label' )?>" />
			<span class="input-group-btn">
				<button class="btn btn-search" type="button"><span class="glyphicon glyphicon-search"></span></button>
			</span>
		</div>
	</form>
</div>
