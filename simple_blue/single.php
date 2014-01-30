<?php get_header(); ?>
<?php include_once("nav.php") ?>
<div id="center">
 <div id="single-post">
  <?php if (have_posts()) : the_post(); ?>  
   <div id="each_header">
       <h2><?php the_title(); ?><h4><?php the_date() ?></h4></h2>
	   </div>
	   <?php echo get_the_post_thumbnail( $id, $size, $attr ); ?> 
	   <?php the_content(); ?> 
	<div id="single-nav">
	 <?php next_post_link('%link','Next Blog Post',TRUE); ?>
	 <?php previous_post_link('%link','Previous Blog Post',TRUE); ?>
	</div>	
	<?php endif; ?>
	
	<?php comments_template( 'comments.php', true ); ?>

 </div><!--single-post-->
</div><!--center-->
 <?php get_sidebar(); ?>
<?php get_footer(); ?>