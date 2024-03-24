<?php
// Поиск дочерних страниц
global $child_li;
if (isset($post->ID)){
	$child_li = wp_list_pages(
		array(
			'title_li' => '',
			'child_of' => $post->ID,
			'depth' => 1,
			'echo' => 0
		)
	);
}
// LANG
if(isset($_SERVER["REQUEST_URI"])){
	$url = explode('/', $_SERVER["REQUEST_URI"]);
}
if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){
	$url_lang = $url[1];
}else{
	$url_lang = $url[2];
}
// Изменение фона для меню
switch ($url_lang) {
	case 'about': $link_menu2 = true;break;
	case 'catalog': $link_menu3 = true;break;
	case 'plants': $link_menu4 = true;break;
	case 'qualitycontrol': $link_menu5 = true;break;
	case 'career': $link_menu6 = true;break;
	case 'contacts': $link_menu7 = true;break;
	case 'https://apg-vostochnaya-evro.tiu.ru/': $link_menu8 = true;break;

	default: $link_menu1 = true;break;
}
?><!DOCTYPE html>
<html lang="<?php echo (!isset($_COOKIE["lang"]) || $_COOKIE["lang"]!='eng' ? 'ru' : 'eng'); ?>">
<head>
	<meta charset="UTF-8"/>
	<title><?php echo (!isset($GLOBALS['my_title']) ? wp_get_document_title() : $GLOBALS['my_title'].' &#8212; '.get_bloginfo('name')); ?></title>
	<meta name="viewport" content="width=1200" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<?php wp_head(); ?>
	<!-- WP_Header -->
	<?php echo (isset($GLOBALS['arraycss']) ? $GLOBALS['arraycss'] : ''); ?>
	<!-- WP_Header END -->
</head>
<body>
	<!-- HEADER -->
	<header>
		<div class="container">
			<div class="row bg">
				<div class="col-md-3">
					<div class="block--logotype">
						<a href="<?php echo (!isset($_COOKIE['lang']) || $_COOKIE['lang']!="eng" ? '/' : '/eng/'); ?>">
							<img src="/wp-content/themes/apg/img/_header/apg_blue_<?php echo (!isset($_COOKIE["lang"]) || $_COOKIE["lang"]!='eng' ? 'ru' : 'eng'); ?>.svg" alt=""/>
						</a>
					</div>
				</div>
				<div class="col-md-3 text">
					<p><?php
						if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){echo 'ОАО «АПГ Восточная Европа» Входит в объединение предприятий «ЕВРОПЛАСТ» с 2006 года';}
						else{echo 'OJSC «APG Eastern Europe» is a business combination «EUROPLAST» in 2006';}
					?></p>
				</div>
				<div class="col-md-6 block--slogan">
					<h2><?php
						if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){echo 'Крупнейший производитель ПЭТ упаковки полного цикла в Северо-Западном регионе';}
						else{echo 'The largest manufacturer of PET packaging Full CYCLE IN THE NORTH-WEST REGION';}
					?></h2>
				</div>
				<div class="col-md-2 block--right">
					<div class="block--europlast">
						<a target="_block" href="http://europlast.ru/plant/357/78/st-petersburg-plant/"><img src="/wp-content/themes/apg/img/_header/europlast.svg" alt=""/></a>
					</div>
					<div class="block--location_lang">
						<div class="location">
							<div class="icon"></div>
							<p id="geolocation_ip_yandex"><?php echo (isset($_COOKIE["geolocation_ip_yandex"]) ? $_COOKIE["geolocation_ip_yandex"] : ''); ?></p>
						</div>
						<div class="lang">
							<a href="#" id="<?php echo (!isset($_COOKIE['lang']) || $_COOKIE['lang']!="eng" ? 'eng' : 'ru'); ?>"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="menu">
					<?php
					if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){ echo '
						<li class="color1 '.(isset($link_menu1) ? 'open' : '').'">
							<a href="/" title="Главная">Главная</a>
						</li>
						<li class="color2 '.(isset($link_menu2) ? 'open' : '').'">
							<a href="/about/" title="О компании">О компании</a>
						</li>
						<li class="color3 '.(isset($link_menu3) ? 'open': '').'">
							<a href="/catalog/" title="Каталог продукции">Каталог продукции</a>
						</li>
						<li class="color8 '.(isset($link_menu8) ? 'open': '').'">
							<a href="https://apg-vostochnaya-evro.tiu.ru/" title="Интернет магазин">Интернет магазин</a>
						</li>
						<li class="color4 '.(isset($link_menu4) ? 'open': '').'">
							<a href="/plants/" title="Europlast">Europlast</a>
						</li>
						<li class="color5 '.(isset($link_menu5) ? 'open': '').'">
							<a href="/qualitycontrol/" title="Контроль качества">Контроль качества</a>
						</li>
						<li class="color6 '.(isset($link_menu6) ? 'open': '').'">
							<a href="/career/" title="Карьера">Карьера</a>
						</li>
						<li /* class="color7 '.(isset($link_menu7) ? 'open': '').'" */>
							<a href="/contacts/" title="Контакты">Контакты</a>
						</li>
					';}else{ echo '
						<li class="color1 '.(isset($link_menu1) ? 'open': '').'">
							<a href="/eng/" title="Homepage">Homepage</a>
						</li>
						<li class="color2 '.(isset($link_menu2) ? 'open': '').'">
							<a href="/eng/about/" title="About the Company">About the Company</a>
						</li>
						<li class="color3 '.(isset($link_menu3) ? 'open': '').'">
							<a href="/eng/catalog/" title="Catalog">Catalog</a>
						</li>
						<li class="color4 '.(isset($link_menu4) ? 'open': '').'">
							<a href="/eng/plants/" title="Plants Europlast">Plants Europlast</a>
						</li>
						<li class="color5 '.(isset($link_menu5) ? 'open': '').'">
							<a href="/eng/qualitycontrol/" title="Quality control">Quality control</a>
						</li>
						<li class="color6 '.(isset($link_menu6) ? 'open': '').'">
							<a href="/eng/career/" title="Careers">Careers</a>
						</li>
						<li class="color7 '.(isset($link_menu7) ? 'open': '').'">
							<a href="/eng/contacts/" title="Contacts">Contacts</a>
						</li>
					';}?>
					</ul>
				</div>
			</div>
		</div>
	</header>
