<?php
function new_excerpt_more($more) {
       global $post;
	return '<a class="read-more" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support( 'post-thumbnails' );

add_shortcode('wpbsearch', 'get_search_form');

function load_custom_search_template(){
    if(isset($_REQUEST['custom_search'])){
        require('searchpage.php');
        die();
    }
}
add_action('init','load_custom_search_template');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );


?>