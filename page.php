<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

	<section><div>

		<article>
			<h1><?php the_title() ?></h1>

			<?php the_content() ?>

		</article>

	</div></section>

	<?php endwhile; ?>

<?php get_footer();
