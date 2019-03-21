<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class PurchaseController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    public function purchase(){              
        $this->display();
    }


   
}
