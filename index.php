<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/themes/Zotov/img/favicon (1).ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/themes/Zotov/img/favicon (1).ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="header__logo">
			<a href="<?php echo get_home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/ZOTOV.png" alt=""></a>
		</div>
		<div class="header__nav">
			<nav class="navMenu">
				<ul>
					<a href="#go_celebr" class="smoothScroll"><li>Организация  праздников</li></a>
					<a href="#go_concerts" class="smoothScroll"><li>Организация  концертов</li></a>
					<a href="#go_events" class="smoothScroll"><li>наши  мероприятия</li></a>
					<a href="#go_live" class="smoothScroll"><li>Живая музыка Шоу-балет </li></a>
					<a href="#go_photo" class="smoothScroll"><li>Видеоографы Фотографы </li></a>
					<a href="#go_rent" class="smoothScroll"><li>Аренда  аппаратуры</li></a>
					<a href="#go_contacts" class="smoothScroll"><li>контакты</li></a>
				</ul>
			</nav>
		</div>
	</header>

	<section class="slider">
		<!-- <div class="fotorama" data-arrows="false" data-minwidth="100%"	data-ratio="1634/697" data-fit="cover" data-autoplay="true" data-loop="true">											
			<img src="<?php bloginfo('template_directory'); ?>/img/slide1-1.png" alt="placeholder+image">						
			<img src="<?php bloginfo('template_directory'); ?>/img/1388672510_1-37.jpg" alt="placeholder+image">						
			<img src="<?php bloginfo('template_directory'); ?>/img/bg10.jpg" alt="placeholder+image">						
			<img src="<?php bloginfo('template_directory'); ?>/img/reveillon-du-31.jpg" alt="placeholder+image">				
		</div> -->
		<?php echo do_shortcode('[headSlides]') ?>
	</section>
<a id="go_events" name="go_events" class="internal_links"></a>
	<section class="events">
		<h3 class="blockTitle"><span>наши мероприятия</span></h3>
		<div class="contain">
			<h1>OpenAir RECORD CLUB, 29 августа, ЯХТ-КЛУБ "УРАЛ"</h1>
			<h4>29 августа Afterparty Дня города и закрытие летнего сезона <br>
на грандиозном OpenAir'е "RECORD CLUB" !</h4>

            <?php do_shortcode('[events]');?>

			<!--<div class="events__block">
				<div class="events__block--img">
					<img src="<?php /*bloginfo('template_directory'); */?>/img/HnJvEr6ztPo.jpg" alt="">
				</div>
				<div class="events__block--desc">
					<h3>Ближайшее  мероприятие</h3>
					<a href="#nowhere">Подробнее</a>
				</div>
			</div>
			<div class="events__block">
				<div class="events__block--desc">
					<h3>Скоро</h3>
				</div>
			</div>
			<div class="events__block">
				<div class="events__block--desc">
					<h3>Скоро</h3>
				</div>
			</div>
			<div class="events__block">
				<div class="events__block--desc">
					<h3>Скоро</h3>
				</div>
			</div>-->
		</div>
	</section>
