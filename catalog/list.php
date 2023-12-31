<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог товаров");
CModule::IncludeModule("iblock");
global $USER;
$dir = $APPLICATION->GetCurDir();
?>

<?
$arFilterHref = array('IBLOCK_ID' => 1, 'GLOBAL_ACTIVE' => 'Y', "CODE" => $_REQUEST["SECTION_CODE"]);
$res = CIBlockSection::GetList(array($by => $order), $arFilterHref, true);
$ar_res = $res->GetNext();

if ($ar_res['SECTION_PAGE_URL'] != $APPLICATION->GetCurPage()):
    CHTTP::SetStatus("404 Not Found");
    @define("ERROR_404", "Y");
endif;
?>

<?
$arFilter = array('IBLOCK_ID' => 1, 'GLOBAL_ACTIVE' => 'Y', "CODE" => $_REQUEST["SECTION_CODE"]);
$db_list = CIBlockSection::GetList(array($by => $order), $arFilter, true);
while ($ar_result = $db_list->GetNext()) {

    $arrCurrentSectionInfo = $ar_result;

    $arFilterChilds = array('IBLOCK_ID' => 1, "SECTION_ID" => $ar_result['ID']);
    $db_listChilds = CIBlockSection::GetList(array("sort" => "asc"), $arFilterChilds, true);
    while ($ar_resultChilds = $db_listChilds->GetNext()) {

        $arrChilds[] = $ar_resultChilds;

    }

}

if ($_REQUEST["PROPROPROPARENT_SECTION_CODE"] != ""):
    $sectionCode = $_REQUEST["PROPROPROPARENT_SECTION_CODE"];
elseif ($_REQUEST["PROPROPARENT_SECTION_CODE"] != ""):
    $sectionCode = $_REQUEST["PROPROPARENT_SECTION_CODE"];
elseif ($_REQUEST["PROPARENT_SECTION_CODE"] != ""):
    $sectionCode = $_REQUEST["PROPARENT_SECTION_CODE"];
elseif ($_REQUEST["PARENT_SECTION_CODE"] != ""):
    $sectionCode = $_REQUEST["PARENT_SECTION_CODE"];
elseif ($_REQUEST["SECTION_CODE"] != ""):
    $sectionCode = $_REQUEST["SECTION_CODE"];
endif;

?>

<? $APPLICATION->IncludeComponent(
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
); ?>

<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "main-breadcrumb", array(
        "START_FROM" => "0",
        "PATH" => "",
        "SITE_ID" => "s1"
    )
); ?>

    <section class="wrapper wrapper-content wrapper-content_list">
        <? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "large-sections-list", array(
            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",    // Дополнительный фильтр для подсчета количества элементов в разделе
            "VIEW_MODE" => "TEXT",    // Вид списка подразделов
            "SHOW_PARENT_NAME" => "Y",    // Показывать название раздела
            "IBLOCK_TYPE" => "catalog",    // Тип инфоблока
            "IBLOCK_ID" => "1",    // Инфоблок
            "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],    // Код раздела
            "SECTION_URL" => "",    // URL, ведущий на страницу с содержимым раздела
            "COUNT_ELEMENTS" => "Y",    // Показывать количество элементов в разделе
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",    // Показывать количество
            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",    // Скрывать разделы с нулевым количеством элементов
            "TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
            "SECTION_FIELDS" => "",    // Поля разделов
            "SECTION_USER_FIELDS" => "",    // Свойства разделов
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "CACHE_NOTES" => "",
            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
        ),
            false
        ); ?>
    </section>

