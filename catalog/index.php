<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "В нашем каталоге вы найдете различные модели котлов КСУВ, внутреннюю и наружную канализацию, водосборные системы. Оформить заявку на нашу продукцию вы можете на сайте или по телефонам: +7 (865) 532-08-45, +7 (938) 358-27-94");
$APPLICATION->SetTitle("Каталог товаров - ООО НПО 'Верхнерусские коммунальные системы'");
?>

<?
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
?>





<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"under-header", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"VIEW_MODE" => "TEXT",
		"SHOW_PARENT_NAME" => "Y",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "UF_ALTERNATIVE_NAME",
			1 => "UF_ALTERNATIVE_IMG",
			2 => "",
		),
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y",
		"COMPONENT_TEMPLATE" => "under-header",
		"FILTER_NAME" => "sectionsFilter",
		"CACHE_FILTER" => "N"
	),
	false
);?>

<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","main-breadcrumb",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);?>

<?//dump($_REQUEST);?>

	<section class="wrapper wrapper-content">
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","large-sections",
		Array(
				"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",		
				"VIEW_MODE" => "TEXT",
				"SHOW_PARENT_NAME" => "Y",
				"IBLOCK_TYPE" => "catalog",
				"IBLOCK_ID" => "1",
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
				"SECTION_URL" => "",
				"COUNT_ELEMENTS" => "Y",
				"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
				"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
				"TOP_DEPTH" => "2",
				"SECTION_FIELDS" => "",
				"SECTION_USER_FIELDS" => "",
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_NOTES" => "",
				"CACHE_GROUPS" => "Y"
			)		
		);?>
	</section>










<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath($dir."/include/template/about-template.php"),Array(),Array("MODE"=>"html"));?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>