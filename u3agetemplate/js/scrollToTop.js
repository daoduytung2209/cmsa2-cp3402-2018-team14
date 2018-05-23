jQuery(function ($) {
    var $window = $(window);
    var $buttonDefault = $('.button-default');
    var scrollAmount;

    $buttonDefault.on('click', function () {
        $('html, body').animate({
            scrollTop: 0,
        }, 400);
    });

    $window.on('scroll', function () {
        clearTimeout(scrollAmount);
        scrollAmount = setTimeout(function () {
            if ($window.scrollTop() > 10) {
                $buttonDefault.addClass('button-is-visible');
            } else {
                $buttonDefault.removeClass('button-is-visible');
            }
        }, 250);
    });
});