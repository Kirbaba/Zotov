	<section class="contacts">
		<h3 class="blockTitle"><span>Контакты</span></h3>
		<div id="map_canvas" style="width:100%; height:100%"></div>
		<div class="contacts__info">
			<h2>Наш телефон<br>938-937</h2>
		</div>
	</section>

	<footer class="footer">
		<div class="wac-copyright">
		<a href="http://web-artcraft.com">
			<i></i>
		</a>
		</div>
	</footer>
    
	<div class="modal fade" id="callme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><!--&times;--></button>
	            <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
	            	<input type="text" name="name" id = "name_inp" class="formPopup" placeholder="Ваше имя" required >
	            	<input type="email" name="email" id = "mail_inp" class="formPopup" placeholder="Ваш e-mail" required>
	            	<textarea class="formPopupText" name="mes" id = "text" placeholder="Введите ваше сообщение" required></textarea>
	            	<input class="formPopupSub" type="button" id="button" value="Отправить сообщение" style="cursor: pointer">
					<?php //echo do_shortcode("[contact-form-7 id='5' title='Form1']"); ?>

	            </form>
	            
	        </div>
	    </div>
	</div>

<?php wp_footer(); ?>
</body>
</html>