<?php get_header(); ?>

</div></section>
 <?php // close div.main from header ?>


	<?php // while (have_posts()) : the_post(); ?>
	<?php $p = get_posts(); ?>
	<?php foreach ( $p as $post ) : setup_postdata($post); 
		$id = get_post_thumbnail_id( $post->ID );
		$image = wp_get_attachment_image_src( $id, 'home-page' ); 
		?>
		
	<div class="article_wrapper" style="background-image:url(<?php echo $image[0] ?>);">
	<div class="contain">

		<article>
			<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
			<h3>written by <?php the_author() ?> on <?php echo get_the_date() ?></h3>

		</article>

	</div>
	</div>

	<?php endforeach; ?>


	<div class="posts_navigation">
		<?php next_posts_link('◀') ?> &nbsp; &nbsp; <?php previous_posts_link('▶') ?>
	</div>


	<section class="body contain"><div class="main"> <?php // reopen div.main for footer ?>

<?php get_footer();
