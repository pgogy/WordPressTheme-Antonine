<div id="comments" class="comments-area">
	<?php 
		$post = get_query_var('post');
		$comments = get_comments(array("post_id" => $post->ID));
	?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'antonine' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
					)
					,$comments
				);
			?>
		</ol><!-- .comment-list -->
	<?PHP
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'antonine' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</div><!-- .comments-area -->