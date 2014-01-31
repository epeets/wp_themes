<?php get_header() ?>
<?php include_once('quickies.php') ?>
<div id="latest_posts">
	<img id="latest_head" src="<?php bloginfo('template_directory'); ?>/images/latest_post.jpg"/>
		<ul id="post_list">
   <?php
	$args = array('numberposts'=> 4, 'tag__not_in' => array('11'), 'category' => '3',);
	$getposts = get_posts( $args );	
	foreach ( $getposts as $post ) : setup_postdata( $post ); global $more;
	$more = 0; ?>
		<li>
		<div id="post_img"><?php echo get_the_post_thumbnail( $id, $size, $attr ); ?></div> 
		<div id="post_content">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div id="tag_date">
			<p><?php the_tags(); ?></p>
			<h4><?php the_time('D M, n y'); ?></h4>
			</div>
	   <?php the_content('Read more...'); ?>
			</div>
	    </li>
	<?php endforeach; wp_reset_postdata(); ?>
		</ul>

	</div><!--latest_posts-->
<?php get_footer() ?>