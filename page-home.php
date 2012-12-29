<?php get_header(); ?>

</div></section>
 <?php // close div.main from header ?>


	<?php // while (have_posts()) : the_post(); ?>
	<?php $p = get_posts(); ?>
	<?php foreach ( $p as $post ) : setup_postdata($post); ?>

		<?php get_template_part( 'content', 'post' ); ?>

	<?php endforeach; ?>


	<div class="posts_navigation">
		<?php next_posts_link('◀') ?> &nbsp; &nbsp; <?php previous_posts_link('▶') ?>
	</div>


<?php get_footer();
