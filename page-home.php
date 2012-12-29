<?php get_header(); ?>

</div></section>
 <?php // close div.main from header ?>


	<?php // while (have_posts()) : the_post(); ?>
	<?php $p = get_posts(); ?>
	<?php foreach ( $p as $post ) : setup_postdata($post); ?>
		
<section class="article_wrapper" style="background-image:url(<?php sld_post_thumbnail_src( $post->ID, 'home-page' ) ?>);">
	<div>

		<article>
			<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
			<h3>written by <?php the_author() ?> on <?php echo get_the_date() ?></h3>
		</article>

	</div>
</section>

	<?php endforeach; ?>


	<div class="posts_navigation">
		<?php next_posts_link('◀') ?> &nbsp; &nbsp; <?php previous_posts_link('▶') ?>
	</div>


<?php get_footer();
