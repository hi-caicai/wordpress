Object.extend = function(destination, source) {
    for (var property in source) {
        destination[property] = source[property];
    }
    return destination;
}
var pageInit = {};

$(function(){
	pageInit.pageScroll();
	pageInit.explorer();
	pageInit.imgProcess();
	pageInit.movie();
	pageInit.smoothslide();
	pageInit.fancybox();
});


Object.extend(pageInit,{
//	scrolling events
	pageScroll: function(){
		$(".mainnav_fixed").html($(".mainnav").html());
		$(window).scroll(function(){
			var topDistance = $(window).scrollTop();
			var logoHeight = 202;
			if(topDistance > logoHeight+5){
				$(".mainnav_fixed").show();
			}
			else{
				$(".mainnav_fixed").hide();
				var bgPosition = (35-3)/(logoHeight+5)*topDistance+35;
				$(".mainnav:first").css("background-position","left " + bgPosition + "px");
				$(".header").css({"transform":"translate(0," + -topDistance*.8 + "px)","-webkit-transform":"translate(0," + -topDistance*.8 + "px)","-moz-transform":"translate(0," + -topDistance*.8 + "px)"});
				$(".header .toolbar").css({"transform":"translate(0," + topDistance*.8 + "px)","-webkit-transform":"translate(0," + topDistance*.8 + "px)","-moz-transform":"translate(0," + topDistance*.8 + "px)"});
				if(topDistance == 0){
					$(".header").removeAttr("style");
					$(".header .toolbar").removeAttr("style");
					
				}
			}
			if(topDistance > 300){
				$(".go_top").addClass("go_top_show");
			}
			else {
				$(".go_top").removeClass("go_top_show");
			}
		});
		$(".go_top").click(function(){
			$(this).addClass("go_top_click");
			timer = setTimeout("$('.go_top').removeClass('go_top_show go_top_click');clearTimeout(timer)",800);
		});
	},
//	for explorers which do not support HTML5
	explorer: function(){
		function popExplorer(){
			$("#explorer").html("<p>可乐橙发现你的浏览器不支持<b>HTML5</b>喔...<br />这是一项颇有前景的新技术，你用旧浏览器看到的效果可能会一塌糊涂，为了正常的浏览效果，请跟上科技的脚步吧！<br />推荐你两款非常优秀的浏览器：</p><div class='download clearfix'><a class='chrome'target='_blank'href='http://www.google.com/chrome/'>谷歌浏览器</a><a class='firefox'target='_blank'href='http://firefox.com.cn/download/'>火狐浏览器</a></div><a class='close close_pop'href='javascript:;'>关闭</a>");
			popBlockUI("explorer");
		}
		if($(".html4").length > 0){
			popExplorer();
		}
	},
//	clear default width and height of images
	imgProcess: function(){
		$("article.post .entry-content img").each(function(){
			$(this).removeAttr("width");
			$(this).removeAttr("height");
		});
	},
//	movie
	movie: function(){
		if($("#movie").length > 0)
		{
			var groupSize = parseInt($(".wrap").width()/100);
			$("#movie .item").each(function(i){
				if(i % groupSize > groupSize-5)
				{
					$(this).find("p").addClass("to_left");
				}
				else {
					$(this).find("p").addClass("to_right");
				}
			});
			$("#movie h3").hover(
				function(){
					$(this).next("p").fadeIn(300);
				},
				function(){
					$("#movie .item p").hide();
				}
			)
		}
	},
//	anchor smoothly slide
	smoothslide: function(){
		var slideSpeed = 300;
		$("a[href*='#']").click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var $target = $(this.hash);
				$target = $target.length && $target || $("[name=" + this.hash.slice(1) + "]");
				if (this.hash.slice(1)){
					if($target.length){
						var targetOffset = $target.offset().top;
						$("html,body").animate({
							scrollTop: targetOffset
						},
						slideSpeed);
						return false;
					}
				}
				else{
					$("html,body").animate({
						scrollTop: 0
					},
					slideSpeed);
					return false;
				}
			}
		});
	},
//  fancybox
	fancybox: function(){
		if($(".fancybox").length > 0)
		{
			$(".fancybox").fancybox({
				prevEffect : 'none',
				nextEffect : 'none',
				closeBtn  : false,
				arrows    : true,
				nextClick : true
			});
		}
	}
});


//	see if one object is a child of another object
function isParent(obj,parentObj){
	while (obj != undefined && obj != null && obj.tagName.toUpperCase() != 'BODY'){
		if (obj == parentObj){
			return true;
		}
		obj = obj.parentNode;
	}
	return false;
}
