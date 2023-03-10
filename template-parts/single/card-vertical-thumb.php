<?php
global $post, $autore;
$autore = get_user_by("ID", $post->post_author);

$image_url = get_the_post_thumbnail_url($post, "vertical-card");

?><div class="card card-bg card-vertical-thumb bg-white card-thumb-rounded">
	<div class="card-body">
		<div class="card-content">
			<h3 class="h5"><a href="<?php echo get_permalink($post); ?>"><?php echo get_the_title($post); ?></a></h3>
			<p><?php echo get_the_excerpt($post); ?></p>
		</div>
		<?php if($image_url) { ?>
			<div class="card-thumb">
                <img src="<?php echo $image_url; ?>" alt="">
			</div>
		<?php  } ?>
	</div><!-- /card-body -->
	<div class="card-comments-wrapper">
		<?php get_template_part("template-parts/autore/card"); ?>
        <?php
        if($post->post_type == "post") {
	        ?>
            <div class="comments">
                <p><?php echo $post->comment_count; ?></p>
            </div><!-- /comments -->
	        <?php
        }
            ?>
	</div><!-- /card-comments-wrapper -->
</div><!-- /card --><?php
