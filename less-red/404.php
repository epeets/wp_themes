<?php get_header() ?>
<?php include_once('quickies.php') ?>
<div id="latest_posts">
	<img id="latest_head" src="<?php bloginfo('template_directory'); ?>/images/404_head.jpg"/>
		<ul id="post_list">
		<li>
		<img class="wp-post-image" src="<?php bloginfo('template_directory'); ?>/images/404.jpg" alt="404 Error image"/>
		<div id="post_content"  class="FourOFour">
			<h2>404</h2><!--Put this in a post-->
			<p>You've been deceived!! O_O<br/> 
			Don't worry, I'll save you! Just click on the any of the links of above 
			to get out of this mess!</p>
			</div>
	    </li>
		</ul>
	</div><!--latest_posts-->
<?php get_footer() ?>