<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "bb";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');

$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name; }
$categories_tmp = array_unshift($of_categories, "Kategori seçiniz:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,kategori_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Sayfa seçiniz:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

// Number of featured posts to display
$featured_options_select = array("2","4","6","8","10","12"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$thumbsekil= array("Solda","Şerit");
// Set the Options Array
$options = array();

$options[] = array( "name" => "Genel Ayarları",
                    "type" => "heading");
					
$options[] = array( "name" => "Header Kısmandaki Göülecek Söz",
					"desc" => "Header kısmında görülecek olan sözü buraya yazınız.. ",
					"id" => $shortname."_soz",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Favicon URL",
					"desc" => "Kullanmak istediğiniz faviconun linkini girin.Boş kalırsa temanın kendi faviconu kullanılacaktır.",
					"id" => $shortname."_favicon",
					"std" => "",
					"type" => "text");		

$options[] = array( "name" => "Site Başlığı",
					"desc" => "Siteniz' in başlığını buraya girin. ",
					"id" => $shortname."_tit",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => "Meta Keywords",
					"desc" => "Site etiketlerini girin.SEO için önemlidir.(En fazla 6 tane olmalıdır.Araya virgül koyarak girin.)",
					"id" => $shortname."_kw",
					"std" => "",
					"type" => "text");
	
$options[] = array( "name" => "Meta Description",
					"desc" => "Site açıklamasını girin.SEO için önemlidir.(En fazla 70 karakter olmalıdır.)",
					"id" => $shortname."_ds",
					"std" => "",
					"type" => "textarea");

$options[] = array( "name" => "Google Yazarlık Doğrula",
					"desc" => "Google yazarlık doğrulaması yaparak arama sonuçlarında resimli olarak çıkabilirsiniz.",
					"id" => $shortname."_author",
					"std" => "https://plus.google.com/114788612613094177837",
					"type" => "text");

$options[] = array( "name" => "Sosyal Medya",
                    "type" => "heading");

$options[] = array( "name" => "Facebook URL",
					"desc" => "Facebook sayfa URL ya da porfil URL adresinizi girerek takipçileriniz size ulaşabilirler.",
					"id" => $shortname."_facebook",
					"std" => "https://www.facebook.com/lMarjinal",
					"type" => "text");		

$options[] = array( "name" => "Twitter URL",
					"desc" => "Twitter sayfa URL ya da porfil URL adresinizi girerek takipçileriniz size ulaşabilirler.",
					"id" => $shortname."_twitter",
					"std" => "https://www.twitter.com/lMarjinal",
					"type" => "text");		

$options[] = array( "name" => "Google Plus URL",
					"desc" => "Google Plus sayfa URL ya da porfil URL adresinizi girerek takipçileriniz size ulaşabilirler.",
					"id" => $shortname."_google",
					"std" => "https://plus.google.com/114788612613094177837",
					"type" => "text");		

$options[] = array( "name" => "Linkedin URL",
					"desc" => "Linkedin URL adresinizi buraya girebilirsiniz",
					"id" => $shortname."_linkedin",
					"std" => "http://feeds.feedburner.com/beratbozkurt/berat",
					"type" => "text");		

$options[] = array( "name" => "Behance URL",
					"desc" => "Behance URL adresinizi buraya girebilirsiniz",
					"id" => $shortname."_behance",
					"std" => "http://feeds.feedburner.com/beratbozkurt/berat",
					"type" => "text");		

$options[] = array( "name" => "Pinterest URL",
					"desc" => "Pinterest URL adresinizi buraya girebilirsiniz",
					"id" => $shortname."_pinterest",
					"std" => "http://feeds.feedburner.com/beratbozkurt/berat",
					"type" => "text");	

$options[] = array( "name" => "Feed Burner K adi",
					"desc" => "Feed Burner kullanıcı adınızı buraya girebilirsiniz",
					"id" => $shortname."_feedburner",
					"std" => "http://feeds.feedburner.com/beratbozkurt/berat",
					"type" => "text");	


$options[] = array( "name" => "Reklam Ayarları",
                    "type" => "heading");

$options[] = array( "name" => "Reklam URL",
					"desc" => "Reklam URL adresini buraya yazınızı..",
					"id" => $shortname."_reklam-url",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Reklam",
					"desc" => "Görülecek olan resim",
					"id" => $shortname."_reklam",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Reklam ALT",
					"desc" => "Görülecek olan resim alt etiketi",
					"id" => $shortname."_reklam-alt",
					"std" => "",
					"type" => "text");


update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>