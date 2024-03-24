<?php
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/news-single.css" type="text/css" />';
//$arrayjs = '<script src="/wp-content/themes/apg/js/my.js"></script>';

$title = get_the_title($post->post_parent);
$fields = get_post_meta($post->ID,'',false); // получаем произвольные мета записи
$year_taxonomy_all = get_the_terms($post->ID, 'news_year');
$year_taxonomy = $year_taxonomy_all[0]->name;
get_header(); ?>

	<!-- HEADLINE -->
	<div class="headline news--single">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): ?>
						<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/news/" itemprop="url"><span itemprop="title">Новости</span></a></span> <span class="sep">›</span> <?php if(isset($year_taxonomy)): ?><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/news/<?php echo $year_taxonomy; ?>" itemprop="url"><span itemprop="title"><?php echo $year_taxonomy; ?></span></a></span> <span class="sep">›</span><?php endif; ?> <span class="current"><?php echo $title; ?></span></div>
					<?php endif; ?>
					<div class="title">
						<h1><?php echo $title ?></h1>
					</div>
					<div class="time"><?php the_time('j F Y'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT News -->
	<div class="container wrapper container--news--single">
		<div class="row">
			<div class="col-md-12">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<!-- CONTENT News END -->

<?php get_footer(); ?>