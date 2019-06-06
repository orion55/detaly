<?php //===================================
	$header = get_field('header');
	$startscreen = get_field('startscreen');
	$meta_tag = get_field('head-meta-tags');
	$head_metrics = get_field('head-custom-code');
// ====================================== ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="msthemecompatible" content="no"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/tiny-slider.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/module.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<script src="<?php bloginfo('template_url') ?>/js/tiny-slider.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/uikit.min.js"></script>
	<title><?php echo $meta_tag['title'] ?></title>
	<meta name="description" content="<?php echo $meta_tag['description'] ?>">
	<meta name="keywords" content="<?php echo $meta_tag['keywords'] ?>">
	<?php echo $head_metrics ?>


	<!-- АААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААААА -->
	<?php wp_head() ?>
</head>
<body>

<div class="site-overlay"></div>
<section class="start_screen_section">
	<header>
		<div class="header container">
			<a href="javascript:void(0);" class="header_logo">
				<img class='res' src="<?php echo $header['logo']['url']; ?>">
			</a>
			<button class="mobile_menu menu-btn"></button>
			<nav class="nav pushy pushy-left">
				<ul class="menu">
					<li><a href="#services"><?php the_field('header_menu_item_1'); ?></a></li>
					<li><a href="#production"><?php the_field('header_menu_item_2'); ?></a></li>
					<li><a href="#partners"><?php the_field('header_menu_item_3'); ?></a></li>
					<li><a href="#our_works"><?php the_field('header_menu_item_4'); ?></a></li>
				</ul>
			</nav>
			<div class="phone">
				<a class="phone_link" href="tel:<?php the_field('header_phone');?>">
					<?php the_field('header_phone');?></a>
			</div>
		</div>
	</header>
	<div class="container start_screen">
		<div class="start_screen_logo">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo $startscreen['mobile']['url']; ?>">
				<source media="(min-width: 768px)" srcset="<?php echo $startscreen['desktop']['url'] ?>">
				<img src="<?php echo $startscreen['desktop']['url'] ?>">
			</picture>
		</div>
		<div class="start_screen_text">
			<h1><?php echo $startscreen['title'] ?></h1>
			<h2><?php echo $startscreen['subtitle'] ?></h2>
		</div>
	</div>
	<div class="arrow"></div>
	<div class="start_screen_bg" style="background-image:url(<?php echo $startscreen['bg'] ?>);"></div>
</section>

<!--=====================================
=            ADVANTAGES               =
======================================-->
<section class="advantages_section">
	<h3 class="title_box">
		<div class="screen_title">
			<span class="angle"></span>
			<span>Преимущества</span>
			<span class="bg">Преимущества</span>
		</div>
	</h3>
	<div class="container advantages">
		<div class="row">
			<div class="advantages_item col-lg col-md-4 col-12">
				<div class="border"><img src="img/icons/advantages-1.svg"></div>
				<p>Полный цикл работ <br> от идеи до реализации</p>
			</div>
			<div class="advantages_item col-lg col-lg-auto col-md-4 col-12">
				<div class="border"><img src="img/icons/advantages-2.svg"></div>
				<p>Собственный <br> производственный комплекс</p>
			</div>
			<div class="advantages_item col-lg col-md-4 col-12">
				<div class="border"><img src="img/icons/advantages-3.svg"></div>
				<p>Огромный опыт работы <br> на рынке (с 2004 года)</p>
			</div>
			<div class="advantages_item col-lg col-md-4 col-12">
				<div class="border"><img src="img/icons/advantages-4.svg"></div>
				<p>Инновационные <br> технологии</p>
			</div>
			<div class="advantages_item col-lg col-md-4 col-12">
				<div class="border"><img src="img/icons/advantages-5.svg"></div>
				<p>Работаем на всей <br> территории РФ</p>
			</div>
		</div>
	</div>
</section>

