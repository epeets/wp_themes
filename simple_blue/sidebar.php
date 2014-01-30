
<div id="right">
 <h2>Recent Posts</h2>
  <ul>
   <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html') ); ?>
  </ul>
 <h2>Archive</h2>
  <ul>
   <?php wp_get_archives() ?>
  </ul>
  <h2>Contact Me</h2>
 <?php get_template_part('contactform'); ?>
</div>
