<?php
//前台的配置文件，数组形式
//php中数字 类似map
 return array(
   //数据库类型
  'db_type'  => 'mysql',
  'db_host' => 'localhost',
  'db_name' => 'test',
  'db_port' => '3306',
  'db_user' => 'root',
  'db_password' =>'123',
  'charset' =>'utf-8',

  'default_platform' =>'admin',
  'default_controller'=>'Index',// 默认的控制器一般是首页
  'defalut_action' =>'index'//

 );
 ?>
