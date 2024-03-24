<?php

function load_resources() {
	$theme_uri = get_template_directory_uri();
	// CSS
	wp_register_style('reset', $theme_uri.'/css/reset.css', false, '0.1');
	wp_register_style('bootstrap4', $theme_uri.'/css/bootstrap4.min.css', false, '0.1');
	wp_register_style('style', $theme_uri.'/style.css', false, '0.1');

	wp_enqueue_style('reset');
	wp_enqueue_style('bootstrap4');
	wp_enqueue_style('style');

	// JS
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '/wp-content/themes/apg/js/jquery.2.2.4.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'userscript', '/wp-content/themes/apg/js/general.js', array('jquery'), '0.1', true );
	wp_enqueue_script( 'userscript' );
}
add_action('wp_enqueue_scripts', 'load_resources');

// OFF Script
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// ADD MENU
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
register_nav_menus(
	array(
		'top_menu' => 'Head menu'
	)
);


// Отключение rss ленты
	function fb_disable_feed() {
		wp_redirect(get_option('siteurl'));
	}
	add_action('do_feed', 'fb_disable_feed', 1);
	add_action('do_feed_rdf', 'fb_disable_feed', 1);
	add_action('do_feed_rss', 'fb_disable_feed', 1);
	add_action('do_feed_rss2', 'fb_disable_feed', 1);
	add_action('do_feed_atom', 'fb_disable_feed', 1);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'wp_shortlink_wp_head');
// Удаляем Emoji
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
// Отключаем сам REST API
	add_filter('rest_enabled', '__return_false');
// Отключаем фильтры REST API
	remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
	remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
	remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
	remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
	remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
	remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
	remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
	remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
// Отключаем события REST API
	remove_action( 'init', 'rest_api_init' );
	remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
	remove_action( 'parse_request', 'rest_api_loaded' );
// Отключаем Embeds связанные с REST API
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// Удаляем версию "?ver=..."
	function _remove_script_version( $src ){
	$parts = explode( '?', $src );
		return $parts[0];
	}
	add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


// NORMALIZE URL TAXONOMY
	//add_filter('post_link', 'rating_permalink', 10, 3);
	//add_filter('post_type_link', 'rating_permalink', 10, 3);

	function rating_permalink($permalink, $post_id, $leavename) {
		if (strpos($permalink, '%news_year%') === FALSE) return $permalink;
			// Get post
			$post = get_post($post_id);
			if (!$post) return $permalink;

			// Get taxonomy terms
			$terms = wp_get_object_terms($post->ID, 'news_year');
			if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0])) $taxonomy_slug = $terms[0]->slug;
			else $taxonomy_slug = 'not-rated';

		return str_replace('%news_year%', $taxonomy_slug, $permalink);
	}

	//add_filter( 'term_link', 'taxonomy_link', 10, 3 );
	function taxonomy_link( $link, $term, $taxonomy ){
		if ( $taxonomy !== 'news_year' )
			return $taxonomy_link;
		return str_replace( 'news_year', 'news', $link );
	}


