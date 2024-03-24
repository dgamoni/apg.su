<div class="container news">
	<div class="row">
		<div class="col-md-12">
			<a href="/news"><h3 style="border-bottom-color:#1578ea;">Новости и новинки</h3></a>
		</div>
	</div>
	<div class="row">
<?php
/* Получаем список категорий news_year */
$terms = query_posts( 'post_type=news' );
/* Выводим все записи для каждой категории */
foreach ($terms as $value):
	//var_dump($value);
	$id = $value->ID;
	$link = get_permalink($id);
	$thumb = get_the_post_thumbnail($id);
	$time = get_the_time('d.m.Y', $id);
	$title = get_the_title($id);
?>
	<div class="col-md-4 container--object">
		<div class="img"><a href="<?php echo $link; ?>"><?php echo $thumb; ?></a></div>
		<div>
			<span class="date"><?php echo $time; ?></span>
			<a href="<?php echo $link; ?>"><div class="title"><?php echo $title; ?></div></a>
		</div>
	</div>
	<?php
endforeach;
?>
		<!-- Заканчивается петля --> 
	</div>
</div>