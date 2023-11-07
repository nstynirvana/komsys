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
$this->setFrameMode(true);
?>
<section class="wrapper wrapper-content">
	<div class="inner">
		<div class="content-title">
			<div class="text">
				<h1>Наши объекты</h1>
			</div>
		</div>
		<div class="slider-container">
			<div class="slider">
				<?foreach ($arResult["ITEMS"] as $arItem):?>
					<?foreach ($arItem["PHOTOS"] as $photo):?>
						<div class="img-container" image-src="<?=$photo["SRC"]?>" title-src="<?=$arItem["NAME"]?>">
							<div title="<?=$arItem["NAME"]?>" style="background-image: url('<?=$photo["SRC"]?>');"></div>
						</div>
					<?endforeach;?>
				<?endforeach;?>
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
		<span class="close-button"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32 16L24 24M16 32L24 24M24 24L16 16L32 32" stroke="white" stroke-width="2"/><rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="white"/></svg></span>
	</div>
</div>





<script>
	$(document).ready(function() {

		/* СЛАЙДЕР */

		
		$('.slider').slick({
    	    dots: true,
    	    infinite: false,
    	    speed: 300,
    	    slidesToShow: 4,
    	    slidesToScroll: 1,
    	    variableWidth: true,
    	    dotsClass: 'slick-dots',
    	    nextArrow: '<svg class="nextBtn" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 16L22.59 17.41L28.17 23H16V25H28.17L22.59 30.59L24 32L32 24L24 16Z" fill="black"/><rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="black"/></svg>', 
    	    prevArrow: '<svg class="prevBtn" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32 23H19.83L25.42 17.41L24 16L16 24L24 32L25.41 30.59L19.83 25H32V23Z" fill="black"/><rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="black"/></svg>',
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


		function openModal(imageSrc, title){
			modalTitle.textContent = title;
			modalImage.src = imageSrc;
			modal.style.display = 'flex';
		}

		function closeModal(){
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
