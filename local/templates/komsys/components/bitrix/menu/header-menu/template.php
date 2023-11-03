<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul id="first-nav" class="first-menu">
		<?foreach ($arResult as $arItem) {?>
			<li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160">
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			</li>
		<?}?>
	</ul>
<?endif?>