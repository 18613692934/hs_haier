<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;

/**
 * Description of JsonController
 *
 * @author zhang
 */
class JsonController {
    /**
     * 获取json文件内容
     */
    public function getJsonDoc($path){
             // 从文件中读取数据到PHP变量  
            $json_string = file_get_contents($path);  
      
            // 用参数true把JSON字符串强制转成PHP数组  
            $data = json_decode($json_string, true);  
      
            return $data;
    }
   


    
    
    
}
