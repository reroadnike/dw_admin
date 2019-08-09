<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>德沃后台登录页</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/App/Home/Common/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/App/Home/Common/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/App/Home/Common/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/App/Home/Common/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/App/Home/Common/assets/css/app.css">
    <script src="/App/Home/Common/assets/js/jquery.min.js"></script>
    <script src="/App/Home/Common/common/js/jquery.md5.js"></script>
     <!-- <script type="text/javascript" src="http://static.8hjie.com/common/js/jquery.md5.js"></script> -->
     <script type="text/javascript" src="/App/Home/Common/layer/layer.js"></script>

</head>

<body data-type="login">
    <script src="/App/Home/Common/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>



                <form class="am-form tpl-form-line-form">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user_name" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="password" placeholder="请输入密码">

                    </div>
                   

                    <div class="am-form-group">

                        <button type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/App/Home/Common/assets/js/amazeui.min.js"></script>
    <script src="/App/Home/Common/assets/js/app.js"></script>
    <script type="text/javascript">

    $(function(){
        document.onkeydown = function(e){ 
            var ev = document.all ? window.event : e;
            if(ev.keyCode==13) {

                   $('.am-btn').click();

             }
        }
        }); 


            $('.am-btn').click(function(){
                var user_name = $('#user_name').val();
                if(!user_name) {
                    layer.msg('账号不能为空');return;
                }
                var password = $('#password').val();
                if(!password) {
                    layer.msg('密码不能为空');return;
                }
                password = $.md5(password);
                $.post('<?php echo U("Login/checkLogin");?>',{
                    user_name:user_name,
                    password:password,
                },function(res){
                    if(res.err==0){
                        layer.msg(res.msg,{time: 1000},function(){location.href="/"});
                    }else{
                        layer.msg(res.msg);
                    }
                    
                },'json');
            });
    </script>
</body>

</html>