<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$dir = $APPLICATION->GetCurDir();
?>
<?
global $USER
?>

<?/*echo "<pre>"; print_r($arResult['PROPERTIES']); echo "</pre>";*/?>

        <div class="catalog-item-description">
            <div class="catalog-item-description-holder">
                <p itemprop="description"><?= $arResult["PREVIEW_TEXT"] ?></p>
            </div>
        </div>
