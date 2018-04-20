$(document).ready(function () {

	$('a[href="#"]').on({
		click: function (e) {
				e.preventDefault();

				console.log('Click on a[href=#]');
			}
	});

	$('.js-toright').on({
		click: function (e) {
				e.preventDefault();

				if (!$('.page').hasClass('moved-right') && !$('.page').hasClass('moved-left'))
					$('.page').addClass('moved-right');
			}
	});

	$('.js-toleft').on({
		click: function (e) {
				e.preventDefault();

				if (!$('.page').hasClass('moved-right') && !$('.page').hasClass('moved-left'))
					$('.page').addClass('moved-left');
			}
	});

	$('.left-side').on({
		click: function () {
				if ($('.page').hasClass('moved-left'))
					$('.page').toggleClass('moved-left moved-right');
			}
	});

	$('.right-side').on({
		click: function () {
				if ($('.page').hasClass('moved-right'))
					$('.page').toggleClass('moved-left moved-right');
			}
	});

	$('.logotype').on({
		click: function () {
				$('.page').removeClass('moved-left moved-right');
			}
	});

	$('.js-slide').on({
		click: function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 500);
			}
	});
	$(".info--box--close").on({
		click: function (e) {
			e.stopPropagation();
			$(this).parents(".info--box").removeClass("active");
				
			}

	});
	$('.info').on({
		
		click: function (e) {
			e.stopPropagation();
			$(".info--box").removeClass("active");
				$(this).find('.info--box').addClass("active");
			}

	});
	$(".page-unit-bottle").click(function(){
		$(".info--box").removeClass("active");
		var pageUnit=$(this).parents(".page-unit");
		pageUnit.siblings().removeClass("active");
		pageUnit.addClass("active");
		$(".page-wrap").removeClass("page-wrap_blonde page-wrap_ruby page-wrap_dunkel");
		if(pageUnit.hasClass("page-unit_blonde")){
			$(".page-wrap").addClass("page-wrap_blonde");
		} else if(pageUnit.hasClass("page-unit_dunkel")){
			$(".page-wrap").addClass("page-wrap_dunkel");
		} else if(pageUnit.hasClass("page-unit_ruby")){
			$(".page-wrap").addClass("page-wrap_ruby");
		}
	})
	$(".greeting-popup").on({
		click:function(){
			$(this).removeClass("active");
		}
	});
	$(".greeting-popup-body").on({
		click:function(e){
			e.stopPropagation();
		}
	})
	$(".greeting-popup-button").on({
		click:function(){
			$(this).parents(".greeting-popup").removeClass("active");
		}
	});
	$(document).on({
		click:function(){
			$(".info--box.active").removeClass("active");
		}
	})
});