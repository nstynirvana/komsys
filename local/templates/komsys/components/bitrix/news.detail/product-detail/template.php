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
?>


<? //dump($arResult);?>
<? $sectionName = array_pop($arResult["SECTION"]["PATH"]); ?>
<?
global $USER
?>

<? /*
    <script>
        //slider Yousee
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
*/ ?>
<?/*
    <section id="catalog-item-detail">
        <div class="inner">
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
                                                <img src="<?= $photo["SRC"] ?>" alt="<?= $arResult["NAME"] ?>">
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
                            <h1>
                                <? $arResult["NAME"] ?>
                            </h1>
                        </div>
                        <div class="price">
                            Цена: <?= $arResult["PROPERTIES"]["PRICE"]["VALUE"] ?> ₽ за ШТ
                        </div>
                        <div class="order">
                            <div class="action">
                                <a href="#" class="btn">
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
                                            <?= $sectionName['NAME'] ?>
                                        </div>
                                    </div>
                                    <div class="stat">
                                        <div class="name">
                                            Бренд
                                        </div>
                                        <div class="line">
                                            &nbsp;
                                        </div>
                                        <div class="value">
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
                    <p><?= $arResult["PREVIEW_TEXT"] ?></p>
                    <?= $arResult["DETAIL_TEXT"] ?>
                </div>
            </div>
        </div>
    </section>
*/?>
<? /*if(!$USER -> isAdmin()):*/ ?>
    <section class="wrapper wrapper-content">
        <div class="inner">
            <article id="post-364"
                     class="row-single-post post-364 items type-items status-publish has-post-thumbnail hentry items-category-kotlyi-i-komplektuyuschie">
                <div class="frame wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="">
                </div>
                <div class="all-table wow fadeInRight animated"
                     style="visibility: visible; animation-name: fadeInRight;">
                    <table>
                        <thead>
                        <tr>
                            <th align="left">Наименование</th>
                            <th align="center">Примечание</th>
                            <th align="center">Цена за 1 шт. с НДС</th>
                            <th align="right" width="170px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <? foreach ($arResult["INFO"] as $arItem): ?>
                            <tr>
                                <td align="left"><?= $arItem["NAME"] ?></td>
                                <td align="center"><?= $arItem["NOTE"] ?></td>
                                <td align="center"><?= $arItem["PRICE"] ?></td>
                                <td align="right" width="170px"><a onclick="showModal('#modal-send');"
                                                                   class="all-btn"><span>Заказать</span></a></td>
                            </tr>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </article>
            <div class="row-article-description">
                <div class="block  wow zoomInUp animated" style="visibility: visible; animation-name: zoomInUp;">
                    <?= $arResult["DETAIL_TEXT"] ?>
                </div>
            </div>
        </div>
    </section>
<? /*else:?>
<section class="wrapper wrapper-content new-product">
	<div class="inner">
		<article id="post-364" class="row-single-post post-364 items type-items status-publish has-post-thumbnail hentry items-category-kotlyi-i-komplektuyuschie">
			<div class="frame wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<div class="image-holder">
					<?/*<?foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["SRC"] as $src):?>?>
						<img class="main-img" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
					<?//endforeach;?>
				</div>
				<?/*
				<div class="slider-holder">
				<?foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["SRC"] as $src):?>
						<img class="main-img" src="<?=$src?>" alt="">
					<?endforeach;?>
				</div>
				?>
		    </div>
			<div class="all-table wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
				<div class="title">
					<?=$arResult["NAME"]?>
				</div>
				<div class="price">
					<span>Цена: </span><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> ₽ за ШТ
				</div>
				<a onclick="showModal('#modal-send');" class="all-btn"><span>Заказать</span></a>
				<div class="product-prop">
					<div class="title">Характеристики: </div>
					<?foreach($arResult["prop"] as $key => $value):?>
						<div class="prop-item">
							<div class="prop-name"><?=$key?></div>
							<div class="prop-line"></div>
							<div class="prop-value"><?=$value?></div>
						</div>
					<?endforeach;?>
				</div>

			</div>

		</article>
		<?if($arResult["DETAIL_TEXT"] != ""):?>
			<div class="product-desc">
				<div class="desc-title">Описание:</div>
				<div class="desc-content">
					<?=$arResult["DETAIL_TEXT"]?>
				</div>
			</div>
		<?endif;?>
	</div>
</section>

<?endif;*/ ?>
<? if (isset($arResult["PHOTOS"])): ?>
    <section class="wrapper wrapper-content" style="margin-top: 80px;">
        <div class="inner">
            <div class="slider-container">
                <div class="slider">
                    <? foreach ($arResult["PHOTOS"] as $photo): ?>
                        <div class="img-container" image-src="<?= $photo["SRC"] ?>" title-src="<?= $arItem["NAME"] ?>">
                            <div style="background-image: url('<?= $photo["SRC"] ?>');"></div>
                        </div>
                    <? endforeach; ?>
                </div>
                <ul class="slick-dots">

                </ul>
            </div>
        </div>
    </section>

    <div id="modall" class="modall">
        <div class="modall-content">
            <div id="modal-title"></div>
            <img src="" id="modal-image">
            <span class="close-button"><svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><path
                            d="M32 16L24 24M16 32L24 24M24 24L16 16L32 32" stroke="white" stroke-width="2"/><rect
                            x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="white"/></svg></span>
        </div>
    </div>


    <script>
        $(document).ready(function () {

            /* СЛАЙДЕР */


            $('.slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                variableWidth: true,
                dotsClass: 'slick-dots',
                nextArrow: '<svg class="nextBtn" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 16L22.59 17.41L28.17 23H16V25H28.17L22.59 30.59L24 32L32 24L24 16Z" fill="black"/><rect x="0.5" y="0.5" width="47" height="47" rx="23.5" 	stroke="black"/></svg>',
                prevArrow: '<svg class="prevBtn" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32 23H19.83L25.42 17.41L24 16L16 24L24 32L25.41 30.59L19.83 25H32V23Z" fill="black"/><rect x="0.5" y="0.5" width="47" height="47" rx="23.5" 	stroke="black"/></svg>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });


            /* МОДАЛЬНОЕ ОКНО */

            const imgContainers = document.querySelectorAll('.img-container');

            const modal = document.getElementById('modall');
            const modalTitle = document.getElementById('modal-title');
            const modalImage = document.getElementById('modal-image');
            const closeButton = document.querySelector('.close-button');


            function openModal(imageSrc, title) {
                modalTitle.textContent = title;
                modalImage.src = imageSrc;
                modal.style.display = 'flex';
            }

            function closeModal() {
                modal.style.display = 'none';
            }

            imgContainers.forEach((container) => {
                const imageSrc = container.getAttribute('image-src');
                const title = container.getAttribute('title-src');

                container.addEventListener('click', () => {
                    openModal(imageSrc, title);
                });
            });

            closeButton.addEventListener('click', () => {
                closeModal();
            });

            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    closeModal();
                }
            });
        });
    </script>
<? endif; ?>