<a id="go_live" name="go_leve" class="internal_links"></a>
	<section class="livemusic">
		<h3 class="blockTitle"><span>шоу балет и живая музыка</span></h3>
		<div class="livemusic__mic"></div>
		<div class="livemusic__text">
			<h2>Вы можете согласовать <span class="red">плей-лист</span> 
			праздника заранее, а возможно, составить 
			несколько таких списков. Ансамбли, ди-джеи, 
			солисты  чувствуют потребности публики. 
			а Индивидуальный подход к каждому человеку 
			обеспечит <span class="red">успех любой вечеринки</span>.</h2>
		</div>
	</section>

	<a id="go_celebr" name="go_celebr" class="internal_links"></a>
	<section class="celebrations">
		<h3 class="blockTitle"><span>ОРГАНИЗАЦИЯ ПРАЗДНИКОВ</span></h3>
		<h2>Твое ЗАВТРА определяется выбором СЕГОДНЯ!</h2>
		<div class="line">
			<div class="celebrations__block">			
				<div class="celebrations__block__img">
					<img src="<?php bloginfo('template_directory'); ?>/img/weddings.png" alt="">
				</div>
				<h4>Свадьбы</h4>
			</div>
			<div class="celebrations__block">
				<div class="celebrations__block__img">
					<img src="<?php bloginfo('template_directory'); ?>/img/temp-38.png" alt="">
				</div>
				<h4>ДЕТСКИЕ<br>ПРАЗДНИКИ </h4>
			</div>
			<div class="celebrations__block">
				<div class="celebrations__block__img">
					<img src="<?php bloginfo('template_directory'); ?>/img/adults.png" alt="">
				</div>
				<h4>ПРАЗДНИКИ<br>ДЛЯ ВЗРОСЛЫХ</h4>
			</div>
			<div class="celebrations__block">
				<div class="celebrations__block__img">
					<img src="<?php bloginfo('template_directory'); ?>/img/corporative-actions.png" alt="">
				</div>
				<h4>КОРПОРАТИВЫ</h4>
			</div>
			<div class="celebrations__block">
				<div class="celebrations__block__img">
					<img src="<?php bloginfo('template_directory'); ?>/img/surprises.png" alt="">
				</div>
				<h4>СЮРПРИЗЫ</h4>
			</div>
		</div>
		<div class="celebrations__block__write">
			<a data-toggle="modal" href="#callme">Написать нам</a>
		</div>		
	</section>

	<section class="photografers"><a id="go_photo" name="go_photo" class="internal_links"></a>
		<h3 class="blockTitle"><span>фотографы и видеографы</span></h3>
		<div class="contain">
			<h4>В нашей студии вы можете заказать весь комплекс услуг по фотосъемке: 
			выезд фотографа на место, составление сценария фотосъемки, 
			непосредственно сама фотосессия </h4>
			<!-- <div id="gallery" class="zoomwall">
			    <img src="<?php bloginfo('template_directory'); ?>/img/img (1).jpg" data-highres="<?php bloginfo('template_directory'); ?>/img/img (1).jpg" />
			    <img src="<?php bloginfo('template_directory'); ?>/img/img (2).jpg" data-highres="<?php bloginfo('template_directory'); ?>/img/img (2).jpg" />
			    <img src="<?php bloginfo('template_directory'); ?>/img/img (3).jpg" data-highres="<?php bloginfo('template_directory'); ?>/img/img (3).jpg" />
			     <img src="<?php bloginfo('template_directory'); ?>/img/img (4).jpg" data-highres="<?php bloginfo('template_directory'); ?>/img/img (4).jpg" />
			    <img src="<?php bloginfo('template_directory'); ?>/img/img (5).jpg" data-highres="<?php bloginfo('template_directory'); ?>/img/img (5).jpg" />
			</div> -->
				<?php echo do_shortcode('[photographersGallery]') ?>
		</div>
		<div class="arrow-left"></div>
		<div class="arrow-right"></div>
	</section>
<a id="go_rent" name="go_rent" class="internal_links"></a>
	<section class="rent">
		<h3 class="blockTitle"><span>АРЕНДА АППАРАТУРЫ</span></h3>
		<div class="contain">
			<div class="rent__leftBg"></div>
			<div class="rent__content">
				<p class="rent__content__item1">
					Вы оставляете заявку <br>
					и мы связываемся с Вами <br>
					в течение 30 минут
				</p>
				<p class="rent__content__item2">
					Составляем заказ <br>
					на аппаратуру
				</p>
				<p class="rent__content__item3">
					Оплачиваете заказ<br>
					и ждете доставку
				</p>
				<p class="rent__content__item4">
					Вы наслаждаетесь <br>
					прекрасным звуком
				</p>
				<p class="rent__content__item5">
					Спасибо за сотрудничество
				</p>
				<a class="rent__but" data-toggle="modal" href="#callme">Написать нам</a>
			</div>			
		</div>
		<div class="rent__rightBg"></div>
	</section>
	<a id="go_concerts" name="go_concerts" class="internal_links"></a>
	<section class="concerts">
		<h3 class="blockTitle"><span>организация концертов</span></h3>
		<div class="concerts__content">
			<h2>Пригласить <span class="red">АРТИСТА</span> <br> к себе на Мероприятие – <span class="red">просто!</span></h2>
			<div class="concerts__content__but">
				<a  data-toggle="modal" href="#callme">Заказать</a>	
			</div>		
		</div>
		<div class="concerts__posters">
			<div class="concerts__posters--one"></div>
			<div class="concerts__posters--two"></div>
		</div>
	</section>
	<a id="go_contacts" name="go_contacts" class="internal_links"></a>
<? get_footer(); ?>
