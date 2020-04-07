$(document).ready(function() {

    <!--basic line echarts init-->

    var chartOneDom = document.getElementById("b-line");
    var chartOne = echarts.init(chartOneDom);

    var chartOneOption = {
        color: ['#FF518A','#A768F3'],

        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['Max','Min']
        },

        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data: ['Sat','Sun','Mon','Tue','Wed','Thu','Fri']
            }
        ],
        yAxis : [
            {
                type : 'value',
                axisLabel : {
                    formatter: '{value} °C'
                }
            }
        ],
        series : [
            {
                name:'Max',
                type:'line',
                data:[11, 11, 15, 13, 12, 13, 10],
                markPoint : {
                    data : [
                        {type : 'max', name: 'Max'},
                        {type : 'min', name: 'Min'}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name: 'Average'}
                    ]
                }
            },
            {
                name:'Min',
                type:'line',
                data:[1, -2, 2, 5, 3, 2, 0],
                markPoint : {
                    data : [
                        {name : 'Min of Week', value : -2, xAxis: 1, yAxis: -1.5}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name : 'Average'}
                    ]
                }
            }
        ]
    };

    if (chartOneOption && typeof chartOneOption === "object") {
        chartOne.setOption(chartOneOption, true);
    }



    /**
     * Resize chart on window resize
     * @return {void}
     */


$(window).on('resize', function(){
	 setTimeout(function(){
     chartOne.resize();
   },100)

})
});
