/*
    Custom Chart Widget
    Author: Hieu Nguyen
    Date: 2019-12-26
    Purpose: a parent class to render custom chart widget on the dashboard
*/

window.CustomChartWidget = class {

    constructor (placeholderId, chartData) {
        this.placeholderId = placeholderId;
        this.chartData = chartData;
        this.widgetContainer = null;
        this.chartOptions = this.getChartOptions(chartData);

        this.init();
    }

    init () {
        this.widgetContainer = $('#' + this.placeholderId).closest('.dashboardWidget');

        // Draw chart at widget load
        var chartSize = this.getChartSize(this.widgetContainer);
        this.drawChart(this.placeholderId, chartSize.width, chartSize.height);

        // Handle other events
        this.handleWidgetResizeEvent();
        this.handleWidgetFullScreenEvent();
    }

    getChartOptions (chartData) {
        return {};
    }

    getChartSize () { 
        var containerWidth = this.widgetContainer.width();
		var containerHeight = this.widgetContainer.height();

        var chartSize = { width: containerWidth - 20, height: containerHeight - 50 };
        return chartSize;
    }

    drawChart (placeholderId, width, height) {
        var thisInstance = this;
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawColumnChart);

        function drawColumnChart() {
            var data = google.visualization.arrayToDataTable(thisInstance.chartData);
            var options = { 
                width: width, 
                height: height,
                animation: {
                    startup: true,
                    duration: 1000,
                    easing: 'in'
                },
                vAxis: {
                    viewWindowMode: 'explicit', 
                    viewWindow: { min: 0 }
                }
            };
            options = Object.assign(options, thisInstance.chartOptions);

            var chart = new google.visualization.ComboChart(document.getElementById(placeholderId));
            chart.draw(data, options);
        }
    }

    handleWidgetResizeEvent () {
        var thisInstance = this;

        this.widgetContainer.on(Vtiger_Widget_Js.widgetPostResizeEvent, function(e) {
			var chartSize = thisInstance.getChartSize(thisInstance.widgetContainer);
            thisInstance.drawChart(thisInstance.placeholderId, chartSize.width, chartSize.height);
		});
    }

    handleWidgetFullScreenEvent () {
        var thisInstance = this;
        var widgetContainer = $('#' + this.placeholderId).closest('.dashboardWidget');
        var placeholderId = this.placeholderId + '-fullscreen';

        widgetContainer.find('a[name="widgetFullScreen"]').on('click', function () {
            setTimeout(() => {
                // Setup modal
                var modalBody = $('.fullscreencontents:visible').find('.modal-body');
                modalBody.find('ul').remove();
                modalBody.append('<div id="'+ placeholderId +'"></div>');

                // Draw chart on the modal
                thisInstance.drawChart(placeholderId, this.chartData, 550, 350);
            }, 500);
        });
    }
}