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

<section class="wrapper wrapper-content">
	<div class="inner certificates-block">
		
		<div class="row-all-post ">
			<?foreach ($arResult["ITEMS"] as $arItem):?>
				<? // Сжимаю изображение ?>
				<?$resizeImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => "230px", "height" => "325px"), BX_RESIZE_IMAGE_PROPORTIONAL, false);?>
				<a class="certificate-item-container" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-fancybox="gallery">
					<div class="cont">
					<img src="<?=$resizeImg["src"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" class="item-img"></div>
				</a>
				
			<?endforeach;?>
		</div>
	</div>
</section>

<?=$arResult["NAV_STRING"]?>