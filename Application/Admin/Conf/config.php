<?php
return array(
	//'配置项'=>'配置值'
			'db_type' => 'mysql', 
	'db_host' => '127.0.0.1', 
	'db_user' => 'root', 
	'db_pwd' => '123', 
	'db_port' => 3306, 
	'db_name' => 'secms', 
	'db_charset' => 'utf8',
    'TMPL_PARSE_STRING' =>array( '__VIEW__' => 'http://'.$_SERVER['HTTP_HOST'].rtrim($_SERVER['SCRIPT_NAME'],'admin.php').'Application/Admin/View',
	                             '__HTTP__' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'] )
);