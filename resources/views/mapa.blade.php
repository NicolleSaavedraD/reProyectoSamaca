<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/co/co-all.js"></script>

        <title>Mapas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
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
        <div style=' height: 50px; width: 100px; text-align:center; float: left;'>
        <a href="/"><img src="images/logo.PNG" width="100" height="90"></a>       
    </div>
    <div style='height: 50px; width: 990px; text-align:center; float: left;'>
        <h1> Plataforma de monitoreo de calidad del agua Samacá - Boyacá</h1>
    </div>
    <div style='height: 50px; width: 200px; text-align:center;float: left;'>  
        <br>
         <a href="/graficas" class="btn btn-primary" crop="left" role="button">Graficas</a>  
         <a href="/muestra" class="btn btn-primary" crop="left" role="button">Muestras</a> 
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="width:100%; height: 500px;">
        {!! Mapper::render() !!}
        </div>
     
    </body>
   
        <br>   
    <footer>
            <div style="text-align: center;">
                <img src="images/footer.PNG" > 
            </div> 
     </footer> 
</html>







