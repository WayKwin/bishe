<?php
 namespace Home\Model;
 use \Frame\Libs\Db;
 final class IndexModel
 {
  private  $db = NULL;
  public function _construct()
  {
    $this->db = Db::getInstance();

  }
   public function fetchAll()
   {
     //构建查询语句 结果返回二维数组
     $sql =  "SELECT * From sudent ORDER BY id DESC";
     return $this->db->fetchAll($sql);
   }
 }
 ?>
