<?php
namespace Admin\Controller;
/*
传入自动加载方法
*/
use \Admin\Model\IndexModel;/*引入首页模型类*/
final class IndexController{
  public function Index()/*对应的action方法*/
  {
    //创建模型层对象
    $modeObj =  new IndexModel();
    //拉取后台数据
    $arrs  = $modeObj->fetchAll();
    //展示到前台首页 /home/view/index/index.html
    include VIEW_PATH."index.html";/*veiw_path 是frame中初始化的常量*/
    /*前台页面通过 二维数组arrs展示页面*/
  }
}
 ?>
