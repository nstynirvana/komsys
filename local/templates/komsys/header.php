<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html>
<head>
	<?$APPLICATION->ShowHead();
    $dir = $APPLICATION->GetCurDir();?>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="icon" href="/favicon.svg" sizes="32x32">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/design/css/style.css">
	<link rel="stylesheet" type="text/css" href="/design/css/style2.css">
	<link rel="stylesheet" type="text/css" href="/design/css/slick.css">
	<link rel="stylesheet" type="text/css" href="/design/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/design/dist/css/lightgallery.css">
	<link rel="stylesheet" type="text/css" href="/design/css/style-new.css">
    <link rel="stylesheet" type="text/css" href="/design/css/orangato.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<script src="/design/js/jquery-1.11.3.min.js"></script> 
	<script src="/design/js/js.js"></script>
	<script src="/design/js/slick.js"></script>

	<script type="text/javascript" src="/design/js/wow.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setTimeout(function(){
				$('.window-load span').addClass('active');
			    if ($(window).width() > 1000) {
			       new WOW().init();
			    }
			}, 1000);
			setTimeout(function(){
				$('.window-load').fadeOut(200);
		    }, 1200);
		});
	</script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(74905594, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/74905594" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<?$APPLICATION->ShowPanel()?>
<body>
	<div class="window-load"><span></span></div>
	<main class="main-content">
		<section class="menu-wrapper">
			<div class="inner">
				<div class="main-menu">
					<a href="/" class="logo"><img src="/design/img/logo.png" alt="Изображение логотипа компании" title="Логотип компании"></a>
					<a href="https://komsys.ru/images/прайс-лист-с-фото.pdf" class="all-btn price-list" target="_blank" onclick="ym(74905594, 'reachGoal', 'downloadPrice'); return true;">
						<i class="svg file"></i>
						<span>Cкачать Прайс-лист</span>
					</a>
					<a onclick="toggleMenuFirst();" class="menu-button"><span></span></a>
					<div class="menu">
						<div class="box">
							<?$APPLICATION->IncludeComponent("bitrix:menu","header-menu",Array(
									"ROOT_MENU_TYPE" => "top", 
									"MAX_LEVEL" => "1", 
									"CHILD_MENU_TYPE" => "top", 
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "Y",
									"MENU_CACHE_TYPE" => "N", 
									"MENU_CACHE_TIME" => "3600", 
									"MENU_CACHE_USE_GROUPS" => "Y", 
									"MENU_CACHE_GET_VARS" => "" 
								)
							);?>
							<div class="phone">
								<span><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath($dir."/include/area/phone-header.php"),Array(),Array("MODE"=>"html"));?></span>
								<p><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath($dir."/include/area/work-time.php"),Array(),Array("MODE"=>"html"));?></p>
							</div>
							<ul class="social">
								<li><a href="https://wa.me/79383582794" onclick="ym(74905594, 'reachGoal', 'openWhatsapp'); return true;"><span class="whatsapp"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>



