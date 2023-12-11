<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Вы можете связаться с нами, оставив заявку на сайте, по телефонам +7 (865) 532-08-45, +7 (938) 358-27-94, или написав письмо на почтовый ящик contact@komsys.ru");
$APPLICATION->SetTitle("Контакты - ООО НПО 'Верхнерусские коммунальные системы'");
$APPLICATION->AddHeadString('<meta property="og:title" content="Контакты - ООО НПО Верхнерусские коммунальные системы" />');
$APPLICATION->AddHeadString('<meta property="og:description" content="Вы можете связаться с нами, оставив заявку на сайте, по телефонам +7 (865) 532-08-45, +7 (938) 358-27-94, или написав письмо на почтовый ящик contact@komsys.ru" />');
$APPLICATION->AddHeadString('<meta property="og:image" content="https://komsys.ru/images/manuf-slider1.png" />');
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

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/template/about-template.php"),Array(),Array("MODE"=>"html"));?>

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/template/new-form.php"),Array(),Array("MODE"=>"html"));?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>