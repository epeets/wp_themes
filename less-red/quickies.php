
	<div id="quickies">
		<ul>
			<li>
				<div id="archive">
					<img src="<?php bloginfo('template_directory'); ?>/images/archive_head.jpg" alt="Archive section header image" />
					<ul>
						<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 12, 'format' => 'html') ); ?>
					</ul>
				</div>
			</li>
			<li>
				<div id="popular">
					<img src="<?php bloginfo('template_directory'); ?>/images/popular_head.jpg" alt="Popular posts section header image" />
					<?php $tag_set = array('smallest'=> 18, 'largest'=> 36,'unit'=> 'px', 'number'=> 20,); ?>
					<?php wp_tag_cloud( $tag_set ); ?>
				</div>
			</li>
			<li>
				<div id="recent">
					<img src="<?php bloginfo('template_directory'); ?>/images/recent_head.jpg" />
					<ul>
						<?php
						$args = array('posts_per_page'=> 1, 'tag__not_in' => array('11'), 'category' => '11',);
						$getposts = get_posts( $args );	
						foreach ( $getposts as $post ) : setup_postdata( $post ); global $more;
						$more = 0; ?>
						<li>
							<?php echo get_the_post_thumbnail( $id, $size, $attr ); ?> 
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
					<a href="#"><p  class="hireme" >Hire Me!</p></a>
				</div>
			</li>
		</ul>
	</div>