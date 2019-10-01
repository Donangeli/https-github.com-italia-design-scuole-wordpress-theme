<?php

?>
<aside class="aside-list sticky-sidebar search-results-filters">
	<form role="search" method="get" class="search-form" action="<?php echo home_url(""); ?>">
			<h3 class="h6 text-uppercase"><strong><?php _e("Tipologia", "design_scuole_italia"); ?></strong></h3>
			<ul>
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'tipologia-servizio',
					'hide_empty' => true,
				) );
				foreach ( $terms as $term ) {
					?>
					<li>
						<div class="custom-control custom-checkbox custom-checkbox-outline">
							<input type="radio" class="custom-control-input" name="tipologia-servizio" value="<?php echo $term->slug; ?>" id="check-<?php echo $term->slug; ?>" <?php if($term->slug == get_query_var("tipologia-servizio")) echo " checked "; ?> onChange="this.form.submit()">
							<label class="custom-control-label" for="check-<?php echo $term->slug; ?>"><?php echo $term->name; ?></label>
						</div>
					</li>

					<?php
				}
				?>
			</ul>

	</form>
</aside>