/**
 * Created by liyingkang on 2016/12/14.
 */
namespace("bigdata.bdapp");
bigdata.bdapp.productTurnover = function () {
};

bigdata.bdapp.productTurnover.prototype = {
    /**
     * 初始化
     */
    init: function () {
        productTurnover.initChart();
        //添加回车事件
        document.onkeydown=function(event) {
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if (e && e.keyCode == 13) { // enter 键

            }
        }
        //选择下拉事件
        $(document).on("click",".drop-menu ul a",function(){
            var a=$(this).text();
            $(this).parents('.drop-menu').children("input[type=text]").val(a);
            $(this).parents("li").next().removeClass("display-none");
            $("#typeCode").val($(this).children("input[type=hidden]").val());

        });


    },
    /**
     * 柱状图查询方法
     */
    initChart:function(){
        var myChart = echarts.init(document.getElementById('select-plant-list'));
        var DataUrl = "./getChartsData";
        var dataInfo = {'dateTime':$("#dateTime").val(),'typeCode':$("#typeCode").val()};
        $.ajax({
            type: "POST",
            url: DataUrl,
            data: dataInfo,
            async: false,
            success: function (result) {
                if (result.header.retCode == "000000") {
                    option = {
                        tooltip : {
                            trigger: 'axis'
                        },
                        legend: {
                            data:['']
                        },
                        grid: {
                            show:true,
                            top:30,
                            right:'10%',
                            left:'10%',
                            width:'85%'
                        },
                        calculable : true,
                        xAxis: {
                            axisLabel: {
                                inside: false,
                                interval:0,
                                rotate: 60,
                                textStyle: {
                                    color: '#898989',
                                    fontSize:15
                                }
                            },
                            data:result.body.nameList,    //名称
                            type : 'category',
                            axisTick: {
                                show: false
                            },
                            axisLine: {
                                show: false
                            },
                            z: 10
                        },
                        yAxis: {
                            name:'成交量',
                            nameLocation:'end',
                            axisLine: {
                                show: true
                            },
                            axisTick: {
                                show: false
                            },
                            axisLabel: {
                                textStyle: {
                                    color: '#999'
                                }
                            },
                            type : 'value'
                        },
                        dataZoom: [
                            {
                                type: 'inside'
                            }
                        ],
                        series : [
                            {
                                name:'成交量',
                                type:'bar',
                                data:result.body.dataList,       //数据
                                itemStyle: {
                                    normal: {
                                        color: function(params) {
                                            // build a color map as your need.
                                            var colorList = ["#b6c434","#fdce10", "#e97d25","#27737c","#ff8363",
                                                "#fbd960","#f3a43b","#5fc1de","#b6a3dc","#5eb2ed","#fdb984",
                                                "#d67b81","#8d98b2","#e4cd30","#fd7262","#fdae5a","#7980b8",
                                                "#715d86","#46b2e1"
                                            ];
                                            return colorList[params.dataIndex]
                                        }
                                    }
                                },
                                markLine : {
                                    data : [
                                        {type : 'average', name: '平均值'}
                                    ]
                                }
                            }

                        ]
                    };

                }
            }
        });
        myChart.setOption(option);
    }
};

var productTurnover = new bigdata.bdapp.productTurnover();
$(function () {
    productTurnover.init();
});


