<?php
namespace Common\Controller;
use Common\Controller\BaseController;

class HomeBaseController extends BaseController {    
    
    public function __construct() {
        parent::__construct();
        //不进行验证的操作
        $arr = array(
            'Login/login',
            'Login/isLogin',
            'Public/incompatible',
            'Login/verify',
        );
        $sessionName = parent::is_login('user_id',$arr);
        $user = M('user')->where(['user_id'=>$sessionName['user_id']])->find();
        $this->assign('head_user',$user);
    }
    /**
     * 
     * @param type $msg
     */
    public function tips($msg){
		redirect('/error?msg='.$msg);
    }
    protected function json($data){
        @header('Content-type: text/html; charset=utf-8');
        exit(json_encode($data, JSON_UNESCAPED_UNICODE));
    }

  
}
