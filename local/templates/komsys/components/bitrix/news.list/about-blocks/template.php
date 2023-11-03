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
$count = 0;
?>

<?//dump($arResult);?>

<section class="wrapper wrapper-content">
	<div class="inner">
		<div class="row-about-page">
			<?foreach ($arResult["ITEMS"] as $arItem):?>
				<div class="text-rows">
					<div class="text <?if ($count % 2 == 0){?>right<?}else{?>left<?}?> wow zoomInUp animated" style="visibility: visible; animation-name: zoomInUp;"><?=$arItem["PREVIEW_TEXT"]?></div>
					<div class="img  wow zoomInDown animated" style="visibility: visible; animation-name: zoomInDown;"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></div>
				</div>
				<?$count++;?>
			<?endforeach;?>
		</div>
	</div>
</section>