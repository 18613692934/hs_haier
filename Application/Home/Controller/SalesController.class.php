<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class SalesController extends HomeBaseController {
    private $array = array(
            "header"=> array(
                "busiCode"=>"",
                "retCode"=>"000000",
                "retMsg"=>""
            ),
            "body" => array(
                "dataList" => array(
                    "16824.00","7623.00","6403.00","3982.00"
                ),
                "nameList" => array(
                    "红蒜5.0公分","红蒜6.0公分","白蒜5.0公分","白蒜6.0公分"
                ),
            ),
        );
    public function __construct(){
        parent::__construct();
       
    }
    public function sales(){     
        $this->assign($this->array);
        $this->display();
    }
    public function getChartsData(){
        
        $this->ajaxReturn($this->array);
    }
  public function test(){
      $this->display();
  }
   
}
