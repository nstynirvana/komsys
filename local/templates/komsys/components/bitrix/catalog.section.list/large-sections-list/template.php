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
$this->setFrameMode(true);?>


<div class="inner">
    <div class="row-all-category row-all-category_list">
        <?foreach ($arResult["SECTIONS"] as $arSection):?>
            <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="item item_list wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                <div class="child">
				<span class="frame">
					<img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="<?=$arSection["NAME"]?>" title="<?=$arSection["NAME"]?>">
			    </span>
                    <span class="title"><?=$arSection["NAME"]?></span>
                </div>
            </a>
        <?endforeach;?>
    </div>
</div>
