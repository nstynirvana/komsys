<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>

<?/*echo "<pre>"; print_r($arResult); echo "</pre>";*/?>
<?if(!empty($arResult["SECTION"]["DESCRIPTION"])):?>
    <div class="inner">
        <div class="catalog-item-description-holder">
            <div><?= $arResult["SECTION"]["DESCRIPTION"] ?></div>
        </div>
    </div>
<?endif;?>