<!--=====================================
=            SERVICES               =
======================================-->
<!-- <section id="services" class="services_section">
	<div class="container">
		<h3 class="title_box">
			<div class="screen_title dark">
				<span class="angle"></span>
				<span>Услуги</span>
				<span class="bg">Услуги</span>
			</div>
		</h3>
		<div class="row services">
			<div class="col-12 col-xl-4 col-lg-5 service_box">
				<div class="service gray">
					<div class="service_title">Проектирование</div>
					<ul class="service_list">
						<li>Разработка и проектирование <br class="visible-md"> объектов инфраструктуры города</li>
						<li>Разработка и проектирование<br>
					   инновационных конструкций</li>
						<li>Проекты конструкторской<br>
					   документации (ПКД)</li>
					</ul>
					<div class="service_navs">
						<a class="service_arrow left" href="javascript:void(0);"></a>
						<a class="service_arrow right uk-active" href="javascript:void(0);"></a>
					</div>
					<div class="service_bg bg_1"></div>
	 			</div>
			</div>
			<div class="col-12 col-xl-8 col-lg-7 service_box">
				<div class="service blue">
					<div class="service_title">Производство <br> конструкций</div>
					<ul class="service_list">
						<li>Производство объектов городской инфраструктуры (остановки общественного
					   транспорта, указательные стелы и пилоны и т.д.)</li>
						<li>Производство навигационных конструкций метрополитена</li>
						<li>Производство конструкций для фасадного и интерьерного оформление <br> ТЦ, БЦ, розничных объектов</li>
					</ul>
					<div class="service_navs">
						<a class="service_arrow left" href="javascript:void(0);"></a>
						<a class="service_arrow right uk-active" href="javascript:void(0);"></a>
					</div>
					<div class="service_bg bg_2"></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 service_box">
				<div class="service blue">
					<div class="service_title">Разработка визуальных <br> концепций оформления объекта</div>
					<ul class="service_list">
						<li>Разработка системного визуального ориентирования</li>
						<li>Разработка навигационных систем</li>
						<li>Разработка визуальных концепций оформления объектов</li>
					</ul>
					<div class="service_bg bg_3"></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 service_box">
				<div class="service gray">
					<div class="service_title">Монтажные <br> работы</div>
					<ul class="service_list">
						<li>Собственные монтажные бригады</li>
						<li>Собственный современный автопарк (автомобили: <br>
						Mercedes Sprinter, Peugeot Boxer, Fiat Ducato, Peugeot Partner)</li>
						<li>Высотные монтажные работы</li>
					</ul>
					<div class="service_navs">
						<a class="service_arrow left" href="javascript:void(0);"></a>
						<a class="service_arrow right uk-active" href="javascript:void(0);"></a>
					</div>
					<div class="service_bg bg_4"></div>
				</div>
			</div>
			<div class="col-12 col-xl-8 col-lg-7 service_box">
				<div class="service gray">
					<div class="service_title">Регистрация и согласование <br> конструкций с городом</div>
					<ul class="service_list">
						<li>Консультирование по возможности законного размещения конструкций</li>
						<li>Подготовка проектов и визуализаций для предварительной консультации <br>
						в городских структурах (по ЦР)</li>
						<li>Помощь в сборе необходимого пакета документа</li>
					</ul>
					<div class="service_navs">
						<a class="service_arrow left" href="javascript:void(0);"></a>
						<a class="service_arrow right uk-active" href="javascript:void(0);"></a>
					</div>
					<div class="service_bg bg_5"></div>
				</div>
			</div>
			<div class="col-12 col-xl-4 col-lg-5 service_box">
				<div class="service blue">
					<div class="service_title">Обслуживание <br> конструкций</div>
					<ul class="service_list">
						<li>Гарантийное и постгарантийное
					   обслуживание конструкций</li>
						<li>Мойка конструкций</li>
					</ul>
					<div class="service_bg bg_6"></div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!--=====================================
