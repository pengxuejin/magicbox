<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL' => 2,                        // 如果你的环境不支持PATHINFO 请设置为3
    'URL_CASE_INSENSITIVE' => true,          //地址栏不区分大小写
    //'SHOW_PAGE_TRACE'=>1,
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'magicbox',  // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',    // 密码
    'DB_PORT'               =>  '3306',      // 端口
    'DB_PREFIX'             =>  '',          // 数据库表前缀

    'PICS_SOURCE' => "http://".$_SERVER['HTTP_HOST'].__ROOT__."/Public/Uploads/",
);
