<?php get_header(); ?>

<div id="body">
	<div id="content">

			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			
			<div class="content">
			<div class="post-image">
<a href="<?php echo get_permalink();?>" width="653" height="166"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" ><?php if(has_post_thumbnail()){the_post_thumbnail();}else{?><div style="display:none;"></div><?php }?></a>				</div>
			<div class="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</div>
			<div class="post-bottom">
				<div class="post-author"><?php the_author(); ?></div>
				<span class="post-yorum"><?php comments_popup_link(__('Yorum Yok'), __('1 Yorum'), __('% Yorum'), '', __('Yorumlara kapalý')); ?></span>
			</div><div class="temizle"></div>
			<div class="post">
				<?php the_content(); ?>
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



<div class="temizle"></div>

<?php get_footer(); ?>