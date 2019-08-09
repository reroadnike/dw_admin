/*
    javascript公共文件
    包含基础配置和部分公用方法
*/

    var base_url    = 'http://www.8hjie.local/';
    var admin_url   = 'http://admin.8hjie.local/';
    var api_url     = 'http://api.8hjie.local/';
    var static_url  = 'http://static.8hjie.local/';
    var moblie_url  = 'http://m.8hjie.local/';
    var manage_url  = 'http://manage.8hjie.local/';

    var url_base    = 'http://www.8hjie.local/';
    var url_admin   = 'http://admin.8hjie.local/';
    var url_api     = 'http://api.8hjie.local/';
    var url_static  = 'http://static.8hjie.local/';
    var url_moblie  = 'http://m.8hjie.local/';

    //获取时间
    function getTime(type){
        var type = arguments[0] ? arguments[0] : 'all';
        var d = new Date();
        var t = '';
        if(type == 'date' || type == 'all' ){
            //日期
            t += d.getFullYear() + '-';
            t += d.getMonth() + 1 + '-';
            t += d.getDate() + ' ';
        }
        if(type == 'time' || type == 'all' ){
            //时间
            t += d.getHours() + ':';
            t += d.getMinutes() + ':';
        }
        if(type == 'all'){
            //全部
            t += d.getSeconds();
        }
        return t;
    }

    //判断字符串是否为网址
    function CheckUrl(str)
    {
        var RegUrl = new RegExp();
        RegUrl.compile("^[A-Za-z]+://[A-Za-z0-9-_]+\\.[A-Za-z0-9-_%&\?\/.=]+$");
        if (!RegUrl.test(str)) {
            return false;
        }
        return true;
    }

    //获取get请求参数
    function GetQueryString(name)
    {
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null){
            return  unescape(r[2]);
        }else{
            return null;
        }
    }
     $(document).ready(function() {
        var b_name = navigator.appName;
        var b_version = navigator.appVersion;
        var version = b_version.split(";");
        var trim_version = version[1].replace(/[ ]/g, "");
        if (b_name == "Microsoft Internet Explorer") {
        /*如果是IE6或者IE7*/
            if (trim_version == "MSIE8.0" || trim_version == "MSIE7.0") {
            layer.msg("您的IE浏览器版本过低，请更新您的ie浏览器", {icon: 5});
            //然后跳到需要连接的下载网站
            //window.location.href="http://jiaoxueyun.com/download.jsp";
            }
        }
        }); 