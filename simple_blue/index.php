<?php get_header(); ?>
<?php include_once('nav.php'); ?>
<div id="center">

 <div id="front">
  <div id="intro">
	<?php query_posts('tag=welcome'); ?>	
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
	 <?php echo get_the_post_thumbnail( $id, $size, $attr ); ?> 
	 <?php the_content(); ?>
	  <?php endwhile; endif; ?>
  </div>
  <h3>Latest Posts</h3>
	<ul id="latest_post">
   <?php
	$args = array('posts_per_page'=> 4, 'tag__not_in' => array('11'), 'category' => '3',);
	$getposts = get_posts( $args );
	foreach ( $getposts as $post ) : setup_postdata( $post ); ?>
	  <li>
	  <div id="each_header">
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	   </div>
	   <?php echo get_the_post_thumbnail( $id, $size, $attr ); ?> 
	   <?php the_content('Read more...'); ?>
		<h4><?php the_time('D M n y'); ?></h4>
	  </li>
	<?php endforeach; wp_reset_postdata(); ?>
	</ul>
	<?php
	global $wp_query;
	$total_results = $wp_query->found_posts;
	?>
 </div>
 
</div><!--center-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>