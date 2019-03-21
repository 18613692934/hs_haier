
/**
 * Created by liyingkang on 2016/12/19.
 */
namespace("bigdata.bdapp");
bigdata.bdapp.environmentList = function () {
};

bigdata.bdapp.environmentList.prototype = {
    init: function () {
        $.ajax({
            type: "POST",
            url: "./envMap",
            data: {},
            success: function (result) {
                if (result.header.retCode == "000000") {
                    data = result.body.data;
                    geoCoordMap = result.body.geoCoordMap;
//                     environmentList.loadEnvironmentMap(data,geoCoordMap);
                    
                    environmentList.loadEnvironmentChart();
                    environmentList.map_init(data);
                }
            }
        });
    },
    map_init:function(data){ 
 
        
//        changeSize();
        var map = new BMap.Map("map-echarts"); // 创建Map实例
        
            var res = [];
            var points = [];
    
            for (var i = 0; i < data.length; i++) {
                var geoCoord = geoCoordMap[data[i].name];
                if (geoCoord) {
                     res.push({
                         name: data[i].name,
                         value: geoCoord.concat(data[i].value),
                         device_code: data[i].device_code
                     });
                 } 
                 
                 points[i] = new BMap.Point(geoCoord[0],geoCoord[1]);
            }
      
            //让所有点在视野范围内
            map.setViewport(points);
//       var view = map.getViewport(eval(points)); 
//       var mapZoom = view.zoom;   
//       var mapZoom = 18;
//       var centerPoint = view.center;   
//       map.centerAndZoom(centerPoint,mapZoom);  
        map.enableScrollWheelZoom();     
        map.enableDoubleClickZoom();
        //地图、卫星、混合模式切换
        map.addControl( new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP]}));
        
        var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
	var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
        
        map.addControl(top_left_control);        
        map.addControl(top_left_navigation);  


        var point = new Array(); //存放标注点经纬信息的数组
        var marker = new Array(); //存放标注点对象的数组
        for (var i = 0; i < res.length; i++) {
            var device_code = res[i].device_code;
            var name = res[i].name;
            var p0 = res[i].value[0]; //
            var p1 = res[i].value[1]; //按照原数组的point格式将地图点坐标的经纬度分别提出来
            point[i] = new window.BMap.Point(p0, p1); //循环生成新的地图点
            marker[i] = new window.BMap.Marker(point[i]); //按照地图点坐标生成标记
            map.addOverlay(marker[i]);
            var label = new BMap.Label(""+name+"",{offset:new BMap.Size(-10,-15)});
            marker[i].setLabel(label);
            environmentList.addClickHandler(marker[i],device_code);
            
        }    


    },
//    loadEnvironmentMap:function(data,geoCoordMap){
//        
//    },

addClickHandler : function(marker,device_code){
        marker.addEventListener("click", function(){ 
            
            window.open("./env_list/device_code/"+device_code+".html");
        });
//         $("#list-"+code+"").click(function(){
////             console.log(marker);
//             marker.V.click();
//         });
    },


    /**
     * 加载小类商品类型
     */
    loadEnvironmentChart: function () {
        var myChart = echarts.init(document.getElementById('pie-echarts'));
        option = {

            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },

            series : [
                {
                    name: '气象数据',
                    type: 'pie',
                    radius : '55%',
                    center: ['50%', '50%'],
                    data: eval($("#dataList").val()),
                    itemStyle: {
                        normal: {
                            color: function(params) {
                                // build a color map as your need.
                                var colorList = [
                                    '#e5ae61','#72d8fd','#e97c77',
                                    '#e5ae61','#72d8fd','#e97c77',
                                    '#e5ae61','#72d8fd','#e97c77',
                                    '#e5ae61','#72d8fd'
                                ];
                                return colorList[params.dataIndex]
                            }
                        },
                    },
                }
            ]
        };

        myChart.setOption(option);
    }


};

var environmentList = new bigdata.bdapp.environmentList();
$(function () {
    environmentList.init();
});




