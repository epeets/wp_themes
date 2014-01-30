<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>
<?php
/*
/**
 * The template for displaying Search Results pages
 */
get_header(); ?>
<?php include_once("nav.php") ?>

<div id="center">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("s=$s&paged=$paged&cat=2");
?>
<?php if ( have_posts() ) : ?>
 <div id="eachpost">
	<ul>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php global $more; $more = 0;?>
	  <li>
	  <div id="each_header">
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a><h4><?php the_date(); ?></h4></h2>
	   </div>
	   <?php echo get_the_post_thumbnail( $id, $size, $attr ); ?> 
	   <?php the_excerpt(); ?>
	  </li>
	<?php endwhile; ?>
	<?php $args=array('prev_text' =>__('<< Previous'),'next_text' => __('Next >>'),); ?>
	<?php echo paginate_links( $args ); ?>
 </div>
 <?php else: ?>
 
	<p id="nothing">Sorry, no posts matching that term!</p> 
<?php endif; ?>
</div><!--center-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>