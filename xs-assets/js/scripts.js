$(document).ready(function () {

	$('a[href="#"]').on({
		click: function (e) {
				e.preventDefault();

				console.log('Click on a[href=#]');
			}
	});

	$('.page').fullpage({
		sectionSelector: '.vertical-slide',
		slideSelector: '.horizontal-slide',

		verticalCentered: false,
		loopHorizontal: false,

		afterLoad: function (anchorLink, index) {
			var _p = $('.movepage');

			_p.removeClass('is-active is-active2');

			(index > 1) ? _p.addClass('is-active') : true;
			(index > 2) ? _p.addClass('is-active') : true;
			(index > 3) ? _p.addClass('is-active2') : true;
		},

		onLeave: function (index, nextIndex, direction) {
			var section = $('.vertical-slide').eq((index - 1));

			if (section.find('.horizontal-slide').length) {
				$.fn.fullpage.scrollSlider(section, 0);
			}
		}
	});

	$('.intro--left').on({
		click: function () {
				$.fn.fullpage.moveTo(2, 0);
			}
	});

	$('.intro--right').on({
		click: function () {
				$.fn.fullpage.moveTo(3, 0);
			}
	});

	function checkOrientation () {
		if (($(window).width() / $(window).height()) > 1) {
			$('.rotatepage').show();
		} else {
			$('.rotatepage').hide();
		}
	}
	function switchIntroTitle(){
		var newActive=$(".intro-slider-unit.active");
		if(newActive.hasClass("blonde")){
			$(".intro-slider-title").html("Karol Jan Blond");
			$(".new-tag").removeClass("active");
		} else if(newActive.hasClass("ruby")){
			$(".intro-slider-title").html("Karol Jan Ruby");
			$(".new-tag").addClass("active");
		} else if(newActive.hasClass("dunkel")){
			$(".intro-slider-title").html("Karol Jan Dunkel");
			$(".new-tag").removeClass("active");
		}
	}
	$(window).on('load resize', function () {
		checkOrientation ();
	});

	$(".intro-slider-controls-unit").click(function(){
		
		var current=$(".intro-slider-unit.active");
		current.removeClass("active");
		var currentIndex=current.index();
		var elementsLength=$(".intro-slider-unit").length;
		if($(this).hasClass("next")){
			if(currentIndex!=elementsLength-1){
				current.next().addClass("active");

			} else{
				$(".intro-slider-unit").eq(0).addClass("active");
			}
			$.each($(".intro-slider-unit"),function(){
				var position=parseInt($(this).attr("data-position"));
				if(position==1){
					$(this).attr("data-position",3);
				} else{
					$(this).attr("data-position",position-1);
				}

			})
		} else{
			if(currentIndex!=0){
				current.prev().addClass("active");
			} else{
				$(".intro-slider-unit").eq(elementsLength-1).addClass("active");
			}
			$.each($(".intro-slider-unit"),function(){
				var position=parseInt($(this).attr("data-position"));
				if(position==3){
					$(this).attr("data-position",1);
				} else{
					$(this).attr("data-position",position+1);
				}

			})
			
			
		}
		switchIntroTitle(); 


	})
	 $(function() {      

      $("#intro-slider").swipe( {
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
          	var current=$(".intro-slider-unit.active");
			current.removeClass("active");
			var currentIndex=current.index();
			var elementsLength=$(".intro-slider-unit").length;
			if(currentIndex!=elementsLength-1){
				current.next().addClass("active");

			} else{
				$(".intro-slider-unit").eq(0).addClass("active");
			}
			$.each($(".intro-slider-unit"),function(){
				var position=parseInt($(this).attr("data-position"));
				if(position==1){
					$(this).attr("data-position",3);
				} else{
					$(this).attr("data-position",position-1);
				}

			})
			switchIntroTitle();
        },
        swipeRight:function(event, direction, distance, duration, fingerCount) {
        	var current=$(".intro-slider-unit.active");
			current.removeClass("active");
			var currentIndex=current.index();
			var elementsLength=$(".intro-slider-unit").length;
           if(currentIndex!=0){
				current.prev().addClass("active");
			} else{
				$(".intro-slider-unit").eq(elementsLength-1).addClass("active");
			}
			$.each($(".intro-slider-unit"),function(){
				var position=parseInt($(this).attr("data-position"));
				if(position==3){
					$(this).attr("data-position",1);
				} else{
					$(this).attr("data-position",position+1);
				}

			})
			switchIntroTitle();
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold:60
      });
    });
	$(".intro-slider-unit").click(function(e){
		var current=$(".intro-slider-unit.active");		

		var currentIndex=current.index();
		var elementsLength=$(".intro-slider-unit").length;
		var position=parseInt($(this).attr("data-position"));
		if($(this).hasClass("active")){
			if($(this).hasClass("blonde")){
				console.log("blonde");
				$.fn.fullpage.moveTo(3, 0);
			} else if($(this).hasClass("dunkel")){
				console.log("dunkel");
				$.fn.fullpage.moveTo(4, 0);
			} else if($(this).hasClass("ruby")){
				console.log("ruby");
				$.fn.fullpage.moveTo(2, 0);
			}
		} else{
			current.removeClass("active");
		}

		
		if(position==1){
			$(this).addClass("active");
			$.each($(".intro-slider-unit"),function(){
				var position=parseInt($(this).attr("data-position"));
				
				 if(position==3){
					$(this).attr("data-position",1);
				} else{
					$(this).attr("data-position",position+1);
				}

			})
		} else if(position==3){
			$(this).addClass("active");
			$.each($(".intro-slider-unit"),function(){
				var position=parseInt($(this).attr("data-position"));
				 if(position==1){
					$(this).attr("data-position",3);
				} else{
					$(this).attr("data-position",position-1);
				}

			})
		}
		switchIntroTitle();

		
			
		
		
	})

});