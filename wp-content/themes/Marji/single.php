<?php get_header(); ?>

<div id="body">
	<div id="content">

			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="content">
			<div class="post-image">
			<?php if(has_post_thumbnail()){the_post_thumbnail();}else{?><div style="display:none;"></div><?php }?>				</div>
			<div class="post-title">
				<?php the_title(); ?>
			</div>
			<div class="post-bottom">
				<div class="post-author"><?php the_author(); ?></div>
				<div class="post-date"><?php the_time('j F Y'); ?></div>
				<div class="post-view"><?php if(function_exists('the_views')) { the_views(); } ?></div>
				<div class="post-category"><?php the_category(', ') ?></div>
				<span class="post-yorum"><?php comments_popup_link(__('Yorum Yok'), __('1 Yorum'), __('% Yorum'), '', __('Yorumlara kapalı')); ?></span>
			</div><div class="temizle"></div>
			<div class="post">
				<?php the_content(); ?>
			</div>
			<div id="post-share">
				
			</div>
			
		</div>
			<?php endwhile; ?>
	<?php endif; ?>
		<div id="content">
			<div class="yorum">
				<?php comments_template('/comments.php',true); ?>
			</div>
		</div>

	</div>
	
<?php get_sidebar(); ?>
	
</div>
<div class="temizle"></div>

<!--Sayfalama-->

<div class="temizle"></div>

<?php get_footer(); ?>