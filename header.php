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
					<a href="<?php echo get_home_url();?>#go_celebr"><li>Организация  праздников</li></a>
					<a href="<?php echo get_home_url();?>#go_concerts"><li>Организация  концертов</li></a>
					<a href="<?php echo get_home_url();?>#go_events"><li>наши  мероприятия</li></a>
					<a href="<?php echo get_home_url();?>#go_live"><li>Живая музыка Шоу-балет </li></a>
					<a href="<?php echo get_home_url();?>#go_photo"><li>Видеоографы Фотографы </li></a>
					<a href="<?php echo get_home_url();?>#go_rent"><li>Аренда  аппаратуры</li></a>
					<a href="<?php echo get_home_url();?>#go_contacts" ><li>контакты</li></a>
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


