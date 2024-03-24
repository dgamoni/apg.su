<?php

global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/news-all.css" type="text/css" />';
//$arrayjs = '<script src="/wp-content/themes/apg/js/my.js"></script>';

get_header(); ?>

	<!-- HEADLINE -->
	<div class="headline news--all">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): dimox_breadcrumbs();?>
					<?php endif; ?>
					<div class="title">
						<h1>Новости</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT News ALL -->
	<div class="container wrapper container--news--all">
		<div class="row">
			<div class="col-md-12">
			<!-- Начинается петля --> 

<?php
	/* Получаем список категорий news_year */
	$terms = get_terms('news_year', array(
		'orderby' => 'name',
		'order' => 'DESC',
		'hide_empty' => 1
	));


	/* Выводим все записи для каждой категории */
	foreach ($terms as $value):
		echo '<div class="col-md-12 title--year"><h3><a href="'.get_term_link($value->term_id).'">'.$value->name.'</a></h3></div>';
		$args = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'news_year',
					'field' => 'id',
					'terms' => $value->term_id
				)
			),
			'post_type' => 'news',
			'posts_per_page' => -1
		);
		$query = new WP_Query( $args );
		while ($query->have_posts()):
			$query->the_post();
			get_template_part('content-news-object');
			wp_reset_postdata();
		endwhile;
	endforeach;
?>
			<!-- Заканчивается петля --> 
			</div>
		</div>
	</div>
	<!-- CONTENT News ALL END -->

<?php get_footer(); ?>