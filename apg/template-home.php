<?php
/*
	Template Name: Главная
*/
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/home.css" type="text/css" />';
$arrayjs = '<script src="/wp-content/themes/apg/js/home.js"></script>';

get_header(); ?>

	<div class="wrapper">
	<?php
		// echo do_shortcode('[function_slider]');
		// echo do_shortcode('[function_carousel]');
		get_template_part('content-home-news');
	?>

	<?php echo do_shortcode('[function_shortcode_lifeCiclePET]'); ?>

		<div class="container" style="margin-top: 30px;max-width: 1000px;">
			<div class="row">
				<div class="col-md-8 container--map_plants">
					<a href="/plants/"><h3>География заводов Europlast</h3></a>
					<div class="map_plants"></div>
				</div>
				<div class="col-md-4 container--video">
					<a href="/video/"><h3>Видео</h3></a>
					<div class="block--video">
						<a href="/video/" class="a_img"><div class="img"></div></a>
						<a href="/video/">Фильм о компании «ЕВРОПЛАСТ»</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container seoText">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1" style="text-align: center;">Производство и продажа пластиковой тары и упаковки</h1>
					<p style="text-align: center;">Вы ищете надежного поставщика ПЭТ бутылок, преформ и полимерной упаковки в России? Мы готовы сделать лучшее предложение!</p>
					<p style="text-align: center; font-size: 1.2rem; margin: 10px 0 20px;"><strong>«АПГ Восточная Европа» - Крупнейший производитель ПЭТ упаковки полного цикла в Северо-Западном регионе.</strong></p>

					<h4>Несколько фактов</h4>
					<ul type="disc">
						<li>В 2017 году мы празднуем юбилей  - 20 лет на рынке.</li>
						<li>Каждая третья пластиковая бутылка в стране - наша.</li>
						<li>Постоянные заказчики компании «АПГ Восточная Европа» - Coca-Cola, PepsiCo, Балтика, Данон и другие крупнейшие предприятия</li>
					</ul>
					<h4>История развития</h4>
					<p style="margin-bottom: 10px;">В 2006 году в состав Объединения предприятий «Европласт» вошел завод АПГ Восточная Европа, расположенный в городе Гатчина Ленинградской области. Санкт-Петербургский завод «Европласт» крупнейший производитель преформ на Северо-Западе России. На заводе установлено оборудование ведущих мировых компаний.</p>

					<h4>Наша продукция</h4>
					<ul type="disc">
						<li><strong>ПЭТ преформы</strong> - любого объема, веса и цвета. Производим только качественные заготовки и реализуем их по самой доступной цене.</li>
						<li><strong>Пластиковые колпачки</strong> - стандартные и для промо-акций. Наносим логотип, шифр, код, картинку, чтобы привлечь максимум внимания к вашим товарам.</li>
						<li><strong>Бутылки</strong> - прозрачные, цветные, любой формы. Изготовим по вашему рисунку, выполним тиснение, сделаем тару узнаваемой и запоминающейся.</li>
						<li><strong>Полимерная упаковка</strong> - прочные пленки и ленты разной толщины. Предлагаем проверенные востребованные варианты.</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row" style="margin: 40px 0 0;">
				<div class="col-md-12">
					<h3 style="border-bottom-color:#ffc107;">Наши преимущества</h3>
				</div>
			</div>
			<div class="row">
				<div class="up">
					<div class="up--object">
						<a href="/qualitycontrol/">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/1.png" alt="Контроль качества на всех этапах" width="100%"></div>
								<div class="t">Контроль качества</div>
							</div>
						</a>
						<a href="#individual">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/2.png" alt="Индивидуальный подход" width="100%"></div>
								<div class="t">Индивидуальный подход</div>
							</div>
						</a>
						<a href="#newtech">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/3.png" alt="Новейшие технологии" width="100%"></div>
								<div class="t">Новейшие технологии</div>
							</div>
						</a>
					</div>

					<div class="up--object">
						<a href="/qualitycontrol/">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/4.png" style="width: 110px;margin-left: -20px;" alt="FSSC 22000, ISO 9001:2008, FDA на BRC (международный стандарт для упаковки и упаковочных материалов: версия 5) и ISO 9001:2015" width="100%"></div>
								<div class="t">Сертификация</div>
							</div>
						</a>
						<a href="/plants/">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/5.png" alt="Широкая география" width="100%"></div>
								<div class="t">Широкая география</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<ul type="disc">
					<li><strong>Высокое качество.</strong> Современное оборудование и постоянный контроль готовой продукции — вот составляющие успеха. Такой подход позволяет свести к минимуму производственный брак.</li>
					<li><strong>Сертификация.</strong> Мы работаем только с гигиенически чистым материалом — первичным гранулятом и четко соблюдаем технологию работы. Наш товар имеет сертификаты FSSC 22000, ISO 9001:2008, FDA на BRC (международный стандарт для упаковки и упаковочных материалов: версия 5) и ISO 9001:2015 и подходит для пищевых продуктов, алкогольных напитков, технических жидкостей.</li>
					<li id="newtech"><strong>Новейшие технологии.</strong> Мы отслеживаем тенденции рынка и регулярно обновляем оборудование, чтобы вдохновить клиентов лучшими разработками и новыми возможностями.</li>
					<li id="individual"><strong>Индивидуальный подход.</strong> Наш актив — это команда профессионалов, которые хорошо понимают и откликаются на потребности каждого заказчика. Мы предлагаем систему скидок, ведем продажу крупным и мелким оптом, обеспечиваем удобную доставку по выбранной схеме. Москва или отдаленные регионы — не имеет значения.</li>
					<li><strong>Широкая география.</strong> Наш завод входит в объединение заводов Европласт, которое включает в себя 7 заводов производителей по всей России.</li>
				</ul>
			</div>
		</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin: 10px 0 30px;text-align: center;font-weight: bold;letter-spacing: 0.3px;"><p>Компания “АПГ Восточная Европа” постоянно растет, развивает новые направления, участвует в амбициозных проектах. Мы открыты для диалога и готовы выполнить заказ любой сложности. Обращайтесь к нашим консультантам, и давайте сотрудничать!</p></div>
		</div>
	</div>

	</div>
<?php get_footer(); ?>
