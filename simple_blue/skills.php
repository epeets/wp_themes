<?php get_header(); ?>
<?php include_once('nav.php') ?>
<div id="center">
 <div id="skills">
	<?php query_posts('tag=skills'); ?>	
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  <div id="each_header">
       <h2><?php the_title(); ?></h2>
	   </div>
	   <?php echo get_the_post_thumbnail( $id, $size, $attr ); ?> 
	   <?php the_content(); ?> 
	<?php endwhile;endif; ?>
 </div>
</div><!--center-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>