<?php
 namespace Frame\Libs;
 /*基础抽象模型类n*/
use \Frame\Vendor\PDOWrapper;
 abstract class BaseModel
 {
   /*pod*/
   protected $pdo = NULL;

   public function __construct()
   {
     $this->pdo = new PDOWrapper();
   }
 }

 ?>
