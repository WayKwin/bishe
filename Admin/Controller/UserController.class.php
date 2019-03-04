<?php
namespace Admin\Controller;
/*
传入自动加载方法
*/

use Admin\Model\UserModel;
use \Frame\Libs\BaseController;
use \Admin\Model\IndexModel;/*引入首页模型类*/
final class UserController extends BaseController{
    public function Index()/*对应的action方法 对应 View/Index/index.html*/
    {
        $indexObj = IndexModel::getInstance();
        $arrs = $indexObj->fetchAll();
        $this->samrty->assign("arrs",arrs);
        $this->smarty->display("index.html");
    }
    public function add()
    {
        $this->smarty->display("add.html");
    }
    public function edit()
    {
        $this->smarty->display("edit.html");
    }
}
?>
