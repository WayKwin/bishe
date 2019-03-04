<?php
 namespace Admin\Model;
 use \Frame\Libs\BaseModel;
 final class IndexModel extends BaseModel
 {
   public function fetchAll()
   {
     //构建查询语句 结果返回二维数组
     $sql =  "SELECT id,username,name,tel,last_login_ip,last_login_time,status,role,addate From user ORDER BY id DESC";
     return $this->pdo->fetchAll($sql);
   }
 }
 ?>
