<?php
namespace Home\Controller;
/*
传入自动加载方法
*/
use \Frame\Libs\BaseController;
use \Home\Model\IndexModel;/*引入首页模型类*/
final class IndexController extends BaseController{
  public function Index() /*对应的action方法*/
  {
    //创建模型层对象  //注意参数是字符窜， 类要加上空间+类名
    $modeObj =  IndexModel::getInstance();
   //拉取后台数据
    $arrs  = $modeObj->fetchAll();
    $this->smarty->assign("arrs",$arrs);
    $this->smarty->display("index.html");
  }
  public function delete()
  {
    $id = $_GET['id'];
    echo $id;
    $this->jump("删除成功","?c=Index");
   // 创建模型类，  模型类中实现  deleteById的方法
  }
}
 ?>
