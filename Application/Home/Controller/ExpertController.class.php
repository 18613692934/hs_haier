<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class ExpertController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    public function expert(){              
        $this->display();
    }
public function expert_detail(){
        $this->display();
    }

   
}