<? $APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "smart-filter-mobile", array(
    "COMPONENT_TEMPLATE" => ".default",
    "IBLOCK_TYPE" => "catalog",    // Тип инфоблока
    "IBLOCK_ID" => "1",    // Инфоблок
    "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела инфоблока
    "SECTION_CODE" => $_REQUEST["SECTION_CODE"],    // Код раздела
    "PREFILTER_NAME" => "smartPreFilter",    // Имя входящего массива для дополнительной фильтрации элементов
    "FILTER_NAME" => "arrFilter",    // Имя выходящего массива для фильтрации
    "TEMPLATE_THEME" => "blue",    // Цветовая тема
    "FILTER_VIEW_MODE" => "vertical",    // Вид отображения
    "POPUP_POSITION" => "left",    // Позиция для отображения всплывающего блока с информацией о фильтрации
    "DISPLAY_ELEMENT_COUNT" => "Y",    // Показывать количество
    "SEF_MODE" => "N",    // Включить поддержку ЧПУ
    "CACHE_TYPE" => "A",    // Тип кеширования
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "SAVE_IN_SESSION" => "N",    // Сохранять установки фильтра в сессии пользователя
    "PAGER_PARAMS_NAME" => "arrPager",    // Имя массива с переменными для построения ссылок в постраничной навигации
    "XML_EXPORT" => "N",    // Включить поддержку Яндекс Островов
    "SECTION_TITLE" => "-",    // Заголовок
    "SECTION_DESCRIPTION" => "-",    // Описание
),
    false
); ?>


    <section class="wrapper wrapper-content content-for-filter">
        <? if ($dir !== "/catalog/kotly-i-komplektuyushchie/" && $dir !== "/catalog/vodosbornye-sistemy/"): ?>
            <div class="inner__filter" style="display: flex; gap: 100px">
                <? $APPLICATION->IncludeComponent("bitrix:catalog.smart.filter",
                    "smart-filter",
//                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "IBLOCK_TYPE" => "catalog",    // Тип инфоблока
                        "IBLOCK_ID" => "1",    // Инфоблок
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела инфоблока
                        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],    // Код раздела
                        "PREFILTER_NAME" => "smartPreFilter",    // Имя входящего массива для дополнительной фильтрации элементов
                        "FILTER_NAME" => "arrFilter",    // Имя выходящего массива для фильтрации
                        "TEMPLATE_THEME" => "blue",    // Цветовая тема
                        "FILTER_VIEW_MODE" => "vertical",    // Вид отображения
                        "POPUP_POSITION" => "left",    // Позиция для отображения всплывающего блока с информацией о фильтрации
                        "DISPLAY_ELEMENT_COUNT" => "Y",    // Показывать количество
                        "SEF_MODE" => "N",    // Включить поддержку ЧПУ
                        "CACHE_TYPE" => "A",    // Тип кеширования
                        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                        "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                        "SAVE_IN_SESSION" => "N",    // Сохранять установки фильтра в сессии пользователя
                        "PAGER_PARAMS_NAME" => "arrPager",    // Имя массива с переменными для построения ссылок в постраничной навигации
                        "XML_EXPORT" => "N",    // Включить поддержку Яндекс Островов
                        "SECTION_TITLE" => "-",    // Заголовок
                        "SECTION_DESCRIPTION" => "-",    // Описание
                    ),
                    false
                ); ?>
                <div class="inner">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "products-list",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "Y",
                            "FIELD_CODE" => array(
                                0 => "ID",
                                1 => "",
                            ),
                            "FILTER_NAME" => "arrFilter",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "catalog",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "500",
                            "PAGER_BASE_LINK" => "",
                            "PAGER_BASE_LINK_ENABLE" => "Y",
                            "PAGER_DESC_NUMBERING" => "Y",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_PARAMS_NAME" => "arrPager",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "DESCRIPTION",
                                2 => "",
                            ),
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "Y",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC",
                            "COMPONENT_TEMPLATE" => "products-list",
                            "FILE_404" => "",
                            "STRICT_SECTION_CHECK" => "Y"
                        ),
                        false
                    ); ?>
                </div>
            </div>

        <? else: ?>
            <div class="inner">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "products-list",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "",
                        ),
                        "FILTER_NAME" => "arrFilter",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "catalog",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "500",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "PAGER_DESC_NUMBERING" => "Y",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "DESCRIPTION",
                            2 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "Y",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "COMPONENT_TEMPLATE" => "products-list",
                        "FILE_404" => "",
                        "STRICT_SECTION_CHECK" => "Y"
                    ),
                    false
                ); ?>
            </div>
        <? endif; ?>

        <? $APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "text-for-list",
            array(
                "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "catalog",
                "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                "SECTION_FIELDS" => array(
                    0 => "DESCRIPTION",
                    1 => "",
                ),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "VIEW_MODE" => "LINE",
                "COMPONENT_TEMPLATE" => "text-for-list"
            ),
            false
        ); ?>

    </section>


<? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/template/about-template.php"), array(), array("MODE" => "html")); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>