// MAPS PLANT PAGE
	add_action('add_meta_boxes', 'my_extra_fields', 1);
	add_action('add_meta_boxes', 'my_extra_fields_eng', 1);
	function my_extra_fields() {
		add_meta_box('extra_fields', 'Карта', 'extra_fields_box_func', 'plants', 'normal', 'high');
	}
	function my_extra_fields_eng() {
		add_meta_box('extra_fields', 'Карта', 'extra_fields_box_func', 'eng_plants', 'normal', 'high');
	}
	function extra_fields_box_func( $post ){
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgH7SjznVJHMY3Z_bVwoPp9m2PpAUk3hA&v=3.exp&language=ru"></script>
<div style="display: flex; margin: 5px 0">
	<input id="address" type="text" value="Москва" style="font-size: 16px;padding: 8px 7px;border: 2px solid #ffc107;box-shadow: none;width: 80%;margin:0;">
	<input type="button" value="Найти" onclick="codeAddress()" style="border: 2px solid #ffc107;width: 20%;color: #fff;background-color: #ffc107;margin:0;outline: none;">
</div>
<div id="map-canvas" style="width: 100%;height: 400px;"></div>
<div style="display: flex; margin: 5px 0; text-align: center">
	<input disabled id="coords_out" value="<?php echo( get_post_meta($post->ID, 'coords', 1) ); ?>" style="text-align:center;font-size: 12px;padding: 4px 3px;border: 2px solid #ffc107;box-shadow: none;width: 100%;margin:0;" />
	<input type="hidden" name="extra[coords]" id="coords" value="" />
</div>
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />


<script type="text/javascript">
	var geocoder;
	var map;
	var marker;
	var markers = [];
	function initialize() {
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(55.755826, 37.6173);
		var mapOptions = {
				zoom: 5,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true,
				zoomControl: true,
				scrollwheel: false,
				zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE,
				position: google.maps.ControlPosition.LEFT_CENTER
			}
		}
		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		var q = jQuery('#coords, #coords_out').val();
		if(q != ""){
			q = q.substr(1,q.length-2);
			q = q.split(',');
			var myLatlng = new google.maps.LatLng(q[0],q[1]);
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				draggable: true,
				animation: google.maps.Animation.DROP
			});
			map.center = myLatlng;
			markers.push(marker);
			google.maps.event.addListener(marker, 'dragend', function (e) {
			jQuery('#coords, #coords_out').val(e.latLng);
			});
		}
	}

	// search on the map
	function codeAddress() {
	deleteMarkers();
	var address = document.getElementById('address').value;
	geocoder.geocode( { 'address': address }, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			addMarker(results[0].geometry.location);
			jQuery('#coords, #coords_out').val(results[0].geometry.location);
		} else {
			alert('Ошибка. Адрес не найден.');
		}
	});
	}

	// add marker in map
	function addMarker(location) {
	var marker = new google.maps.Marker({
		position: location,
		map: map,
		draggable: true,
		animation: google.maps.Animation.DROP
	});
	markers.push(marker);
	google.maps.event.addListener(marker, 'dragend', function (e) {
		jQuery('#coords, #coords_out').val(e.latLng);
	});
	}

	// Sets the map on all markers in the array.
	function setAllMap(map) {for (var i = 0; i < markers.length; i++) {markers[i].setMap(map);}}
	// Removes the markers from the map, but keeps them in the array.
	function clearMarkers() {setAllMap(null);}
	// Shows any markers currently in the array.
	function showMarkers() {setAllMap(map);}
	// Deletes all markers in the array by removing references to them.
	function deleteMarkers() {clearMarkers();markers = [];}
	//INITIALIZE MAP
	google.maps.event.addDomListener(window, 'load', initialize);

	jQuery(window).load(function(){
		if(markers.length == 0){
			jQuery('#address').val('Россия, Москва');
			addMarker(new google.maps.LatLng(55.755826, 37.6173));
		}else{
			jQuery('#wpcf-group-parametryi-zavoda input').change(function(){
				addAdressInput();
			});
		}

		function addAdressInput(){
			var index = jQuery('[data-wpt-id=wpcf-index] input').val();
			var country = jQuery('[data-wpt-id=wpcf-country] input').val();
			var area = jQuery('[data-wpt-id=wpcf-area] input').val();
			var sity = jQuery('[data-wpt-id=wpcf-sity] input').val();
			var street = jQuery('[data-wpt-id=wpcf-street] input').val();
			jQuery('#address').val(index+','+country+','+area+','+sity+','+street);
		}
		addAdressInput();

	});
</script>
<?php }

/* Включаем обновление полей при сохранении */
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return false;		// выходим если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false;		 // выходим если юзер не имеет право редактировать запись
	if ( !isset($_POST['extra']) ) return false;		// выходим если данных нет

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);		 // чистим все данные от пробелов по краям
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key);		// удаляем поле если значение пустое
			continue;
		}
		update_post_meta($post_id, $key, $value);		 // add_post_meta() работает автоматически
	}
	return $post_id;
}











