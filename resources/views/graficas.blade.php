<HTML>
<head>
<meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>

<!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
         <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

              </style>

                </head>

    <body>
    <br>
 <!<br>
    <div style=' height: 50px; width: 150px; text-align:center; float: left;'>
        <a href="/"><img src="images/logo.PNG" width="100" height="90"></a>        
    </div>
    <div style='height: 50px; width: 990px; text-align:center; float: left;'>
        <h1> Plataforma de monitoreo de calidad del agua Samacá - Boyacá</h1>
    </div>
    <div style='height: 50px; width: 150px; text-align:center; float: left;'>  
        <br>
    <a href="/muestra" class="btn btn-primary" crop="right" role="button">Tablas</a>  
    <a href="/mapa" class="btn btn-primary" crop="right" role="button">Mapa</a>  
    </div>  

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

 <!-- Contenedores -->
<div id="container" style="width: 600px; height: 400px; margin: 0 auto">
</div>
<div id="container1" style="width: 600px; height: 400px; margin: 0 auto">
</div>
<div id="container2" style="width: 600px; height: 400px; margin: 0 auto">
</div>
<div id="container3" style="width: 600px; height: 400px; margin: 0 auto">
</div>
<div style="width: 100px; height: 100px; margin: 0 auto">
</div>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Oxigeno disuelto'
    },
    xAxis: {
        type: 'datetime',
       /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->fechadora; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
    },
    yAxis: {
        title: {
            text: 'Oxigeno disuelto'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Oxigeno disuelto',
        /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->od; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
        }]
});

</script>



 <script type="text/javascript">
Highcharts.chart('container1', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Ph'
    },
    xAxis: {
        type: 'datetime',

       /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->fechadora; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
    },
    yAxis: {
        title: {
            text: 'Ph'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
         name: 'ph',
        /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->ph; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
    }]
});

</script>   


 <script type="text/javascript">
Highcharts.chart('container2', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Temperatura'
    },
    xAxis: {
        type: 'datetime',

       /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->fechadora; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
    },
    yAxis: {
        title: {
            text: 'Temperatura'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
         name: 'temperatura',
        /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->temperatura; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
    }]
});
</script>   



 <script type="text/javascript">
Highcharts.chart('container3', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Conductividad'
    },
    xAxis: {
        type: 'datetime',

       /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->fechadora; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
    },
    yAxis: {
        title: {
            text: 'Conductividad'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
         name: 'Conductividad',
        /***/
        data: (function() {
                var data = [];
                <?php
                   foreach ($propiedades as $data ) {
                ?>
                data.push([<?php echo $data->conductividad; ?>]);
                <?php } ?>
                return data;
            })()
        /***/
    }]
});
</script>  

</BODY>
     <footer>
            <div style="text-align: center;">
                <img src="images/footer.PNG" > 
            </div> 
     </footer> 

</html>