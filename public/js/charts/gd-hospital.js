!(function (NioApp, $) {
    "use strict";
    
    var ipdIncome = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'USD',
        lineTension : .3,
        datasets : [{
            label : "USD",
            color : "#0fac81",
            background : "transparent",
            data: [920, 1005, 1250, 850, 1100, 1006, 1310, 1050, 1100, 1310, 1050, 1100]
        }]
    };

    var opdIncome = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'USD',
        lineTension : .3,
        datasets : [{
            label : "USD",
            color : "#816bff",
            background : "transparent",
            data: [920, 1050, 1250, 850, 1100, 1006, 1310, 1050, 1100, 1310, 1050, 1100]
        }]
    };

    var labIncome = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'USD',
        lineTension : .3,
        datasets : [{
            label : "USD",
            color : "#ffa353",
            background : "transparent",
            data: [920, 1050, 1250, 850, 1100, 1060, 1310, 1050, 1100, 1310, 1050, 1100]
        }]
    };

    var todayExpense = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'USD',
        lineTension : .3,
        datasets : [{
            label : "USD",
            color : "#ff63a5",
            background : "transparent",
            data: [920, 1050, 1250, 850, 1100, 1060, 1310, 1050, 1100, 1310, 1050, 1100]
        }]
    };

    function ecommerceLineS3(selector, set_data){
        var $selector = (selector) ? $(selector) : $('.ecommerce-line-chart-s3');
        $selector.each(function(){
            var $self = $(this), _self_id = $self.attr('id'), _get_data = (typeof set_data === 'undefined') ? eval(_self_id) : set_data;
            var selectCanvas = document.getElementById(_self_id).getContext("2d");

            var chart_data = [];
            for (var i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension:_get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    fill: true,
                    borderWidth:2,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: _get_data.datasets[i].color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: _get_data.datasets[i].data,
                });
            } 
            var chart = new Chart(selectCanvas, {
                type: 'line',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    plugins: {
                        legend: {
                            display: (_get_data.legend) ? _get_data.legend : false,
                            rtl: NioApp.State.isRTL,
                            labels: {
                                boxWidth:12,
                                padding:20,
                                color: '#6783b8',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                title: function() {
                                    return false;
                                },
                                label: function (context) {
                                    return `${context.parsed.y} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#1c2b46',
                            titleFont:{
                                size: 8,
                            },
                            titleColor: '#fff',
                            titleMarginBottom: 4,
                            bodyColor: '#fff',
                            bodyFont:{
                                size:8,
                            },
                            bodySpacing:4,
                            padding:6,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: false,
                            ticks: {
                                beginAtZero: false,
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                padding: 0
                            },
                            grid: { 
                                color: NioApp.hexRGB("#526484",.2),
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                drawTicks:false,
                            },
                        },
                        x: {
                            display: false,
                            ticks: {
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                source: 'auto',
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                offset: true,
                                drawTicks:false,
                            }
                        }
                    }
                }
            });
        })
    }
    // init chart
    NioApp.coms.docReady.push(function(){ ecommerceLineS3(); });

    var analyticOvData = {
        labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan","13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
        dataUnit : 'USD',
        lineTension : .1,
        datasets : [{
            label : "Current Month",
            color : "#e85347",
            dash : [5,5],
            background : "transparent",
            data: [3910, 4420, 4110, 5180, 4400, 5170, 6460, 8830, 5290, 5430, 4690, 4350, 4600, 5200, 5650, 6850, 6950, 4150, 4300, 6000, 6800, 2250, 6900, 7950,6900, 4200, 6250, 7650, 8950, 9750]
        },{
            label : "Current Month",
            color : "#3fbd9a",
            dash : [0,0],
            background : NioApp.hexRGB('#3fbd9a',.15),
            data: [4110, 4220, 4810, 5480, 4600, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950,6300, 7200, 7250, 7650, 6950, 4750]
        }]
    };

    function analyticsLineLarge(selector, set_data){
        var $selector = (selector) ? $(selector) : $('.analytics-line-large');
        $selector.each(function(){
            var $self = $(this), _self_id = $self.attr('id'), _get_data = (typeof set_data === 'undefined') ? eval(_self_id) : set_data;
            var selectCanvas = document.getElementById(_self_id).getContext("2d");

            var chart_data = [];
            for (var i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension:_get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    fill: true,
                    borderWidth:2,
                    borderDash:_get_data.datasets[i].dash,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: _get_data.datasets[i].color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: _get_data.datasets[i].data,
                });
            } 
            var chart = new Chart(selectCanvas, {
                type: 'line',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    plugins: {
                        legend: {
                            display: (_get_data.legend) ? _get_data.legend : false,
                            rtl: NioApp.State.isRTL,
                            labels: {
                                boxWidth:12,
                                padding:20,
                                color: '#6783b8',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed.y} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#fff',
                            borderColor:'#eff6ff',
                            borderWidth:2,
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont:{
                                size: 12
                            },
                            bodySpacing:4,
                            padding: 10,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            position : NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: true,
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                padding: 8,
                                stepSize:2400
                            },
                            grid: { 
                                color: NioApp.hexRGB("#526484",.2),
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                drawTicks:false,
                            },
                        },
                        x: {
                            display: false,
                            ticks: {
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                source: 'auto',
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength:0,
                                zeroLineColor: 'transparent',
                                offset: true,
                                drawTicks:false,
                            }
                        }
                    }
                }
            });
        })
    }
    // init chart
    NioApp.coms.docReady.push(function(){ analyticsLineLarge(); });
    
    var analyticAuData = {
        labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan","13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
        dataUnit : 'People',
        lineTension : .1,
        datasets : [{
            label : "Active Users",
            color : "#6fcdb3",
            background : "#6fcdb3",
            data: [1110, 1220, 1310, 980, 900, 770, 1060, 830, 690, 730, 790, 950, 1100, 800, 1250, 850, 950, 450, 900, 1000, 1200, 1250, 900, 950,1300, 1200, 1250, 650, 950, 750]
        }]
    };

    function analyticsAu(selector, set_data){
        var $selector = (selector) ? $(selector) : $('.analytics-au-chart');
        $selector.each(function(){
            var $self = $(this), _self_id = $self.attr('id'), _get_data = (typeof set_data === 'undefined') ? eval(_self_id) : set_data;
            var selectCanvas = document.getElementById(_self_id).getContext("2d");

            var chart_data = [];
            for (var i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension:_get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth:2,
                    borderColor: _get_data.datasets[i].color,
                    data: _get_data.datasets[i].data,
                    barPercentage : .7,
                    categoryPercentage : .7
                });
            } 
            var chart = new Chart(selectCanvas, {
                type: 'bar',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    plugins: {
                        legend: {
                            display: (_get_data.legend) ? _get_data.legend : false,
                            rtl: NioApp.State.isRTL,
                            labels: {
                                boxWidth:12,
                                padding:20,
                                color: '#6783b8',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                title: function() {
                                    return false;
                                },
                                label: function (context) {
                                    return `${context.parsed.y} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#eff6ff',
                            titleFont:{
                                size: 11,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont:{
                                size:9,
                            },
                            bodySpacing:4,
                            padding:6,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            position : NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: false,
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                padding: 0,
                                display: false,
                                stepSize:300
                            },
                            grid: { 
                                color: NioApp.hexRGB("#526484",.2),
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                drawTicks:false,
                            },
                        },
                        x: {
                            display: false,
                            ticks: {
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                source: 'auto',
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength:0,
                                zeroLineColor: 'transparent',
                                offset: true,
                                drawTicks:false,
                            }
                        }
                    }
                }
            });
        })
    }
    // init chart
    NioApp.coms.docReady.push(function(){ analyticsAu(); });


})(NioApp, jQuery);