<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class PublicController extends HomeBaseController {

 
    public function _initialize(){
        parent::_initialize();

    }
    
    public function findDevice(){
        $device_id = I("device_id");
        $device_res = $device = D("device")->where(array("device_id"=>$device_id))->find();
        $pest_res = $pest = D("pest_data")
                        ->where(array("device_code"=>$device_res['device_code']))
                        ->order("addtime desc")
                        ->find();
						
		$pest_res['code'] = $device_res['device_code'];
        $this->ajaxReturn($pest_res);
    }
    
    public function header(){
       
        $this->display();
    }
    public function footer(){
        $this->display();
    }
    public function device_header(){
        
        $this->display("Public/device_header");
    }
    public function device_footer(){
        $this->assign("name",111);
        $this->display("Public/device_footer");
    }
     public function _meat(){
        $this->display();
    }
    public function _footer(){
        $this->display();
    }
    public function incompatible(){
        $this->display();
    }
    public function message(){
        $waitSecond = 3;
        $jumpUrl = U('Index/index');
        $this->assign(array("waitSecond"=>$waitSecond,"jumpUrl"=>$jumpUrl));
        $this->display();
    }
    public function error(){
        $this->display();
    }
    
}
