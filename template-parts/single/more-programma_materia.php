<?php
/**
 * Box correlati per tassonomia argomento
 */
global $post, $related_type, $posts_array;
if(!$related_type)
    $related_type = "card-vertical-thumb";
$oldpost = $post;

if ( is_array($posts_array) && count( $posts_array ) ) { ?>
	<section class="section bg-gray-gradient py-5" id="art-par-correlati">
	<div class="container pt-3">

		<div class="row variable-gutters">
			<div class="col-lg-12">

				<h2 class="h3 mb-5 text-center semi-bold text-gray-primary"><?php _e("Gli altri programmi della Classe", "design_scuole_italia"); ?></h2>

				<div class="it-carousel-wrapper carousel-notice it-carousel-landscape-abstract-three-cols splide"
                  data-bs-carousel-splide>
                  <div class="splide__track ps-lg-3 pe-lg-3">
                    <ul class="splide__list it-carousel-all">
					<?php
					foreach ( $posts_array as $post ) {
						?>
						<div class="item">
							<?php get_template_part( "template-parts/single/".$related_type, $post->post_type ); ?>
						</div><!-- /item -->
					<?php } ?>
					</ul>
				  </div><!-- /carousel-large -->
				</div>

			</div><!-- /col-lg-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
	</section><?php
}
$post = $oldpost;