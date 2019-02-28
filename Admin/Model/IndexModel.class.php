<?php
 namespace Admin\Model;
 use \Frame\Libs\BaseModel;
 final class IndexModel extends BaseModel
 {
   public function fetchAll()
   {
     //构建查询语句 结果返回二维数组
     $sql =  "SELECT * From stu ORDER BY id DESC";
     return $this->pdo->fetchAll($sql);
   }
 }
 ?>
