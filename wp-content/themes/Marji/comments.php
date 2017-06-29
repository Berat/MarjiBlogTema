<?php if ( post_password_required() ) { return; } ?>

<section id="comments" class="themeform">
	
	<?php if ( have_comments() ) : global $wp_query; ?>
	
		<h3 class="heading"><?php comments_number( __( 'Bu yazıya yorum yapılmamış. İlk olmak iyidir, ilk sen yorum atabilirsin istersen ?', 'hueman' ), __( 'Bu yazıya 1 yorum yapılmış', 'hueman' ), __( 'Bu yazıya % yorum yapılmış', 'hueman' ) ); ?></h3>

		<?php if ( ! empty( $comments_by_type['comment'] ) ) { ?>
		<div id="commentlist-container" class="comment-tab">
			
			<ol class="commentlist">
				<?php wp_list_comments( 'avatar_size=96&type=comment' ); ?>	
			</ol><!--/.commentlist-->
			
			<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
			<nav class="comments-nav group">
				<div class="nav-previous"><?php previous_comments_link(); ?></div>
				<div class="nav-next"><?php next_comments_link(); ?></div>
			</nav><!--/.comments-nav-->
			<?php endif; ?>
			
		</div>	
		<?php } ?>
		

	<?php else: // if there are no comments yet ?>

		<?php if (comments_open()) : ?>
			<!-- comments open, no comments -->
		<?php else : ?>
			<!-- comments closed, no comments -->
		<?php endif; ?>
	
	<?php endif; ?>
	
	<?php if ( comments_open() ) { comment_form(); } ?>

</section><!--/#comments-->