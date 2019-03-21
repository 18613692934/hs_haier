<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class PolicyController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    public function policy(){              
        $this->display();
    }
    
    public function policy_detail(){
        $this->display();
    }


   
}
