;jQuery( function( $ )
{

	$(".validate").validationEngine('attach',{
		onValidationComplete:function( form , status ){
			return false;
		}
	});

	$('.validate').bind('jqv.form.result', function(event, errorFound){
		if( errorFound == 1 ){
			return false;
		}
		var ii = layer.load(),form = $(this),value = form.serialize(),action = form.attr('action');
		$.post( action, value ,function( res ){
			if( res.status == 1 ){
				layer.msg( res.info , {icon: 6}, function(){
					window.location = res.url;
				});
			} else {
				layer.msg( res.info , {icon: 5});
			}
	        layer.close(ii);
		});
		return false;
	});

	$(".right_box").hover( function(){
		var $p = $(this).find('.pleaceholder');
		$p.show();
	},function(){
		var $p = $(this).find('.pleaceholder');
		$p.hide();
	});

	// 活动滚动效果
	$('.slick').slick({
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		touchMove: false,
		slidesToScroll: 1
	});

	// 打卡一个iframe
	$('.layer_iframe').click( function()
	{
		var href = $(this).attr('href'),title=$(this).attr('title');
		var layer_iframe = layer.open({
		  type: 2,
		  title: title,
		  area: ['50%', '60%'],
		  shade: 0.8,
		  closeBtn: 1,
		  shadeClose: true,
		  content: href,
		});
		return false;
	});
});

var t = n = 0,count;
$(document).ready(function() {
    count = $("#banner_list a").length;
    $("#banner_list a:not(:first-child)").hide();
    $("#banner_info").html($("#banner_list a:first-child").find("img").attr('alt'));
    $("#banner_info").click(function() {
        window.open($("#banner_list a:first-child").attr('href'), "_blank")
    });
    $("#banner li").click(function() {
        var i = $(this).text() - 1; //获取Li元素内的值，即1，2，3，4
        n = i;
        if (i >= count) return;
        $("#banner_info").html($("#banner_list a").eq(i).find("img").attr('alt'));
        $("#banner_info").unbind().click(function() {
            window.open($("#banner_list a").eq(i).attr('href'), "_blank")
        });
        $("#banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
        document.getElementById("banner").style.background = "";
        $(this).toggleClass("on");
        $(this).siblings().removeAttr("class");
    });
    t = setInterval("showAuto()", 4000);
    $("#banner").hover(function() {
        clearInterval(t)
    },
    function() {
        t = setInterval("showAuto()", 4000);
    });
})

function showAuto() {
    n = n >= (count - 1) ? 0 : ++n;
    $("#banner li").eq(n).trigger('click');
}