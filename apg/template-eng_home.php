<?php
/*
	Template Name: ENG Главная
*/
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/home.css" type="text/css" />';
$arrayjs = '<script src="/wp-content/themes/apg/js/home.js"></script>';
$show_Slider = false;
$show_Carousel = false;

get_header(); ?>

	<div class="wrapper">
	<?php
	if($show_Slider){
		echo '
		<!-- Slider -->
		<div class="bg--block--slider">
			<div class="container">
				<div class="row block--slider">
					<div data-num="1" class="show">
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/1_1.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/2_1.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/3_1.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/4_1.jpg"/>
						</div>
					</div>
					<div data-num="2">
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/1_2.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/2_2.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/3_2.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/4_2.jpg"/>
						</div>
					</div>
					<div data-num="3">
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/1_3.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/2_3.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/3_3.jpg"/>
						</div>
						<div class="col-md-3">
							<img src="/wp-content/themes/apg/img/slider/4_3.jpg"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider END -->
		';
	}

	if($show_Carousel){
		echo '
		<!-- Carousel -->
		<div class="container">
			<div class="row block--carousel">
				<div class="arrow left"></div>
				<div class="container--carousel--hidden">
					<div class="container--carousel">
						<div class="col-md-4">
							<a href="/news/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/8089840df7df7ced6771820326128e79bnr4.jpg" alt="Press Center"/>
							</a>
							<a href="/news/">
								<div class="text">Press Center</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/unikalnyiy-dizayn-butyilki/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/68c8dce64c198f62422f7452d365fa4fbnr3.jpg" alt="The unique design of the bottle"/>
							</a>
							<a href="/unikalnyiy-dizayn-butyilki/">
								<div class="text">The unique design of the bottle</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/ekologicheskaya-otvetstvennost/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/ee557d2a5df27fe5435595ce58f86a40bnr1.jpg" alt="Environmental responsibility"/>
							</a>
							<a href="/ekologicheskaya-otvetstvennost/">
								<div class="text">Environmental responsibility</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="http://arpet.ru/" ref="nofollow" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/77597917872a153c78d8fb1d54589443logo_banner.png" alt="Association of manufacters of PET"/>
							</a>
							<a href="http://arpet.ru/" ref="nofollow">
								<div class="text">Association of manufacters of PET</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/bezopasnost-pet-tary/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/fb6316eb0b4f4e953af39fbb60ce84b8bnr_2.jpg" alt="The safety of PET-containers"/>
							</a>
							<a href="/bezopasnost-pet-tary/">
								<div class="text">The safety of PET-containers</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/news/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/8089840df7df7ced6771820326128e79bnr4.jpg" alt="Press Center"/>
							</a>
							<a href="/news/">
								<div class="text">Press Center</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/unikalnyiy-dizayn-butyilki/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/68c8dce64c198f62422f7452d365fa4fbnr3.jpg" alt="The unique design of the bottle"/>
							</a>
							<a href="/unikalnyiy-dizayn-butyilki/">
								<div class="text">The unique design of the bottle</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/ekologicheskaya-otvetstvennost/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/ee557d2a5df27fe5435595ce58f86a40bnr1.jpg" alt="Environmental responsibility"/>
							</a>
							<a href="/ekologicheskaya-otvetstvennost/">
								<div class="text">Environmental responsibility</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="http://arpet.ru/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/77597917872a153c78d8fb1d54589443logo_banner.png" alt="Association of manufacters of PET"/>
							</a>
							<a href="http://arpet.ru/" ref="nofollow">
								<div class="text">Association of manufacters of PET</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/bezopasnost-pet-tary/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/fb6316eb0b4f4e953af39fbb60ce84b8bnr_2.jpg" alt="The safety of PET-containers"/>
							</a>
							<a href="/bezopasnost-pet-tary/">
								<div class="text">The safety of PET-containers</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="/news/" class="obj--img">
								<img src="/wp-content/themes/apg/img/carousel_one/8089840df7df7ced6771820326128e79bnr4.jpg" alt="Press Center"/>
							</a>
							<a href="/news/">
								<div class="text">Press Center</div>
							</a>
						</div>
					</div>
				</div>
				<div class="arrow right"></div>
			</div>
		</div>
		<!-- Carousel END -->
		';
		};
	?>
		<div class="lifeCicle">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="line left"></div>
					</div>
					<div class="col-md-4">
						<p>MANUFACTURER OF PET BOTTLES</p>
					</div>
					<div class="col-md-4">
						<div class="line right"></div>
					</div>
				</div>
				<div class="row">
					<div class="lifeGen">
						<a href="/pet-granulyat/" class="twoimg">
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/4c69bbc18f1d25786eba6089db9c20120.gif" alt="PET granulate"/>
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/decc801be8f08bcaa60adb91c9124cf701_.png" style="margin-left: -132px;" alt="PET granulate"/>
						</a>
						<p class="lifeTitle">
							<a href="/pet-granulyat/">PET granulate</a>
						</p>
					</div>
					<div class="arrow"></div>
					<div class="lifeGen">
						<a href="/preforma/" class="twoimg">
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/0c2acbcc48ff067db6c857caa00aa5361.gif" alt="Preform"/>
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/de96362be64caef9a87082d54d9ec93e02.png" style="margin-left: -110px;" alt="Preform"/>
						</a>
						<p class="lifeTitle">
							<a href="/preforma/">Preform</a>
						</p>
					</div>
					<div class="arrow"></div>
					<div class="lifeGen">
						<a href="/pet-butyilka/" class="twoimg">
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/6524026082eccc144a3abe68ebffb1cf2.gif" style="height: 120px;margin-top: 16px;" alt="PET bottle"/>
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/5b212a42ceb138c39f9f62e9b20600adactive_cycle_3_2.png" style="margin-left: -118px;" alt="PET bottle"/>
						</a>
						<p class="lifeTitle">
							<a href="/pet-butyilka/">PET bottle</a>
						</p>
					</div>
					<div class="arrow"></div>
					<div class="lifeGen">
						<a href="/othody/" class="twoimg">
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/3d87ae108ed2e4c495d6739c736e16cf7ea0339eba4bbd44dde30118934.gif" alt="Waste"/>
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/7ea0339eba4bbd44dde3011893497260active_cycle_4.png" style="margin-left: -96px;margin-top: -152px;" alt="Waste"/>
						</a>
						<p class="lifeTitle">
							<a href="/othody/">Waste</a>
						</p>
					</div>
					<div class="arrow"></div>
					<div class="lifeGen">
						<a href="/sbor/" class="twoimg">
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/0f10cd83400e5f125d0faada4ab28a25cd525f6b43bebf2ce2d2d705a6a691e84.gif" alt="Collection"/>
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/0f10cd83400e5f125d0faada4ab28a251d4ab48ee8c0d1ee75c6e4839d0afb4aactive_cycle_5_2.png" style="margin-left: -126px;margin-top: -15px;" alt="Collection"/>
						</a>
						<p class="lifeTitle">
							<a href="/sbor/">Collection</a>
						</p>
					</div>
					<div class="arrow"></div>
					<div class="lifeGen">
						<a href="/pererabotka/" class="twoimg">
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/656375ae900724d5fc2aadca0c5b26a35_1.jpg" alt="Processing"/>
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/83c5ecd4be641895fb4692f9955973bc05.png" style="margin-left: -98px;margin-top: -152px;" alt="Processing"/>
						</a>
						<p class="lifeTitle">
							<a href="/pererabotka/">Processing</a>
						</p>
					</div>
					<div class="arrow"></div>
					<div class="lifeGen">
						<a href="/repet/" class="twoimg">
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/2757a9fb99ebb5f47fd8494b17d55a5b0.gif" alt="RePET"/>
							<img src="/wp-content/themes/apg/img/production_of_pet_packaging/b460d8085e4e438e190f1c2b799513d8active_cycle_7_1.png" style="margin-left: -98px;margin-top: -152px;" alt="RePET"/>
						</a>
						<p class="lifeTitle">
							<a href="/repet/">RePET</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top: 30px;max-width: 1000px;">
			<div class="row">
				<div class="col-md-8 container--map_plants">
					<a href="/plants/"><h3>The geography of plants</h3></a>
					<div class="map_plants_eng"></div>
				</div>
				<div class="col-md-4 container--video">
					<a href="/video/"><h3>Video</h3></a>
					<div class="block--video">
						<a href="/video/" class="a_img"><div class="img"></div></a>
						<a href="/video/">The movie about Europlast</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row" style="margin: 40px 0 0;">
				<div class="col-md-12">
					<h3 style="border-bottom-color:#ffc107;">Our advantages</h3>
				</div>
			</div>
			<div class="row">
				<div class="up">
					<div class="up--object">
						<a href="/eng/qualitycontrol/">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/1.png" alt="High quality" width="100%"></div>
								<div class="t">High quality</div>
							</div>
						</a>
						<a href="/#">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/2.png" alt="Individual approach" width="100%"></div>
								<div class="t">Individual approach</div>
							</div>
						</a>
						<a href="/#">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/3.png" alt="The latest technology" width="100%"></div>
								<div class="t">The latest technology</div>
							</div>
						</a>
					</div>

					<div class="up--object">
						<a href="/eng/qualitycontrol/">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/4.png" alt="FSSC 22000, ISO 9001:2008, FDA на BRC, ISO 9001:2015" width="100%"></div>
								<div class="t">Security</div>
							</div>
						</a>
						<a href="/eng/plants/">
							<div>
								<div class="i"><img src="/wp-content/themes/apg/img/home/5.png" alt="Wide geography" width="100%"></div>
								<div class="t">Wide geography</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
