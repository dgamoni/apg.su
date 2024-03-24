<?php
/*
	Template Name: Контакты
*/
global $arraycss, $arrayjs;
$arraycss = '<link rel="stylesheet" href="/wp-content/themes/apg/css/contacts-all.css" type="text/css" />';
//$arrayjs = '<script src="/wp-content/themes/apg/js/home.js"></script>';

get_header(); ?> 

	<!-- HEADLINE -->
	<div class="headline contacts--all">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if (function_exists('dimox_breadcrumbs')): dimox_breadcrumbs();?>
					<?php endif; ?>
					<div class="title">
						<h1>Контакты</h1>
					</div>
				</div>
				<div class="col-md-12">
				<?php if( $GLOBALS['child_li'] != "" ):?>
					<div class="child_link">
						<?php echo $GLOBALS['child_li']; ?>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADLINE END -->

	<!-- CONTENT Contacts ALL -->
	<div class="container wrapper container--contacts--all">
		<div class="row">
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/sankt-peterburgskiy-zavod-evroplast/" class="title general"><span>Санкт-Петербугский завод "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/sankt-peterburgskiy-zavod-evroplast/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_spb.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								188300, Россия, Ленинградская обл., г. Гатчина, Промзона-1, квартал 4, площадка 8<br>
								тел. +7 (812) 718 81 11<br>
								<a href="mailto:apg@preforma.ru">apg@preforma.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-12">
				<div class="title title_plants"><span>Заводы</span></div>
			</div>
		</div>
		<div class="row">
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/solnechnogorskiy-zavod-evroplast/" class="title plant1"><span>Солнечногорский завод "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/solnechnogorskiy-zavod-evroplast/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_C3E.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								141532, Россия, Московская обл., Солнечногорский р-н,<br>
								Кировский с.о., дер. Радумля, микрорайон Мех. завода №1<br>
								тел.: +7 (495) 745 888 5<br>
								<b>Отдел продаж:</b><br>
								тел.: +7 (499) 253 83 38, 253 83 03<br>
								<a href="mailto:office@europlast.ru">office@europlast.ru</a><br>
								<a href="/wp-content/uploads/2016/10/SZE.jpg">Схема проезда</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/kazanskiy-zavod/" class="title plant2"><span>Казанский завод "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/kazanskiy-zavod/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_Kazan.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								420054, Россия, Республика Татарстан, г. Казань, ул. В. Кулагина, д. 25<br>
								тел./факс: +7 (843) 278 82 42/32<br>
								+7 (843) 278 80 92/82<br>
								<a href="mailto:evpkaz@evpkaz.ru">evpkaz@evpkaz.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
		</div>
		<div class="row">
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="http://europlast.ru/" class="title plant3"><span>Центральный офис "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="http://europlast.ru/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_mos.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								123557, Россия, г. Москва,<br>
								Новопресненский пер., д. 7<br>
								тел.: +7 (495) 777 888 7,<br>
								факс: +7 (495) 745 888 2<br>
								<a href="mailto:office@europlast.ru">office@europlast.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/ekaterinburgskiy-zavod-evroplast/" class="title plant4"><span>Екатеринбугский завод "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/ekaterinburgskiy-zavod-evroplast/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_EKB_2.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								620046, Россия, г. Екатеринбург, проспект Космонавтов, д. 18<br>
								тел./факс: +7 (343) 389 22 29<br>
								<a href="mailto:secretars.ekb@europlast.ru">secretars.ekb@europlast.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
		</div>
		<div class="row">
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/rostovskiy-zavod-evroplast/" class="title plant5"><span>Ростовский завод "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/rostovskiy-zavod-evroplast/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_rostov.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								344007, Россия, г. Ростов-на-Дону, ул. 2-ая Луговая, д. 8<br>
								+7 (863) 210 91 61<br>
								+7 (863) 210 91 62<br>
								+7 (863) 210 91 63<br>
								<a href="mailto:rostov@europlast.ru">rostov@europlast.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/krasnoyarskiy-zavod-evroplast/" class="title plant6"><span>Красноярский завод "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/krasnoyarskiy-zavod-evroplast/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_krsk.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								662500, Россия, Красноярский край, г. Сосновоборск, ул. Заводская, д. 1, а/я 104<br>
								тел.: +7 (391) 218 02 01<br>
								<a href="mailto:krasnoyarsk@europlast.biz">krasnoyarsk@europlast.biz</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
		</div>
		<div class="row">
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/primorskiy-zavod-evroplast/" class="title plant7"><span>Приморский завод "Европласт"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/primorskiy-zavod-evroplast/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_prim.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								692491, Россия,<br>
								Приморский край,<br>
								Надеждинский район, с. Вольно-Надеждинское, Территория ТОР "Надеждинская"<br>
								тел. +7 (423) 279 07 96<br>
								<a href="mailto:vladivostok@europlast.ru">vladivostok@europlast.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/zavod-novyih-polimerov-senezh/" class="title plant8"><span>Завод новых полимеров "Сенеж"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/zavod-novyih-polimerov-senezh/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_senege.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								141500, Россия, Московская обл., г. Солнечногорск, промзона Рекинцо, стр. 1<br>
								тел. +7 (499) 253 45 34<br>
								<a href="mailto:info@senege.com">info@senege.com</a><br>
								<a href="http://www.senege.com" ref="nofollow">www.senege.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
		</div>
		<div class="row">
			<!-- start plant -->
			<div class="col-md-6">
				<div class="plant">
					<a href="/plants/zavod-po-pererabotke-plastmass-plarus/" class="title plant9"><span>Завод по переработке пластмасс "Пларус"</span></a>
					<div class="flex">
						<div class="img">
							<a href="/plants/zavod-po-pererabotke-plastmass-plarus/"><img src="/wp-content/uploads/2016/10/kontakti_zavodi_plarus.jpg" alt=""></a>
						</div>
						<div class="desc">
							<p>
								141500, Россия, Московская обл., г. Солнечногорск, промзона Рекинцо, стр. 1<br>
								тел. +7 (495) 651 09 10<br>
								факс: (495) 651 93 15<br>
								<a href="mailto:info@plarus.ru">info@plarus.ru</a><br>
								<a href="http://www.plarus.ru" ref="nofollow">www.plarus.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end plant -->
		</div>
	</div>


<?php get_footer(); ?>







