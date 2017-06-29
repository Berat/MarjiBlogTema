<!DOCTYPE HTML>
<html lang="tr-TR">
<head>
	<meta charset="UTF-8">		<meta name="viewport" content="width=device-width, initial-scale=1.0" /><!--Responsive-->
	<title>
		<?php 
			if(get_option('bb_tit')) { 
			echo get_option('bb_tit'); 
			}else { 	
			echo bloginfo('name');
		} ?>
	</title>
	<meta name="keywords" content="<?php echo get_option('bb_kw'); ?>" />
	<meta name="description" content="<?php echo get_option('bb_ds'); ?>" />
	<meta name="robots" content="index, follow" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="author" href="<?php echo get_option('bb_author') ?>"/>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="shortcut icon" href="<?php echo get_option('bb_favicon'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C300%2C300italic&#038;ver=3.9.1' type='text/css' media='all' />	

<?php wp_head(); ?>
</head>
<body>

<header id="header">
	<div class="header">
		<div class="ust">
			<div class="logo">
			<h1><a href="<?php bloginfo('url'); ?>">
				<?php echo bloginfo('name'); ?>
			</a></h1>
			</div>
			
			<div class="acikla">
			<h2>
				<?php echo bloginfo('description'); ?>
			</h2>
			</div>
			
			<div class="soz">
			<p>
			<script language="JavaScript1.1" type="text/javascript">  
