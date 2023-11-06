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

<?//dump($arResult);?>

<header class="wrapper header-index wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
	<div class="inner">
		<div class="category-menu">
			<div class="menu">
				<div class="box">
					<ul id="second-nav" class="second-menu">
						<?foreach ($arResult["SECTIONS"] as $arSection):?>
							<li id="menu-item-161" class="icon-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-161">
								<?$arSection["UF_ALTERNATIVE_IMG"]= CFile::GetPath($arSection["UF_ALTERNATIVE_IMG"]);?>
								
								<a href="<?=$arSection["SECTION_PAGE_URL"]?>"><img src="<?=$arSection["UF_ALTERNATIVE_IMG"]?>" style="margin-right: 15px;"><p><?=htmlspecialchars_decode($arSection["UF_ALTERNATIVE_NAME"])?></p></a>
							</li>
						<?endforeach;?>
					</ul>
				</div>
			</div>
			<a href="https://komsys.ru/images/прайс-лист.pdf" class="all-btn" target="_blank" onclick="ym(74905594, 'reachGoal', 'downloadPrice'); return true;">
				<i class="svg file"></i>
				<span>Cкачать Прайс-лист</span>
			</a>
		</div>
	</div>
</header>