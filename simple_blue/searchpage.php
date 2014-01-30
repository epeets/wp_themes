<?php
/*
Template Name: Search Page
*/
get_header(); ?>
<?php include_once("nav.php") ?>

	<div id="center">
		<div id="search">
		<p>Looking for a particular post?</p>
		<?php get_search_form(); ?>
		</div>
	</div><!-- center -->
<?php get_footer(); ?>