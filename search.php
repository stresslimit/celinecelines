<?php get_header(); ?>

	<div class="contain"><h1 class="page-title">You searched for: <em><?php echo $_GET['s']; ?></em></h1></div>

	<?php while (have_posts()) : the_post(); ?>

	<section><div>

		<article>
			<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
			<h5><?php the_time('j M Y') ?> by <?php the_author() ?></h5>

			<?php // the_content('more &raquo;'); ?>

		</article>

	</div></section>

	<?php endwhile; ?>

	<div class="posts_navigation">
		<?php next_posts_link('&ldrr;') ?> &nbsp; &nbsp; <?php previous_posts_link('&rarr;') ?>
	</div>

<?php get_footer();
