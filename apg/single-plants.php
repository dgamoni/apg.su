<?php
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/plants-single.css" type="text/css" />';

$title = get_the_title($post->post_parent);
$fields = get_post_meta($post->ID,'',false); // получаем произвольные мета записи
$my_post = get_post( $id ); // получаем мета записи
$coords = preg_split('/,/', substr($fields['coords'][0], 1, $fields['coords'][0].length-1));

$arrayjs = '
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgH7SjznVJHMY3Z_bVwoPp9m2PpAUk3hA&v=3.exp&language=ru"></script>
<script src="/wp-content/themes/apg/js/plants-single.js"></script>
<script>
	gmap_initialize_inner("map_mini",3,'.$coords[0].','.$coords[1].');
	var a = new google.maps.LatLng('.$coords[0].','.$coords[1].');
	var b = new google.maps.Marker({
		position: a,
		map: map,
		animation: google.maps.Animation.DROP,
	});
</script>';

get_header(); ?>

	<!-- HEADLINE -->
	<div class="headline news--all">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): ?>
						<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/plants/" itemprop="url"><span itemprop="title">Георгафия заводов Europlast</span></a></span> <span class="sep">›</span> <span class="current"><?php echo $title; ?></span></div>
					<?php endif; ?>
					<div class="title">
						<h1><?php echo $title; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT plants-single -->
	<div class="container wrapper container--plants--single">
		<?php
			if (have_posts()):
				while (have_posts()): the_post();
		?>
			<div class="row">
				<?php
					foreach ($fields['wpcf-photo'] as $value) {
						echo '<img src="'.$value.'" alt="Европласт производство пэт '.$title.'" />';
					}
				?>
			</div>
			<div class="row margin">
				<div class="col-md-12"><h3>История завода</h3></div>
				<div class="col-md-12 text"><?php echo $my_post->post_content; ?></div>
			</div>
			<div class="row margin">
				<div class="col-md-6 contact">
					<h3>Контактная информация</h3>
					<?php
						echo '
						<div itemscope="" itemtype="http://schema.org/Organization">
							<div style="display:inline-block" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">';
								if($fields["wpcf-index"][0] != ''){		echo '<span itemprop="postalCode">'.$fields["wpcf-index"][0].'</span>, ';}
								if($fields["wpcf-country"][0] != ''){	echo '<span itemprop="addressCountry">'.$fields["wpcf-country"][0].'</span>, ';}
								if($fields["wpcf-area"][0] != ''){		echo '<span itemprop="addressRegion">'.$fields["wpcf-area"][0].'</span>, ';}
								if($fields["wpcf-sity"][0] != ''){		echo '<span itemprop="addressLocality">'.$fields["wpcf-sity"][0].'</span>,<br>';}
								if($fields["wpcf-street"][0] != ''){	echo '<span itemprop="streetAddress">'.$fields["wpcf-street"][0].'</span>';}
						echo '</div><br><br>';
						if($fields["wpcf-phone"][0] != ''){
							echo 'тел.: ';
							foreach ($fields["wpcf-phone"] as $value) {
								if($value != ""){echo '<span itemprop="telephone">'.$value.'</span><br>';}
							}
						}
						if($fields["wpcf-fax"][0] != ''){
							echo 'факс: ';
							foreach ($fields["wpcf-fax"] as $value) {
								if($value != ""){echo '<span itemprop="faxNumber">'.$value.'</span><br>';}
							}
						}
						if($fields["wpcf-e-mail"][0] != ''){
							echo 'e-mail: ';
							foreach ($fields["wpcf-e-mail"] as $value) {
								if($value != ""){echo '<span itemprop="email">'.$value.'</span><br>';}
							}
						}
						echo '</div>';
					?>
				</div>
				<div class="col-md-6">
					<div id="map_mini"></div>
				</div>
			</div>
		<?php
				wp_reset_postdata();
				endwhile;
			endif;
		?>
	</div>
	<!-- CONTENT plants-single END -->

<?php get_footer(); ?>