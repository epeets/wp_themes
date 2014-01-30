<?php get_header(); ?>
<?php include_once('quickies.php'); ?>
<div id="latest_posts">
 <div id="archive">
	<ul>
	 
	<?php while (have_posts()) { the_post(); ?>
	  <li>
	  <div id="each_header">
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a><h4><?php the_date(); ?></h4></h2>
	   </div>
	  </li>
	   <?php } $wp_query = $temp_query; ?>
	</ul>
	
	<ul>
	 <li><?php next_posts_link( '&larr; Older posts' ); ?></li>
	 <li><?php previous_posts_link( 'Newer posts &rarr;' ); ?></li>
	</ul>
 </div>
 
</div><!--latest_posts-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