add_shortcode('function_shortcode_lifeCiclePET', 'function_shortcode_lifeCiclePET');
function function_shortcode_lifeCiclePET($atts){
	extract(shortcode_atts(array(
	), $atts));
return '
<div class="lifeCicle">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="line left"></div>
			</div>
			<div class="col-md-4">
				<p><a href="/pet-recycling/" style="color: #fff;">ИЗГОТОВЛЕНИЕ ПЭТ ТАРЫ</a></p>
			</div>
			<div class="col-md-4">
				<div class="line right"></div>
			</div>
		</div>
		<div class="row">
			<div class="lifeGen">
				<a href="/pet-granulyat/" class="twoimg">
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/4c69bbc18f1d25786eba6089db9c20120.gif" alt="ПЭТ-гранулят"/>
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/decc801be8f08bcaa60adb91c9124cf701_.png" style="margin-left: -132px;" alt="ПЭТ-гранулят"/>
				</a>
				<p class="lifeTitle">
					<a href="/pet-granulyat/">ПЭТ-гранулят</a>
				</p>
			</div>
			<div class="arrow"></div>
			<div class="lifeGen">
				<a href="/preforma/" class="twoimg">
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/0c2acbcc48ff067db6c857caa00aa5361.gif" alt="Преформа"/>
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/de96362be64caef9a87082d54d9ec93e02.png" style="margin-left: -110px;" alt="Преформа"/>
				</a>
				<p class="lifeTitle">
					<a href="/preforma/">Преформа</a>
				</p>
			</div>
			<div class="arrow"></div>
			<div class="lifeGen">
				<a href="/pet-butyilka/" class="twoimg">
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/6524026082eccc144a3abe68ebffb1cf2.gif" style="height: 120px;margin-top: 16px;" alt="Пэт-бутылка"/>
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/5b212a42ceb138c39f9f62e9b20600adactive_cycle_3_2.png" style="margin-left: -118px;" alt="Пэт-бутылка"/>
				</a>
				<p class="lifeTitle">
					<a href="/pet-butyilka/">Пэт-бутылка</a>
				</p>
			</div>
			<div class="arrow"></div>
			<div class="lifeGen">
				<a href="/othody/" class="twoimg">
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/3d87ae108ed2e4c495d6739c736e16cf7ea0339eba4bbd44dde30118934.gif" alt="Отходы"/>
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/7ea0339eba4bbd44dde3011893497260active_cycle_4.png" style="margin-left: -96px;margin-top: -152px;" alt="Отходы"/>
				</a>
				<p class="lifeTitle">
					<a href="/othody/">Отходы</a>
				</p>
			</div>
			<div class="arrow"></div>
			<div class="lifeGen">
				<a href="/sbor/" class="twoimg">
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/0f10cd83400e5f125d0faada4ab28a25cd525f6b43bebf2ce2d2d705a6a691e84.gif" alt="Сбор"/>
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/0f10cd83400e5f125d0faada4ab28a251d4ab48ee8c0d1ee75c6e4839d0afb4aactive_cycle_5_2.png" style="margin-left: -95px;margin-top: -152px;" alt="Сбор"/>
				</a>
				<p class="lifeTitle">
					<a href="/sbor/">Сбор</a>
				</p>
			</div>
			<div class="arrow"></div>
			<div class="lifeGen">
				<a href="/pererabotka/" class="twoimg">
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/656375ae900724d5fc2aadca0c5b26a35_1.jpg" alt="Переработка"/>
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/83c5ecd4be641895fb4692f9955973bc05.png" style="margin-left: -98px;margin-top: -152px;" alt="Переработка"/>
				</a>
				<p class="lifeTitle">
					<a href="/pererabotka/">Переработка</a>
				</p>
			</div>
			<div class="arrow"></div>
			<div class="lifeGen">
				<a href="/repet/" class="twoimg">
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/2757a9fb99ebb5f47fd8494b17d55a5b0.gif" alt="Репэт"/>
					<img src="/wp-content/themes/apg/img/production_of_pet_packaging/b460d8085e4e438e190f1c2b799513d8active_cycle_7_1.png" style="margin-left: -98px;margin-top: -152px;" alt="Репэт"/>
				</a>
				<p class="lifeTitle">
					<a href="/repet/">Репэт</a>
				</p>
			</div>
		</div>
	</div>
</div>';
}


add_shortcode('function_slider', 'function_slider');
function function_slider(){
return '
<!-- Slider -->
<div class="bg--block--slider">
	<div class="container">
		<div class="row block--slider">
			<div data-num="1" class="show">
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/1_1.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/2_1.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/3_1.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/4_1.jpg"/>
				</div>
			</div>
			<div data-num="2">
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/1_2.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/2_2.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/3_2.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/4_2.jpg"/>
				</div>
			</div>
			<div data-num="3">
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/1_3.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/2_3.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/3_3.jpg"/>
				</div>
				<div class="col-md-3">
					<img src="/wp-content/themes/apg/img/slider/4_3.jpg"/>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Slider END -->';
}

