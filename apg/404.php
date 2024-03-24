<?php
	$arraycss = '<style>body{min-height: 500px;display: flex;flex-wrap: wrap;flex-direction: column;height: 100vh;justify-content: space-between;}</style>';
	get_header();
?>

<!-- CONTENT -->
<div class="container p404">
	<div class="row">
		<div class="col-md-12" style="text-align: center">
			<h1>Запрашиваемая страница не найдена!</h1>
			<p>Страницы, которую Вы запросили, не существует на сайте.<br> Пожалуйста, проверьте адрес страницы, либо обратитесь к <a href="mailto:administrator@visible.name">администратору сайта</a>.</p>
		</div>
	</div>
</div>
<!-- CONTENT END -->

<?php get_footer(); ?>