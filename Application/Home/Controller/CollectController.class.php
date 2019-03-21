<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class CollectController extends HomeBaseController {
private $user;
private $user_id;
private $env;
private $device;
private $pest;
private $disease;
private $device_codes;
private $sex;
    public function _initialize(){
        parent::_initialize(); 
        $this->user_id = cookie('user');
        $this->user = D('user');
        $this->env = D("env");
        $this->pest = D("pest_data");
        $this->disease = D("disease");
        $this->device = D("device");
        $userData = $this->user->where(array("user_id"=>$this->user_id))->find();
        /*给予超级管理员一个标记，当标记为all时，判断为超级管理员，显示所有的设备情况*/
        $this->sex = $userData['sex'];
        $all = $this->device->where(array("uid"=>$this->user_id))->field("device_code")->select();
            $str='';
            foreach ($all as $k => $v){
                $str.=$v['device_code'].',';
            }
            $this->device_codes=substr($str,0,strlen($str)-1);
  
    }
    public function index(){
        if($this->sex != "all"){
            $where['device_code']=array("in",$this->device_codes);
            $unix_addtime = $this->env->where($where)->max("unix_createdate"); 
            if(!$this->device_codes){
               $unix_addtime = 0;
            
            }
        }else{
            $unix_addtime = $this->env->where($where)->max("unix_createdate"); 
        }
        
        $this->assign("time",$unix_addtime);
        $this->display();
    }
    public function home(){
        $time = getTime(time(), "day");
         $pn_where['pn_category_name'] = array("neq","");
        if($this->sex != "all"){
            $where['device_code']=array("in",$this->device_codes);
           
            $yes_where['device_code']=array("in",$this->device_codes);
            $beginTime = $time["beginTime"];
                $yes_beginTime = $beginTime-86400;
                $endTime = $time["endTime"];
                $yes_endTime = $endTime-86400;
                $where['unix_createdate'] = array(array('gt',$beginTime),array('lt',$endTime)) ;
                $yes_where['unix_createdate'] = array(array('gt',$yes_beginTime),array('lt',$yes_endTime)) ;
                $temp_map['temp'] = array("neq","");
    //        $temp_map['temp'] = array("")
                $hum_map['humidity'] = array("neq","");  
                $beam_map['beam'] = array("neq",""); 

                $avg_temp = round($this->env->where($where)->where($temp_map)->avg("temp"));
                $yes_avg_temp = round($this->env->where($yes_where)->where($temp_map)->avg("temp"));
                $avg_humidity = round($this->env->where($where)->where($hum_map)->avg("humidity"));
                $yes_avg_humidity = round($this->env->where($yes_where)->where($hum_map)->avg("humidity"));
                $avg_beam = round($this->env->where($where)->where($beam_map)->avg("beam"));
                $yes_avg_beam = round($this->env->where($yes_where)->where($beam_map)->avg("beam"));

                $temp_lv = round($avg_temp-$yes_avg_temp);

                $humidity_lv = round($avg_humidity-$yes_avg_humidity);

                $beam_lv = round($avg_beam-$yes_avg_beam);

                $pest_sum = D("pest_number")
                        ->where($where)
                        ->where($pn_where)
                        ->table("iot_pest_data as pd")
                        ->join("iot_pest_number as pn on pn.pd_id=pd.pd_id")
                        
                        ->sum("pn_number");
                if(!$pest_sum){
                    $pest_sum = 0;
                }
                $yes_pest_sum = D("pest_number")
                        ->table("iot_pest_data as pd")
                        ->join("iot_pest_number as pn on pn.pd_id=pd.pd_id")
                        ->where($yes_where)
                        ->where($pn_where)
                        ->sum("pn_number");
                if($pest_sum||$yes_pest_sum){
                    $pest_lv =  round($pest_sum - $yes_pest_sum); 
                }else{
                    $pest_lv = 0;
                }
                
                

                $count = $this->disease->where($where)->count();
                $yes_count = $this->disease->where($yes_where)->count();
                if($count){
                    $health_count = $this->disease->where($where)->where(array("dse_level"=>"健康"))->count();
                    $health = round($health_count/$count*100);
                }else{
                    $health = 0;
                }
                if($yes_count){
                    $yes_health_count = $this->disease->where($yes_where)->where(array("dse_level"=>"健康"))->count();
                    $yes_health = round($yes_health_count/$yes_count*100);
                }else{
                    $yes_health = 0;
                }

                $health_lv = round($health-$yes_health);
        
                if(!$this->device_codes){
                    $avg_temp = 0;
                    $avg_humidity = 0;
                    $avg_beam = 0;
                    $sum_pest = 0;
                    $health = 0;
                    $temp_lv = 0;
                    $humidity_lv = 0;
                    $beam_lv = 0;
                    $pest_lv = 0;
                    $health_lv = 0;
                }
                $region_all = D("region")->where(array("create_id"=>$this->user_id))->select();
        }else{
                 $beginTime = $time["beginTime"];

                $yes_beginTime = $beginTime-86400;
                $endTime = $time["endTime"];
                $yes_endTime = $endTime-86400;
                $where['unix_createdate'] = array(array('gt',$beginTime),array('lt',$endTime)) ;
                $yes_where['unix_createdate'] = array(array('gt',$yes_beginTime),array('lt',$yes_endTime)) ;
                $temp_map['temp'] = array("neq","");
    //        $temp_map['temp'] = array("")
                $hum_map['humidity'] = array("neq","");  
                $beam_map['beam'] = array("neq",""); 

                $avg_temp = round($this->env->where($where)->where($temp_map)->avg("temp"));
                $yes_avg_temp = round($this->env->where($yes_where)->where($temp_map)->avg("temp"));
                $avg_humidity = round($this->env->where($where)->where($hum_map)->avg("humidity"));
                $yes_avg_humidity = round($this->env->where($yes_where)->where($hum_map)->avg("humidity"));
                $avg_beam = round($this->env->where($where)->where($beam_map)->avg("beam"));
                $yes_avg_beam = round($this->env->where($yes_where)->where($beam_map)->avg("beam"));

                $temp_lv = round($avg_temp-$yes_avg_temp);

                $humidity_lv = round($avg_humidity-$yes_avg_humidity);

                $beam_lv = round($avg_beam-$yes_avg_beam);
//                p($where);
//                p($yes_where);

                $pest_sum = D("pest_number")
                        
                        ->table("iot_pest_data as pd")
                        ->join("iot_pest_number as pn on pn.pd_id=pd.pd_id")
                        ->where($where)
                        ->where($pn_where)
                        ->sum("pn_number");
                if(!$pest_sum){
                    $pest_sum = 0;
                }
                $yes_pest_sum = D("pest_number")
                        ->table("iot_pest_data as pd")
                        ->join("iot_pest_number as pn on pn.pd_id=pd.pd_id")
                        ->where($yes_where)
                        ->where($pn_where)
                        ->sum("pn_number");
                if($pest_sum||$yes_pest_sum){
                    $pest_lv =  round($pest_sum - $yes_pest_sum); 
                }else{
                    $pest_lv = 0;
                }


                $count = $this->disease->where($where)->count();
                $yes_count = $this->disease->where($yes_where)->count();
                if($count){
                    $health_count = $this->disease->where($where)->where(array("dse_level"=>"健康"))->count();
                    $health = round($health_count/$count*100);
                }else{
                    $health = 0;
                }
                if($yes_count){
                    $yes_health_count = $this->disease->where($yes_where)->where(array("dse_level"=>"健康"))->count();
                    $yes_health = round($yes_health_count/$yes_count*100);
                }else{
                    $yes_health = 0;
                }

                $health_lv = round($health-$yes_health);
                    $region_all = D("region")->select();
        }
                

 
        
        
        $this->assign(array(
           
 
            "avg_temp"=>$avg_temp,
             "avg_humidity"=>$avg_humidity,
             "avg_beam"=>$avg_beam,
            "sum_pest"=>$pest_sum,
            "health"=>$health,
            "temp_lv"=>$temp_lv,
            "humidity_lv"=>$humidity_lv,
            "beam_lv"=>$beam_lv,
            "pest_lv"=>$pest_lv,
            "health_lv"=>$health_lv,
                ));
        
        
        foreach($region_all as $key=>$value){
            $region[$key] = $value['rnname']; 
        }
        $this->assign("region",$region);
        $this->display();
    }

    public function homeCharts(){
         $data = array();
            $pest_where['pn_category_name'] = array("neq","");
            $env_map['temp'] = array("neq"," ");
            $env_map['humidity'] = array("neq"," ");
            $max_env = $this->env->where($where)->max("unix_createdate");
            $max_pest = $this->pest->where($where)->max("unix_createdate");
            $max_dse = $this->disease->where($where)->max("unix_cretaedate");
            $max_d = $max_env > $max_pest ?($max_env> $max_dse ? $max_env : $max_dse) :($max_pest > $max_dse? $max_pest : $max_dse);
            $startDate = strtotime(date("Y-m-d", $max_d))-518400;
        //获得存在的所有害虫的类型    
                $pest_type = D("pest_number")
                    ->where($pest_where)
                    ->field("pn_category_name")
                    ->group("pn_category_name")
                    ->select(); 
                $type = array();
                foreach ($pest_type as $key => $value) {
                    $type[] =  $value['pn_category_name'];
                }
        if($this->sex != "all"){
            $where['device_code']=array("in",$this->device_codes);
            if(!$this->device_codes){
                $this->ajaxReturn($data);
            }
        }
        for ($i = 0; $i < 7; $i++) {
                $where['unix_createdate'] = array(array('gt',$startDate),array('lt',$startDate+86399)) ;
                
                $date = date("Y-m-d",$startDate);
                //获取echarts中 X坐标的数组
                $time[$i] = array();
                $time[$i] = $date;

                //获取每天中的  温度和湿度的平均值
                        $env_avg = D('env')
                                ->where($where)
                                ->where($env_map)
                                ->field("avg(temp) as temp_avg,avg(humidity) as humidity_avg,unix_createdate")
                                ->order("unix_createdate")
                                ->select();
                        
//                        
//                p(D("pest_number")->getLastSql());
               
                //获取每天中 害虫的总数量
                $pest_sum = D("pest_number")
                        ->table("iot_pest_number as pn")
                        ->join("iot_pest_data as pd on pd.pd_id=pn.pd_id")
                        ->where($where)
                        ->where($pest_where)
                        ->field("sum(pn_number) as pest_sum")
                        
                        ->find();
                //获取每天中  各类型害虫的数量
                $pest_category_sum = D("pest_number")
                            ->table("iot_pest_number as pn")
                            ->join("iot_pest_data as pd on pd.pd_id=pn.pd_id")
                            ->where($where)
                            ->where($pest_where)
                            ->field("sum(pn_number) as pest_category_sum,pn_category_name")
                            ->group("pn_category_name")
                            ->order("unix_createdate")
                            ->select();

                foreach ($env_avg as $ke => $val) {
                   
                    
                    if($val['temp_avg']){
                        $array['平均温度'][] = round($val['temp_avg'],2);
                    }else{
                        $array['平均温度'][] = 0;
                    }
                    if($val['humidity_avg']){
                        $array['平均湿度'][] = round($val['humidity_avg'],2);
                    }else{
                         $array['平均湿度'][] = 0;
                    }
                   if($pest_sum['pest_sum']){
                       $array['总数量'][] = $pest_sum['pest_sum'];
                   }else{
                       $array['总数量'][] = 0;
                   } 
                }
                foreach ($pest_category_sum as $key => $value) {
                    $res[$value['pn_category_name']] = $value['pest_category_sum'];
                }
                for ($x = 0; $x < count($type); $x++) {
                        if(isset($res[$type[$x]])){
                            $array[$type[$x]][] = $res[$type[$x]];
                        }else{
                            $array[$type[$x]][] = 0;
                        }

                }  

                $startDate +=  86400;
                unset($res);
            }
            $data['time'] =  $time;
//            $data['legend'] = $legends;
            foreach ($array as $key => $value) {
                
                if("平均温度" == $key || "平均湿度" == $key ){
                    $data['data'][] = array(
                        'name'=>$key,
                        'type'=>'line',
                        'yAxisIndex'=> 1,
                        'data'=>$array[$key],
                    );
                    
                }else{
                    $data['data'][] = array(
                        'name'=>$key,
                        "type"=>"bar",
                        'data'=>$array[$key],
                    );
                }
                
            }
//            p($data);
        $this->ajaxReturn($data);
    }
    
    
    
    public function env(){
        if($this->sex != "all"){
            $where['device_code']=array("in",$this->device_codes);
            $startTime = strtotime(I("startTime"));  //获取时间插件时间戳格式
        $endTime = strtotime(I("endTime"));   //获取时间插件时间戳格式
       

        $env_item = $this->env
                ->where($where)
                ->order("unix_createdate desc")
                ->find(); 
        //获取数据中时间戳最大的数据
        $maxTime = $env_item['unix_createdate'];
        //获取$amxTime 在一天内的范围值;
        $date = getTime($maxTime, "day");
        
        
       
        //判断当时间插件内容不为空时，进行条件判断
        if (!empty($startTime) && !empty($endTime)) {
            $where["unix_createdate"] = array(array("gt", $startTime), array("lt", $endTime));
        }else{
            $where["unix_createdate"] = array(array("gt", $date['beginTime']), array("lt", $date['endTime']));
        }
        //判断区域不为空
        $regions = I("region");
        if(!empty($regions)){
            $region_str = implode(",",$regions);
            $where['region']=array("in",$region_str);
        }
        
        $where['temp&humidity&beam&wind_direction&wind_speed'] = array("NEQ"," ");
            
        $env_res = $this->env
                ->where($where)
                ->order("unix_createdate")
                ->select();        
        //获取最小时间戳
        $firstTime = current($env_res)['unix_createdate'];
        //获取最大时间戳
        $lastTime = end($env_res)['unix_createdate'];
        $time = array(
            "firstTime" => date("Y-m-d H:i:s", $date['beginTime']), 
            "lastTime" =>  date("Y-m-d H:i:s", $date['endTime'])
                );
            if (IS_AJAX) {
                $arr = array();
                foreach ($env_res as $key => $value) {
                    $arr["addtime"][] = date("Y-m-d H:i:s", $value["unix_createdate"]);
                    $arr["temp"][] = $value["temp"];
                    $arr["humidity"][] = $value["humidity"];
                    $arr["beam"][] = $value["beam"];
                    $arr["wind_speed"][] = $value["wind_speed"];
                    $arr["precipitation"][] = $value["precipitation"];
                }
                $this->ajaxReturn($arr);
            }
             $region_item = $this->env->where($where)->group("region")->select();
            $region = array();
            foreach ($region_item as $value) {
                if("" != $value['region'] ){
                     $region[] = $value['region'];
                }
            }
            if(!$this->device_codes){
                if (IS_AJAX) {
                   $arr = array();
                   $this->ajaxReturn($arr);
               }
            }
        }else{
            $startTime = strtotime(I("startTime"));  //获取时间插件时间戳格式
            $endTime = strtotime(I("endTime"));   //获取时间插件时间戳格式
       

            $env_item = $this->env
                    ->where($where)
                    ->order("unix_createdate desc")
                    ->find(); 
        //获取数据中时间戳最大的数据
        $maxTime = $env_item['unix_createdate'];
        //获取$amxTime 在一天内的范围值;
        $date = getTime($maxTime, "day");
        
        
       
        //判断当时间插件内容不为空时，进行条件判断
        if (!empty($startTime) && !empty($endTime)) {
            $where["unix_createdate"] = array(array("gt", $startTime), array("lt", $endTime));
        }else{
            $where["unix_createdate"] = array(array("gt", $date['beginTime']), array("lt", $date['endTime']));
        }
        //判断区域不为空
        $regions = I("region");
        if(!empty($regions)){
            $region_str = implode(",",$regions);
            $where['region']=array("in",$region_str);
        }
        $where['temp|humidity|beam|wind_direction|wind_speed'] = array("NEQ"," ");
            
        $env_res = $this->env
                ->where($where)
                ->order("unix_createdate")
                ->select();        
        //获取最小时间戳
        $firstTime = current($env_res)['unix_createdate'];
        //获取最大时间戳
        $lastTime = end($env_res)['unix_createdate'];
        $time = array(
            "firstTime" => date("Y-m-d H:i:s", $date['beginTime']), 
            "lastTime" =>  date("Y-m-d H:i:s", $date['endTime'])
                );
            if (IS_AJAX) {
                $arr = array();
                foreach ($env_res as $key => $value) {
                    $arr["addtime"][] = date("Y-m-d H:i:s", $value["unix_createdate"]);
                    $arr["temp"][] = $value["temp"];
                    $arr["humidity"][] = $value["humidity"];
                    $arr["beam"][] = $value["beam"];
                    $arr["wind_speed"][] = $value["wind_speed"];
                    $arr["precipitation"][] = $value["precipitation"];
                }
                $this->ajaxReturn($arr);
            }
            $region_item = $this->env->where($where)->group("region")->select();
            p($region_item);
            $region = array();
            foreach ($region_item as $value) {
                if("" != $value['region'] ){
                     $region[] = $value['region'];
                }
            }
       
        }     
        $this->assign(array("time" => $time));
        $this->assign("region",$region);     
        $this->display();
    }

    
    
    
    public function pest(){
        if($this->sex != "all"){
            if(!$this->device_codes){
                if(IS_AJAX){$data = array();} 
            }
                $where['device_code']=array("in",$this->device_codes); 
            }
                $pest_where['pn_category_name'] = array("neq","");
                $where['imgstatus'] = 1;
                //获取插件的开始和结束时间
                $startTime = strtotime(I("startTime"));
                $endTime = strtotime(I("endTime"));
                //定义要返回的字段
                $field = array("unix_createdate");
                //接收前台区域数据
                $regions = I("region");
                //将区域数组转换为字符串;
                if(!empty($regions)){
                    $region_str = implode(",",$regions);
                    $where['region']=array("in",$region_str);
                }
                //获得存在的所有害虫的类型
                $pest_type = D("pest_number")
                ->where($pest_where)
                ->field("pn_category_name")
                ->group("pn_category_name")
                ->select(); 
                $type = array();
                foreach ($pest_type as $key => $value) {
                    $type[] =  $value['pn_category_name'];
                }
                /**
                 * Array
                    (
                        [unix_createdate] => 1520925131
                    )
                 */
                $pest_item = $this->pest
                            ->table("iot_pest_data as pd"  )
                            ->join("iot_pest_number as pn on pd.pd_id=pn.pd_id")
                            ->where($where)
                            ->where($pest_where)
                            ->field($field)
                            ->order("unix_createdate desc")
                            ->find();
                
                $maxTime = $pest_item['unix_createdate'];
                //最大时间所在的一天的开始和结束时间    $data
                $date = getTime($maxTime, "day");
                $time = array(
                    "firstTime" => date("Y-m-d H:i:s", $date['beginTime']), 
                    "lastTime" =>  date("Y-m-d H:i:s", $date['endTime'])
                );
                 
                if (!empty($startTime) && !empty($endTime)) {
                    $where["unix_createdate"] = array(array("gt", $startTime), array("lt", $endTime));
                }else{
                    $where["unix_createdate"] = array(array("gt", $date['beginTime']), array("lt", $date['endTime']));
                }  
                //获取害虫下的环境信息
                $pest_env = $this->pest
                            ->table("iot_pest_data as pd")
                            ->join("iot_pest_number as pn on pd.pd_id=pn.pd_id")
                            ->where($where)
                            ->where($pest_where)
                            ->group("unix_createdate")
                            ->order("unix_createdate")
                            ->select(); 
                
                    $pest_res = $this->pest
                            ->table("iot_pest_data as pd")
                            ->join("iot_pest_number as pn on pd.pd_id=pn.pd_id")
                            ->where($where)
                            ->where($pest_where)
                            ->field("pn_category_name,unix_createdate,pn_number")
                            ->order("unix_createdate")
                            ->select();  
//                    p($pest_res);
                   


                if(IS_AJAX){
                    if(empty($pest_res)){
                         $this->ajaxReturn($pest_res);
                    }
//                  $arr;
                    $res = array(); //想要的结果
                    foreach ($pest_res as $k => $v) {
                      $res[$v['unix_createdate']][] =  $v; 

                    }

                foreach ($pest_env as $key => $value) {
                    $data['time'][] = date("Y-m-d H:i:s",$value['unix_createdate']);
                    $array['温度'][] = $value['temp'];
                    $array['湿度'][] = $value['humidity'];
                }
                
                foreach ($res as $key => $value) {
                    foreach ($value as $k => $v) {
                       $oldArr[$v['pn_category_name']] = $v['pn_number'];
                       $newArr[] = $oldArr;  
                    }
//                    p($oldArr);
                     for ($x = 0; $x < count($type); $x++) {
                        if(isset($oldArr[$type[$x]])){
                            $array[$type[$x]][] = $oldArr[$type[$x]];
                        }else{
                            $array[$type[$x]][] = 0;
                        }

                    }  
                    
                    
                    unset($oldArr);
                }
                foreach ($array as $key => $value) {
                
                    if("温度" == $key || "湿度" == $key ){
                        $data['data'][] = array(
                            'name'=>$key,
                            "type"=>"line",
                            'data'=>$value,
                        );

                    }else{
                        $data['data'][] = array(
                            'name'=>$key,
                            'xAxisIndex'=> 1,
                            'yAxisIndex'=> 1,
                            "type"=>"bar",
                            'data'=>$value,
                        );
                    }
   
                }
                
                

//                p($data);
                $this->ajaxReturn($data);

                }

                $region_item = $this->pest->where($where)->group("region")->select();
                $region = array();
                foreach ($region_item as $value) {
                    if("" != $value['region'] ){
                         $region[] = $value['region'];
                    }
                }
            
        
            $this->assign(array("time" => $time));
            $this->assign("region",$region);
            $this->display(); 
      
        
    }

    public function seed(){
//        $this->display("Public/codeing");
         $this->display();
    }
    
    
 
   
}
