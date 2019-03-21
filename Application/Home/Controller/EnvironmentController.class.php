<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class EnvironmentController extends HomeBaseController {

    public function __construct(){
        parent::__construct();
       
    }
    /**
     * 环境数据主页
     */
    public function environment(){ 
        
        $this->display();
    }
    /**
     * 设备环境数据列表
     */
    public function env_list(){
        $param = I("param.");
        if($param['device_code']){
             session("device_code", $param['device_code']);
        }
        $this->assign("device_code",session('device_code'));
        $this->display();
    }
    /**
     * 设备视频监控页面
     */
    public function video(){
        $d = $_SERVER['DOCUMENT_ROOT'];
        $path = $d."/video.json";
      $jsonClass = new \Home\Controller\JsonController();
      $data = $jsonClass->getJsonDoc($path);
            
            foreach ($data['video'] as $key => $value) {
               if(session('device_code')==$value['device_code']){
                   $rtmp = $value['rtmp-gq'];
               }
            }
             $this->assign("rtmp",$rtmp);
             
        $this->display();
    }
    
    /*地图接口*/
    public function envMap(){   
        $array = array(
            "header"=> array(
                "busiCode"=>"",
                "retCode"=>"000000",
                "retMsg"=>""
            ),
            "body" => array(
                "data" => array(
                    
                ),
                "geoCoordMap" => array(
                    
                ),
            ),
        );
         $result = D("device")->select();
         foreach ($result as $key => $value) {
              
             if($value['degps']){
                 $array['body']['data'][] = array('name'=>$value['custom_name'],'value'=>229,'device_code'=>$value['device_code']);
                 
                $array['body']['geoCoordMap'][$value['custom_name']]  = split(",",$value['degps']);
                 
             }
            
         }
         $this->ajaxReturn($array);
    }
    /*layui数据表格-接口*/
    public function dataTable(){
        $paramData = I('param.');
        $start = ($paramData['page']-1)*$paramData['limit'];
        $limit = $paramData['limit'];
        $device_code = session('device_code');
        $item = D('env')->order('unix_createdate desc')->find();
        
        $result = D('env')
                ->where('device_code='.$device_code)
                ->order('unix_createdate desc')
                ->field('env_id,temp,humidity,beam,wind_direction,wind_speed,unix_createdate')
                ->limit($start,$limit)
                ->select();
        $count = D('env')->where('device_code='.$device_code)->count();
        
        if($result){
            $data = $this->timestampConversion('unix_createdate',$result);
            $data = $this->windDirectionChange($data);
            $data = array('code' => 0,'msg' => '', 'count'=> $count, 'data'=> $data,);
        }else{
            $data = array('code' => 1,'msg' => '数据加载错误！');
        }
            
        $this->ajaxReturn($data);
        
    }
   /**
    * 时间戳转换
    * @param string $name "存放时间戳的字段名"
    * @param array $data "需要转换的数组"
    * @return array   转换完成的数组 
    */
    private function timestampConversion($name,$data){
        foreach ($data as $key => $value) {
           $data[$key][$name] = date('Y-m-d H:i',$value[$name]); 
        }
        return $data;
    }
    
    /**
     * 风向角度转换
     * @param array $data  要转换的数组
     * @return array   转换完成的数组
     */
    private function windDirectionChange($data){
        foreach ($data as $key => $value) {
            if ($value['wind_direction'] > 0 && $value['wind_direction'] < 90) {$data[$key]['wind_direction']="东北";}
            if ($value['wind_direction'] == 90) {$data[$key]['wind_direction']="东";}
            if ($value['wind_direction'] > 90 && $value['wind_direction'] < 180) {$data[$key]['wind_direction']="东南";}
            if ($value['wind_direction'] == 180) {$data[$key]['wind_direction']="南";}
            if ($value['wind_direction'] > 180 && $value['wind_direction'] < 270) { $data[$key]['wind_direction']="西南";}
            if ($value['wind_direction'] == 270) {$data[$key]['wind_direction']="西";}
            if ($value['wind_direction'] > 270 && $value['wind_direction'] < 359) { $data[$key]['wind_direction']="西北"; }
            if ($value['wind_direction'] == 359) {$data[$key]['wind_direction']="北";}
        }
        return $data;
        
    }
}
