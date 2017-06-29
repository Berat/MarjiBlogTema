	<div id="sidebar">
		<div class="sidebar search">
			<form action="<?php bloginfo('url'); ?>" method="get">
				<input type="text" name="s" class="search-text" placeholder="Bir şeyler ara koçum"/>
				<input type="submit" class="search-button" value/>
			</form>	
		</div>	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

		<?php endif; ?>		

		
	</div>