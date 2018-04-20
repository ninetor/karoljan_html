$(document).ready(function() {
    //Навигация по страничкам сайта
	/*/
    $('body').append(
        '<div style="position: fixed; z-index: 9999; bottom: 0; right: 0; background: #fff; border: solid 1px #000; width: 150px;"> \
            <a href="javascript:void(0);" style="float: right;background:#ccc; color:#000; padding: 5px 10px;position:relative;z-index:20;" onclick="$(this).parent().hide()">Закрыть X</a> \
        <ol> \
            <li><a href="./index.html" style="color:#000;">Главная</a></li> \
            <li><a href="./testing.html" style="color:#000;">Тест</a></li> \
            <li><a href="./final.html" style="color:#000;">Финал</a></li> \
        </ol> \
    </div>');
	//*/
	/*

    // Просто для примера
    $('.answers__item').on('click', function() {
        $('.answer-popup.popup--correctly').addClass('show');
        $('.overlay').addClass('show');
    });
    $('.answer-popup__btn').on('click', function(e) {
    	e.preventDefault();
        $('.answer-popup.popup--correctly').removeClass('show');
        $('.overlay').removeClass('show');
    })
//*/
});
