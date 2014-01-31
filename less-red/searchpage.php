<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>
<?php
/*
Template Name: Search Page
*/
 get_header()?>
<?php include_once('quickies.php') ?>
<div id="latest_posts">
		<ul id="post_list">
		<img src="<?php bloginfo('template_directory'); ?>/images/latest_post.jpg"/>
   <?php
	$args = array('numberposts'=> 4, 'tag__not_in' => array('11'), 'category' => '3',);
	$getposts = get_posts( $args );	
	foreach ( $getposts as $post ) : setup_postdata( $post ); global $more;
	$more = 0; ?>
		<li>
		<?php echo get_the_post_thumbnail( $id, $size, $attr ); ?> 
		<div id="post_content">
			<div id="each_header">
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</div>
			<p id="post_tags"><?php the_tags(); ?></p>
			<h4><?php the_time('D M, n y'); ?></h4>
	   <?php the_content('Read more...'); ?>
			</div>
	    </li>
	<?php endforeach; wp_reset_postdata(); ?>
		</ul>

	</div><!--latest_posts-->
<?php get_footer() ?>