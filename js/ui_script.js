$(document).ready(function(){
	var windowHeight = $(window).innerHeight();
	function setHeight(){
		// var windowHeight = $(window).innerHeight();
		$(".full-page").css("height", windowHeight+"px");
		// alert(windowHeight+"px");
	}

	setHeight();

	$(window).resize(function(event) {
		/* Act on the event */
		setHeight();
	});

	// Smooth Scroll Plugin
	// var scroll = new SmoothScroll('a[href*="#"]');
	// var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');
	// var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});

	$(function() {

	    var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com'], object, embed"),
	    $fluidEl = $("figure");

		$allVideos.each(function() {

		  $(this)
		    // jQuery .data does not work on object/embed elements
		    .attr('data-aspectRatio', this.height / this.width)
		    .removeAttr('height')
		    .removeAttr('width');

		});

		$(window).resize(function() {

		  var newWidth = $fluidEl.width();
		  $allVideos.each(function() {

		    var $el = $(this);
		    $el
		        .width(newWidth)
		        .height(newWidth * $el.attr('data-aspectRatio'));

		  });

		}).resize();

	});


	// Image picker for single product page
	$(function() {
		$(".thumb-images img").on("click", function() {
			var src = $(this).attr("src");
			var title = $(this).attr("alt");
			$(".main-image").find("h2").html(title).end().find("img").attr({
				"src": src
			});
		});
	});

	// Reveal Search box
	$(function(){
		$(".search-icon-chk").click(function(){
			// alert("Search Clicked");
			$(".search-box-input").css("opacity", "1")
			// $(".search-box-input").toggle(function(){
			// 	$("search-box-input").css('opacity', '1');
			// },);


			// Using classes in this case would be better than setting the css directly though, look at the addClass and removeClass methods alecwh mentioned.
			// $('#user_button').toggle(function () {
			// 	$("#user_button").addClass("active");
			// 	}, function () {
			// 		$("#user_button").removeClass("active");
			// 	});
		});

	});

	// Product Counter to cart

	// $(function () {
	//     $('.add').on('click',function(){
	//         var $qty=$(this).closest('li').find('.qty');
	//         var currentVal = parseInt($qty.val());
	//         if (!isNaN(currentVal)) {
	//             $qty.val(currentVal + 1);
	//         }
	//     });
	//     $('.minus').on('click',function(){
	//         var $qty=$(this).closest('li').find('.qty');
	//         var currentVal = parseInt($qty.val());
	//         if (!isNaN(currentVal) && currentVal > 0) {
	//             $qty.val(currentVal - 1);
	//         }
	//     });
	// });

	// $(function(){
	// 	$('.addQty').on('click', function(){
	// 		var $crntQty = $('.totalQty');
	// 		var currentQtyVal = parseInt($crntQty.val());
	// 		if (!isNaN(currentQtyVal)) {
	// 			// $crntQty.val(currentQtyVal + 1);
	// 			$('.totalQty').html(currentQtyVal + 1);
	// 		}
	// 	});
		
	// });


	// $(window).scroll(function() {
 //    var windscroll = $(window).scrollTop();
 //    if (windscroll >= 100) {
 //        $('.main-nav').addClass('fixed');
 //        $('.wrapper section').each(function(i) {
 //            if ($(this).position().top <= windscroll - 20) {
 //                $('nav a.active').removeClass('active');
 //                $('nav a').eq(i).addClass('active');
 //            }
 //        });

 //    } else {

 //        $('nav').removeClass('fixed');
 //        $('nav a.active').removeClass('active');
 //        $('nav a:first').addClass('active');
 //    }

	// }).scroll();

	// $(window).scroll(function(){
	// 	var windscroll = $(window).scrollTop();
	// 	if(windscroll >= windowHeight){
	// 		$(".navbar-inverse").removeClass('navbar-inverse');
	// 	};
	// 	if(windscroll <= windowHeight){
	// 		$(".navbar-inverse").addClass('navbar-inverse');
	// 	};
	// }).scroll();
});


















