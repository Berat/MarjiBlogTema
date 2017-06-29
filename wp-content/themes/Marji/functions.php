<?php //Tema admin Paneli tanımlandı

if ( STYLESHEETPATH == TEMPLATEPATH ) {

define('OF_FILEPATH', TEMPLATEPATH);

define('OF_DIRECTORY', get_bloginfo('template_directory'));

} else {

define('OF_FILEPATH', STYLESHEETPATH);

define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));

}

require_once (OF_FILEPATH . '/admin/admin-functions.php');

require_once (OF_FILEPATH . '/admin/admin-interface.php');

require_once (OF_FILEPATH . '/admin/theme-options.php');

require_once (OF_FILEPATH . '/admin/theme-functions.php');

/*--------- Yazı Görüntülenme İstatistikleri Fonksiyonu ---------*/
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Görüntülenme';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
/*--------- Yazı Görüntülenme İstatistikleri Fonksiyonu ---------*/


/* Widget Uyumu bas */

if ( function_exists('register_sidebar') )

register_sidebar(array(

'name' => __( 'Sidebar Alanı', 'bb' ),

'before_widget' => '<div class="sidebar">',

'after_widget' => '</div>',

'before_title' => '<div class="blog-ust"><span>',

'after_title' => '</span></div>',

));

/* Widget Uyumu son */
/*Öne Çıkarılan görsel*/

add_theme_support( 'post-thumbnails');

set_post_thumbnail_size( 653, 166, true );

add_image_size( 'single-post-thumbnail', 653, 166 );

/*öne çıkarılan görsel son */



/*Öcel Menüler*/



/*



 * Plugin Name: Marji- Kategori Bileşeni



 * Plugin URI: http://www.beratbozkurt.net



 * Description: Bu bileşen ile kategorileri güzel bir biçimde sunabilirsiniz.



 * Version: 1.0



 * Author: Berat Bozkurt



 * Author URI: http://www.beratbozkurt.net



 */







add_action( 'widgets_init', 'bb_kategori_widgets' );







function bb_kategori_widgets() {


    register_widget( 'bb_kategori_widget' );



}







class bb_kategori_widget extends WP_Widget {







function bb_kategori_widget() {



    



        /* Widget settings */



        $widget_ops = array( 'classname' => 'widget_kategori', 'description' => __('Bu bileşen ile kategorileri güzel bir biçimde sunabilirsiniz.', 'bb') );







        /* Create the widget */



        $this->WP_Widget( 'bb_kategori_widget', __('Marji - Kategori Bileşeni', 'bb'), $widget_ops );



    }



    



function widget( $args, $instance ) {



            



    ?>



         <!--Kategoriler Alanı-->

                

		<div class="sidebar category">

			<div class="blog-ust">

				<span><i class="fa fa-list-ul"></i>Kategoriler</span>

			</div>

			<div class="blog-alt">

				<ul class="kategori">

					<?php wp_list_cats('title_li='); ?>

				</ul>

			</div>

		</div>

                

        <?php



        echo $after_widget;



    }



    



function update( $new_instance, $old_instance ) {}







    function form( $instance ) {



    



        $instance = wp_parse_args( (array) $instance, $defaults ); ?>



        



        <p>



            Bu özel kategori bileşeni ile görünümünüze şıklık katabilirsiniz.



        </p>  

    <?php



    }



}



/*



 * Plugin Name: Marji - Reklam & Sponsorluk Bileşeni



 * Plugin URI: http://www.beratbozkurt.net



 * Description: Bu bileşen ile reklam ve sponsorunuzu güzel bir biçimde sunabilirsiniz.



 * Version: 1.0



 * Author: Berat Bozkurt



 * Author URI: http://www.beratbozkurt.net



 */







add_action( 'widgets_init', 'bb_reklam_widgets' );







function bb_reklam_widgets() {



    register_widget( 'bb_reklam_widget' );



}







