<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Ilpak</title>
    <!--EstilosCSS de la landingpage  -->
    <link rel="stylesheet" href="estiloscss/landingv1.css">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="animatecss/animate.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

</head>
<body class="" style="">
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Estado</th>
        <th scope="col">Oficina</th>
        <th scope="col">Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{$d['D_Estado_Guia']}}</td>
        <td>{{$d['D_Oficina']}}</td>
        <td>{{$d['F_Historia']}}</td>
    </tr>
        @endforeach
    </tbody>
</table>


<script src="fontawesome/js/all.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="estilosjs/map.js"> </script>
<script src="jquery/dist/jquery.js"></script>
<script src="wowjs/dist/wow.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>
