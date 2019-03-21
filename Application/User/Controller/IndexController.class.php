<?php
namespace User\Controller;
use Common\Controller\UserBaseController;
class IndexController extends UserBaseController {
    
    /*初始化方法*/
    function __construct() {
        parent::__construct();
       
    }
    
    /*后台首页*/
    public function index(){
       
        $this->display();
    }
    
    
    
  
    
    

   
}