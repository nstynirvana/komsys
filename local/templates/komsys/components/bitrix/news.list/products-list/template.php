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
<?//dump($arResult);?>
<section class="wrapper wrapper-content">
	<div class="inner">
		<div class="row-all-post">
			<?foreach ($arResult["ITEMS"] as $arItem):?>
				<article id="post-364" class="item wow zoomIn post-364 items type-items status-publish has-post-thumbnail hentry items-category-kotlyi-i-komplektuyuschie animated">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<div class="frame"><img width="180" height="252" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"></div>
						<div class="title"><?=$arItem["NAME"]?></div>
					</a>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="all-btn">Подробнее</a>
				</article>
			<?endforeach;?>				 
		</div>
	</div>
</section>