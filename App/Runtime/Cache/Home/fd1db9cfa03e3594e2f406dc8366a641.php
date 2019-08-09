<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>德沃后台管理系统</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/App/Home/Common/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/App/Home/Common/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/App/Home/Common/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/App/Home/Common/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/App/Home/Common/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/App/Home/Common/assets/css/app.css">
    <script src="/App/Home/Common/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/App/Home/Common/grid/css/GridManager.css">
    <script type="text/javascript" src="/App/Home/Common/grid/js/GridManager.min.js"></script>
    <script type="text/javascript" src="/App/Home/Common/grid/js/GridManager.js"></script>
    <script type="text/javascript" src="/App/Home/Common/layer/layer.js"></script>
    <script type="text/javascript" src="/App/Home/Common/build/dist/echarts.js"></script>
    <link rel="stylesheet" href="/App/Home/Common/select/css/combo.select.css">
    <script src="/App/Home/Common/select/js/jquery-1.11.3.min.js"></script>
    <script src="/App/Home/Common/select/js/jquery.combo.select.js"></script>
	<script src="/App/Home/Common/laydate/laydate.js"></script>

    
        
    <script src="/App/Home/Common/common/js/jquery.md5.js"></script>
    
<style>
    .am-form-field{
        color: #000!important;
        border: #ccc 1px solid !important;
    }
    </style>
</head>

<body data-type="index">
    <script src="/App/Home/Common/assets/js/theme.js"></script>
            <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="/App/Home/Common/assets/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <!-- <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div> -->
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你：<?php if($_SESSION['user_name']== 'admin'): ?>超级管理员<?php else: echo (session('user_name')); endif; ?><span></span> </a>
                        </li>

                        <!-- 新邮件 -->
                        <!-- <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a> -->
                            <!-- 弹出列表 -->
                           <!--  <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/App/Home/Common/assets/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/App/Home/Common/assets/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>禁言小张</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>
 -->
                        <!-- 新提示 -->
                        <!-- <li class="am-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-bell"></i>
                                <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                            </a> -->

                            <!-- 弹出列表 -->
                        <!--     <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-line-chart"></i>
                                            <span> 有6笔新的销售订单</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            12分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-star"></i>
                                            <span> 有3个来自人事部的消息</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            30分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-folder-o"></i>
                                            <span> 上午开会记录存档</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            1天前
                                        </div>
                                    </a>
                                </li>


                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <i class="am-icon-bell"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="am-text-sm checkPass">
                            <a href="<?php echo U('Login/checkPass');?>">
                                <span class="am-icon-sign-out"></span> 修改密码
                            </a>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="<?php echo U('Login/outlogin');?>">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
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
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture am-center">
                        <img src="/App/Home/Common/assets/img/user02.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text" style="text-align: center;">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              <?php if($_SESSION['user_name']== 'admin'): ?>超级管理员<?php else: echo (session('user_name')); endif; ?>
          </span>
                    <!-- <a href="javascript:;" class="tpl-user-panel-action-link am-center" style="text-align: center;"> <span class="am-icon-pencil"></span> 账号设置</a> -->
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-link">

                    <a href="/">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>


                    <li class="sidebar-nav-link">
                        <?php if(($controller == 'News')): ?><a href="javascript:;" class="sidebar-nav-sub-title active">
                        <?php else: ?>
                            <a href="javascript:;" class="sidebar-nav-sub-title"><?php endif; ?>
                            <i class="am-icon-file-text sidebar-nav-link-logo"></i> 管理员

                            <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                        </a>
                        <?php if(($controller == 'News')): ?><ul class="sidebar-nav sidebar-nav-sub" style="display: block">
                         <?php else: ?>
                            <ul class="sidebar-nav sidebar-nav-sub" style="display: none"><?php endif; ?>
                            <li class="sidebar-nav-link">
                                <a href="javascript:;">
                                    <span class="am-icon-folder sidebar-nav-link-logo"></span> 管理员信息
                                </a>
                            </li>

                            <li class="sidebar-nav-link">
                                <a href="javascript:;">
                                    <span class="am-icon-file-o sidebar-nav-link-logo"></span> 测试数据
                                </a>
                            </li>
                        </ul>
                    </li>

            
<!--                 <?php if((in_array('Master',$rr) OR in_array('Role',$rr) OR in_array('Regular',$rr))): ?><li class="sidebar-nav-link">
                        <?php if(($controller == 'Master') OR ($controller == 'Role') OR ($controller == 'Regular')): ?><a href="javascript:;" class="sidebar-nav-sub-title active">
                        <?php else: ?>
                            <a href="javascript:;" class="sidebar-nav-sub-title"><?php endif; ?>


                            <i class="am-icon-shield sidebar-nav-link-logo"></i> 权限管理
                            <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                        </a>

                        <?php if(($controller == 'Master') OR ($controller == 'Role') OR ($controller == 'Regular')): ?><ul class="sidebar-nav sidebar-nav-sub" style="display: block">
                        <?php else: ?>
                            <ul class="sidebar-nav sidebar-nav-sub" style="display: none"><?php endif; ?>

                        <?php if((in_array('Master',$rr))): ?><li class="sidebar-nav-link">
                                <a href="<?php echo U('Master/index');?>">
                                    <i class="am-icon-user sidebar-nav-link-logo"></i> 管理员
                                </a>
                            </li><?php endif; ?>
                        <?php if((in_array('Role',$rr))): ?><li class="sidebar-nav-link">
                                <a href="<?php echo U('Role/index');?>">
                                    <i class="am-icon-user-plus sidebar-nav-link-logo"></i> 角色
                                </a>
                            </li><?php endif; ?>
                        <?php if((in_array('Regular',$rr))): ?><li class="sidebar-nav-link">
                                <a href="<?php echo U('Regular/index');?>">
                                    <i class="am-icon-shield sidebar-nav-link-logo"></i> 权限
                                </a>
                            </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?> -->

            </ul>
        </div>

    
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">


            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">修改密码</div>
                                <!-- <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div> -->
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">新密码 <span class="tpl-form-line-small-title">Password</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" class="tpl-form-input" id="password1" placeholder="请输入密码">
                                            <small>请填写6-20位数。</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">再次输入 <span class="tpl-form-line-small-title">Password</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" class="tpl-form-input" id="password2" placeholder="请输入密码">
                                            <small>请填写6-20位数。</small>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success " id="checkPass" >提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>


    <script src="/App/Home/Common/assets/js/amazeui.min.js"></script>
    <script src="/App/Home/Common/assets/js/amazeui.datatables.min.js"></script>
    <script src="/App/Home/Common/assets/js/dataTables.responsive.min.js"></script>
    <script src="/App/Home/Common/assets/js/app.js"></script>
    

    <script type="text/javascript">

        $('#checkPass').click(function(){
            var password1 = $('#password1').val();
            var password2 = $('#password2').val();
            if(!password1 || !password2) {
                layer.msg('密码不能为空');return;
            }
            if(password1.length<6 || password2.length<6) {
                layer.msg('密码不少于6位数');return;
            }
            if(password1 != password2) {
                layer.msg('两次密码不一致');return;
            }
            var password = $.md5(password1);
            var data = {password:password};
            $.post("<?php echo U('Login/checkPass');?>",data,function(res) {
                if(res.err==0){
                    layer.msg(res.msg,{time: 1200},function(){location.href="<?php echo U('Login/index');?>"});
                }else{
                    layer.msg(res.msg);
                }
            });
        });
    </script>



</body>

</html>