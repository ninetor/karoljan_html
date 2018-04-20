$(document).ready(function() {
    $('.answer-quest').click(function() {
        var idQ = $('.quest').attr('data-quest-index');
        var idA = $(this).attr('data-answer-index');
        //console.log(idQ);
        //console.log(this);
        $.ajax({
            type: "POST",
            url: "./ajax/answer.php",
            data: "idQ=" + idQ + "&idA=" + idA,
            dataType: 'json',
            success: function(data) {
                if (data.STATUS == 'OK') {
                    if (data.ANS == 'Y') {
                        //$('.wrong-popup').hide();
                        //$('.right-popup').show();
                        $(".answer-quest[data-answer-index=" + idA + "]").addClass('active-correctly');
                        $('.answer-popup.popup--wrong').removeClass('show');
                        setTimeout(function() {
                            $('.answer-popup.popup--correctly').addClass('show');
                            $('.overlay').addClass('show');
                        }, 500);

                    } else {
                        //$('.right-popup').hide();
                        //$('.wrong-popup').show();
                        $(".answer-quest[data-answer-index=" + idA + "]").addClass('active-wrong');
                        $('.answer-popup.popup--correctly').removeClass('show');

                        setTimeout(function() {
                            $('.answer-popup.popup--wrong[data-answer-index="' + idA + '"]').addClass('show');
                            $('.overlay').addClass('show');
                        }, 500);

                    }
                }
            }
        });
    });

    $(document).ajaxStart(function() {
        $.LoadingOverlay("show");
    });
    $(document).ajaxStop(function() {
        $.LoadingOverlay("hide");
    });
});

//Открытие попап age gate при загрузке страницы
(function() {
    $(window).on('load', function() {
        if (!localStorage.getItem('ageConfirmed') || localStorage.getItem('ageConfirmed') == 0) {
            var $ageGate = $('.age-gate'),
                $overlay = $('.overlay'),
                $yes = $('.age-gate__yes'),
                $no = $('.age-gate__no'),
                $answerNo = $('.age-gate__answer-no');

            if ($ageGate.length > 0) {
                $ageGate.addClass('show');
                $overlay.addClass('show');

                $yes.on('click', function() {
                    $ageGate.removeClass('show');
                    $overlay.removeClass('show');
                    localStorage.setItem('ageConfirmed', 1);
                });

                $no.on('click', function() {
                    $ageGate.html($answerNo);
                    $answerNo.css('display', 'block');
                    localStorage.setItem('ageConfirmed', 0);
                });
            };
        }
    });
}());
