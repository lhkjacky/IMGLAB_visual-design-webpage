<?php
/**
 * Enqueue script and styles for child theme
 */
function woodmart_child_enqueue_styles() {
    wp_enqueue_style( 
        'child-style', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( 'woodmart-style' ), 
        '2.0.4'
    );
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );

/**
 * Enqueue Font Awesome globally (replaces per-post <link> tags)
 */
function whateverrun_enqueue_fontawesome() {
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
		array(),
		'6.5.2'
	);
}
add_action( 'wp_enqueue_scripts', 'whateverrun_enqueue_fontawesome' );

/**
// Adding a copyright text under WordPress blogs or pages
function text_under_blog($content) {
	if(!is_feed() &!is_home()) {
		$content .= '<p></p><p>Copyright &copy; '.date('Y').'&nbsp;WhateverRun.com</p>';
	} 
	return $content; } 
add_filter('the_content', 'text_under_blog');
*/

// Adds the featured image to the post that is published to Discourse.
function discourse_publish_format( $input, $post_id ) {
    $post = get_post( $post_id );
    ob_start();
    $featured_image = get_the_post_thumbnail( $post );
    if ( ! empty( $featured_image ) ) {
        echo $featured_image;
    }
	?>
    {excerpt}
	<?php
    $output = ob_get_clean();
    return $output;
}
add_filter( 'discourse_publish_format_html', 'discourse_publish_format', 10, 2 );
