<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class IndexController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    public function index(){              
        $this->display();
    }


   
}
