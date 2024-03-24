<?php
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/news-all.css" type="text/css" />';
//$arrayjs = '<script src="/wp-content/themes/apg/js/my.js"></script>';

$year_taxonomy_all = get_the_terms($post->ID, 'news_year');
$year_taxonomy = $year_taxonomy_all[0]->name;
get_header(); ?>

	<!-- HEADLINE -->
	<div class="headline news--all">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): ?>
					<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/news/" itemprop="url"><span itemprop="title">Новости</span></a></span> <span class="sep">›</span> <span class="current"><?php echo $year_taxonomy; ?></span></div>
					<?php endif; ?>
					<div class="title">
						<h1>Новости за <?php echo $year_taxonomy ?> год</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT News year -->
	<div class="container wrapper container--news--all">
		<div class="row">
			<div class="col-md-12">
			<?php
				if (have_posts()):
					while (have_posts()): the_post();
						get_template_part('content-news-object');
						wp_reset_postdata();
					endwhile;
				endif;
			?>
			</div>
		</div>
	</div>
	<!-- CONTENT News year END -->

<?php get_footer(); ?>