class bb_reklam_widget extends WP_Widget {







function bb_reklam_widget() {



    



        /* Widget settings */



        $widget_ops = array( 'classname' => 'widget_reklam', 'description' => __('Bu bileşen ile reklam ve sponsurunuzu güzel bir biçde sunabilirsiniz.

', 'bb') );







        /* Create the widget */



        $this->WP_Widget( 'bb_reklam_widget', __('Marji - Reklam & Sponsorluk Bileşeni', 'bb'), $widget_ops );



    }



    



function widget( $args, $instance ) {



            



    ?>
		<div class="sidebar reklam">

			<div class="blog-ust">

				<span><i class="fa fa-money"></i>Reklam & Sponsorluk</span>

			</div>

			<div class="blog-alt">

				<div>				
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>



<!-- 300x250 -->



<ins class="adsbygoogle"



     style="display:inline-block;width:300px;height:250px"



     data-ad-client="ca-pub-5331942850747541"



     data-ad-slot="8143532319"></ins>



<script>



(adsbygoogle = window.adsbygoogle || []).push({});



</script>


				</div>

			</div>

		</div>

        <?php



        echo $after_widget;



    }



    



function update( $new_instance, $old_instance ) {}







    function form( $instance ) {



    



        $instance = wp_parse_args( (array) $instance, $defaults ); ?>



        



        <p>



            Bu özel reklam ve sponsorluk bileşeni ile görünümünüze şıklık katabilirsiniz. Bileşenin ayalarını tema panelinden yapabilirsiniz



        </p>

    <?php



    }



}



/*



 * Plugin Name: Marji - Popüler Yazılar Bileşeni



 * Plugin URI: http://www.beratbozkurt.net



 * Description: Bu bileşen ile popüler yazıları güzel bir biçimde sunabilirsiniz.



 * Version: 1.0



 * Author: Berat Bozkurt



 * Author URI: http://www.beratbozkurt.net



 */







add_action( 'widgets_init', 'bb_popi_widgets' );







function bb_popi_widgets() {



    register_widget( 'bb_popi_widget' );



}







class bb_popi_widget extends WP_Widget {







function bb_popi_widget() {



    



        /* Widget settings */



        $widget_ops = array( 'classname' => 'widget_popi', 'description' => __('Bu bileşen ile Popüler Yazıları güzel bir biçimde sunabilirsiniz.

', 'bb') );







        /* Create the widget */



        $this->WP_Widget( 'bb_popi_widget', __('Marji - Popüler Yazılar Bileşeni', 'bb'), $widget_ops );



    }



    



function widget( $args, $instance ) {



            



    ?>

		<div class="sidebar popi">

			<div class="blog-ust">

				<span><i class="fa fa-eye"></i>Öne Çıkanlar</span>

			</div>

			<div class="blog-alt">

				<div class="popi-post">

					<ul>

					<?php $the_query = new WP_Query("showposts=4&orderby=comment_count"); while ($the_query->have_posts()) : $the_query->the_post(); ?>

					<li>



						<div class="popi-image">

						 <a href="<?php echo get_permalink();?>" width="50" height="50"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" ><?php if(has_post_thumbnail()){the_post_thumbnail();}else{?><div style="display:none;"></div><?php }?></a>

						 </div>

						<div class="popi-meta">

							<a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                            </a>

							<span><?php the_time('j F Y'); ?></span>

						</div>

					</li><div class="temizle"></div><?php endwhile; ?><?php wp_reset_query(); ?>

					</ul>

				</div>

			</div>

		</div>

        <?php



        echo $after_widget;



    }



    



function update( $new_instance, $old_instance ) {}







    function form( $instance ) {



    



        $instance = wp_parse_args( (array) $instance, $defaults ); ?>



        



        <p>



            Bu popüler yazılar bileşeni ile görünümünüze şıklık katabilirsiniz.



        </p>

    <?php

    }

}



/*



 * Plugin Name: Marji - Yorum Bileşeni



 * Plugin URI: http://www.beratbozkurt.net



 * Description: Bu bileşen ile Yorum güzel bir biçimde sunabilirsiniz.



 * Version: 1.0



 * Author: Berat Bozkurt



 * Author URI: http://www.beratbozkurt.net



 */







add_action( 'widgets_init', 'bb_yorum_widgets' );







function bb_yorum_widgets() {



    register_widget( 'bb_yorum_widget' );



}







class bb_yorum_widget extends WP_Widget {







function bb_yorum_widget() {



    



        /* Widget settings */



        $widget_ops = array( 'classname' => 'widget_yorum', 'description' => __('Bu bileşen ile yorumlarınızı güzel bir biçimde sunabilirsiniz.', 'bb') );







        /* Create the widget */



        $this->WP_Widget( 'bb_yorum_widget', __('Marji - Yorum Bileşeni', 'bb'), $widget_ops );



    }



    



function widget( $args, $instance ) {



            



    ?>



		<div class="sidebar yorums">

			<div class="blog-ust">

				<span><i class="fa fa-comments-o"></i>Son Yorumlar</span>

			</div>

			<div class="blog-alt">

				<ul> 

				<?php $yorumlar = get_comments('number=4&status=approve'); // 5 yorum,durum : onaylı

				foreach($yorumlar as $yorum) :

				?>

					<li>

						<a href="<?php echo get_permalink($yorum->comment_post_ID ); ?>">

							<span><?php echo $yorum->comment_author; ?> Demiş ki:</span>

							<p><?php comment_excerpt( $yorum->comment_ID ); ?></p>

						</a>

					</li>

				 <?php endforeach; ?> 

				</ul>

			</div>

		</div>
	

        <?php



        echo $after_widget;



    }



    



function update( $new_instance, $old_instance ) {}







    function form( $instance ) {



    



        $instance = wp_parse_args( (array) $instance, $defaults ); ?>



        



        <p>



            Bu özel yorumarınızı bileşeni ile görünümünüze şıklık katabilirsiniz.



        </p>  

    <?php



    }



}

?>