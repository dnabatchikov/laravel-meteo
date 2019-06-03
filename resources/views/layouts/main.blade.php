<html>
    <head>
        <meta name='viewport' , content='width=800, initial-scale=1'/>
        <meta name='viewport' , content='width=801'/>
        <title></title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
        <link rel="stylesheet" href="/stylesheets/common.css"/>
        <link rel="stylesheet" href="/stylesheets/mobile.css" media="handheldonly max-device-width:1000px"/>
        <link rel="stylesheet" href="/stylesheets/screen.css" media="screen only screen"/>
        <link rel="stylesheet" href="/stylesheets/bootstrap.min.css"/>
        <link rel="stylesheet" href="/stylesheets/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="/stylesheets/varela.css"/>
        <link rel="stylesheet" href="/stylesheets/weather-icons.css"/>
        <link rel="stylesheet" href="/stylesheets/weather-icons-wind.css"/>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
        <script src='/javascripts/bootstrap.min.js'></script>
        <script src='/javascripts/googlecharts/loader.js'></script>
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//code.highcharts.com/highcharts.js"></script>
        <script src="//code.highcharts.com/highcharts-more.js"></script>
        <script src="//code.highcharts.com/modules/heatmap.js"></script>
        <script src="//code.highcharts.com/stock/modules/exporting.js"></script>
        <script src="//code.highcharts.com/modules/offline-exporting.js"></script>
        <script src="//code.highcharts.com/modules/data.js"></script>
        <script src="//code.highcharts.com/modules/boost-canvas.js"></script>
        <script src="//code.highcharts.com/modules/boost.js"></script>
        <script src="/javascripts/init.js"></script>
    </head>
    <body>
    <script src="/javascripts/highcharts/sparkline.js"></script>
        @yield('content')

        <script type="text/javascript">
            window.addEventListener('resize', function () {
        //drawColumnChart()
                //drawAvgYearTemperatureChart();
        //drawYearTHeatmapChart();
            });
        </script>
    </body>
</html>
