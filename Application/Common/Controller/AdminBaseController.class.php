<?php
namespace Common\Controller;
use Common\Controller\BaseController;

/**
 * admin控制器基类
 */
class AdminBaseController extends BaseController {
     public function __construct() {
        parent::__construct();
        //不进行验证的操作
        $arr = array(
            'Login/login',
            'Login/isLogin',
            'Public/incompatible',
            'Login/verify',
        );
        $sessionName = parent::is_login('admin_id',$arr);
        $admin = M('admin')->where(['admin_id'=>$sessionName['admin_id']])->find();
        $this->assign('head_admin',$admin);
    }
}

