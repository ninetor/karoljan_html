$(document).ready(function() {

    var $overlay = $('.overlay');

    $('.intro__text a').on('click', function(e) {
        var $chapskiOffset=$('.about-chapski').offset().top;
        e.preventDefault();
        $('body, html').animate({
           scrollTop: $chapskiOffset
        }, 400);
        $('.about-chapski').add($overlay).addClass('active');

    });

     $('.about-chapski__close').on('click', function(e) {
        e.preventDefault();
        $('.about-chapski').add($overlay).removeClass('active');
    });



    $('.test__options-item').on('click', function() {

        var $popup=$('.answers').offset().top;

    	var $this = $(this);

        var $answer = $('.answers[data-answer="' + $this.attr('data-answer') + '"]');

        var idQ = $('.test').attr('data-quest');

        var idA = $(this).attr('data-answer');

    

        $.ajax({

            type: "POST",

            url: "./ajax/answer.php",

            data: "idQ=" + idQ + "&idA=" + idA,

            dataType: 'json',

            success: function(data) {

                $answer.add($overlay).addClass('active');

                $this.closest('.test__options').find('.test__options-item').removeClass('active');

                $this.addClass('active');

            }

        });

        $('body, html').animate({
           scrollTop: $popup
        }, 400);

    });

});



$(window).on('load', function() {

    if (!localStorage.getItem('ageConfirmed') || localStorage.getItem('ageConfirmed') == 0) {

        var $ageGate = $('.age-gate'),

            $overlay = $('.overlay'),

            $yes = $('.age-gate__options-item--yes'),

            $no = $('.age-gate__options-item--no'),

            $answerNo = $('.age-gate__answer-no');



        if ($ageGate.length > 0) {

            $ageGate.addClass('active');

            $overlay.addClass('active');



            $yes.on('click', function() {

                $ageGate.removeClass('active');

                $overlay.removeClass('active');

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

