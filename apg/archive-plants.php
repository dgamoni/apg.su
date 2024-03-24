<?php
global $arraycss, $arrayjs, $my_title;
$my_title = 'География заводов Europlast';
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/plants-all.css" type="text/css" />';
$arrayjs = '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgH7SjznVJHMY3Z_bVwoPp9m2PpAUk3hA&v=3.exp&language=ru"></script><script src="/wp-content/themes/apg/js/plants-all.js"></script>';
get_header(); ?>

	<!-- HEADLINE -->
	<div class="headline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): ?>
						<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span class="current"><?php echo $my_title; ?></span></div>
					<?php endif; ?>
					<div class="title">
						<h1><?php echo $my_title; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT plants ALL -->
	<div id="factoryBox"></div>
	<!-- CONTENT plants ALL END -->


<?php get_footer(); ?>