<div class="spacer" style="clear: both;"></div>
</div><!--wrapper-->
<footer>
 <div id="main-foot">
  <ul>
   <li id="l-foot">
    <h4>Global Nav</h4>
		<ul>
		 <?php wp_list_pages('title_li='); ?>
		</ul> 
   </li>
   <li id="c-foot">
    <h4>Recent Posts</h4>
		<ul>
		 <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5 ) ); ?>
		</ul> 
   </li>
   <li id="r-foot">
    <h4>Connect with Me!</h4>
		<ul>
		 <li><a href="http://www.facebook.com/epeets" target="new"><img src="<?php bloginfo('template_directory'); ?>/images/mini-facebook.png" alt="FaceBook icon for FaceBook profile" /></a></li>
		 <li><a href="http://www.linkedin.com/pub/eshcole-peets/4/aa4/309/" target="new"><img src="<?php bloginfo('template_directory'); ?>/images/mini-linkedin.png" alt="LinkedIn icon for LinkedIn profile" /></a></li>
		 <li><a href="http://www.pinterest.com/eshcolep/web-design/" target="new"><img src="<?php bloginfo('template_directory'); ?>/images/mini-pinterest.png" alt="Pinterest icon for Pinterest profile" /></a></li>
		 <li><a href="http://www.youtube.com/epeets" target="new"><img src="<?php bloginfo('template_directory'); ?>//images/mini-youtube.png" alt="YouTube icon for YouTube profile"/></a></li>
		</ul> 
   </li>
  </ul>
 <div class="spacer"></div>
 </div>
 <div id="copy-foot">
  <p>Designed and coded by Eshcole Peets on <a href='http://www.wordpress.org/'>WordPress</a></p>
  <p>All images and video are copyright to their respective owners!</p>
</div>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/site.js"></script>
<?php wp_footer(); ?>
</body>
</html>