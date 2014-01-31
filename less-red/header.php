<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8"/>
<META NAME="description" CONTENT="Official site of Eshcole Peets">
<META NAME="copyright" CONTENT="(c) 2013 Eshcole.com">
<META NAME="Title" CONTENT="Eshcole Peets Portfolio...Blog....Life">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.less" />
<title><?php wp_title() ?></title>
<?php wp_head(); ?>
</head>

<body>
<div id="page">
	<div id="header">
		<div id="f_content">
			<div id="top-logo"> 
			<a href="<?php bloginfo('wpurl') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/top-logo.png" alt="Site logo, home button, and also creators initials" /></a>
			</div>
			<nav>
				<a id="mobile_m" href="#">Menu</a>
				<ul class="menu">
					<?php wp_list_pages('title_li='); ?>
					<li  id="s_drop"><p>Connect</p>
						<div>
							<ul>
								<li><a href="#FSContact1" id="contact"><p>Email</p><img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="Email icon. Click to be sent to contact form"/></a></li>
								<li><a href="http://www.facebook.com/epeets"><p>FaceBook</p><img src="<?php bloginfo('template_directory'); ?>/images/Facebook.png" alt="FaceBook icon"/></a></li>
								<li><a href="http://www.linkedin.com/epeets"><p>LinkedIn</p><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="LinkedIn icon"/></a></li>
								<li><a href="http://www.pinterest.com/eshcolep/web-design/"><p>Pinterest</p><img src="<?php bloginfo('template_directory'); ?>/images/pinterest.png" alt="Pinterest icon"/></a></li>
								<li><a href="http://www.youtube.com/epeets"><p>YouTube</p><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="YouTube icon"/></a></li>
								<li><a href="http://twitter.com/Eshcolecom"><p>Twitter</p><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter icon" /></a></li>
							</ul>
						</div>
					</li>
				</ul> 
			</nav>
			<div id="search">
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
				<form role="search" method="get" id="searchform" class="searchform" action="http://eshcole.com/">
					<div>
						<input type="text" placeholder="site search" value="" name="s" id="s" />
						<input type="submit" id="searchsubmit" value=""/>
					</div>
				</form>	
			</div>
		</div>
	</div>
		
	<div id="wrapper">
		<div id="intro">
			<img id="intro-img" src="<?php bloginfo('template_directory'); ?>/images/big-ep.png" alt="Big site logo also creators initials " />
			<img src="<?php bloginfo('template_directory'); ?>/images/site-about.png" alt="Graphic that says anime, computers, and web design describing what this site is about"/>
		</div><!--intro-->