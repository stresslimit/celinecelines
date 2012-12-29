<?php get_header(); ?>

	<div class="contain"><h1 class="page-title">Some of my design work in recent years.</h1></div>

	<?php
	$args = array(
		'post_type' => 'work',
		'numberposts' => -1,
        'orderby' => 'menu_order',
        'order' => 'asc',
	);
	$p = get_posts( $args );
	foreach ( $p as $post ) : setup_postdata($post);
		$link = !empty( $post->link )  ?  $post->link  :  false;
	?>

	<div class="contain">
		<article class="work" style="background-image:url(<?php sld_post_thumbnail_src( $post->ID, 'work-banner' ) ?>);">
			<?php if ( !empty($link) ) : ?><a href="<?php echo $link; ?>"><?php endif; ?>
			<div class="inner">

			<h1><?php the_title() ?></h1>
			<?php the_content() ?>

			</div>
			<?php if ( !empty($link) ) : ?></a><?php endif; ?>
		</article>
	</div>

	<?php endforeach; ?>

	<?php while (have_posts()) : the_post(); ?>

	<section><div>

		<article>
		<?php the_content() ?>
		</article>

	</div></section>

	<?php endwhile; ?>

<?php get_footer();
