<?php global $post;

$id = get_post_thumbnail_id( $post->ID );
$image = wp_get_attachment_image_src( $id, 'home-page' );
// var_dump( $image );
$the_image = $image[0];
$width = $image[1];
$height = $image[2];

?>
	
	<section class="article_wrapper" style="background-image:url(<?php sld_post_thumbnail_src( $post->ID, 'home-page' ) ?>);<?php if ( $height < 600 ) : echo 'height:'. ($height+20) .'px'; endif; ?>">
		<div>

			<article>
				<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
				<h3>written by <?php the_author() ?> on <?php echo get_the_date() ?></h3>
			</article>

		</div>
	</section>