add_shortcode('function_carousel', 'function_carousel');
function function_carousel(){
return '
<!-- Carousel -->
<div class="container">
	<div class="row block--carousel">
		<div class="arrow left"></div>
		<div class="container--carousel--hidden">
			<div class="container--carousel">
				<div class="col-md-4">
					<a href="/news/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/8089840df7df7ced6771820326128e79bnr4.jpg" alt="Пресс-центр"/>
					</a>
					<a href="/news/">
						<div class="text">Пресс-центр</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/unikalnyiy-dizayn-butyilki/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/68c8dce64c198f62422f7452d365fa4fbnr3.jpg" alt="Уникальный дизайн бутылки"/>
					</a>
					<a href="/unikalnyiy-dizayn-butyilki/">
						<div class="text">Уникальный дизайн бутылки</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/ekologicheskaya-otvetstvennost/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/ee557d2a5df27fe5435595ce58f86a40bnr1.jpg" alt="Экологическая ответственность"/>
					</a>
					<a href="/ekologicheskaya-otvetstvennost/">
						<div class="text">Экологическая ответственность</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://arpet.ru/" ref="nofollow" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/77597917872a153c78d8fb1d54589443logo_banner.png" alt="Ассоциация производителей ПЭТ"/>
					</a>
					<a href="http://arpet.ru/" ref="nofollow">
						<div class="text">Ассоциация производителей ПЭТ</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/bezopasnost-pet-tary/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/fb6316eb0b4f4e953af39fbb60ce84b8bnr_2.jpg" alt="Безопасность ПЭТ-тары"/>
					</a>
					<a href="/bezopasnost-pet-tary/">
						<div class="text">Безопасность ПЭТ-тары</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/news/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/8089840df7df7ced6771820326128e79bnr4.jpg" alt="Пресс-центр"/>
					</a>
					<a href="/news/">
						<div class="text">Пресс-центр</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/unikalnyiy-dizayn-butyilki/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/68c8dce64c198f62422f7452d365fa4fbnr3.jpg" alt="Уникальный дизайн бутылки"/>
					</a>
					<a href="/unikalnyiy-dizayn-butyilki/">
						<div class="text">Уникальный дизайн бутылки</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/ekologicheskaya-otvetstvennost/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/ee557d2a5df27fe5435595ce58f86a40bnr1.jpg" alt="Экологическая ответственность"/>
					</a>
					<a href="/ekologicheskaya-otvetstvennost/">
						<div class="text">Экологическая ответственность</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://arpet.ru/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/77597917872a153c78d8fb1d54589443logo_banner.png" alt="Ассоциация производителей ПЭТ"/>
					</a>
					<a href="http://arpet.ru/" ref="nofollow">
						<div class="text">Ассоциация производителей ПЭТ</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/bezopasnost-pet-tary/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/fb6316eb0b4f4e953af39fbb60ce84b8bnr_2.jpg" alt="Безопасность ПЭТ-тары"/>
					</a>
					<a href="/bezopasnost-pet-tary/">
						<div class="text">Безопасность ПЭТ-тары</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/news/" class="obj--img">
						<img src="/wp-content/themes/apg/img/carousel_one/8089840df7df7ced6771820326128e79bnr4.jpg" alt="Пресс-центр"/>
					</a>
					<a href="/news/">
						<div class="text">Пресс-центр</div>
					</a>
				</div>
			</div>
		</div>
		<div class="arrow right"></div>
	</div>
</div>
<!-- Carousel END -->';
}





add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function register_shop_widgets(){
	register_sidebar( array(
		'name' => "Сайдебар для магазина",
		'id' => 'shop-sidebar',
		'description' => 'Эти виджеты будут показаны в левой колонке сайта',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	) );
}
add_action( 'widgets_init', 'register_shop_widgets' );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

//show attributes after summary in product single view
add_action('woocommerce_single_product_summary', function() {
	//template for this is in storefront-child/woocommerce/single-product/product-attributes.php
	global $product;
	echo $product->list_attributes();
}, 25);

/* Remove the tabs */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