<!-- 
quotes = new Array(11); 
quotes[0] = "Eline, diline, beline sahip ol ki, kötülükler senden uzak dursun."; 
quotes[1] = "Musibet zekayı eğitir."; 
quotes[2] = "Kişinin sözü, amelinden çok olursa aklı noksandır."; 
quotes[3] = "Ne kadar okursan oku, bilgine yakışır şekilde davranmazsan cahilsin demektir.(Sadi)"; 
quotes[4] = "Tek dostum kitaplarım, tek düşmanım cahil dostlarım. (Diderot)"; 
quotes[5] = "Felaketler, ayak seslerini duymayanlara geliyorum demez."; 
quotes[6] = "Harekette birlik olmazsa, fikirde bilgi faydasızdır. (Muhammed ikbal)"; 
quotes[7] = "Zalime, ancak, onu zulümden alıkoymak için yardım et."; 
quotes[8] = "Yarın, yorgun kimselerin değil, rahatlarına kıyabilenlerindir. (N. Atac)"; 
quotes[9] = "Kuvvetine güvenenler, korkutma küçüklüğünde bulunmazlar. (Abdulhamid Han)"; 
quotes[10] = "Tarihte her hareket hep bir kişinin ayağa kalkmasıyla başlar."; 
quotes[11] = "Kesilmis koyuna, derisini yüzülmesi elem vermez."; 
quotes[12] = "Kendini hak ile meşgul etmezsen, batıl seni işgal eder. (İmam Şafi)"; 
quotes[13] = "Herşeyi bilmek çok kötüdür."; 
quotes[14] = "Allah'a itaat etmekle, O'na şükretmiş olursunuz."; 
quotes[15] = "Akıllı olan Allah'tan korkar."; 
quotes[16] = "İlimsiz ibadette, tefekkürsüz Kur'an tilavetinde hayır yoktur. (Hz. Ali r.a.)"; 
quotes[17] = "Allah'tan korkmayandan korkulur."; 
quotes[18] = "El ağazına bakan karısını tez boşar."; 
quotes[19] = "Gercek dost, arkadaşının kusurunu görünce onu uyarır. Fakat bu kusurları başkalarına açıklamaz. (İmam Şafi)"; 
quotes[20] = "Şahsi gayret yuvayi, toplu gayret vatani ayakta tutar. (A. Aslan)"; 
quotes[21] = "Küçük insanların gururu büyük olur."; 
quotes[22] = "Kitap aklın ilacıdır."; 
quotes[23] = "Dost acı söyler."; 
quotes[24] = "Kardeş kardeşi atmış, yar başında tutmuş."; 
quotes[25] = "Islanmışın yağmurdan korkusu olmaz."; 
quotes[26] = "Dost ağlatır, düşman güldürür."; 
quotes[27] = "Ecel geldi cıhane, başağrısı bahane."; 
quotes[28] = "İslamiyeti yaşayan kimse, hem şahsi, hem ailevi ve hem de sosyal hayatında ibadet ediyor demektir. (Hekimoğlu İsmail)"; 
quotes[29] = "Gençliğine güvenme, ölen hep ihtiyarmı ?"; 
quotes[30] = "İnsan ne kadar yükselirse, gönlü o kadar alçalmalıdır."; 
quotes[31] = "Tecrübe bilgiyi artırır. Her şeye inanmak ise insanı yanıltır."; 
quotes[32] = "Küçük taş, baş yarar."; 
quotes[33] = "Haramdan uzak dur, ama mahremini gözet."; 
quotes[34] = "Nimetlerin en iyisi çalışarak kazanılan, arkadaşları en iyisi de Allah'ı hatırlatandır."; 
quotes[35] = "Bir kimseyi tanımak istiyorsan, arkadaşına bak. (Mevlana)"; 
quotes[36] = "El öpmekle dudak aşınmaz."; 
quotes[37] = "Ahmaklık, hatada israr etmektedir. (Abdulhakim Arvası)"; 
quotes[38] = "Nasihat tutmayanı musibet tutar."; 
quotes[39] = "Herkesi kendi gibi sanan aldanır."; 
quotes[40] = "Yerinde söz söylemesini bilen, özür dilemek zorunda kalmaz. (Fatih Sultan Mehmed)"; 
quotes[41] = "Özü doğru olanın sözü de doğru olur. (Hz. Ali (r.a.))"; 
quotes[42] = "Küçük bir delik, büyük bir gemiyi batırır."; 
quotes[43] = "(Siz'de güzel bir söz biliyorsanız bana yazın)"; 
quotes[44] = "Doğru sarsılır, ama yıkılmaz."; 
quotes[45] = "Adaletin bulunmadığı bir ülkede herkez suçludur."; 
quotes[46] = "Zeka, kafanın içindeki altın madenidir."; 
quotes[47] = "İteatsizlik şerlerin en kötüsüdür."; 
quotes[48] = "İnsan idare etme sanatına siyaset denir."; 
quotes[49] = "Kimsenin zenginliği seni değerlendirmez."; 
quotes[50] = "Fakir kişi, cimrilik yapan kişidir."; 
quotes[51] = "Zengin kişi iktisadı bilen kişidir."; 
quotes[52] = "Zengin, kalbi zengin olan kişidir."; 
quotes[53] = "Çok dinlememiz ve az konuşmamız için, iki kulağımız ve bir dilimiz vardır."; 
quotes[54] = "Mümin, sonu cennet oluncaya kadar, hiçbir hayırdan doymaz, geri kalmaz."; 
quotes[55] = "Dağa çıkan düz aramaz."; 
quotes[56] = "Adamın aynası arkadaşıdır."; 
quotes[57] = "Zihin arı, kitap çiçektir."; 
quotes[58] = "Danışan dağı aşmış, danışmayan düz yolda şaşmış."; 
quotes[59] = "Korkak dostun olacağına, cesur dostun olsun."; 
quotes[60] = "Dostlarını terkeden terkedilir."; 
quotes[61] = "Özlü konuşmanın yolu, yersiz sözleri bırakmaktır."; 
quotes[62] = "Destursuz bağa giren, hesapsız dayak yer."; 
quotes[63] = "İnsan, düşeceği yere çıkmamalıdır."; 
quotes[64] = "Kitap, donuk hayata renk katar."; 
quotes[65] = "İyiliğe iyilik her kişinin karı, kötülüğe iyilik ER kişinin karı."; 
quotes[66] = "Gözü haramdan korumak ne güzel şehvet perdesidir. (Hz. Osman)"; 
quotes[67] = "Dilencinin keyfi işlek caddede gelir."; 
quotes[68] = "Yanliş, iktidarı artmakla hiçbir zaman doğru hale gelmez."; 
quotes[69] = "İnsanlara ateşe dost olduğun gibi dost ol. Ondan faydalan. Fakat seni yakmasından sakın."; 
quotes[70] = "Kovandan çikmayan arı bal yapmaz."; 
quotes[71] = "Dünyada zulme uğrayanlar, kiyamette mutlaka kurtuluşa ulaşacaklardır. (Hz.Muhammed sav.)"; 
quotes[72] = "Ancak içinden aydınlanan, dışına ışık verir. (İsmet Özel)"; 
quotes[73] = "Adam adama yük değil, can gövdeye mülk değil."; 
quotes[74] = "Bize değer kazandıran şeyler, yaptığımız işlerdir."; 
quotes[75] = "Bir münafık, bir orduyu bozar."; 
quotes[76] = "Acıyan çok ama ekmek veren az."; 
quotes[77] = "İnsanların şahsiyetlerini, iktidarlı zamanlarında ölçmelidir."; 
quotes[78] = "İnsanın sözü hikmet, bakışı ibret ve susması ders olmalıdır."; 
quotes[79] = "Alimler İslamın bayraktarı, cennetin sakinleridir."; 
quotes[80] = "Her deliğe elini sokma, ya yılan çıkar ya ciyan."; 
quotes[81] = "Tarih tekerrürden ibarettir."; 
quotes[82] = "Sözlerin en güzeli vahiydir."; 
quotes[83] = "Birlik olmayan yerde, dirlik olmaz."; 
quotes[84] = "Sükut kavgayı keser, fitneyi önler."; 
quotes[85] = "İffet, güzelliğin zekatıdır."; 
quotes[86] = "Hiç bir zafere çiçekli yollardan gidilmez."; 
quotes[87] = "Fitne aslında uykudadır, Allah (cc) onu uyandıranlara lanet eder. (Hz.Muhammed sav.)"; 
quotes[88] = "Bedava sirke, baldan tatlıdır."; 
quotes[89] = "Kalbin gıdası iman, aklın gıdası faydalı ilimdir."; 
quotes[90] = "Gözyaşı, kalp te olan ateşe delildir."; 
quotes[91] = "Merhamet etmeyene merhamet edilmez."; 
quotes[92] = "Alışmış, kudurmuştan beterdir."; 
quotes[93] = "Akıllı insan tüm yumurtalarını aynı sepete koymaz."; 
quotes[94] = "Buldum bilemedim, bildim bulamadım."; 
quotes[95] = "Ölümü hatırlamak, hırs ateşini söndürür."; 
quotes[96] = "Ne mutlu! Aklı işine bekci, kendi sözünü kendi tenkitci olana."; 
quotes[97] = "Cahil, yaşlı dahi olsa küçüktür, Alim, küçük de olsa büyüktür."; 
quotes[98] = "Gençlikte vaktini geçiren sefa ile, ihtiyarlikta ömrünü geçirir cefa ile."; 
quotes[99] = "Hicretin en faziletlisi, Allah'ın sevmediği şeyleri terk etmektir. (Hz.Muhammed sav)"; 
//calculate a random index 
index = Math.floor(Math.random() * quotes.length); 
//display the quotation 
//calculate a random index 
index = Math.floor(Math.random() * quotes.length); 
//display the quotation 
document.write("  " + "\"" + quotes[index] + "\"\n ")  
// --> 
</script>
			</p>
			</div>
		</div>
	
	</div>

</header>
<div class="temizle"></div>
	<div id="menu">	<div class="mobil">Menü</div>
	<div class="menu">
		<ul>
		<li><a href="<?php bloginfo('url'); ?>">Anasayfa</a></li>
		<?php wp_list_pages('title_li='); ?>
		</ul>
	</div>
</div><div class="temizle"></div>