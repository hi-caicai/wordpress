Object.extend = function(destination, source) {
    for (var property in source) {
        destination[property] = source[property];
    }
    return destination;
}
var pageInit = {};

$(function(){
	pageInit.pageScroll();
	pageInit.imgProcess();
	pageInit.headerSwtich();
	pageInit.menuResize();
	pageInit.worksRewrite();
	pageInit.smoothslide();
});


Object.extend(pageInit,{
//	scrolling events
	pageScroll: function(){
		$(window).scroll(function(){
			var topDistance = $(window).scrollTop();
			if(topDistance > 300){
				$(".go_top").show();
			}
			else {
				$(".go_top").fadeOut(300);
			}
		});
	},
//	clear default width and height of images
	imgProcess: function(){
		$("article.post .entry-content img").each(function(){
			$(this).removeAttr("width");
			$(this).removeAttr("height");
		});
	},
//	menu and search, show and hide when click
	headerSwtich: function(){
		var aSpeed = 300;
		var fadeSpeed = 100;
		var searchSwitch = false;
		var menuSwitch = false;
		$(".header .search_button").click(function(){
			$(".header .search_form").show();
			$(".mask").show();
			$(".header .search_form input:first").focus();
			document.body.addEventListener('touchmove', preventScroll, false);
		});
		$(".header .drop_menu").click(function(){
			$(".menu").show();
			$(".mask").show();
			document.body.addEventListener('touchmove', preventScroll, false);
		});
		$(".mask").click(function(){
			$(".header .search_form").fadeOut(aSpeed);
			$(".menu").fadeOut(aSpeed);
			$(".mask").fadeOut(aSpeed);
			document.body.removeEventListener('touchmove', preventScroll, false);
		});
		var preventScroll = function (event) {
			event.preventDefault();
		}
	},
//	resize menu when device rotates
	menuResize: function(){
		var windowWidth;
		var windowHeight;
		$(window).load(function(){
			setSize();
		});
		$(window).resize(function(){
			setSize();
		});
		function setSize(){
			windowWidth = $(window).width();
			var itemNum = 9;
			if(windowWidth > (60 * itemNum + 20)){
				$(".menu").addClass("menu_short");
				menuHeight = 200;
			}
			else{
				$(".menu").removeClass("menu_short");
				menuHeight = 260;
			}
			$(".menu").height(menuHeight);
		}
	},
//	rewrite html of works page
	worksRewrite: function(){
		var windowWidth = $(window).width();
		if($("#works")){
			$("#works .pic a").each(function(){
				var imgHrefArray = $(this).attr("href").split("/");
				var imgSrc = "";
				if(windowWidth < 500){
					imgHrefArray[imgHrefArray.length-1] = "medium.jpg";
				}
				for(i=0;i<imgHrefArray.length;i++){
					imgSrc = imgSrc + imgHrefArray[i] + "/";
				}
				$(this).replaceWith("<img src='" + imgSrc + "' />")
			});
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

//	stop event bubble
function stopBubble(e)
{
    if (e && e.stopPropagation)
        e.stopPropagation()
    else
        window.event.cancelBubble=true
}
