<div id="contactme">
<?php query_posts('tag=contactme'); ?>
   <?php if (have_posts()) : the_post(); ?>  
	   <?php the_content(); ?> 	
	<?php endif; ?>
</div>