<?php
 namespace Frame\Vendor;

//定义最终的PDOWarpper
final class PDOWrapper
{
    //数据库的配置属性
    private $db_type;
    private $db_host;
    private $db_port;
    private $db_usr;
    private $db_pass;
    private $db_name;
    private $db_charset;
    //构造方法
    public function _construct(){
      $this->db_type = $GLOBALS['config']['db_type'];
      $this->db_host = $GLOBALS['config']['db_host'];
      $this->db_port = $GLOBALS['config']['db_port'];
      $this->db_usr = $GLOBALS['config']['db_usr'];
      $this->db_pass = $GLOBALS['config']['db_pass'];
      $this->db_name = $GLOBASL['config']['db_name'];
      $this->$db_charset = $GLOBASL['config']['$db_charset'];

    }
}
 ?>
