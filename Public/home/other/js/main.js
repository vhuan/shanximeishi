$(document).ready(function() {
//------------------trent's slider
		$offset = $('.trent-slider').width();
		$tSlideInStyles = {left: '0', right: '0'}
		$t_loadBarStopStyles = {animation : "none", width : "0%"}
		$hiddenSlideStylesRight = {left: $offset, right: 0 - $offset}
		$hiddenSlideStylesLeft = {right: $offset, left: 0 - $offset}
		
		//slider functions
		function tStartLoadBar() {$('.t-load-bar .inner-load-bar').css('animation', 'load 4.5s linear infinite');}

		function tSliderHasStopped() {
			if ($('.current-t-slide').css('left') === "0px" && $('.current-t-slide').css('right') === "0px") {
				return true;
			} else {
				return false;
			}
		}

		function tSlideChangerRight() {
			if ($('.current-t-slide').next().hasClass('t-slide') && tSliderHasStopped()) {
				$('.current-t-slide').removeClass('current-t-slide').css($hiddenSlideStylesLeft).next().css($tSlideInStyles).addClass('current-t-slide');
				$('.current-dot').removeClass('current-dot').next().addClass('current-dot');
			} else if (tSliderHasStopped()) {
				$('.current-t-slide').removeClass('current-t-slide');
				$('.t-slide').first().addClass('current-t-slide').css($tSlideInStyles);
				tSetCss();
				$('.current-dot').removeClass('current-dot')
				$('.t-dot').first().addClass('current-dot');
			}
		}
		function tSlideChangerLeft() {
			if ($('.current-t-slide').prev().hasClass('t-slide') && tSliderHasStopped()) {
				$('.current-t-slide').removeClass('current-t-slide').css($hiddenSlideStylesRight).prev().css($tSlideInStyles).addClass('current-t-slide');
				$('.current-dot').removeClass('current-dot').prev().addClass('current-dot');
			} else if (tSliderHasStopped()) {
				$('.current-t-slide').removeClass('current-t-slide');
				$('.t-slide').last().addClass('current-t-slide').css($tSlideInStyles);
				tSetCssLeft();
				$('.current-dot').removeClass('current-dot')
				$('.t-dot').last().addClass('current-dot');
			}
		}

		function tSetCss() {
			$('.t-slide').each(function(index, value) {
				if (index > 0) {
					$(this).css($hiddenSlideStylesRight);
				}
			});
		}
		function tSetCssLeft() {
			$t_total = $('.t-slide').length - 1;
			$('.t-slide').each(function(index, value) {
				if (index < $t_total) {
					$(this).css($hiddenSlideStylesLeft)
				}
			});
		}


		//populate dots for every slide
		$('.t-slide').each(function(index, value) {
			$('.t-slide-dots').append('<div class="t-dot"></div>');
			if (index === 0) {$('.t-dot').first().addClass('current-dot')}
		});

		//slider-code
		$('.trent-slider').css('height', $('.trent-slider').width() / 2);
		tSetCss();
		//load bar 
		tStartLoadBar();
		$('.trent-slider').hover(function() {$('.t-load-bar .inner-load-bar').css($t_loadBarStopStyles);}, function() {tStartLoadBar()})
		//interval sllide change
		var tSlideChange = window.setInterval(function() {
			tSlideChangerRight();
		}, 4500);
		$('.trent-slider').mouseover(function() {
			clearInterval(tSlideChange);
		}).mouseout(function() {
			tSlideChange = window.setInterval(function() {
				tSlideChangerRight();
			},4500);
		});

		// -----slider controls
		//arrow
		$('.t-slider-controls .arrow').click(function() {
			if ($(this).hasClass('right-arrow')) {tSlideChangerRight();}
			else if ($(this).hasClass('left-arrow')) {tSlideChangerLeft();}
		});
		//dots 
		$('.t-slide-dots .t-dot').click(function() {
			$newDotIndex = $(this).index();
			$currentDotIndex = $('.current-dot').index();
			if (tSliderHasStopped()) {
				$('.t-slide').each(function(index, value) {
					$('.current-dot').removeClass('current-dot');
					$('.current-t-slide').removeClass('current-t-slide');
					$('.t-dot').eq($newDotIndex).addClass('current-dot');
					$('.t-slide').eq($newDotIndex).css($tSlideInStyles).addClass('current-t-slide');
					if (index > $newDotIndex) {
						$(this).css($hiddenSlideStylesRight);
					} else if (index < $newDotIndex) {
						$(this).css($hiddenSlideStylesLeft);
					}
				});
			}
		});
	
});
// 固定导航栏
$(function () {
	$(window).scroll(function () {
		if ($(window).scrollTop() > 560 && $(window).scrollTop() < 3000) {
			$("#gdNav li").slideDown(1000);
		} else {
			$("#gdNav li").hide(1000);
		}
	});
	$("body>div").index();
	 $("#gdNav li").index();
	 $("#gdNav li").click(function () {
	 console.log($("div").eq($(this.index)));
	 $(window).animate({scrollTop:$("div").eq($(this.index)).offsetTop},1000);
	 });
});
/*各地小吃*/
$(function () {
	var navdivs = document.getElementsByClassName("gudingNav");
	var gudinglis = document.getElementsByClassName("navli");
	console.log(navdivs);
	console.log(gudinglis);
	var timer = null;
	 for (var i = 0; i < gudinglis.length; i++) {
	 	gudinglis[i].index = i;
	 	if (i != 1) {
	 		gudinglis[i].onclick = function () {
				 var target = navdivs[this.index].offsetTop;
				 console.log(target);
				 
	 			clearInterval(timer);
	 			timer = setInterval(function () {
	 				var current = myScroll().scrollTop;
	 				var step = (target - current) / 10;
	 				step = step > 0 ? Math.ceil(step) : Math.floor(step);
	 				current = current + step;
	 				window.scrollTo(0, current);
	 				if (current == target) {
	 					clearInterval(timer);
	 				}
	 			}, 20);
	 		};
	 	} else {
	 	}
	 };
	function myScroll() {
		return {
			scrollLeft: window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
			scrollTop: window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop
		}
	}
})
$(function () {
	$(".tab>li").click(function () {
		$(this).siblings("li").removeClass("active");
		$(this).addClass("active")
		var index = $(this).index()
		console.log(index);
		$(".xcmeishi>div:eq(" + index + ")").siblings(".diqu").removeClass('selected');
		$(".xcmeishi>div:eq(" + index + ")").addClass('selected')
	})
	
	
})