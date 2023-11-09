<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог товаров");
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

<? /*$APPLICATION->IncludeComponent("bitrix:breadcrumb","main-breadcrumb",Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "s1" 
	)
);*/ ?>

    <section id="breadcrumbs">
        <div class="inner">
            <nav class="breadcrumbs">
                <ul>
                    <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs-row-new", array(),
                        false
                    ); ?>
                </ul>
            </nav>
        </div>
    </section>


<? $detailElementId = $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "product-detail",
    array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "Y",
        "SHARE_HIDE" => "N",
        "SHARE_TEMPLATE" => "",
        "SHARE_HANDLERS" => array(
            0 => "delicious",
        ),
        "SHARE_SHORTEN_URL_LOGIN" => "",
        "SHARE_SHORTEN_URL_KEY" => "",
        "AJAX_MODE" => "Y",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "1",
        "ELEMENT_ID" => "",
        "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
        "CHECK_DATES" => "Y",
        "FIELD_CODE" => array(
            0 => "ID",
            1 => "NAME",
            2 => "PREVIEW_TEXT",
            3 => "PREVIEW_PICTURE",
            4 => "DETAIL_TEXT",
            5 => "DETAIL_PICTURE",
            6 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "HEIGHT",
            1 => "DIAMETER",
            2 => "LENGTH",
            3 => "UNITS_IN_ONE_PRODUCT",
            4 => "INFO",
            5 => "MATERIAL",
            6 => "PURPOSE_OF_SEWER",
            7 => "WALL_THICKNESS",
            8 => "COLOR",
            9 => "PRICE",
            10 => "WIDTH",
            11 => "DESCRIPTION",
            12 => "",
        ),
        "IBLOCK_URL" => "",
        "DETAIL_URL" => "",
        "SET_TITLE" => "Y",
        "SET_CANONICAL_URL" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "BROWSER_TITLE" => "-",
        "SET_META_KEYWORDS" => "Y",
        "META_KEYWORDS" => "-",
        "SET_META_DESCRIPTION" => "Y",
        "META_DESCRIPTION" => "-",
        "SET_STATUS_404" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "Y",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Страница",
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "STRICT_SECTION_CHECK" => "Y",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "COMPONENT_TEMPLATE" => "product-detail",
        "AJAX_OPTION_ADDITIONAL" => "",
        "FILE_404" => ""
    ),
    false
); ?>

<?
$_SESSION["VIEWD_PRODUCTS"][$detailElementId] = $detailElementId;
?>

<? if (isset($_SESSION["VIEWD_PRODUCTS"]) && count($_SESSION["VIEWD_PRODUCTS"]) > 1): ?>

    <section id="catalog-items-slider was-seen">
        <div class="inner">

            <? $arrFilterViewd = array("ID" => $_SESSION["VIEWD_PRODUCTS"], "!ID" => $detailElementId); ?>

            <? $APPLICATION->IncludeComponent("bitrix:news.list", "viewed-catalog", array(
                "COMPONENT_TEMPLATE" => ".default",
                "IBLOCK_TYPE" => "catalog",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "1",    // Код информационного блока
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "FILTER_NAME" => "arrFilterViewd",    // Фильтр
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "NAME",
                    2 => "PREVIEW_TEXT",
                    3 => "PREVIEW_PICTURE",
                    4 => "DETAIL_TEXT",
                    5 => "DETAIL_PICTURE",
                    6 => "",
                ),
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "HEIGHT",
                    1 => "DIAMETER",
                    2 => "LENGTH",
                    3 => "UNITS_IN_ONE_PRODUCT",
                    4 => "INFO",
                    5 => "MATERIAL",
                    6 => "PURPOSE_OF_SEWER",
                    7 => "WALL_THICKNESS",
                    8 => "COLOR",
                    9 => "PRICE",
                    10 => "WIDTH",
                    11 => "",
                ),
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SHOW_404" => "N",    // Показ специальной страницы
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            ),
                false
            ); ?>

        </div>
    </section>

<? endif; ?>

<? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/template/about-template.php"), array(), array("MODE" => "html")); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>