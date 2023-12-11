// Получаем элементы DOM
const filterTitle = $('.container__filter_mobile_title');
const filterForm = $('.filter__click');
const filterIcon = $('.icon-filter');

// Обработчик клика на заголовке фильтра
filterTitle.on('click', () => {
    if (filterForm.css('display') === 'none') {
        filterForm.slideDown(300);
        filterIcon.fadeOut(300); }
    else  {
        filterForm.slideUp(300);
        filterIcon.fadeIn(300);
    }
});