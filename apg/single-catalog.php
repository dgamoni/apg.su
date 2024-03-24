<?php
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/catalog-single.css" type="text/css" />';
$arrayjs = '<script src="/wp-content/themes/apg/js/catalog-single.js"></script>';

$title = get_the_title($post->post_parent);
$fields = get_post_meta($post->ID,'',false); // получаем произвольные мета записи
$my_post = get_post(); // получаем мета записи

get_header(); ?>
	<!-- HEADLINE -->
	<div class="headline news--all">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): ?>
						<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/catalog/" itemprop="url"><span itemprop="title">Каталог продукции</span></a></span> <span class="sep">›</span> <span class="current"><?php echo $title; ?></span></div>
					<?php endif; ?>
					<div class="title">
						<h2>Каталог продукции</h2>
						<h1><?php echo $title; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT catalog-single -->
	<div class="wrapper container--catalog--single">
		<?php
			if (have_posts()):
				while (have_posts()): the_post(); ?>

		<div style="margin-bottom: 20px">
			<div class="bg" style="background-image: url('<?php echo $fields['wpcf-catalog_img_background'][0]; ?>')">
				<div class="production container"><img src="<?php echo $fields['wpcf-catalog_img_production'][0]; ?>" alt="<?php echo $title; ?>"></div>
			</div>
		</div>
		<div class="container" style="margin-bottom: 20px">
			<div class="row">
				<?php if(isset($fields['wpcf-catalog_preforms_html'][0]) || $fields['wpcf-catalog_caps_html'][0] != ''): ?>
				<div class="col-md-8" style="margin: 0 auto; float: none;">
					<div id="tabsHeader" class="over_ie">
						<?php if(isset($fields['wpcf-catalog_preforms_html'][0])): ?>
						<div class="tab activeTab" id="tab11" data-href="tabs_h0">
							<a href="#">Преформы</a>
						</div>
						<?php endif ?>

						<?php if(isset($fields['wpcf-catalog_caps_html'][0])): ?>
						<div class="tab" id="tab22" data-href="tabs_h1">
							<a href="#">Полимерные колпачки</a>
						</div>
						<?php endif ?>
					</div>
					<?php if(isset($fields['wpcf-catalog_preforms_html'][0])): ?>
					<div class="tabsContent tabsCatalog" id="tabs_h0" style="display: block;">
						<?php echo $fields['wpcf-catalog_preforms_html'][0]; ?>
					</div>
					<?php endif ?>
					<?php if(isset($fields['wpcf-catalog_caps_html'][0])): ?>
					<div class="tabsContent tabsCatalog contentTabsPolimer" id="tabs_h1" style="display: none;">
						<?php echo $fields['wpcf-catalog_caps_html'][0]; ?>
					</div>
					<?php endif ?>
				</div>
				<?php endif; ?>
				<?php if(isset($fields['wpcf-catalog_dop_information'][0])): ?>
				<div class="col-md-8" style="margin: 0 auto; float: none;">
					<p class="catalog_dop_information"><?php echo $fields['wpcf-catalog_dop_information'][0]; ?></p>
				</div>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-md-8" style="margin: 20px auto 0; float: none;"><?php the_content(); ?></div>
			</div>
			<div class="row">
				<div class="col-md-8" style="margin: 30px auto 0; float: none;">
					<p style="font-size: 0.9rem; text-align: center">Если Вы затрудняетесь подобрать оптимальный вариант упаковки, <a href="/contacts/feedback/">отправьте заявку</a> в наш отдел продаж.</p>
				</div>
			</div>
		</div>

		<?php wp_reset_postdata();
				endwhile;
			endif;
		?>
	</div>
	<!-- CONTENT catalog-single END -->
<?php get_footer(); ?>
