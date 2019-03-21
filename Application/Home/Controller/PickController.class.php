<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class PickController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    public function pick(){              
        $this->display();
    }


   
}
