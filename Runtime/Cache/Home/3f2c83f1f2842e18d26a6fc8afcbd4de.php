<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="webkit" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link  href="/Tpl/Home/Public/home/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/monui.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/common.css" type="text/css" rel="stylesheet" />
	<!--<link  href="/Tpl/Home/Public/home/css/jquery.datatables.min.css" type="text/css" rel="stylesheet" />-->
	<link  href="/Tpl/Home/Public/home/css/common_1.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/header.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/commonlist.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/cities.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont_1.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont_2.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont_3.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/easydialog.css" type="text/css" rel="stylesheet" />
	<!--<link  href="/Tpl/Home/Public/home/css/common_2.css" type="text/css" rel="stylesheet" />-->
  <link rel="stylesheet" type="text/css" href="/Tpl/Home/Public/home/css/H-ui.min.css" />
  <link rel="stylesheet" type="text/css" href="/Tpl/Home/Public/home/css/reset.css"/>
   <script type="text/javascript" src="/Tpl/Home/Public/home/js/fontSize.js"></script> 
  <style type="text/css">
    #all{
      background-image: url('/Tpl/Home/Public/home/images/bg.jpg');
      background-size:100% 100%;
    }
    .all_middel{
      margin: 20px 50px;
    
    }
    #header{
      
      margin-bottom: 20px;
    }
    #header .left{
      height: 60px;
      width: 130px;
      color: #078eac;
      font-size: 16px;
    
      float: left;
    }
    #header .center{
      float: left;
      
    }
    .wenzi{
      float: left;
      font-size: 20px;
      margin-top: 22px;
      color: #078eac;
    }
    #header .right{
      float: right;

      color: #078eac;
      height: 60px;
      
    }
    .blue{
      height: 60px;
      width: 1px;
      background-color: #078eac;
      float: left;
      margin-left: 10px;
      margin-right: 10px;
    }


    #time_left{
      float: left;
      font-size: 40px;
      line-height: 60px;
      font-weight: bold;

    }
    #time_right{
      margin-left: 10px;
      float: left;
      font-size: 16px;
      margin-top: 4px;
    }
    #middle{
    }
    .middle_1{
      float: left;
      width: 34%;
    }
    .middle_1_1{
      padding: 20px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      /*height: 450px;*/
      margin-bottom: 10px;
    }
    .top_1_1{
      font-size: 18px;
      color: #1c88a0;
      height: 30px;
    }
    .center_1_1{
      margin-top: 5px;
      background: url('/Tpl/Home/Public/home/images/bg2.png'); 
      margin-bottom: 5px;
      height: 250px;
    }
    .down_1_1{
      background: url('/Tpl/Home/Public/home/images/bg2.png'); 
      height: 170px;
    }
    .middle_1_2{
      padding: 20px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      /*height: 230px;*/
    }

    .center_1_2{
      margin-top: 5px;
      background: url('/Tpl/Home/Public/home/images/bg2.png'); 
      margin-bottom: 5px;
      height: 200px;
    }
    .middle_2{
      float: left;
      
      width: 30%;
      
      margin-left: 1%;
      margin-right: 1%;
    }
    .middle_2_1{
      padding: 5px;
      background: url('/Tpl/Home/Public/home/images/bg3.png') ;
      background-size:100% 100%;
      /*height: 500px;*/
      margin-bottom: 10px;
    }
    .center_2_1{
      text-align: center;
      margin: 0 auto;
      font-size: 16px;
      color: #0498b7;
    }
    .center_2_1_1{
      color: #ff8900;
    }
    .middle_2_1_1{
    
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      height: 400px;
    }
    .middle_2_1_2{
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      height: 100px;
    }
    .middle_2_2{
      padding: 10px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      /*height: 230px;*/
    }
    .middle_2_2_1{
      margin-top: 5px;
      background: url('/Tpl/Home/Public/home/images/bg2.png'); 
      margin-bottom: 5px;
      height: 220px;
    }
    .center_2_2{
      height: 200PX;
    }
    .middle_3{
      float: left;  
      width: 34%;
      
    }
    .middle_3_1{
      padding: 20px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      /*height: 400px;*/
      margin-bottom: 10px;
    }
    .center_3_1{
      /*padding: 10px;*/

    }
    .center_3_1_1{
      width: 49%;
      height: 180px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      margin-right: 1%;
      margin-bottom: 10px;
      
    }
    .center_3_1_2{
      width: 49%;
      height: 180px;
      background: url('/Tpl/Home/Public/home/images/bg2.png'); 
      margin-bottom: 10px;

    }
    .center_3_1_3{
      width: 49%;
      height: 180px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      margin-right: 1%;
    }
    .center_3_1_4{
      width: 49%;
      height: 180px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
    }
    .middle_3_2{
      padding: 20px;
      background: url('/Tpl/Home/Public/home/images/bg2.png');  
      /*height: 280px;*/
    }
    .center_3_2{
      margin-top: 5px;
      background: url('/Tpl/Home/Public/home/images/bg2.png'); 
      margin-bottom: 5px;
      height: 250px;
    }

    .hg{
      background-color: #0498b7;
      height: 2px;
      width:100%;
    }
    .title{
      font-size: 14px;
      color: #0498b7;
      height: 20px;
      margin-left: 10px;
    }
    .content{
      background: url('/Tpl/Home/Public/home/images/hjsj.png') ;
      background-size:100% 100% ;
      height: 230px;
    }
    .fl{
      float: left;
    }
    .center_3_1 img{
      width: 95%;
      height: 130px;
      margin-top: 15px;
      margin-right: 2.5%;
      margin-left: 2.5%;
    }
    

  </style>
