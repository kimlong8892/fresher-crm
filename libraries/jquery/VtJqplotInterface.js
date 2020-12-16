/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

var vtJqPlotInterface = function() {

    this.legendPlacement = 'outsideGrid'; /* refer: http://www.jqplot.com/docs/files/jqplot-core-js.html#Legend.placement */

    /**
     * Add By Kelvin Thang
     * Date: 2018-07-06
     * @param format
     * @param val
     * @returns {*}
     */
    this.tickFormatter = function (format, val) {
        if (val >= 1000000) {
            val = val / 1000000;
            return app.convertCurrencyToUserFormatAndThousands(app.convertCurrencyToUserFormat(val), "M");

        } if (val >= 1000) {
            val = val / 1000;
            return app.convertCurrencyToUserFormatAndThousands(app.convertCurrencyToUserFormat(val), "K");

        }else{
            return app.convertCurrencyToUserFormat(val, false);
        }
    }

    this.renderPie = function() {
        this.element.jqplot([this.data['chartData']], {
            seriesDefaults:{
                renderer:jQuery.jqplot.PieRenderer,
                rendererOptions: {
                    showDataLabels: true,
                    dataLabels: 'value',
                    /*-- Added By Klevin Thang--Date: 2018-06-07 */
                    dataLabelFormatString: "%'d",

                    tickRenderer : $.jqplot.AxisTickRenderer,
                    tickOptions: {
                        /*-- Added By Klevin Thang--Date: 2018-06-07 */
                        formatter: this.tickFormatter,
                        formatString: "%'d"
                    }

                },
            },

            legend: {
                show: true,
                location: 'e'
            },
            title : this.data['title']
        });
    }

    this.renderBar = function() {
        this.element.jqplot(this.data['chartData'] , {
            title: this.data['title'],
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:jQuery.jqplot.BarRenderer,
                rendererOptions: {
                    showDataLabels: true,
                    dataLabels: 'value',
                    barDirection : 'vertical'
                },
                pointLabels: {
                    show: true,
                    edgeTolerance: -15,
                }
            },
            axes: {
                xaxis: {
                    tickRenderer: jQuery.jqplot.CanvasAxisTickRenderer,
                    renderer: jQuery.jqplot.CategoryAxisRenderer,
                    ticks: this.data['labels'],
                    tickOptions: {
                        angle: -25,/*--Modified by Kelvin Thang -- date: 2019-03-14*/
                        /* Add By Klevin Thang--Date: 2018-06-07 */
                        formatter: this.tickFormatter,
                        formatString: "%'d"
                    }
                },
                yaxis: {
                    min:0,
                    /*max: this.data['yMaxValue'],*/
                    tickOptions: {

                        /**
                         * Add By Klevin Thang
                         * Date: 2018-06-07
                         */
                        formatter: this.tickFormatter,
                        formatString: "%'d"
                    },
                    pad : 1.2
                }
            },
            legend: {
                show		: (this.data['data_labels']) ? true:false,
                location	: 'e',
                placement	: (this.data['data_labels']) ? this.legendPlacement : 'outside', /*--Added By Kelvin Thang on 2019-03-18 fix issue not load data when not label*/
                showLabels	: (this.data['data_labels']) ? true:false,
                showSwatch	: (this.data['data_labels']) ? true:false,
                labels		: this.data['data_labels']
            }
        });
    }

    this.renderFunnel = function() {
        var labels = new Array();
        var dataInfo = JSON.parse(this.data);
        for(var i=0; i<dataInfo.length; i++) {
            labels[i] = dataInfo[i][2];
            dataInfo[i][1] = parseFloat(dataInfo[i][1]);
        }

        /* Transform data friendly to Funnel renderer */
        var tmpdataInfo = [];
        for (var k in dataInfo) {
            tmpdataInfo.push(Object.values(dataInfo[k]));
        }
        dataInfo = tmpdataInfo;
        /* End */

        this.element.jqplot([dataInfo],  {
            seriesDefaults: {
                renderer:jQuery.jqplot.FunnelRenderer,
                rendererOptions:{
                    sectionMargin: 12,
                    widthRatio: 0.1,
                    showDataLabels:true,
                    dataLabelThreshold: 0,
                    dataLabels: 'value'
                }
            },
            legend: {
                show: true,
                location: 'ne',
                placement: this.legendPlacement,
                labels:labels,
                xoffset:20
            }
        });
    }

    this.renderMultibar = function() {
        var chartData = this.data.data;
        var ticks = this.data.ticks;
        var labels = this.data.labels;
        this.element.jqplot( chartData, {
            stackSeries: true,
            captureRightClick: true,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                rendererOptions: {
                    // Put a 30 pixel margin between bars.
                    barMargin: 10,
                    // Highlight bars when mouse button pressed.
                    // Disables default highlighting on mouse over.
                    highlightMouseDown: true,
                    highlightMouseOver : true
                },
                pointLabels: {
                    show: true,
                    hideZeros: true,
                    /*--Add by Kelvin Thang -- date: 2018-07-04*/
                    formatString: "%'d"
                }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                    tickOptions: {
                        angle: -45,
                        /*--Add by Kelvin Thang -- date: 2018-07-04*/
                        formatter: this.tickFormatter,
                    },
                    ticks: ticks
                },
                yaxis: {
                    // Don't pad out the bottom of the data range.  By default,
                    // axes scaled as if data extended 10% above and below the
                    // actual range to prevent data points right on grid boundaries.
                    // Don't want to do that here.
                    padMin: 0,

                    tickOptions: {
                        /*--Add by Kelvin Thang -- date: 2018-07-04*/
                        formatter: this.tickFormatter,
                    },
                    min:0
                }
            },
            legend: {
                show: true,
                location: 'e',
                placement: this.legendPlacement,
                labels:labels
            }
        });
    }

    this.renderHorizontalbar = function() {
        this.element.jqplot(this.data['chartData'], {
            title: this.data['title'],
            animate: !$.jqplot.use_excanvas,
            seriesDefaults: {
                renderer:$.jqplot.BarRenderer,
                showDataLabels: true,
                pointLabels: {
                    show: true,
                    location: 'e',
                    edgeTolerance: -15,
                    /*--Add by Kelvin Thang -- date: 2018-07-04*/
                    formatString: "%'d"
                },
                shadowAngle: 135,
                rendererOptions: {
                    barDirection: 'horizontal'
                }
            },
            axes: {
                yaxis: {
                    tickRenderer: jQuery.jqplot.CanvasAxisTickRenderer,
                    renderer: jQuery.jqplot.CategoryAxisRenderer,
                    ticks: this.data['labels'],
                    tickOptions: {
                        angle: -25, /*--Modified by Kelvin Thang -- date: 2019-03-14*/
                        /*--Add by Kelvin Thang -- date: 2018-07-04*/
                        formatter: this.tickFormatter,
                    }
                }
            },
            legend: {
                show : true,
                location : 's',
                placement : (this.data['data_labels']) ? this.legendPlacement : 'outside',/*--Added By Kelvin Thang on 2019-03-18 fix issue not load data when not label*/
                showSwatch : true,
                showLabels : true,
                labels : this.data['data_labels']
            }
        });
    }

    this.renderLine = function() {
        this.element.jqplot(this.data['chartData'], {
            title: this.data['title'],
            legend:{
                show:true,
                labels:this.data['data_labels'],
                location:'ne',
                showSwatch : true,
                showLabels : true,
                placement  : (this.data['data_labels'])? this.legendPlacement : 'outside', /*--Added By Kelvin Thang on 2019-03-18 fix issue not load data when not label*/
            },
            seriesDefaults: {
                pointLabels: {
                    show: true,
                    /*--Added by Kelvin Thang -- date: 2018-07-04*/
                    formatString: "%'d"
                }
            },
            axes: {
                xaxis: {
                    min:0,
                    pad: 1,
                    tickRenderer: jQuery.jqplot.CanvasAxisTickRenderer,
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks:this.data['labels'],
                    tickOptions: {
                        formatString: '%b %#d',
                        angle: -30
                    }
                }
            },
            cursor: {
                show: true
            }
        });
    }

    this.renderColumn = function() {
        var chartData = [];
        var ticks = this.data.categories;
        var labels = [];
        for(var i = 0; i < this.data.chartData.length ; i++){
            labels.push(this.data.chartData[i].name);
            chartData.push(this.data.chartData[i].data);
        }
        this.element.jqplot( chartData, {
            stackSeries: false,
            captureRightClick: true,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                rendererOptions: {
                    // Put a 30 pixel margin between bars.
                    barMargin: 10,
                    // Highlight bars when mouse button pressed.
                    // Disables default highlighting on mouse over.
                    highlightMouseDown: true,
                    highlightMouseOver : true
                },
                pointLabels: {
                    show: true,
                    hideZeros: true,
                    /*--Add by Kelvin Thang -- date: 2018-07-04*/
                    formatString: "%'d"
                }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                    tickOptions: {
                        angle: -45,
                        /*--Add by Kelvin Thang -- date: 2018-07-04*/
                        formatter: this.tickFormatter,
                    },
                    ticks: ticks
                },
                yaxis: {
                    // Don't pad out the bottom of the data range.  By default,
                    // axes scaled as if data extended 10% above and below the
                    // actual range to prevent data points right on grid boundaries.
                    // Don't want to do that here.
                    padMin: 0,
                    min:0,
                    tickOptions: {
                        /*--Add by Kelvin Thang -- date: 2018-07-04*/
                        formatter: this.tickFormatter,
                    },
                }
            },
            legend: {
                show: true,
                location: 'e',
                placement: this.legendPlacement,
                labels:labels
            }
        });
    }

    this.registerClick = function() {
        var thisInstance = this;
        this.element.on('jqplotDataClick',function(ev, gridpos, datapos, neighbor, plot){
            var url;
            switch(thisInstance.options.renderer){
                case 'funnel' :
                    url = thisInstance.options.links[datapos]['links'];
                    break;
                case 'multibar' :
                    if(thisInstance.options.links)
                        url = thisInstance.options.links[gridpos][datapos];
                    break;
                // bar,pie,linechart,horizontalbar
                default :
                    if(typeof thisInstance.options.links != 'undefined')
                        url = thisInstance.options.links[datapos];
                    break;
            }
            thisInstance.triggerClick({'url':url});
        });
    }

    this.postRendering = function() {
        this.element.on("jqplotDataMouseOver", function(evt, seriesIndex, pointIndex, neighbor) {
            $('.jqplot-event-canvas').css( 'cursor', 'pointer' );
        });
        this.element.on("jqplotDataUnhighlight", function(evt, seriesIndex, pointIndex, neighbor) {
            $('.jqplot-event-canvas').css( 'cursor', 'auto' );
        });
        this.registerClick();
    }

    this.init = function(element,data,options) {
        this.element = element;
        this.data = data;
        this.options = options;

        switch(this.options.renderer) {
            case 'pie' : this.renderPie();break;
            case 'bar' : this.renderBar();break;
            case 'funnel' : this.renderFunnel();break;
            case 'multibar' : this.renderMultibar();break;
            case 'horizontalbar' : this.renderHorizontalbar();break;
            case 'linechart' : this.renderLine();break;
            case 'column' : this.renderColumn();break;
            default : console.log('jqplot renderer not supported');
        }

        this.postRendering();
    }
}

