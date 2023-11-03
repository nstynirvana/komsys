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
<section class="wrapper wrapper-slider">
	<div class="slider">
		<?foreach ($arResult["ITEMS"] as $arItem):?>
			<div class="item">
			    <div class="img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
			    <div class="box">
			    	<div class="text-1 animated05 fadeInUp">Наш объект</div>
				   	<?if ($arItem["PREVIEW_TEXT"]):?>
			    		<div class="text-2 animated05 fadeInUp"><?=$arItem["PREVIEW_TEXT"]?></div>
				   	<?endif;?>
				   	<?if ($arItem["PROPERTIES"]["BTN_NAME"]["VALUE"]):?>
			    		<a href="<?=$arItem["PROPERTIES"]["BTN_LINK"]["VALUE"]?>" class="all-border-btn animated05 fadeInUp">
			    			<i class="svg arrow"></i>
			    			<span><?=$arItem["PROPERTIES"]["BTN_NAME"]["VALUE"]?></span>
			    		</a>
				   	<?endif;?>
			    </div>
			</div>
		<?endforeach;?>
	</div>
</section>