<?php
return array(
	//应用配置信息
	'MULTI_MODULE'          =>  false,
	'DEFAULT_MODULE'        =>  'Home',
	'URL_CASE_INSENSITIVE'  =>  true,//url大小写
	// 'URL_MODEL'				=>  1,
	// 'ACTION_SUFFIX'         =>  'Action', // 操作方法后缀

	'LOG_RECORD' => true, // 开启日志记录
	'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
	'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式


	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'mbank', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PARAMS' =>  array(), // 数据库连接参数
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	// 'DB_PARAMS' => array(PDO::ATTR_PERSISTENT => true),//长连接
);