<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class LoginController extends HomeBaseController {
    
    
    public function __construct() {
        parent::__construct();
    }

    public function login(){
        if(IS_POST && IS_AJAX){
            $data = $_POST;
            $param['uname'] = trim($data['uname']);
            $param['password'] = trim($data['password']);
            $where = array(
                    "uname"=>$param['uname'],
                    "password"=> md5(md5(md5(md5(md5($param['password']))))),
                    "status" => 1,"is_delete"=>0
                );
            $user = M('user')->where($where)->find();
            if($user){
                session('user_id', $user['user_id']);
                session('uname',  $user['uname']);
                session("lastLoginTime",$user["unix_logtime"]);
                $data = array("unix_logtime"=>time());
                M('user')->where(array("user_id"=>$user["user_id"]))->save($data);
                $msg = array(
                    'msg'=> '登录成功',
                    'status' => 1,
                    'url' => U('Index/index'),
                );
                $this->ajaxReturn($msg);
                
            }else{
                $msg = array(
                    'msg'=> '账号或密码错误',
                    'status' => 0,
                    'url'=> U('login'),
                );
                $this->ajaxReturn($msg); 
            }
            
        }
        $this->display();   
    }
    
    function logout(){
            $_SESSION = array(); //清除SESSION值.  
            session_destroy();  //清除服务器的sesion文件
            $this->redirect("Login/login");
    }
    
    function verify(){
        $config = array(
            'fontSize'    =>    20,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'useCurve'    =>    false, // 关闭混淆曲线
            'imageW'      =>    145,
            'imageH'      =>    40,
        );
        $verify = new \Think\Verify($config);
        $verify->entry(); 
    }


}
