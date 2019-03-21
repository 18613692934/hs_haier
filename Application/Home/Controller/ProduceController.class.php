<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class ProduceController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    public function produce(){              
        $this->display();
    }

    public function queryProdDataList(){
        
             $this->display();
        
       
        
       
    }
    public function queryProdDataDetail(){
        $this->display();
    }
    
    
    
    private function get_curl_json($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $result = curl_exec($ch);
        if(curl_error($ch)){
            print_r(curl_error($ch));
        }
        curl_close($ch);
        return json_decode($result,TRUE);
    }
   
}
