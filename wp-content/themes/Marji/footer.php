<div id="footer">
	<div class="footer">
		<ul class="colum">
			<li class="colum1">
			<h2><a href="<?php bloginfo('url') ?>">Berat Bozkurt</a></h2>
			<p class="colum1-desc">Sitemizin tasarımı ve kodlaması <a href="http://www.beratbozkurt.net/">Berat Bozkurt</a> tarafından kendine özel yapılmıştır.</p>
			</li>
			<li class="colum2">
				<span>Bizi Takip Edin!</span>
				<p>Web sitemizi <b>sosyal medya</b> hesaplarımızdan da takip edebilirsiniz.</p>
					<div class="colum2-link">
					<a rel="nofollow" href="<?php 
					
					if(get_option('bb_facebook')) { 
					echo get_option('bb_facebook'); 
					}else { ?>#<?php } ?>
					
					"><img style="background: url(<?php bloginfo('template_url'); ?>/images/icon.png);background-position: 0 -156px; width: 30px; height: 30px;" width="30" height="30" alt="Facebook" /></a>
					<a rel="nofollow" href="<?php 
					
					if(get_option('bb_twitter')) { 
					echo get_option('bb_twitter'); 
					}else { ?>#<?php } ?>
					
					"><img  style="background: url(<?php bloginfo('template_url'); ?>/images/icon.png);background-position: 0 -476px; width: 30px; height: 30px;" width="30" height="30" alt="Twitter" /></a>
					<a rel="nofollow" href="<?php 
					
					if(get_option('bb_google')) { 
					echo get_option('bb_google'); 
					}else { ?>#<?php } ?>
					
					"><img  style="background: url(<?php bloginfo('template_url'); ?>/images/icon.png);background-position: 0 -236px; width: 30px; height: 30px;" width="30" height="30" alt="Google Plus" /></a>
					<a rel="nofollow" href="<?php 
					
					if(get_option('bb_linkedin')) { 
					echo get_option('bb_linkedin'); 
					}else { ?>#<?php } ?>
					
					"><img  style="background: url(<?php bloginfo('template_url'); ?>/images/icon.png);background-position: 0 -316px; width: 30px; height: 30px;" width="30" height="30" alt="Linkedin" /></a>
					<a rel="nofollow" href="<?php 
					
					if(get_option('bb_behance')) { 
					echo get_option('bb_behance'); 
					}else { ?>#<?php } ?>
					
					"><img  style="background: url(<?php bloginfo('template_url'); ?>/images/icon.png);background-position: 0 -76px; width: 30px; height: 30px;" width="30" height="30" alt="Behance" /></a>
					<a rel="nofollow" href="<?php 
					
					if(get_option('bb_pinterest')) { 
					echo get_option('bb_pinterest'); 
					}else { ?>#<?php } ?>
					
					"><img  style="background: url(<?php bloginfo('template_url'); ?>/images/icon.png);background-position: 0 -396px; width: 30px; height: 30px;" width="30" height="30" alt="Pinterest" /></a>
					</div>
			</li>
			<li class="colum3">
				<span>E-Posta Aboneliği</span>
				<p>Sitemizde yayınlan yazılardan ilk <b>sen</b> haberdar ol! </p>
				<div class="colum3-form">
				<form action='http://feedburner.google.com/fb/a/mailverify' method='post' onsubmit='window.open(&apos;http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_option('bb_feedburner'); ?>&apos;, &apos;popupwindow&apos;, &apos;scrollbars=yes,width=550,height=520&apos;);return true' target='popupwindow'>
					<input type="text" name="e" class="form-text" placeholder="e-posta adresinizi yazın" />
					<input type="submit" class="form-button" value="Abone Ol"/>
				</form>
				</div>
				
			</li>
		</ul>
		<div class="temizle"></div>
	</div>
			<div id="footer-en">
			<div class="footer-en">
				<ul>
					<li>Buraya footer link ekleyebilirsiniz.<a href="http://www.beratbozkurt.com/" target="_blank">Berat Bozkurt</a></li>
				</ul>
			</div>
		</div>

	<div class="temizle"></div>
</div>
<?php wp_footer(); ?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/responsive.js"></script>
</body>
</html>