<!-- Header -->
<?php get_header(); ?>

<div id="body">
	<div id="content">
		<div class="content-ust">
				<?php printf( __( '"%s" için Arama Sonuçları', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?>
					</div>
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
				<div class="post-date"><?php the_time('j F Y'); ?></div>
				<div class="post-view"><?php if(function_exists('the_views')) { the_views(); } ?></div>
				<div class="post-category"><?php the_category(', ') ?></div>
				<span class="post-yorum"><?php comments_popup_link(__('Yorum Yok'), __('1 Yorum'), __('% Yorum'), '', __('Yorumlara kapalı')); ?></span>
			</div><div class="temizle"></div>
			<div class="post">
				<?php echo substr(get_the_excerpt(), 0,280); ?>[...]
			</div>
			<div class="post-share">

			</div>
			<div class="post-more">
				<a href="<?php the_permalink(); ?>">Devamını Oku</a>
			</div><div class="temizle"></div>
			
		</div>
			<?php endwhile; ?>
	<?php endif; ?>

	</div>
	
<?php get_sidebar(); ?>

	<div id="sayfalama">
		<div class="sayfalama">
			<div class="onceki">
				<span><?php previous_posts_link('Önceki Sayfa <i class="fa fa-angle-left"></i>', 0); ?></span>
			</div>
			<div class="sonraki">
				<span><?php next_posts_link('<i class="fa fa-angle-right"></i>  Sonraki Sayfa', 0 ); ?></span>
			</div>			
		</div>
	</div>

	
</div>
<div class="temizle"></div>


<div class="temizle"></div>

<?php get_footer(); ?>