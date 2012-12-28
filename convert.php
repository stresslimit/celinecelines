<meta charset="utf-8"><?php


/**
 * You may have to search manually for:
 * ,Â   [ bug, dunno why ]
 * .Â   [ bug ]
 * â€”  [ n-dash ]
 */

global $wpdb;
// echo 'wpdb->charset = '.$wpdb->charset.'<br>';

$postid = 1140;
$sql = "select * from `{$wpdb->prefix}_posts` where ID=$postid";
$post = $wpdb->query($sql);
$posts[] = $post;

$original_wpdb = $wpdb;

define('DB_CHARSET', 'utf8');
$mdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST );
echo 'mdb->charset = '.$mdb->charset.'<br>';

echo 'wpdb->charset = '.$wpdb->charset.'<br>';

$mpost = get_post($postid);
$posts[] = $mpost;



foreach ( $posts as $post ) {
	$i++;
	the_permalink($post->ID);
	echo '<p style="color:red">before:</p>'.strip_tags($post->post_content);
	// $post->post_content = process_post($post->post_content);
	// echo '<p style="color:blue">after:</p>'.strip_tags($post->post_content).'<hr>';
	// wp_update_post( $post );
}
die('found '.$i.' posts');


function process_post( $content ) {
	$accent_replace = array(
		// punctutation
	'/â€“/' => '—',
	'/Ã€/' => '—',
	'/â€¦/' => '…',
	'/â€˜/' => '‘',
	'/â€™/' => '’',
	'/â€œ/' => '“',
	'/â€/' => '”',
		// symbols
	'/Â¡/' => '¡',
	'/Â¢/' => '¢',
	'/Â£/' => '£',
	'/Â¤/' => '¤',
	'/Â¥/' => '¥',
	'/Â¦/' => '¦',
	'/Â§/' => '§',
	'/Â¨/' => '¨',
	'/Â©/' => '©',
	'/Âª/' => 'ª',
	'/Â«/' => '«',
	'/Â¬/' => '¬',
	'/Â®/' => '®',
	'/Â¯/' => '¯',
	'/Â°/' => '°',
	'/Â±/' => '±',
	'/Â²/' => '²',
	'/Â³/' => '³',
	'/Â´/' => '´',
	'/Âµ/' => 'µ',
	'/Â¶/' => '¶',
	'/Â·/' => '·',
	'/Â¸/' => '¸',
	'/Â¹/' => '¹',
	'/Âº/' => 'º',
	'/Â»/' => '»',
	'/Â¼/' => '¼',
	'/Â½/' => '½',
	'/Â¾/' => '¾',
	'/Â¿/' => '¿',
		// accent characters
	'/Ã/' => 'À',
	'/Ã/' => 'Á',
	'/Ã/' => 'Â',
	'/Ã/' => 'Ã',
	'/Ã/' => 'Ä',
	'/Ã/' => 'Å',
	'/Ã/' => 'Æ',
	'/Ã/' => 'Ç',
	'/Ã‡/' => 'Ç',	// possible irrengularity
	'/Ã/' => 'È',
	'/Ã/' => 'É',
	'/Ã‰/' => 'É',	// possible irrengularity
	'/Ã/' => 'Ê',
	'/Ã/' => 'Ë',
	'/Ã/' => 'Ì',
	'/Ã/' => 'Í',
	'/Ã/' => 'Î',
	'/Ã/' => 'Ï',
	'/Ã/' => 'Ð',
	'/Ã/' => 'Ñ',
	'/Ã/' => 'Ò',
	'/Ã/' => 'Ó',
	'/Ã/' => 'Ô',
	'/Ã/' => 'Õ',
	'/Ã/' => 'Ö',
	'/Ã/' => '×',
	'/Ã/' => 'Ø',
	'/Ã/' => 'Ù',
	'/Ã/' => 'Ú',
	'/Ã/' => 'Û',
	'/Ã/' => 'Ü',
	'/Ã/' => 'Ý',
	'/Ã/' => 'Þ',
	'/Ã/' => 'ß',
	'/Ã /' => 'à',
	'/Ã /' => 'à',	// possible irrengularity
	'/Ã  /' => 'à',	// possible irrengularity
	'/Ã¡/' => 'á',
	'/Ã¢/' => 'â',
	'/Ã£/' => 'ã',
	'/Ã¤/' => 'ä',
	'/Ã¥/' => 'å',
	'/Ã¦/' => 'æ',
	'/Ã§/' => 'ç',
	'/Ã¨/' => 'è',
	'/Ã©/' => 'é',
	'/Ãª/' => 'ê',
	'/Ã«/' => 'ë',
	'/Ã¬/' => 'ì',
	'/Ã­/' => 'í',
	'/Ã®/' => 'î',
	'/Ã¯/' => 'ï',
	'/Ã°/' => 'ð',
	'/Ã±/' => 'ñ',
	'/Ã²/' => 'ò',
	'/Ã³/' => 'ó',
	'/Ã´/' => 'ô',
	'/Ãµ/' => 'õ',
	'/Ã¶/' => 'ö',
	'/Ã·/' => '÷',
	'/Ã¸/' => 'ø',
	'/Ã¹/' => 'ù',
	'/Ãº/' => 'ú',
	'/Ã»/' => 'û',
	'/Ã¼/' => 'ü',
	'/Ã½/' => 'ý',
	'/Ã¾/' => 'þ',
	'/Ã¿/' => 'ÿ',
		// etc
	'/â¥/' => '♥',
	'/â™¥/' => '♥',
	// '/.Ã/' => '.',
	);
	$search = array_keys($accent_replace);
	$replace = array_values($accent_replace);
	return preg_replace( $search, $replace, $content);
}


