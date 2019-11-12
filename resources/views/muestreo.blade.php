<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>Muestreo</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
    <br>
    <div style=' height: 50px; width: 150px; text-align:center; float: left;'>
        <a href="/"><img src="images/logo.PNG" width="100" height="90"></a>        
    </div>
    <div style='height: 50px; width: 990px; text-align:center; float: left;'>
        <h1> Plataforma de monitoreo de calidad del agua Samacá - Boyacá</h1>
    </div>
    <div style='height: 50px; width: 150px; text-align:center; float: left;'>  
        <br>
        <a href="/graficas" class="btn btn-primary" crop="right" role="button">Graficas</a>  
        <a href="/mapa" class="btn btn-primary" crop="right" role="button">Mapa</a>
    </div>   
</head>
<br>

<body>

    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <FONT FACE="times new roman"><h2 p align="center">Muestra de datos</h2></font>
        <br>
        <br>
        <table class="table table-bordered"; width="1000"; p align="center">
            <thead>
                <tr>
                    <th>Fecha Hora</th>
                    <th>PH</th>
                    <th>Oxigeno Disuelto</th>
                    <th>Temperatura</th>
                    <th>Conductividad Electrica</th>
                    <th>Zona</th>
                </tr>
            </thead>
            <tbody>

                @foreach($propiedades as $item)
                <tr>
                    <td >{!! $item->fechahora!!}</td>
                    <td >{!! $item->ph !!}</td>
                    <td >{!! $item->od!!}</td>
                    <td >{!! $item->temperatura !!}</td>
                    <td >{!! $item->conductividad!!}</td>
                    <td >{!! $item->zona!!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
    <br>
    <br>
    <br>
    <br>
    <br>
    </body>
<br>   
 <footer>
            <div style="text-align: center;">
                <img src="images/footer.PNG" > 
            </div> 
     </footer> 

</html>
