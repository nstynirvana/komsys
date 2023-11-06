<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<section class="wrapper wrapper-head-title"><div class="inner"><div class="box"><div class="brcmp"><ul class="kama_breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<span class="kb_sep"> - </span>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					<span itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		$strReturn .= ''.$arrow.'
				<li class="kb_title">'.$title.'</li>';
	}
}

$strReturn .= '</div><h1 class="title">'.$title.'</h1></div></div></section>';

return $strReturn;
?>


<?/*<section class="wrapper wrapper-head-title">
		<div class="inner">
			<div class="box">
				<div class="brcmp">
					<ul class="kama_breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
							<a href="https://komsys.ru" itemprop="item"><span itemprop="name">Главная</span></a>
						</li>
						<li class="kb_sep"> - </li>
						<li class="kb_title">Каталог товаров</li>
					</ul>
				</div>
				<div class="title">КАТАЛОГ ТОВАРОВ</div>
			</div>
		</div>
	</section>*/?>