<?php
return array(
    /******************************************数据库配置*******************************************************/
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'dw',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'dw_',    // 数据库表前缀
    'DB_CHARSET'   => 'utf8', // 数据库名
    "URL_MODEL" => 2,
    /*'DB_TYPE'               =>  'mysql',     // 数据库类型
     'DB_HOST'               =>  '119.23.219.51', // 服务器地址
     'DB_NAME'               =>  'dev_8hjie',          // 数据库名
     'DB_USER'               =>  'dev_8hjie_user',      // 用户名
     'DB_PWD'                =>  'qq857015784',          // 密码
     'DB_PORT'               =>  '3306',        // 端口 
     'DB_PREFIX'             =>  'jg_',    // 数据库表前缀
     'DB_CHARSET'   => 'utf8', // 数据库名
     "URL_MODEL" => 2,*/
    /******************************************样式js文件路径***************************************************/
    'TMPL_PARSE_STRING'  =>array(     
                '__PUBLIC__' => __ROOT__.'/App/Home/Common', // 更改默认的/Public 替换规则  
               
    ), 

);