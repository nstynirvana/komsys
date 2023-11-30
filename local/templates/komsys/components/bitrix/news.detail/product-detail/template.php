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


<? //echo "<pre style=display:none;>"; print_r($arResult); echo "</pre>";?>

<? ///$sectionName = array_pop($arResult["SECTION"]["PATH"]); ?>
<?
global $USER
?>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        $('.image-full-view-holder').slick({
            dots: true,
            infinite: false,
            arrows: true,
            dotsClass: 'slick-dots similar__dots',
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    });
</script>

<section id="catalog-item-detail">
    <div class="inner" itemscope itemtype="http://schema.org/Product">
        <div class="catalog-item-detail">
            <div class="image">
                <div class="image-holder">
                    <div class="images-gallery">
                        <div class="image-full-view">
                            <div class="nav">
                            </div>

                            <div class="image-full-view-holder">
                                <? foreach ($arResult["PHOTOS"] as $photo): ?>
                                    <div class="image">
                                        <div class="image-holder">
                                            <img itemprop="image" src="<?= $photo["SRC"] ?>" alt="<?= $arResult["NAME"] ?>">
                                        </div>
                                    </div>
                                <? endforeach; ?>
                            </div>

                        </div>
                        <div class="images-previews">
                            <div class="prev">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0L5.88125 0.88125L2.39375 4.375H10V5.625H2.39375L5.88125 9.11875L5 10L0 5L5 0Z"
                                          fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="next">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0L5.88125 0.88125L2.39375 4.375H10V5.625H2.39375L5.88125 9.11875L5 10L0 5L5 0Z"
                                          fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="images-previews-holder">
                                <? foreach ($arResult["PHOTOS"] as $pictureSlide): ?>
                                    <div class="preview">
                                        <div class="preview-holder">
                                            <a href="javascript:void(0)">
                                                <img src="<?= $pictureSlide["SRC"] ?>"
                                                     alt="<?= $arResult["NAME"] ?>">
                                            </a>
                                        </div>
                                    </div>
                                <? endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-item">
                <div class="about-item-holder">
                    <div class="name">
                        <h1 itemprop="name">
                            <?= $arResult["NAME"] ?>
                        </h1>
                    </div>
                    <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="price">Цена: <?= $arResult["PROPERTIES"]["PRICE"]["VALUE"] ?> за ШТ</span>

                    </div>
                    <div class="price_text">
                        Цены по безналичному расчету с НДС
                    </div>
                    <div class="order">
                        <div class="action">
                            <a onclick="showModal('#modal-send');" class="btn">
                                Заказать
                            </a>
                        </div>
                    </div>
                    <div class="stats-block">
                        <div class="stats-block-holder">
                            <div class="heading">
                                <h2>
                                    Характеристики:
                                </h2>
                            </div>
                            <div class="stats">
                                <? if (!empty($arResult["PROPERTIES"]["UNITS_IN_ONE_PRODUCT"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Единиц в одном товаре
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["UNITS_IN_ONE_PRODUCT"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if (!empty($arResult["PROPERTIES"]["MATERIAL"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Материал
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["MATERIAL"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if (!empty($arResult["PROPERTIES"]["LENGTH"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Длина, м
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["LENGTH"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if (!empty($arResult["PROPERTIES"]["DIAMETER"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Диаметр, мм
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["DIAMETER"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <div class="stat">
                                    <div class="name">
                                        Тип
                                    </div>
                                    <div class="line">
                                        &nbsp;
                                    </div>
                                    <div class="value">
                                        <?= $arResult['NAME'] ?>
                                    </div>
                                </div>
                                <div class="stat">
                                    <div class="name">
                                        Бренд
                                    </div>
                                    <div class="line">
                                        &nbsp;
                                    </div>
                                    <div itemprop="brand" class="value">
                                        ООО НПО "Верхнерусские коммунальные системы"
                                    </div>
                                </div>
                                <? if (!empty($arResult["PROPERTIES"]["HEIGHT"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Высота, мм
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["HEIGHT"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if (!empty($arResult["PROPERTIES"]["PURPOSE_OF_SEWER"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Назначение канализации
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["PURPOSE_OF_SEWER"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if (!empty($arResult["PROPERTIES"]["WALL_THICKNESS"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Толщина стенок, мм
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["WALL_THICKNESS"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <div class="stat">
                                    <div class="name">
                                        Страна-изготовитель
                                    </div>
                                    <div class="line">
                                        &nbsp;
                                    </div>
                                    <div class="value">
                                        Россия
                                    </div>
                                </div>
                                <? if (!empty($arResult["PROPERTIES"]["COLOR"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Цвет
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["COLOR"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                                <? if (!empty($arResult["PROPERTIES"]["WIDTH"]["VALUE"])): ?>
                                    <div class="stat">
                                        <div class="name">
                                            Ширина, мм
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
                                            <?= $arResult["PROPERTIES"]["WIDTH"]["VALUE"] ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-item-description">
            <div class="catalog-item-description-holder">
                <h3>Описание:</h3>
                <p itemprop="description"><?= $arResult["PREVIEW_TEXT"] ?></p>
                <?= $arResult["DETAIL_TEXT"] ?>
            </div>
        </div>
    </div>
</section>
