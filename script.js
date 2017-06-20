$(function() {
	$('.carousel').carousel({
      interval: 6000,
	  pause: "false"
    })
	
	$('.go-to-offer').click(function() {
		$('.product-list a:first').tab('show');
	});
	
	$('.go-to-film').click(function() {
		$('.product-list li:eq(1) a').tab('show');
	});
	
	$('.go-to-bags').click(function() {
		$('.product-list li:eq(2) a').tab('show');
	});
	
	$('.go-to-calc').click(function() {
		$('.product-list a:last').tab('show');
	});
	
	if($(window).width() < 768) {
		console.log("mobile");
		
		$(document).click(function(e) {
			if (!$(e.target).is('a')) {
				$('.collapse').collapse('hide');        
			}
		});
	} 
	else {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 5) {
				$('.navbar').addClass('menu-fixed');
			}
			else if ($(this).scrollTop() <= 5) {
				$('.navbar').removeClass('menu-fixed');
			}
		});
		
		$('.site-link').click(function(){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 400);
			return false;
		});
		
		/* ANIMATIONS */
		
		$('.navbar').waypoint(function() {
			$('.navbar').addClass('fadeIn');
		}, { offset: '100%'});
		
		$('.h1-welcome').waypoint(function() {
			$('.h1-welcome').addClass('fadeInDown').addClass('delay-1');
		}, { offset: '100%'});
		
		$('#bt-enter').waypoint(function() {
			$('#bt-enter').addClass('fadeInUp').addClass('delay-3');
		}, { offset: '100%'});
		
		$('#offer1').waypoint(function() {
			$('#offer1').addClass('fadeInUp');
		}, { offset: '80%'});
		
		$('#offer2').waypoint(function() {
			$('#offer2').addClass('fadeInUp').addClass('delay-1');
		}, { offset: '80%'});
		
		$('#offer3').waypoint(function() {
			$('#offer3').addClass('fadeInUp').addClass('delay-2');
		}, { offset: '80%'});	
		
		$('.first-p').waypoint(function() {
			$('.first-p').addClass('fadeInUp').addClass('delay-1');
		}, { offset: '80%'});

		$('.second-p').waypoint(function() {
			$('.second-p').addClass('fadeInUp').addClass('delay-2');
		}, { offset: '80%'});
		
		$('#img1').waypoint(function() {
			$('#img1').addClass('fadeIn').addClass('delay-4');
		}, { offset: '80%'});
		
		$('#img2').waypoint(function() {
			$('#img2').addClass('fadeIn').addClass('delay-5');
		}, { offset: '80%'});
		
		$('#img3').waypoint(function() {
			$('#img3').addClass('fadeIn').addClass('delay-6');
		}, { offset: '80%'});
		
		$('#img4').waypoint(function() {
			$('#img4').addClass('fadeIn').addClass('delay-7');
		}, { offset: '80%'});
		
		$('#img5').waypoint(function() {
			$('#img5').addClass('fadeIn').addClass('delay-8');
		}, { offset: '80%'});
		
		$('#img6').waypoint(function() {
			$('#img6').addClass('fadeIn').addClass('delay-9');
		}, { offset: '80%'});
		
		$('#img7').waypoint(function() {
			$('#img7').addClass('fadeIn').addClass('delay-10');
		}, { offset: '80%'});
		
		$('#img8').waypoint(function() {
			$('#img8').addClass('fadeIn').addClass('delay-11');
		}, { offset: '80%'});	
		
		$('#our-products').waypoint(function() {
			$('#our-products').addClass('fadeInUp');
			$('#our-products').css('display', 'block');
		}, { offset: '60%'});
		
		$('#tab1').waypoint(function() {
			$('#tab1').addClass('bounceInRight').addClass('delay-4');
		}, { offset: '60%'});
		
		$('#tab2').waypoint(function() {
			$('#tab2').addClass('bounceInRight').addClass('delay-5');
		}, { offset: '60%'});
		
		$('#tab3').waypoint(function() {
			$('#tab3').addClass('bounceInRight').addClass('delay-6');
		}, { offset: '60%'});
		
		$('#inputName').waypoint(function() {
			$('#inputName').addClass('fadeInLeft');
		}, { offset: '60%'});
		
		$('#inputName').waypoint(function() {
			$('#inputEmail').addClass('fadeInLeft').addClass('delay-1');
		}, { offset: '60%'});
		
		$('#inputName').waypoint(function() {
			$('#inputTitle').addClass('fadeInLeft').addClass('delay-2');
		}, { offset: '60%'});
		
		$('#inputMessage').waypoint(function() {
			$('#inputMessage').addClass('fadeInRight').addClass('delay-2');
		}, { offset: '60%'});
		
		$('#sendMessage').waypoint(function() {
			$('#sendMessage').addClass('fadeInUp').addClass('delay-2');
		}, { offset: '90%'});
		
		$('#btn-message').waypoint(function() {
			$('#btn-message').addClass('bounce').addClass('delay-2');
		}, { offset: '90%'});
	};
	
	/* GOOGLE IFRAME SCROLL LOCK */
	
	$('#map').addClass('scrolloff');
	$('#map-canvas').on('click', function () {
        $('#map').removeClass('scrolloff');
    });
	$("#map").mouseleave(function () {
        $('#map').addClass('scrolloff');
    });
	
	$( "#thickness" ).change(function() {
		var min = parseInt($(this).attr('min'));
		var max = parseInt($(this).attr('max'));
		if ($(this).val() > max) {
			$(this).val(max);
		}
		else if ($(this).val() < min) {
			$(this).val(min);
		}       
    });
});

(function () {
    var scrollHandle = 0,
        scrollStep = 5,
        parent = $("#scrolling");

    $(".scroller").on("touchstart mousedown", function () {
        var data = $(this).data('scrollModifier'),
            direction = parseInt(data, 10);

        startScrolling(direction, scrollStep);
    });

    $(".scroller").on("touchend mouseup", function () {
        stopScrolling();
    });

    function startScrolling(modifier, step) {
        if (scrollHandle === 0) {
            scrollHandle = setInterval(function () {
                var newOffset = parent.scrollLeft() + (scrollStep * modifier);

                parent.scrollLeft(newOffset);
            }, 10);
        }
    }

    function stopScrolling() {
        clearInterval(scrollHandle);
        scrollHandle = 0;
    }
}());

function countFilm() {
	var width = document.getElementById('width').value;
	var length = document.getElementById('length').value;
	var thick = document.getElementById('thickness').value;
		
	width = width.replace(/,/g, '.');
	length = length.replace(/,/g, '.');
	thick = thick.replace(/,/g, '.');
		
	var result = (width * 0.001) * (length * 0.001) * 2 * (thick * 0.001) * 0.92;
	var piecePerKg = Math.round((1 / result) * 100) / 100;
	var pricePerKg = 5.5;
	
	document.getElementById('output').innerHTML=(result.toFixed(3) + ' kg');
	document.getElementById('piece-per-kg').innerHTML=piecePerKg.toFixed(2);
};

