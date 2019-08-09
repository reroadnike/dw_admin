document.write('<script type="text/javascript" src="https://qzonestyle.gtimg.cn/open/qcloud/video/h5/h5connect.js" charset="utf-8"><\/script>');
$(window).resize(function(){
   adjustVideo();
});

$(window).scroll(function () {
    adjustVideo();
});

//自动调整
function adjustVideo()
{
    var top = $('#mack_video').css('top');
    top = top.replace("px","");
    if(top > 0){
        var height_body = $(document).scrollTop();
        var height_wind = $(window).height();
        var height_main = 360;
        var width_main = 510;
        $('#mack_video').css('height', height_main + 'px');
        $('#mack_video').css('width', width_main + 'px');
        $('#mack_video').css('top',(height_body + 150 - height_main + height_wind / 2) +'px');
        $('#popup_video').css('top',(height_body) +'px');
    }
}

function js_showvideo(id, auto_play)
{
    var auto_play = arguments[1] ? arguments[1] : 0;
    if(id == ''){
        maskShow('提示', '视频不存在', 3);
    }else{
        maskVideo(id, auto_play);
    }
}

//显示视频
function maskVideo(id, auto_play)
{
    var auto_play = arguments[1] ? arguments[1] : 0;
    $('#mack_video').css('top','100px');
    adjustVideo();
    $('#popup_video').css('display','block');
    $('#mack_video').css('display','block');
    //获取上次播放的视频
    var current = $('#check_video').val();
    if(current != id){
        //存储视频id
        $('#check_video').val(id);
        showVideo(id, auto_play);
    }else{
        if(currentTime() > 0){
            playVideo();
        }
    }
}

var player = '';
function showVideo(id, auto_play){
    var option ={"1":"true","file_id":id,"app_id":"1252786924","width":705,"height":550,"https":1, "auto_play" : auto_play};
    player = new qcVideo.Player(
               "tencent_video_main",
               option
           );
}
//播放
function playVideo(){
    try{
        player.resume();
    } catch(err){

    }
}
//暂停
function pauseVideo(){
    player.pause();
}
//跳转到时间
function seekTo(s){
    player.play(s);
}
//获取当前时间
function currentTime(){
    return player.getCurrentTime();
}

$(function(){
    //隐藏，暂停
    $('#popup_video').click(function(){
        pauseVideo();
        $('#popup_video').css('display','none');
        // $('#mack_video').css('display','none');
        $('#mack_video').css('top','-1000px');
    });
    $('[type_custom=video]').click(function(){
        var id = $(this).attr('data-video');
        js_showvideo(id);
    })
})