</head>
<body>
<div class="sy_line"></div>
 <div class="m-hd"> 
   <div class="g-main"> 
    <div class="m-hd-top"> 
     <div class="u-logo"> 
         海尔COSMOPlat种植管理人工智能平台
     </div> 
     <div class="m-login"> 
      <input type="hidden" id="login_salt" value="" /> 
      <!----> 
      
       <?php if($head_user){ ?>
        <a id="bounceRe" class="m-btn" style="width:120px;">您好，<?php echo ($head_user['uname']); ?></a> 
      <?php }else{ ?>
         <a id="bounceRe" class="m-btn" href="<?php echo U('Login/login');?>">登录</a> 
      <?php } ?>
      <!----> 
     </div> 
    </div> 
    <div class="m-nav-list"> 
     <ul> 
      <li id="pIndex"   class="<?php if($Think.CONTROLLER_NAME == 'Index'){ ?>active <?php } ?>"><a href="/"><i class="nav-icon icon-index"></i>首页</a></li> 
      <li id="pCatalog" class="<?php if($Think.CONTROLLER_NAME == 'Environment'){ ?>active <?php } ?>"><a href="<?php echo U('Environment/environment');?>"><i class="nav-icon icon-catalog"></i>环境数据</a></li> 
      <li id="pCatalog" class="<?php if($Think.CONTROLLER_NAME == 'Produce'){ ?>active <?php } ?>"><a href="<?php echo U('produce/produce');?>"><i class="nav-icon icon-api"></i>生产管理</a></li> 
      <li id="pApp" class="<?php if($Think.CONTROLLER_NAME == 'Sales'){ ?>active <?php } ?>"><a href="<?php echo U('sales/sales');?>"><i class="nav-icon icon-app"></i>销售记录</a></li> 
      <!--<li id="pMap" class="<?php if($Think.CONTROLLER_NAME == 'Purchase'){ ?>active <?php } ?>"><a href="<?php echo U('purchase/purchase');?>"><i class="nav-icon icon-map"></i>对外采购</a></li>--> 
      <li id="pDynamic" class="<?php if($Think.CONTROLLER_NAME == 'Charts'){ ?>active <?php } ?>"><a href="<?php echo U('charts/charts');?>"><i class="nav-icon icon-dynamic"></i>年度台帐</a></li> 
      <li id="pInteract"  class="<?php if($Think.CONTROLLER_NAME == 'Expert'){ ?>active <?php } ?>"><a href="<?php echo U('expert/expert');?>"><i class="nav-icon icon-interact"></i>专家建议</a></li> 
      <li id="pInteract"  class="<?php if($Think.CONTROLLER_NAME == 'Policy'){ ?>active <?php } ?>"><a href="<?php echo U('policy/policy');?>"><i class="nav-icon icon-developer"></i>政策服务</a></li> 
      <li id="pMap" class="<?php if($Think.CONTROLLER_NAME == 'Pick'){ ?>active <?php } ?>"><a href="<?php echo U('pick/pick');?>"><i class="nav-icon icon-developer"></i>采摘导购</a></li> 
     </ul> 
    </div> 
    <div id="refushhtml" style=""></div> 
   </div> 
  </div>


