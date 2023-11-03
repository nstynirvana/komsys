<?
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>


<?
$mailTo = "contact@komsys.ru";
$mailFrom = "contact@komsys.ru";
?>


<?
if (!empty($_POST['name']) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

	// Удаляем html и php теги
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['mail']);
	$tel = strip_tags($_POST['tel']);
	$formId = strip_tags($_POST['form']);
	$url = strip_tags($_POST['url']);

	if ($formId == 1) {
		//$message = 'Имя: ' . $name .  "<br>";
    	//$message .= 'Телефон: ' . $tel .  "<br>";
    	//$message .= 'E-Mail: ' . $email .  "<br>";
    	//$message .= 'Отправлено со страницы: ' . $url . "<br>";

    	$message = '<div style="position: relative; display: block; width: 100%; max-width: 920px; margin: 0 auto;">
						<center style="position: relative; display: block; width: 100%; margin: 0 auto 30px;">
							<h1>ОБРАТНАЯ СВЯЗЬ</h1>
							<p>Пользователь запросил обратную связь</p>
						</center>
						<div style="display: flex; width: 100%; background: #f4f6f8; border-radius: 10px; margin: 0 auto 10px; align-items: center;">
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: right; padding: 15px;">Имя пользователя:</span>
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: left; padding: 15px;">'. $name .'</span>
						</div>
						<div style="display: flex; width: 100%; background: #f4f6f8; border-radius: 10px; margin: 0 auto 10px; align-items: center;">
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: right; padding: 15px;">Номер пользователя:</span>
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: left; padding: 15px;">'. $tel .'</span>
						</div>
						<div style="display: flex; width: 100%; background: #f4f6f8; border-radius: 10px; margin: 0 auto 10px; align-items: center;">
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: right; padding: 15px;">E-Mail пользователя:</span>
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: left; padding: 15px;">'. $email .'</span>
						</div>
						<div style="display: flex; width: 100%; background: #f4f6f8; border-radius: 10px; margin: 0 auto 10px; align-items: center;">
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: right; padding: 15px;">Отправлено со страницы:</span>
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: left; padding: 15px;">'. $url .'</span>
						</div>
					</div>';

    	$subject = "Заполнена форма обратной связи";

    	$headers= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-type: text/html; charset=utf-8\r\n";
    	$headers .= "From: ". $mailFrom ." <". $mailFrom .">\r\n";
	}





	if ($formId == "2") {


    	$message = '<div style="position: relative; display: block; width: 100%; max-width: 920px; margin: 0 auto;">
						<center style="position: relative; display: block; width: 100%; margin: 0 auto 30px;">
							<h1>ОБРАТНАЯ СВЯЗЬ</h1>
							<p>Пользователь запросил обратную связь</p>
						</center>
						<div style="display: flex; width: 100%; background: #f4f6f8; border-radius: 10px; margin: 0 auto 10px; align-items: center;">
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: right; padding: 15px;">Имя пользователя:</span>
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: left; padding: 15px;">'. $name .'</span>
						</div>
						<div style="display: flex; width: 100%; background: #f4f6f8; border-radius: 10px; margin: 0 auto 10px; align-items: center;">
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: right; padding: 15px;">Номер пользователя:</span>
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: left; padding: 15px;">'. $tel .'</span>
						</div>
						<div style="display: flex; width: 100%; background: #f4f6f8; border-radius: 10px; margin: 0 auto 10px; align-items: center;">
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: right; padding: 15px;">Отправлено со страницы:</span>
							<span style="position: relative; display: block; width: 50%; color: #000; font-size: 16px; text-align: left; padding: 15px;">'. $url .'</span>
						</div>
					</div>';

    	$subject = "Заполнена форма обратной связи";

    	$headers= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-type: text/html; charset=utf-8\r\n";
    	$headers .= "From: ". $mailFrom ." <". $mailFrom .">\r\n";
	}







	$res = mail($mailTo, $subject, $message, $headers);
	//echo $res;
	if ($res) {
		echo "Письмо успешно Отправлено";
	} else {
		echo "Ошибка при отправке";
	}

}
?>







