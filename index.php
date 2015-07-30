<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="header__logo">
			<a href="#nowhere"><img src="<?php bloginfo('template_directory'); ?>/img/ZOTOV.png" alt=""></a>
		</div>
		<div class="header__nav">
			<nav class="navMenu">
				<ul>
					<a href="#nowhere"><li>Организация  праздников</li></a>
					<a href="#nowhere"><li>Организация  концертов</li></a>
					<a href="#nowhere"><li>наши  мероприятия</li></a>
					<a href="#nowhere"><li>Живая музыка Шоу-балет </li></a>
					<a href="#nowhere"><li>Видеоографы Фотографы </li></a>
					<a href="#nowhere"><li>Аренда  аппаратуры</li></a>
					<a href="#nowhere"><li>контакты</li></a>
				</ul>
			</nav>
		</div>
	</header>

	<section class="slider">
		<div class="fotorama" data-arrows="false" data-minwidth="100%"	data-ratio="1634/697" data-autoplay="true" data-loop="true">											
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">				
			</div>
	</section>

	<section class="events">
		<h3 class="blockTitle"><span>наши мероприятия</span></h3>
		<div class="contain">
			<h1>OpenAir RECORD CLUB, 29 августа, ЯХТ-КЛУБ "УРАЛ"</h1>
			<h4>29 августа Afterparty Дня города и закрытие летнего сезона <br>
на грандиозном OpenAir'е "RECORD CLUB" !</h4>
			<div class="events__block">
				<div class="events__block--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/HnJvEr6ztPo.jpg" alt="">
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
			</div>
		</div>
	</section>

	<section class="livemusic">
		<h3 class="blockTitle"><span>наши мероприятия</span></h3>
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
	<footer class="footer">
		
	</footer>
    
<?php wp_footer(); ?>
</body>
</html>