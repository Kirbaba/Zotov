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
		<div class="fotorama" data-arrows="false" width="100%"	data-height="845/465" data-autoplay="true" data-loop="true">											
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">						
				<img src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="placeholder+image">				
			</div>
	</section>

	<footer class="footer">
		
	</footer>
    
<?php wp_footer(); ?>
</body>
</html>