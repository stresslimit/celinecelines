<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

	<section><div>

		<article>
			<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
			<h5>by <?php the_author() ?> on <?php echo get_the_date() ?></h5>

			<?php the_content('more &raquo;'); ?>

			<div>
			<?php comments_popup_link('leave a comment', '1 comment', '% comments'); ?>
			<?php edit_post_link('edit', '', ''); ?><br/>
			</div>
		</article>

	</div></section>

	<?php endwhile; ?>

	<?php if ( is_single() ) : ?>
	
	<section><div class="contain">
		<?php comments_template(); ?>
	</div></section>


	<section class="plain">
	<div>
		<?php
		$date_format = get_option( 'date_format' );
		$prev = get_previous_post(); if ( !empty( $prev ) ) : ?>
		<div class="alignleft">
			<h2><a href="<?php echo get_permalink( $prev->ID ); ?>"><?php echo get_the_title( $prev ); ?></a></h2>
			<h5>by <?php the_author() ?> on <?php echo date( $date_format, strtotime( $prev->post_date ) ); ?></h5>
		</div>
		<?php endif; ?>
		<?php $next = get_next_post(); if ( !empty( $next ) ) : ?>
		<div class="alignleft">
			<h2><a href="<?php echo get_permalink( $next->ID ); ?>"><?php echo get_the_title( $next ); ?></a></h2>
			<h5>by <?php the_author() ?> on <?php echo date( $date_format, strtotime( $next->post_date ) ); ?></h5>
		</div>
		<?php endif; ?>
	</div>
	</section>
	
	<?php endif; ?>

	<div class="posts_navigation">
		<?php next_posts_link('&larr;') ?> &nbsp; &nbsp; <?php previous_posts_link('&rarr;') ?>
	</div>

<?php get_footer();
