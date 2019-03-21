<?php
namespace Common\Controller;
use Think\Controller;
/**
 * Base基类控制器
 */
class BaseController extends Controller {
    
    public function __construct() {
        parent::__construct();
//        $setting = M('setting')->all();
//        foreach ($setting  as $value) $website[$value['name']] = $value['value'];
//        //p($website);
//        $this->assign('website',$website);
    }
    
//    public function __call($method, $args) {
//        $this->display("../Error/Error/error404");
//    }

    

    /**
     * 
     * @param type $name session存储的名称
     * @param type $arr  不进行验证的操作名数组
     * @return type session存储的信息
     */
    function is_login($name='',$arr=array()){
    //不进行验证的操作名（数组）
    $action = CONTROLLER_NAME.'/'.ACTION_NAME;
    $sname = session($name);
    $boolean = in_array($action, $arr);
        if(!$boolean){
            if(!$sname){$this->redirect('Login/login'); }//跳转到登录地址
        }
        return array($name=>$sname);
    }
    
    


}
