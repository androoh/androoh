<div class="col-xs-12 col-md-4 sidebar-offcanvas" id="sidebar" role="navigation">
	<div class="panel panel-default">
		<div class="panel-body">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#annual" data-toggle="tab"><i class="icon-calendar"></i> Calendar</a></li>
				<li><a href="#categories" data-toggle="tab"><i class="icon-tag"></i> Categorii</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="annual">
					<?php
					global $wpdb;
					$limit = 0;
					$year_prev = null;
					$result = array();
					$months = $wpdb->get_results("SELECT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
					foreach($months as $month) :
						$result[$month->year][$month->month] = $month;
					endforeach;?> 
					<div class="panel-group" id="accordion">
						<?php $i=0; foreach($result as $year => $row):?>
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$year?>">
											<?=$year?>
											<span class="badge pull-right">
												<?=count($result[$year])?>
											</span>
										</a>
									</h4>
								</div>
								<div id="collapse<?=$year?>" class="panel-collapse collapse  <?=($i==0)?'in':''?>">
									<div class="panel-body">
										<ul class="list-group">
										<?php foreach($row as $month => $value):?>
											<li class="list-group-item">
												<a href="#">
													<?=date('F', strtotime($year."-".$month."-01"))?>
													<span class="badge pull-right">
														<?=count($result[$year][$month])?>
													</span>
												</a>
											</li>
										<?php endforeach;?>
										</ul>
									</div>
								</div>
							</div>
						<?php $i++; endforeach;?>
					</div>
				</div>
				<div class="tab-pane" id="categories">
					<ul class="list-group">
						<?php 
						$categories = get_categories(array(
							'orderby' => 'name',
							'order' => 'ASC')); 
						foreach ($categories as $category) {
							if($category->category_count > 0){
								$option = '<li class="list-group-item">';
								$option .= ' <span class="badge">'.$category->category_count.'</span>';
								$option .= '<a href="'.get_category_link( $category->term_id ).'">';
								$option .= $category->cat_name;
								$option .= '</a>';
								$option .= '</li>';
								echo $option;
							}
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Nav tabs -->
</div>