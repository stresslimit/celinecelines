<?php global $post; ?>
	
	<section class="article_wrapper" style="background-image:url(<?php sld_post_thumbnail_src( $post->ID, 'home-page' ) ?>);">
		<div>

			<article>
				<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
				<h3>written by <?php the_author() ?> on <?php echo get_the_date() ?></h3>
			</article>

		</div>
	</section>

