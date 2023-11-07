//==============================
$(document).ready(function(){
	var t = $('.wrapper-slider .slider');
    t.slick({
		fade: true,
		dots: true,
		arrows: false,
		infinite: true,
		speed: 500,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		cssEase: 'linear',
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: true,
		responsive: []
    });
    t.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        var s = t.find('[data-slick-index="'+nextSlide+'"]').attr('data');
        t.slick('setOption','autoplaySpeed',s);
    });

    $(document).on('click', 'ul[dataListContact] li a[data-href]', function(){
    	var tab = $(this).attr('data-href');
    	$('.wrapper-contact .box[data-contact-box] ul.list').removeClass('wow').addClass('animated');
    	$('.wrapper-contact .box[data-contact-box] .frame').removeClass('wow').addClass('animated');
    	$('.wrapper-contact .box[data-contact-box]').removeClass('active');
    	$('.wrapper-contact .box[data-contact-box="'+tab+'"]').addClass('active');
    	$('ul[dataListContact] li a[data-href]').removeClass('active');
    	$(this).addClass('active');
    });

    $(document).on('click', 'ul[data-about-tabs] li a[data-href]', function(){
    	var tab = $(this).attr('data-href');

    	$('.wrapper-about .box .description .block').removeClass('active');
    	$('.wrapper-about .box .description .block.'+tab+'').addClass('active');
    	$('.wrapper-about .box .description .block').removeClass('wow').addClass('animated');

    	$('.wrapper-about .box .images').removeClass('active');
    	$('.wrapper-about .box .images.'+tab+'').addClass('active');
    	$('.wrapper-about .box .images').removeClass('wow').addClass('animated');
    	
    	$('ul[data-about-tabs] li a[data-href]').removeClass('active');
    	$(this).addClass('active');
    });

    $(document).on('click', '.footer .box-list .list .title', function(){
    	$(this).parent().find('ul').slideToggle(200);
    });

    $(document).on('click', '.faq-box .question', function(){
    	this.classList.toggle('active');
    	$(this).parent().find('.answer').slideToggle(200);
    });
});
//==============================
$(window).on("scroll", function() {
    if ($(window).scrollTop() > 85) $('.menu-wrapper').addClass('fixed');
    else $('.menu-wrapper').removeClass('fixed');
});

function toggleMenuFirst() {
	event.currentTarget.classList.toggle('toggle');
	if (event.currentTarget.classList.contains('toggle')) {
		document.querySelector('.menu-wrapper .main-menu .menu').classList.add('active');
	} else {
		document.querySelector('.menu-wrapper .main-menu .menu').classList.remove('active');
	}
	var body = document.querySelector('body');
	body.classList.toggle('overflow-hidden');
}

function showModal(element) {
	var modal = document.querySelector(element);
	var body = document.querySelector('body');
	modal.classList.add('modal-in');
	setTimeout(function(){
		modal.classList.add('modal-fade');
		body.classList.add('overflow-hidden');
	}, 10);
}

function closeModal() {
	[].forEach.call(document.querySelectorAll('.modal'), function(e){
		e.classList.remove('modal-fade');
		var body = document.querySelector('body');

		setTimeout(function(){
			e.classList.remove('modal-in');
			body.classList.remove('overflow-hidden');
		}, 200);
	});
}

$(document).ready(function () {
    $("form").submit(function (event) {
    	event.preventDefault(); 
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/ajax/sendForm.php',
            data: formNm.serialize(),
            success: function (data) {
                // Вывод текста результата отправки
                if (formID == "form2") {
                	if ($('div').hasClass('wpcf7-response-output')) {}else{
                	var str = '<div class="wpcf7-response-output" aria-hidden="true" style="display: block; background: #b5ffcf;">Спасибо за Ваше сообщение. Оно успешно отправлено.</div>';
                	formNm.append(str);}
                }
                if (formID == "form1") {
                	showModal('#modal-sended');
                }
            },
            error: function (jqXHR, text, error) {
            }
        });
        return false;
    });
});


$(document).ready(function () {
	$('.images-gallery').each(function() {
		var jqContainer = $(this);
		var previewContainer = jqContainer.find('.images-previews').first();
		var bigImageContainer = jqContainer.find('.image-full-view').first();
		if (jqContainer.length <= 0) {
			return false;
		}
		if (previewContainer.length <= 0) {
			console.error('Images Gallery: gallery preview container not found by query ".images-previews" in', this)
			return false;
		}
		if (bigImageContainer.length <= 0) {
			console.error('Images Gallery: gallery big image container not found by query ".image-full-view" in', this)
			return false;
		}
		var previewSliderContainer = previewContainer.find('.images-previews-holder').first();
		var bigImageSliderContainer = bigImageContainer.find('.image-full-view-holder').first();
		if (previewSliderContainer.length <= 0) {
			console.error('Images Gallery: gallery preview slider container not found by query ".images-previews-holder" in', this)
			return false;
		}
		if (bigImageSliderContainer.length <= 0) {
			console.error('Images Gallery: gallery big image slider container not found by query ".image-full-view-holder" in', this)
			return false;
		}
		previewSliderContainer.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			infinite: false,
			prevArrow: previewContainer.find('.prev').first(),
			nextArrow: previewContainer.find('.next').first(),
			autoplay: false,
			fade: false,
			speed: 500,
			cssEase: 'linear',
			asNavFor: bigImageSliderContainer,
			focusOnSelect: true,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
					}
				},
			]
		});
		bigImageSliderContainer.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			arrows: false,
			infinite: false,
			appendDots: bigImageContainer.find('.nav').first(),
			autoplay: false,
			fade: false,
			speed: 500,
			cssEase: 'linear',
			asNavFor: previewSliderContainer,
			focusOnSelect: true,
			fade: true,
			responsive: [
				{
					breakpoint: 1280,
					settings: {
						
					}
				},
			]
		});
	})
});

$(document).ready(function () {
	$('.catalog-items-slider').each(function() {
		var jqContainer = $(this);
		var sliderBody = jqContainer.find('.catalog-slider-body').first();
		if (jqContainer.length <= 0) {
			return false;
		}
		if (sliderBody.length <= 0) {
			console.error('Catalog Items Slider: sliderBody not found by query ".catalog-slider-body" in', this)
			return false;
		}
		sliderBody.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			infinite: false,
			prevArrow: jqContainer.find('.prev').first(),
			nextArrow: jqContainer.find('.next').first(),
			appendDots: jqContainer.find('.nav').first(),
			autoplay: false,
			fade: false,
			speed: 500,
			cssEase: 'linear',
			responsive: [
				{
					breakpoint: 1279,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
					}
				},
			]
		})
	});
});
