<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<footer class="wrapper footer">
		<div class="inner">
			<div class="box-list">
				<div class="list">
					<div class="title"><span>КАТАЛОГ</span></div>
					<ul>
						<li><a href="/catalog/kotly-i-komplektuyushchie/">Котлы и комплектующие</a></li>
						<li><a href="/catalog/kanalizatsionnye-sistemy/">Канализационное оборудование</a></li>
						<li><a href="/catalog/vodosbornye-sistemy/">Водосборные системы</a></li>
					</ul>
				</div>
				<div class="list">
					<div class="title"><span>О КОМПАНИИ</span></div>
					<ul>
						<li><a href="/privacy-policy">Политика конфиденциальности</a></li>
						<li><a href="/certificates/">Сертификаты</a></li>
					</ul>
				</div>
			</div>
			<div class="box wow fadeInUp">
				<div class="text">© 2010–2023 «Верхнерусские Коммунальные Системы»</div>
			</div>
		</div>
	</footer>
</main>
 <?
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
//dump($_SERVER);
?>
<div class="modal" id="modal-send">
	<a onclick="closeModal();" class="all-modal-close"></a>
	<div class="modal-content">
		<a onclick="closeModal();" class="m-close"><i class="svg close"></i></a>
		<div class="modal-head">
			<span>ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</span>
			<p>Оставьте нам свои контактные данные, и мы свяжемся с вами в ближайшее время</p>
		</div>
		<div class="modal-body send">
			<div id="text-2" class="widget widget_text">
				<div class="textwidget">
					<div role="form" class="wpcf7" id="wpcf7-f123-o1" lang="ru-RU" dir="ltr">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true"></p>
							<ul></ul>
						</div>
						<form action="" class="wpcf7-form init" id="form2" onsubmit="ym(74905594,'reachGoal','sendRecallForm'); return true;">
							<input type="hidden" name="form" value="2">
							<input type="hidden" name="url" value="<?=$url?>">
							<div class="item">
								<span class="wpcf7-form-control-wrap your-name">
									<input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Ваше имя" required>
								</span>
							</div>
							<div class="item">
								<span class="wpcf7-form-control-wrap your-tel">
									<input type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Ваш номер телефона" required>
								</span>
							</div>
							<div class="policy-item">
								<i class="svg padlock"></i>
								<div class="desc">Нажимая отправить Вы соглашаетесь с <a href="/privacy-policy/">политикой конфиденциальности</a> сайта Ваши данные в безопасности и не будут переданы третьим лицам</div>
							</div>
							<div class="buttons"><input type="submit" value="ОТПРАВИТЬ" class="wpcf7-form-control wpcf7-submit all-btn">
								<span class="ajax-loader"></span>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="//code.jivo.ru/widget/Dem0vqYkhE" async></script>
</body>
</html>