/*
    Compare Calls Widget
    Author: Hieu Nguyen
    Date: 2019-12-26
    Purpose: to handle logic in the UI for compare calls widget on the dashboard
*/

window.CompareCallsWidget = class extends CustomChartWidget {

    getChartOptions (chartData) {
        var chartOptions = {
            seriesType: 'bars',
            vAxes: {
                0: { title: chartData[0][1], 'minValue': 5 },
                1: { title: chartData[0][2], 'minValue': 30 }
            },
            series: {
                0: { targetAxisIndex: 0 },
                1: { targetAxisIndex: 1, type: 'line' }
            },
        };

        return chartOptions;
    }
};