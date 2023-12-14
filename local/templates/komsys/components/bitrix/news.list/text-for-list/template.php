<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

    <section style="margin-top: 40px" class="brandsBlockText">
        <div class="container">
            <h2 class="brandsBlock__title"><?= $arResult["NAME"] ?></h2>
            <span class="brandsBlockText__text"><?= $arResult["PREVIEW_TEXT"] ?></span>
        </div>
    </section>