</style>
<div class="banner" style="height: 140px;background: url('/Tpl/Home/Public/home/images/charts_banner.jpg') center"></div>
  <div class="main"> 
    <div class="container" id="all"> 
      <div class="all_middel">
          <div id="header" class="cl">
          <div class="left">
            
            人工智能平台
            
          </div>
       <!--    <div class="center">
            <div class="blue"></div>
            <div class="wenzi">种植基地李张庄地块综合管理电子台账</div>
            
          </div> -->
          <div class="right">
            <div id="time_left"></div>
            <div id="time_right"></div>
          </div>
          </div>
          <div id="middle">
            <div class="middle_1">
              <div class="middle_1_1">
                <div class="top_1_1">产量</div>
                <div class="hg"></div>
                <div class="center_1_1">
                  <div class="title">环境数据:</div>
                  <div class="content"></div>
                </div>
                <div class="down_1_1">
                  <div class="title">生产事件:</div>
                  <div id="down_1_1" style="width: 100%;height:150px;"></div>
                </div>
              </div>
              <div class="middle_1_2">
                <div class="top_1_1">营销诊断</div>
                <div class="hg"></div>
                <div class="center_1_2">
                  <div class="title">分销渠道:</div>
                  <div id="center_1_2" style="width: 100%;height:200px;"></div>
                </div>
              </div>
            </div>
            <div class="middle_2">
              <div class="middle_2_1">
                <div class="middle_2_1_1" id="middle_2_1_1" style="width:100%;height:400px;">
                  
                </div>
                <div class="middle_2_1_2">
                  <div class="title">分析结果:</div>
                  <div class="center_2_1">综合得分<span class="center_2_1_1">7分</span></div>
                </div>
              </div>
              <div class="middle_2_2">
                <div class="middle_2_2_1">
                  <div class="title">市场行情:</div>
                  <div class="center_2_2" id="center_2_2">
                  
                  </div>
                </div>
                
              </div>
            </div>
            <div class="middle_3">
              <div class="middle_3_1">
                <div class="top_1_1">质量
                  <div class="hg"></div>
                </div>
                
                <div class="center_3_1 cl">
                  <div class="center_3_1_1 fl">
                    <div class="title">地块认证:</div>
                    <img src="/Tpl/Home/Public/home/images/dk.png" />
                  </div>
                  <div class="center_3_1_2 fl">
                    <div class="title">生物农药使用:</div>
                    <img src="/Tpl/Home/Public/home/images/swny.png" />
                  </div>
                  <div class="center_3_1_3 fl">
                    <div class="title">病虫害发生记录:</div>
                    <img src="/Tpl/Home/Public/home/images/bch.png" />
                  </div>
                  <div class="center_3_1_4 fl">
                    <div class="title">病虫害防治:</div>
                    <img src="/Tpl/Home/Public/home/images/hx_wl.png" />
                  </div>

                </div>
              </div>
              <div class="middle_3_2">
                <div class="top_1_1">成本分析</div>
                <div class="hg"></div>
                <div class="center_3_2" id="center_3_2">
                    
                </div>
              </div>
            </div>
  </div>
</div>

    </div> 

  </div> 
 <div id="yly-footer" class="m-ft"> 
   <div class="g-main"> 
  
   </div> 
   <p>海尔COSMOPlat种植管理人工智能平台 鲁ICP备050110101号</p> 
  </div>  




<!--<div class="footer">
    <div class="clearfix copyright-wrap">
        <div class="pull-left mycopyright">
            <p>CopyRight @2017-2019 慧胜种植管理平台 </p>
            <p> 鲁ICP备050110101号</p>
            <p>All rights reserved</p>
            <p><span class="margin-b-8">友情链接  <a href="#" target="_blank" >海尔COSMOPlat平台</a> </span></p>
        </div>
        <div class="pull-left scan-code clearfix">
            <img src="http://yladc.com/static/theme/img/code_new.png">
            <div class="margin-b-8">扫描下载</div>
            <div class="margin-b-8">杨凌农业云大数据App</div>
            <div><i><img src="http://yladc.com/static/theme/img/and-icon.png"></i>Andriod</div>
        </div>
    </div>
