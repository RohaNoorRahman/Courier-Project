<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56]
        }, ],
        colors:['#5329FF1A', '#5329FF1A', '#5329FF', '#5329FF1A'],
        chart: {
            width: '100%',
            type: 'bar',
            height: 100,
            toolbar:{
                show: false,
            },
            sparkline: {
                enabled: true
            }

        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '80%',
                endingShape: 'rounded',
                distributed: true,
            },
        },
        dataLabels: {
            enabled: false
        },

        xaxis: {
            show:false,
            labels: {
                show: false,
            },
            axisBorder: {
                show:false
            },
            axisTicks: {
                show: false
            }
        },
        yaxis: {
            show: false,
        },
        fill: {
            opacity: 1
        },
        grid:{
            show: false,
            padding: {
                left: -10,
                right: -5,
            },
        },
        toolbar:{
            show: false,
        }

    };

    var chart = new ApexCharts(document.querySelector("#barChart"), options);
    var chart2 = new ApexCharts(document.querySelector("#barChart2"), options);
    var chart2 = new ApexCharts(document.querySelector("#barChart3"), options);
    chart.render();
    chart2.render();
</script>

<script>
    var options = {
        chart: {
            type: 'line',
            height: 250,
            toolbar:{
                show: false,
            },

        },
        series: [{
            name: 'Trends',
            data: [150000,180000,160000,260000,225000,260000, 180000]
        },
            {
                name: 'Trends 2',
                data: [170000,150000,200000,190000,140000,170000, 140000]
            }],
        xaxis: {
            show:false,
            categories: [1,5,10,15,20,25,30]
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    if(value >= 1000){
                        return value /1000 + 'k';
                    }

                }
            },
            min: 140000,
            max: 260000,
            tickAmount: 3
        },
        stroke: {
            show: true,
            width: 4,
            curve: 'smooth',
            colors: ['#5329FF', '#5329FF1A']
        },
        markers: {
            strokeColors:'#fff',
            strokeWidth: 3
        },
        grid:{
            padding: {
                bottom: -10
            },
        },
        legend: {
            show: false
        }

    }

    var chart = new ApexCharts(document.querySelector("#myChart"), options);

    chart.render();
</script>
<script>

    var options = {
        colors : ['#5329FF'],
        series: [{
            name: 'PRODUCT A',
            data: [44, 55, 41, 67, 22, 43,10]
        }, {
            name: 'PRODUCT B',
            data: [13, 23, 20, 8, 13, 27,20]
        }, {
            name: 'PRODUCT C',
            data: [11, 17, 15, 15, 21, 14,25]
        }, {
            name: 'PRODUCT D',
            data: [21, 7, 25, 13, 22, 8,35]
        },{
            name: 'PRODUCT E',
            data: [-44, -55, -41, -67, -22, -43,-10],

        }, {
            name: 'PRODUCT F',
            data: [-13, -23, -20, -8, -3, -27,-20]
        }, {
            name: 'PRODUCT G',
            data: [-11, -17, -15, -15, -21, -14,-25]
        }, {
            name: 'PRODUCT H',
            data: [-21, -7, -25, -13, -22, -8,-35]
        }],
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            },
            axisBorder:{show: false}

        },
        stroke: {
            show: true,
            width: 2,
            colors: ['white']
        },
        dataLabels: {
            enabled: false
        },
        grid: {
            yaxis: {
                lines: {
                    show: false
                }
            }
        },

        responsive: [{
            breakpoint: 480,

        }],

        plotOptions: {
            bar: {
                columnWidth: '20%',
                horizontal: false,
                borderRadius: 6,
                endingShape: "rounded",
                borderRadiusApplication: 'end',
                borderRadiusWhenStacked: 'last',

                dataLabels: {
                    total: {
                        enabled: false,
                        style: {
                            fontSize: '13px',
                            fontWeight: 900
                        },

                    }
                }

            },

        },

        xaxis: {
            type: 'date',
            categories: ['24 jan', '25 jan', '26 jan', '27 jan',
                '28 jan', '29 jan'
            ],
            lines: {
                show: true,
            },


        },

        yaxis: {
            type: 'date',
            categories: ['24 jan', '25 jan', '26 jan', '27 jan',
                '28 jan', '29 jan'
            ],
            labels: {
                show: false,
            },
        },
        legend: {
            show: false
        },
        fill: {
            opacity: 1
        }
    };

    for (var i = 0; i < options.series.length; i++) {
        for (var j = 0; j < options.series[i].data.length; j++) {
            if (options.series[i].data[j] < 0) {
                options.series[i].color = '#61C877';
            } else {
                options.series[i].color = '#5329FF';
            }
        }
    }

    var chart = new ApexCharts(document.querySelector("#stackedChart"), options);
    chart.render();

</script>

<script>
     var options = {
          series: [44, 55, 41, 17, 15],
          chart: {
          type: 'donut',
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom',
              horizontalAlign: 'center',
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chartdonut"), options);
        chart.render();
</script>
