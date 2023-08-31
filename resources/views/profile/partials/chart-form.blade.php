<div class="p-4">
    <h1 class="text-2xl font-semibold mb-4">Monitoring Dashboard</h1>
    
    <div id="userChart" style="height: 300px;"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var userChart = Highcharts.chart('userChart', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'User Monitoring'
            },
            xAxis: {
                categories: ['Label 1', 'Label 2', 'Label 3']
            },
            yAxis: {
                title: {
                    text: 'Value'
                }
            },
            series: [{
                name: 'Data Set 1',
                data: [10, 20, 15]
            }]
        });
    });
</script>