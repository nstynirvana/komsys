<?
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
//dump($_SERVER);
?>

<section class="wrapper wrapper-content form-section">
	<div class="inner">
		<div class="container">
			<div class="title">Остались вопросы? Мы вам перезвоним.</div>
			<div class="form-contaier">
				<form action="" class="new-form" id="form1" onsubmit="ym(74905594,'reachGoal','sendRecallForm'); return true;">
					<div class="form-inputs">
						<div class="inputs-container">
							<input type="text" name="name" placeholder="Имя" class="new-form-input" required>
							<input type="tel" name="tel" placeholder="Телефон" class="new-form-input" required>
							<input type="email" name="mail" placeholder="Email" class="new-form-input">
							<input type="hidden" name="form" value="1">
							<input type="hidden" name="url" value="<?=$url?>">
						</div>
						
						<button type="submit">Отправить</button>
						<div class="tablet-view">
							<button type="submit">Отправить</button>
							<div class="policy-item">
								<i class="svg padlock"></i>
								<div class="desc">Нажимая отправить Вы соглашаетесь с <a href="/privacy-policy/">политикой конфиденциальности</a> сайта Ваши данные в безопасности и не будут переданы третьим лицам</div>
							</div>
						</div>
					</div>
					<div class="policy-item">
						<i class="svg padlock"></i>
						<div class="desc">Нажимая отправить Вы соглашаетесь с <a href="/privacy-policy/">политикой конфиденциальности</a> сайта Ваши данные в безопасности и не будут переданы третьим лицам</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<div class="modal" id="modal-sended">
	<a onclick="closeModal();" class="all-modal-close"></a>
	<div class="modal-content">
		<a onclick="closeModal();" class="m-close"><i class="svg close"></i></a>
		<div class="modal-head">
			<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="40" height="40" rx="20" fill="#374898"/>
<path d="M11 21.5L16 26.5L29 13.5" stroke="white"/>
</svg>
			<span>Вы успешно заполнили форму.</span>
			<p>В ближайшее время с вами свяжутся наши менеджеры.</p>
		</div>
	</div>
</div>