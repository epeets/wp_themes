<?php get_header() ?>
<div id="single_post">
  <?php if (have_posts()) : the_post(); ?>  
	<div id="post_head">
		<h2><?php the_title(); ?></h2>
	</div>
	<div id="sub_head">
	   <p id="post_tags"><?php the_tags(); ?></p>
	   <p><?php the_time('D M, n y'); ?><p>
	</div>
	   <div id="feat-img"><?php echo get_the_post_thumbnail( $id, $size, $attr ); ?></div> 
	   <?php the_content(); ?>
	<div id="single-nav">
	 <?php next_post_link('%link','>>',TRUE); ?>
	 <?php previous_post_link('%link','<<',TRUE); ?>
	</div>	
	<?php endif; ?>
	
	<?php comments_template('/comments.php'); ?>

	</div><!--single_posts-->
<?php get_footer() ?>