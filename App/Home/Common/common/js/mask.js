//遮罩层
//隐藏
var task;
$('#mack_div_main,#mask_div_close').on('click',function(){
    $('#popup').css('display','none');
    $('#mack_div_main').css('display','none');
    try{
        clearTimeout(task);
    }catch(e){

    }
}); 

$(window).resize(function(){
   adjust();
});

$(window).scroll(function () {
    // if ($(window).scrollTop() == $(document).height() - $(window).height()) {
    //     alert('bottom!!');
    // }
    adjust();
});

//弹出
function maskShow(title, content, closeTime)
{
    var title     = arguments[0] ? arguments[0] : '标题';
    var content   = arguments[1] ? arguments[1] : '内容';
    var closeTime = arguments[2] ? arguments[2] : 3;
    adjust();
    $('#mask_div_title').text(title);
    $('#mask_div_content').html(content);
    $('#popup').css('display','block');
    $('#mack_div_main').css('display','block');
    if(closeTime != 0){
        task = setTimeout('maskHide()', closeTime * 1000);
    }
    if(closeTime == 0){
        closeTime = 3;
    }
    typeof maskfun == 'function' && setTimeout('maskfun()', closeTime * 1000);
}

//隐藏
function maskHide()
{
    $('#popup').css('display','none');
    $('#mack_div_main').css('display','none');
}


//调整位置
function adjust()
{
    var height_body = $(document).scrollTop();
    var height_wind = $(window).height();
    var height_main = 150;
    $('#mack_div_main').css('height', height_main + 'px')
    $('#mack_div_main').css('top',(height_body - height_main + height_wind / 2) +'px')
    $('#popup').css('top',(height_body) +'px')
}
