<?php
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/catalog-all.css" type="text/css" />';
$arrayjs = '';
$url_bottle = '/bottle/';
get_header(); ?>

	<!-- HEADLINE -->
	<div class="headline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): ?>
						<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span> <span class="sep">›</span> <span class="current">Каталог продукции</span></div>
					<?php endif; ?>
					<div class="title">
						<h1>Каталог продукции</h1>
					</div>
					<div class="child_link">
						<li class="page_item"><a href="/service/">Сервис</a></li>
						<li class="page_item"><a href="/nanesenie-logotipa-i-tisnenie/">Нанесение логотипа и тиснение</a></li>
						<li class="page_item"><a href="/promo-kolpachki/">Промо-колпачки</a></li>
						<li class="page_item"><a href="/bottle/">Готовые ПЭТ-бутылки</a></li>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT catalog ALL -->
	<div class="wrapper container--catalog--all">
		<div class="bg_pet">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>ПЭТ-преформы и колпачки</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="/catalog/voda-i-bezalkogolnyie-napitki/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/wat0.png" alt="Вода и безалкогольные напитки">
								<img src="/wp-content/themes/apg/img/catalog/wat1.png" alt="Вода и безалкогольные напитки">
							</div>
							<div class="text">Вода и безалкогольные напитки</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="/catalog/molochnaya-produktsiya/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/milk0.png" alt="Молочная продукция">
								<img src="/wp-content/themes/apg/img/catalog/milk1.png" alt="Молочная продукция">
							</div>
							<div class="text">Молочная продукция</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="/catalog/alkogolnyie-napitki/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/beer0.png" alt="Алкогольные напитки">
								<img src="/wp-content/themes/apg/img/catalog/beer1.png" alt="Алкогольные напитки">
							</div>
							<div class="text">Алкогольные напитки</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="/catalog/pet-dlya-masla/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/oil0.png" alt="Подсолнечное масло">
								<img src="/wp-content/themes/apg/img/catalog/oil1.png" alt="Подсолнечное масло">
							</div>
							<div class="text">Подсолнечное масло</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="/catalog/sousyi-ketchupyi/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/ket0.png" alt="Соусы, кетчупы">
								<img src="/wp-content/themes/apg/img/catalog/ket1.png" alt="Соусы, кетчупы">
							</div>
							<div class="text">Соусы, кетчупы</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="/catalog/tehnicheskie-zhidkosti/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/teh0.png" alt="Технические жидкости">
								<img src="/wp-content/themes/apg/img/catalog/teh1.png" alt="Технические жидкости">
							</div>
							<div class="text">Технические жидкости</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="bottle">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>Готовые ПЭТ-бутылки</h3>
					</div>
				</div>
				<div class="row bottle--block">
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/0_1.gif" alt="0,1 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">0,1 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/0_3.gif" alt="0,3 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">0,3 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/1.gif" alt="1 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">1 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/0_5.jpg" alt="0,5 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">0,5 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/1.jpg" alt="1 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">1 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/1_5.jpg" alt="1,5 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">1,5 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/2.jpg" alt="2 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">2 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/5.jpg" alt="5 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">5 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/19.png" alt="19 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">19 л</div></a>
					</div>
					<div class="bottle--block--obj">
						<div><img src="/wp-content/themes/apg/img/catalog/bottle/30.png" alt="30 л"></div>
						<a href="<?php echo $url_bottle; ?>"><div class="title">30 л</div></a>
					</div>
				</div>
			</div>
		</div>







		<div class="bg_pet">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>Новинки</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="/catalog/butyil-19-l/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/19l0.png" alt="Бутыль 19 л">
								<img src="/wp-content/themes/apg/img/catalog/19l1.png" alt="Бутыль 19 л">
							</div>
							<div class="text">Бутыль 19 л</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="/catalog/pet-kega-30-l/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/30l0.png" alt="ПЭТ-кега 30 л">
								<img src="/wp-content/themes/apg/img/catalog/30l1.png" alt="ПЭТ-кега 30 л">
							</div>
							<div class="text">ПЭТ-кега 30 л</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="/laserpet/">
							<div class="block--img">
								<img src="/wp-content/themes/apg/img/catalog/wat0.png" alt="Laser PET">
								<img src="/wp-content/uploads/2016/11/wat0l.png" alt="Laser PET">
							</div>
							<div class="text">Laser PET</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="blockend">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="/nanesenie-logotipa-i-tisnenie/" class="text1">Нанесение логотипа и тиснение</a>
						<div>
							<a href="/nanesenie-logotipa-i-tisnenie/"><img src="/wp-content/themes/apg/img/catalog/unnamed.jpg" alt="" width="100%"></a>
						</div>
					</div>
					<div class="col-md-6">
						<a href="/promo-kolpachki/" class="text2">Промо-колпачки</a>
						<div>
							<a href="/promo-kolpachki/"><img src="/wp-content/themes/apg/img/catalog/promo.jpg" alt="" width="100%"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- CONTENT catalog ALL END -->


<?php get_footer(); ?>