
	<?php // You can start editing here -- including this comment! ?>
<div id="comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'twentytwelve' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'twentytwelve_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'twentytwelve' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentytwelve' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'twentytwelve' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
	
<?php $comment_args = array( 
	'comment_notes_before' => '',
	'label_submit' => '',
	'title_reply'=>'Comment!',
	'fields' => apply_filters( 'comment_form_default_fields', array(
	'author' => '<p class="comment-form-author">'. ( $req ? '' : '' ) .
    '<input id="author" placeholder="Name(required)" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   
    'email'  => '<p class="comment-form-email">'.( $req ? '' : '' ) .
    '<input id="email" placeholder="Email(required)" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>')),
    'comment_field' => '<p>' .'<textarea placeholder="Comment:" id="comment" name="comment" cols="30" rows="8" aria-required="true"></textarea>' .'</p>',
    'comment_notes_after' => '',
);

	comment_form($comment_args); ?>
	
</div>
	