</div>-->    
<script src="/Tpl/Home/Public/home/js/echarts.js"></script>
<script type="text/javascript">
  // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('center_3_2'));
        option = {
    color:['#66ac52','#ffc032','#549bd3','#f47e39','#ed9100'],
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },


    calculable : true,
    series : [
       
        {
            name:'面积模式',
            type:'pie',
            radius : [15, 80],
         
            roseType : 'area',
            data:[
                {value:10, name:'灾害预防投入10%'},
                {value:15, name:'人工投入15%'},
                {value:35, name:'市场投入35%'},
                {value:15, name:'科技投入15%'},
                {value:25, name:'物料投入25%'},
                
            ]
        }
    ]
  };
 // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        
    

</script>

<script type="text/javascript">
  // 基于准备好的dom，初始化echarts实例
        var myChart1 = echarts.init(document.getElementById('center_2_2'));
  option = {
    color:['#66ac52','#ffc032','#549bd3','#f47e39','#ed9100'],
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['采摘价','超市价格','农资价格','平台价格'],
        itemHeight:1,//图例的高度
        itemWidth:15,
         icon: 'rect',
         right:0,
        itemGap:0,
        textStyle:{
            color:'#0498b7',
            fontSize:10,
        },
        bottom:160,
    },
    grid: {
      top:'25%',
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },

    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: ['6-15','6-16','6-17','6-18','6-19','6-20','6-21','6-22','6-23','6-24','6-25'],
       
            
                axisLabel: {
                            show: true,
                            textStyle: {
                                color: '#0498b7'
                            },
                            
                        }, 
                        axisLine:{
                          lineStyle:{
                            color:'#0498b7',
                          }
                        },
                         
    },
    yAxis: {
        type: 'value',
        name:'价格/元',
        axisLabel : {
                            
            textStyle: {
                color: '#0498b7'
            }
        },
        axisLine:{
          lineStyle:{
            color:'#0498b7',
          }
      },
        splitLine:{
                          show:false,
                        }
    },
    series: [
        {
            name:'采摘价',
            type:'line',
             symbol: "none",
            data:[2, 2.5, 3.5, 3, 2.3, 3, 3,2.5,2.7,3,2.9],
           
        },
        {
            name:'超市价格',
            type:'line',
           symbol: "none",
            data:[8, 9, 7.7, 7.9, 8.2, 8.5, 9,8.7,9,8.2,7.9],

        },
        {
            name:'农资价格',
            type:'line',
            symbol: "none",
            data:[5.2, 5.8, 5, 6, 5, 4.7, 4.2,4.7,5,5.3,4.9]
        },
        {
            name:'平台价格',
            type:'line',
            symbol: "none",
            data:[7, 8.5, 7.3, 7.7, 7.9, 8, 8.4,7.9,8.5,7.9,7.5]
        },


      ]
  };
 // 使用刚指定的配置项和数据显示图表。
        myChart1.setOption(option);
  
</script>

<script type="text/javascript">
  // 基于准备好的dom，初始化echarts实例
    var myChart2 = echarts.init(document.getElementById('middle_2_1_1'));
    option = {
    title: {
        text: '综合效益动态分析雷达图',
         left: 'center',
        textStyle:{
            color:'#0498b7',
            
        }
    },
    radar: [
        {
            indicator: [
                { text: '10质量' },
                { text: '产量10' },
                { text: '营销诊断10' },
                { text: '10成本分析' },
               
            ],
            radius: 140,
            startAngle: 45,
            splitNumber: 5,
            shape: 'circle',
            name: {
                formatter:'{value}',
                textStyle: {
                    color:'#72ACD1'
                }
            },
            axisLine: {
                lineStyle: {
                    color: '#0498b7'
                }
            },
            splitLine: {
                lineStyle: {
                    color: '#0498b7'
                }
            },
            splitArea:{
              areaStyle:{
                color:'rgba(24,25,29,0)',
              }
            }
        },
     
    ],
    series: [
        {
            name: '雷达图',
            type: 'radar',
            itemStyle: {
                emphasis: {
                    // color: 各异,
                    lineStyle: {
                        width: 2
                    }
                }
            },
            normal: {
            areaStyle: {
                
                opacity: 0.4,
                 },
            },

            data: [
                {
                    value: [30, 30, -0, -61],
                    name: '图一',
                    symbol: 'rect',
                    symbolSize: 1,
                    areaStyle: {
                        normal: {
                            color: 'rgba(254,148,2,0.3)'
                        }

                    }
                },

            ]
        },
    
     ]
  }
 // 使用刚指定的配置项和数据显示图表。
        myChart2.setOption(option);
 
