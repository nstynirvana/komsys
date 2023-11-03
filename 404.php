<?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена - Ошибка 404");
$APPLICATION->SetPageProperty("title", "404 - Страница не найдена - Верхнерусские комунальные системы");
$APPLICATION->SetPageProperty("description", "");
$APPLICATION->AddChainItem("404");
?>

<section class="wrapper wrapper-404">
	<div class="box">
		<div class="text-1">Oops... Страница удалена или не найдена</div>
		<div class="text-2">404</div>
		<a href="/" class="all-btn"><span>На главную</span></a>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
