<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<div class="catalog-items-slider">
    <div class="catalog-items-slider-holder">
        <div class="heading">
            <div class="text">
                <h2>
                    Вы смотрели ранее
                </h2>
            </div>
            <div class="controlls">
                <div class="prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z"
                              fill="currentColor"/>
                    </svg>
                </div>
                <div class="next">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z"
                              fill="currentColor"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="catalog-slider-body">

            <? foreach ($arResult['ITEMS'] as $arItem): ?>

                <?
                $arProps = $arItem['PROPERTIES'];

                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="catalog-list-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="catalog-list-item-holder" >
                        <div class="image">
                            <div class="image-holder">
                                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                                    <?/* $arFile = CFile::GetFileArray($arItem["PROPERTIES"]["PHOTOS"]["VALUE"][0]); */?>
<!--                                    <img src="--><?php //= $arFile["SRC"] ?><!--" alt="">-->
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="desc">
                            <div class="name">
                                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                                    <?= $arItem["NAME"] ?>
                                </a>
                            </div>
                        </div>
                        <?/*
                        <div class="action">
                            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="btn">
                                Подробнее
                            </a>
                        </div>
                        */?>
                    </div>
                </div>

            <? endforeach; ?>
        </div>
        <div class="nav">

        </div>
    </div>
</div>