</script>
<script type="text/javascript">
   // 基于准备好的dom，初始化echarts实例
      var myChart3 = echarts.init(document.getElementById('center_1_2'));
      option = {
      grid: {
          top:10,
          containLabel: true
      },
      xAxis: {
                 max:10,
                position:'top',
                  axisLabel: {
                              show: true,
                              textStyle: {
                                  color: '#0498b7'
                              },
                              
                          }, 
                          axisLine:{
                            lineStyle:{
                              color:'#0498b7',
                            }
                          },
                           type: 'value',
         
            splitLine:{
                            show:false,
                          }

              },

      yAxis: {
          
          data: ['预防跟风种植','广告促销','电子商务','农超对接','品牌建设'],
           axisLabel : {
                              
              textStyle: {
                  color: '#0498b7'
              }
          },
          axisLine:{
            lineStyle:{
              color:'#0498b7',
            }
        },
                          
      },
      series: [
          {
              
              type: 'bar',
              data: [3, 4, 5, 6, 8],
                itemStyle: {
                      normal:{  
                      color: function (params){
                          var colorList = ['#66ac52','#ffc032','#549bd3','#f47e39','#ed9100'];
                          return colorList[params.dataIndex];
                      }
                  },
                },
                barWidth:15,
          },


       ]
    };
       
        // 使用刚指定的配置项和数据显示图表。
        myChart3.setOption(option);

</script>

<script type="text/javascript">
   // 基于准备好的dom，初始化echarts实例
        var myChart4 = echarts.init(document.getElementById('down_1_1'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text:'六到九月生产管理记录',
                textStyle:{
                  color:'#0498b7',
                  fontSize:14,

                },
                right: 20,
            },
           color: ['#3398DB'],
            tooltip: {},
             grid: {
              top: '30',
          bottom:'30',
           
        },
        
            xAxis: {
                data: ["浇水","施肥","除草","喷农药"],
                axisLabel: {
                            show: true,
                            textStyle: {
                                color: '#0498b7'
                            },
                            
                        }, 
                        axisLine:{
                          lineStyle:{
                            color:'#0498b7',
                          }
                        }

            },
            yAxis : [
                    {
                        type : 'value',
                        name : '频率/次',
                        max:5,
                        axisLabel : {
                            formatter: '{value}',
                            textStyle: {
                                color: '#0498b7'
                            }
                        },
                        nameTextStyle:{
                          color:'#0498b7',
                          fontSize:10,
                        },
                        axisLine:{
                          lineStyle:{
                            color:'#0498b7',
                          }
                        },
                        splitLine:{
                          show:false,
                        }
                    }
          ],
            series: [{
                name: '频率/次',
                type: 'bar',
                data: [2,1,3,2],

                itemStyle: {
                    normal:{  
                    color: function (params){
                        var colorList = ['#66ac52','#ffc032','#549bd3','#f47e39'];
                        return colorList[params.dataIndex];
                    }
                },
              },
              barWidth:20,

            },

            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart4.setOption(option);



</script>
<script type="text/javascript">
  window.addEventListener("resize", function () {
    myChart.resize();
  myChart1.resize();
  myChart2.resize();
  myChart3.resize();
  myChart4.resize();
  });
  show();
  //创建一个日期对象
  function show(){
  var d=new Date();
  //获取年份
  //var nian=d.getYear();//2016  //16
  var nian=d.getFullYear();//2016
    //获取月
    var yue=d.getMonth()+1;//6   july 7月   0-11
    //获取星期几

    var day=d.getDay();
    switch (day)
    {
    case 0:
      xq="天";
      break;
    case 1:
      xq="一";
      break;
    case 2:
      xq="二";
      break;
    case 3:
      xq="三";
      break;
    case 4:
      xq="四";
      break;
    case 5:
      xq="五";
      break;
    case 6:
      xq="六";
      break;
    }
    //5    0-6    0:星期天
   
    //获取几号
    var dd=d.getDate();//1    1-31
    //获取小时
    var h=d.getHours();// 16下午4点     24小时制
    //获取分钟
    var m=d.getMinutes();//31分
    //获取描述
    var s=d.getSeconds();//50秒

    document.getElementById("time_left").innerHTML = h+":"+m+":"+s; 
    document.getElementById("time_right").innerHTML = "星期"+xq +"<br>"+ nian + " . "+ yue + " . " +dd; 
    }
    setInterval("show()",1000);


  </script>


</body>
</html>