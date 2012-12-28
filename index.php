<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

	<article>
		<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
		<h5><?php the_time('j M Y') ?> by <?php the_author() ?></h5>

		<?php the_content('more &raquo;'); ?>

		<div>
		<?php comments_popup_link('leave a comment', '1 comment', '% comments'); ?>
		<?php edit_post_link('edit', '', ''); ?><br/>
		</div>
	</article>

	<?php endwhile; ?>

	<?php comments_template() ?>

	<div class="posts_navigation">
		<?php next_posts_link('◀') ?> &nbsp; &nbsp; <?php previous_posts_link('▶') ?>
	</div>

<?php get_footer();
