<?php get_header(); ?>

	<div class="contain"><h1 class="page-title">Talks & Conferences</h1></div>

	<?php
	$args = array(
		'post_type' => 'talk',
		'numberposts' => -1,
        'orderby' => 'menu_order',
        'order' => 'asc',
	);
	$p = get_posts( $args );
	foreach ( $p as $post ) : setup_postdata($post);
		$link = !empty( $post->link )  ?  $post->link  :  false;
	?>

	<section><div>
		<article>

			<h1><?php if ( !empty($link) ) : ?><a href="<?php echo $link; ?>"><?php the_title() ?></a><?php else : the_title(); endif; ?></h1>
			<?php the_content() ?>

		</article>
	</div></section>

	<?php endforeach; ?>

<?php get_footer();
