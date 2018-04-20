$(document).ready(function() {

    $('.total-popup__label__title').arctext({radius: 500, dir: -1});

    $('.total-popup__close').on('click', function(e) {
        e.preventDefault();
        $('.total-popup').removeClass('active');
        $('.new-overlay').removeClass('active');

    });
});