=            PRODUCTION               =
======================================-->
<!-- <section id="production" class="production_section">
	<div class="container">
		<div class="row production">
			<div class="col-lg-8 col-12">
				<h3 class="title_box">
					<div class="screen_title">
						<span class="angle"></span>
						<span>Производственный комплекс</span>
						<span class="bg">Производство</span>
					</div>
				</h3>
				<ul class="uk-switcher production_box">
					<li class="production_item">
						<div uk-slideshow="ratio: 3:2" class="production_images">
							<a uk-slideshow-item="previous" class="product_arrow left" href="#"></a>
							<a uk-slideshow-item="next" class="product_arrow right" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/production-1.jpg" class="res">
								<img src="img/production-2.jpg" class="res">
							</div>
						</div>
						<ul>
							<li>Чистота производственных помещений</li>
							<li>Наличие специализированных помещений для комфорта рабочих (столовая, душевые, комнаты для переодевания м/ж и т.д.</li>
							<li>Электронная система мониторинга и контроля выполнения заказа</li>
							<li>Система контроля при приемке готовых изделий</li>
						</ul>
					</li>
					<li class="production_item">
						<div uk-slideshow="ratio: 3:2" class="production_images">
							<a uk-slideshow-item="previous" class="product_arrow left" href="#"></a>
							<a uk-slideshow-item="next" class="product_arrow right" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/production-1.jpg" class="res">
								<img src="img/production-2.jpg" class="res">
							</div>
						</div>
						<ul>
							<li>Электронная система мониторинга и контроля выполнения заказа</li>
							<li>Система контроля при приемке готовых изделий</li>
							<li>Электронная система учета рабочего времени сотрудников</li>
							<li>Чистота производственных помещений</li>
							<li>Наличие специализированных помещений для комфорта рабочих (столовая, душевые, комнаты для переодевания м/ж и т.д.</li>
						</ul>
					</li>
					<li class="production_item">
						<div uk-slideshow="ratio: 3:2" class="production_images">
							<a uk-slideshow-item="previous" class="product_arrow left" href="#"></a>
							<a uk-slideshow-item="next" class="product_arrow right" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/production-1.jpg" class="res">
								<img src="img/production-2.jpg" class="res">
							</div>
						</div>
						<ul>
							<li>Электронная система мониторинга и контроля выполнения заказа</li>
							<li>Система контроля при приемке готовых изделий</li>
							<li>Электронная система учета рабочего времени сотрудников</li>
							<li>Чистота производственных помещений</li>
							<li>Наличие специализированных помещений для комфорта рабочих (столовая, душевые, комнаты для переодевания м/ж и т.д.</li>
						</ul>
					</li>
					<li class="production_item">
						<div uk-slideshow="ratio: 3:2" class="production_images">
							<a uk-slideshow-item="previous" class="product_arrow left" href="#"></a>
							<a uk-slideshow-item="next" class="product_arrow right" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/production-1.jpg" class="res">
								<img src="img/production-2.jpg" class="res">
							</div>
						</div>
						<ul>
							<li>Электронная система мониторинга и контроля выполнения заказа</li>
							<li>Система контроля при приемке готовых изделий</li>
							<li>Электронная система учета рабочего времени сотрудников</li>
							<li>Чистота производственных помещений</li>
							<li>Наличие специализированных помещений для комфорта рабочих (столовая, душевые, комнаты для переодевания м/ж и т.д.</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-12">
				<ul uk-switcher="connect: .production_box; animation: uk-animation-fade" class="production_thumbnav">
					<li class="production_thumbnav_item">
						<div>Собственный производственный комплекс</div>
						<a class="more" href="javascript:void(0);"><span>Подробнее</span></a>
					</li>
					<li class="production_thumbnav_item">
						<div>Культура производства</div>
						<a class="more" href="javascript:void(0);"><span>Подробнее</span></a>
					</li>
					<li class="production_thumbnav_item">
						<div>Полный цикл выполнения требуемых работ</div>
						<a class="more" href="javascript:void(0);"><span>Подробнее</span></a>
					</li>
					<li class="production_thumbnav_item">
						<div>Высотехнологичное современное оборудование</div>
						<a class="more" href="javascript:void(0);"><span>Подробнее</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="production_bg"></div>
</section> -->

<!--=====================================
=            PARTNERS               =
======================================-->
<!-- <section id="partners" class="partners_section">
	<div class="container">
		<h3 class="title_box hidden-md">
			<div class="screen_title dark">
				<span class="angle"></span>
				<span>Партнеры</span>
				<span class="bg">Партнеры</span>
			</div>
		</h3>
		<div class="row partners">
			<div class="col-lg-8 col-12">
				<ul class="partners_switcher uk-switcher">
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">Сбербанк</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>
						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/partners-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/partners-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">Ростелеком</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>
						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/services-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/partners-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">ГК Ригла</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>

						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/services-2.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/partners-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">Высшая школа экономики</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>

						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/services-3.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/partners-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">Ericsson</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>

						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/services-4.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/partners-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">Банк Русский стандарт</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>

						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/services-5.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/partners-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">КУКУ</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>
						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/work-1.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/work-2.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">КУКУ</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>
						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/work-2.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/work-3.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
					<li class="partners_item">
						<div class="partner_text">
							<div class="part_name">КУКУ</div>
							<div class="part_time">Сотрудничаем с холдингом с 2012г.</div>
							<div class="part_title">Являемся основным партнером Сбербанка по:</div>
							<ul class="list">
								<li>— изготовлению, монтажу и обслуживанию фасадных <br> и интерьерных конструкций</li>
								<li>— оформлению витрин</li>
								<li>— внутрение оформлению отделений офисов</li>
							</ul>
						</div>
						<div uk-slideshow="ratio: 3:2" class="partners_images">
							<a uk-slideshow-item="previous" class="partners_arrow left" href="#"></a>
							<ul class="uk-slideshow-items">
								<li>
									<img src="img/work-3.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
								<li>
									<img src="img/work-4.jpg" class="res">
			            <div class="partners_field">Рекламная вывеска на магазин материал: клен + металл БГ-3</div>
								</li>
							</ul>
							<a uk-slideshow-item="next" class="partners_arrow right" href="#"></a>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-12">
				<div class='partners_thumbs_viewport'>
					<div class="parthe">
						<button class="up">ВВЕРХ</button>
						<button class="down">ВНИЗ</button>
					</div>
					<div class="parthe2">
						<button class="up">UP</button>
						<button class="down">DOWN</button>
					</div>
					<ul class="partners_thumbs partners_thumbs2" uk-switcher="connect: .partners_switcher; toggle: > .partners_thumbnav_item; swiping: false;">
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/sber.png" class="res"></div>
							<div class="thumb_text">
								<div>Сбербанк</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/rostelekom.png" class="res"></div>
							<div class="thumb_text">
								<div>Ростелеком</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/rogla.png" class="res"></div>
							<div class="thumb_text">
								<div>ГК Ригла</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/shkola-ekonom.png" class="res"></div>
							<div class="thumb_text">
								<div>Высшая школа экономики</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/ericsson.png" class="res"></div>
							<div class="thumb_text">
								<div>Ericsson</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/rus-standart.png" class="res"></div>
							<div class="thumb_text">
								<div>Банк Русский стандарт</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/shkola-ekonom.png" class="res"></div>
							<div class="thumb_text">
								<div>КУКУ</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/ericsson.png" class="res"></div>
							<div class="thumb_text">
								<div>КУКУ</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
						<li class="partners_thumbnav_item">
							<div class="thumb_image"><img src="img/partners/rus-standart.png" class="res"></div>
							<div class="thumb_text">
								<div>КУКУ</div>
								<span>Короткое описание в две строки например</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--=====================================
=            OUR WORKS               =
======================================-->
<!-- <section id="our_works" class="our_works_section">
	<div class="container">
		<div class="row justify-content-center">
			<h3 class="title_box">
				<div class="screen_title">
					<span class="angle"></span>
					<span>Наши работы</span>
					<span class="bg">Наши работы</span>
				</div>
				<div class="subtitle">У нас правда крутые работы, посмотрите</div>
			</h3>

			<div class="col-xl-8 col-lg-10">
				<div class="uk-switcher works_list">
					<div class="work_item">
						<div class="title">Название изделия</div>
						<div uk-slideshow="ratio: 3:2" class="work_images">
							<a uk-slideshow-item="previous" class="work_arrow left" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/work-1.jpg" class="res">
								<img src="img/work-2.jpg" class="res">
							</div>
							<a uk-slideshow-item="next" class="work_arrow right" href="#"></a>
						</div>
						<div class="work_descript">
							<div><b>Материал</b>: металл, краска</div>
							<div><b>Срок изготовления</b>: 35 часов</div>
							<p>Аллегория, по определению, готично диссонирует глубокий хорал. Нивелирование индивидуальности диссонирует импрессионизм. Нивелирование индивидуальности, в том числе, готично использует драматизм, таким образом, сходные законы контрастирующего развития характерны и для процессов в психике. </p>
						</div>
					</div>

					<div class="work_item">
						<div class="title">Название изделия</div>
						<div uk-slideshow="ratio: 3:2" class="work_images">
							<a uk-slideshow-item="previous" class="work_arrow left" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/work-2.jpg" class="res">
								<img src="img/work-3.jpg" class="res">
							</div>
							<a uk-slideshow-item="next" class="work_arrow right" href="#"></a>
						</div>
						<div class="work_descript">
							<div><b>Материал</b>: металл, краска</div>
							<div><b>Срок изготовления</b>: 35 часов</div>
							<p>Аллегория, по определению, готично диссонирует глубокий хорал. Нивелирование индивидуальности диссонирует импрессионизм. Нивелирование индивидуальности, в том числе, готично использует драматизм, таким образом, сходные законы контрастирующего развития характерны и для процессов в психике. </p>
						</div>
					</div>

					<div class="work_item">
						<div class="title">Название изделия</div>
						<div uk-slideshow="ratio: 3:2" class="work_images">
							<a uk-slideshow-item="previous" class="work_arrow left" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/work-3.jpg" class="res">
								<img src="img/work-4.jpg" class="res">
							</div>
							<a uk-slideshow-item="next" class="work_arrow right" href="#"></a>
						</div>
						<div class="work_descript">
							<div><b>Материал</b>: металл, краска</div>
							<div><b>Срок изготовления</b>: 35 часов</div>
							<p>Аллегория, по определению, готично диссонирует глубокий хорал. Нивелирование индивидуальности диссонирует импрессионизм. Нивелирование индивидуальности, в том числе, готично использует драматизм, таким образом, сходные законы контрастирующего развития характерны и для процессов в психике. </p>
						</div>
					</div>

					<div class="work_item">
						<div class="title">Название изделия</div>
						<div uk-slideshow="ratio: 3:2" class="work_images">
							<a uk-slideshow-item="previous" class="work_arrow left" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/work-4.jpg" class="res">
								<img src="img/work-5.jpg" class="res">
							</div>
							<a uk-slideshow-item="next" class="work_arrow right" href="#"></a>
						</div>
						<div class="work_descript">
							<div><b>Материал</b>: металл, краска</div>
							<div><b>Срок изготовления</b>: 35 часов</div>
							<p>Аллегория, по определению, готично диссонирует глубокий хорал. Нивелирование индивидуальности диссонирует импрессионизм. Нивелирование индивидуальности, в том числе, готично использует драматизм, таким образом, сходные законы контрастирующего развития характерны и для процессов в психике. </p>
						</div>
					</div>

					<div class="work_item">
						<div class="title">Название изделия</div>
						<div uk-slideshow="ratio: 3:2" class="work_images">
							<a uk-slideshow-item="previous" class="work_arrow left" href="#"></a>
							<div class="uk-slideshow-items">
								<img src="img/work-5.jpg" class="res">
								<img src="img/work-1.jpg" class="res">
							</div>
							<a uk-slideshow-item="next" class="work_arrow right" href="#"></a>
						</div>
						<div class="work_descript">
							<div><b>Материал</b>: металл, краска</div>
							<div><b>Срок изготовления</b>: 35 часов</div>
							<p>Аллегория, по определению, готично диссонирует глубокий хорал. Нивелирование индивидуальности диссонирует импрессионизм. Нивелирование индивидуальности, в том числе, готично использует драматизм, таким образом, сходные законы контрастирующего развития характерны и для процессов в психике. </p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-12">
				<ul class="work_switcher" uk-switcher="connect: .works_list; ">
					<li class="uk-active work_thumb">
						<img src="img/work-thumb-1.jpg" class="res">
            <div class="work_field">Название проекта 1</div>
					</li>
					<li class="work_thumb">
						<img src="img/work-thumb-2.jpg" class="res">
            <div class="work_field">Название проекта 2</div>
					</li>
					<li class="work_thumb">
						<img src="img/work-thumb-3.jpg" class="res">
            <div class="work_field">Название проекта 3</div>
					</li>
					<li class="work_thumb">
						<img src="img/work-thumb-4.jpg" class="res">
            <div class="work_field">Название проекта 4</div>
					</li>
					<li class="work_thumb">
						<img src="img/work-thumb-5.jpg" class="res">
            <div class="work_field">Название проекта 5</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="our_work_bg"></div>
</section> -->

<footer class="footer">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-xl-3 col-md-4">
				<div class="footer_first">
					<img src="img/logo-footer.png">
					<a class="phone" href="tel:+7 (987) 697-42-56">+7 (987) 697-42-56</a>
					<a class="mail" href="mailto:somemail@email.com">somemail@email.com</a>
				</div>
			</div>
			<div class="col-xl-3 col-md-4">
				<div class="footer_second">
					г. Москва, м. Автозаводская <br>
				ул. Шарикоподшипниковская<br>
				дом №18, офис 236
				<a href="#">Схема проезда</a>
				</div>
			</div>
		</div>
	</div>
	<div class="copy">© «Деталь Бизнеса» 2018г.</div>
</footer>

<script src="<?php bloginfo('template_url') ?>/js/pushy.min.js"></script>

<!-- <script>

  var slider = tns({
    container: '.partners_thumbs',
    nav: false,
    loop: false,
    slideBy: '1',
    autoplay: false,
    controlsContainer: '.parthe',
		axis: "vertical",
    responsive: {
      320: {
        disable: true,
      },
      992: {
      	disable: false,
		    items: 6,
      }
    }
  });
  var slider = tns({
    container: '.partners_thumbs2',
    nav: false,
    loop: false,
    slideBy: '1',
    items: 3,
    autoplay: false,
    controlsContainer: '.parthe2',
		axis: "horizontal",
    responsive: {
      320: {
        items: 3,
      },
      768: {
        items: 4,
      },
      992: {
      	disable: true,
      }
    }
  });
</script> -->
<?php wp_footer() ?>
</body>
</html>
