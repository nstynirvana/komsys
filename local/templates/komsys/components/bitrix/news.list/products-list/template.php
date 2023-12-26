<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
global $USER;
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? //dump($arResult);?>
<div class="row-all-post">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <article id="post-364"
                 class="item wow zoomIn post-364 items type-items status-publish has-post-thumbnail hentry items-category-kotlyi-i-komplektuyuschie animated">
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                <div class="frame"><img width="180" height="252" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                        alt="<?= $arItem["NAME"] ?>" title="<?= $arItem["NAME"] ?>"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                        loading="lazy"></div>
                <div class="title"><?= $arItem["NAME"] ?></div>

            </a>
            <?if($USER -> isAdmin()):?>
                <div class="bx-filter-param-text">
                    <span><?= $arItem["PROPERTIES"]["PURPOSE_OF_SEWER"]["VALUE"] ?>.</span>
                    <?if(!empty($arItem["PROPERTIES"]["DIAMETER"]["VALUE"])):?>
                    <span><?= $arItem["PROPERTIES"]["DIAMETER"]["VALUE"] ?> мм.</span>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["LENGTH"]["VALUE"])):?>
                    <span><?= $arItem["PROPERTIES"]["LENGTH"]["VALUE"] ?> м.</span>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["MATERIAL"]["VALUE"])):?>
                        <span><?= $arItem["PROPERTIES"]["MATERIAL"]["VALUE"] ?>.</span>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["COLOR"]["VALUE"])):?>
                        <span><?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>.</span>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["CORNER"]["VALUE"])):?>
                        <span><?= $arItem["PROPERTIES"]["CORNER"]["VALUE"] ?>.</span>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["WIDTH"]["VALUE"])):?>
                        <span><?= $arItem["PROPERTIES"]["WIDTH"]["VALUE"] ?>.</span>
                    <?endif;?>
                </div>
            <?endif;?>
            <!--					<a href="-->
            <? //=$arItem["DETAIL_PAGE_URL"]?><!--" class="all-btn">Подробнее</a>-->
        </article>
    <? endforeach; ?>
</div>
