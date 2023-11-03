var time = 2, cc = 1;
$(window).scroll(function(){
  var 
  countTop = $('.counter-list').offset().top,
  winHeight = $(window).height(),
  winTop = $(window).scrollTop() + winHeight - 50;
  $('.counter-list').attr('data-countTop', countTop);
  $('.counter-list').attr('data-winTop', winTop);


  if (countTop < winTop) {
    if (cc < 2) {
      $('.counter-list.active').each(function(){
        $('li span').each(function(){
          var  i = $(this).data('num') - 500;
          if (i < 0) { i = 0; }
          var
          num = $(this).data('num'),
          step = 1000 * time / num,
          that = $(this),
          int = setInterval(function(){
            if (i <= num) {
              that.html(i);
            }
            else {
              cc = cc + 5;
              clearInterval(int);
            }
            i++;
          },step);
        });
      });
    }
    $('.counter-list').removeClass('active');
  }
});

$(document).ready(function(){
  var 
  countTop = $('.counter-list').offset().top,
  winHeight = $(window).height(),
  winTop = $(window).scrollTop() + winHeight - 50;

  if (countTop < winTop) {
    if (cc < 2) {
      $('.counter-list.active').each(function(){
        $('li span').each(function(){
          var  i = $(this).data('num') - 500;
          if (i < 0) { i = 0; }
          var
          num = $(this).data('num'),
          step = 1000 * time / num,
          that = $(this),
          int = setInterval(function(){
            if (i <= num) {
              that.html(i);
            }
            else {
              cc = cc + 5;
              clearInterval(int);
            }
            i++;
          },step);
        });
      });
    }
    $('.counter-list').removeClass('active');
  }
});