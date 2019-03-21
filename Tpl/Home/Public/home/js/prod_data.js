/**
 * Created by ztao on 2017/07/07.
 */
namespace("bigdata.bdapp.proddata");
bigdata.bdapp.proddata.prodDataService = function () {
};

bigdata.bdapp.proddata.prodDataService.prototype = {
    /**
     * 初始化
     */
    init: function () {
        var nameList = new Array();
        var dataList = new Array();
        $.ajax({
            type: "POST",
            url: ylatUrl+"/ylat/ylatservice/queryProdDataInfo",
            data: '',
            success: function (result) {
                if (null != result) {
                    //农药使用量
                    var usageList = result.body.usageList;
                    for (var i = 0; i < usageList.length; i++) {
                        var name = usageList[i].name == null ? "" : usageList[i].name;
                        var totalAmount = usageList[i].totalAmount == null ? "" : usageList[i].totalAmount;
                        nameList[i] = name;
                        dataList[i] = totalAmount;
                    }
                   prodDataService.histogramFillData(nameList, dataList);
                   //农产品种类
//                    var ctypeinfohtml = "";
//                    var cropsTypeList = result.body.cropsTypeList;
//                    for (var j = 0; j < cropsTypeList.length; j++) {
//                        var cname = cropsTypeList[j].name == null ? "" : cropsTypeList[j].name;
//                        var ccode = cropsTypeList[j].amount == null ? "" : cropsTypeList[j].amount;
//                        var cdetailList = cropsTypeList[j].detailList == null ? "" : cropsTypeList[j].detailList;
//                        ctypeinfohtml += "<div class='dl margin-t-15'>";
//                        ctypeinfohtml += "<div class='dt'>"+cname+"</div>";
//                        ctypeinfohtml += "<div class='dd'><div class='dd-toggle'>";
//                        ctypeinfohtml += "<a href='/bigdata/prodata/queryProdDataList?allFlag=1&cropsCode="+ccode+"&cropsname="+cname+"' class='first-child'><span class='on'>全部</span></a>";
//                        for (var k = 0; k < cdetailList.length; k++) {
//                            var detailname = cdetailList[k].name == null ? "" : cdetailList[k].name;
//                            var detailcode = cdetailList[k].amount == null ? "" : cdetailList[k].amount;
//                            ctypeinfohtml += "<a href='./queryProdDataList?allFlag=0&cropsCode="+detailcode+"&cropsname="+detailname+"'><span>"+detailname+"</span></a>";
//                        }
//                        ctypeinfohtml += "</div></div></div>";
//
//                    }
                    $("#cropstypelist").html(ctypeinfohtml);
                }
            }
        });

    },

    /**
     * 显示柱状图
     */
    histogramFillData:function(nameList, dataList){
        var myChart = echarts.init(document.getElementById('npmdepgraphs'));
        //var data = ['青菜','西红柿','苹果','草莓','猕猴桃','西瓜','葡萄','香菇','枣','梨','西葫芦'];
        var data = nameList;
        var dataShadow = [];
        var yMax = 200;
        for (var i = 0; i < data.length; i++) {
            dataShadow.push(yMax);
        };
        option = {
            tooltip : {
                trigger: 'axis',
                show: true,
                formatter: "{b}: {c}ml/亩"
            },
            legend: {
                data:['']
            },
            grid: {
                show:true,
                top:30,
                right:'5%',
                left:'5%',
                width:'90%'
            },
            calculable : true,
            xAxis: {
                axisLabel: {
                    inside: false,
                    textStyle: {
                        color: '#898989',
                        fontSize:15
                    }
                },
                data:data,
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
                name:'每亩农药使用量',
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
                    name:'使用量',
                    type:'bar',
                    data:dataList,
                    barGap:'-100%',
                    barCategoryGap:'40%',
                    itemStyle: {
                        normal: {
                            color: function(params) {
                                // build a color map as your need.
                                var colorList = [
                                    '#b6c434','#fdce10','#e97d25','#27737c','#ff8363',
                                    '#fbd960','#f3a43b','#5fc1de', "#b6a3dc", "#5eb2ed",
                                    "#fdb984", "#d67b81", "#8d98b2", "#e4cd30", "#fd7262",
                                    "#fdae5a", "#7980b8", "#715d86", "#46b2e1"

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
        myChart.setOption(option);
    },

    /**
     * 查询溯源码
     */
    searchSourceCode:function(){
        var sourceCode = $("#sourceCode").val();
//        window.open('http://www.ylsapt.com/sycms/smcx/index.jhtml?sourceCode=' + sourceCode);
    }
};

var prodDataService = new bigdata.bdapp.proddata.prodDataService();
$(function () {
    prodDataService.init();
});


