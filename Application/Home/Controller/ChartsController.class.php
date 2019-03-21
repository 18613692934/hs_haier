<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class ChartsController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    public function charts(){              
        $this->display();
    }


   
}
