
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

<!-- NAVBAR BARRA PRINCIPAL----------------------------------------------------------------------------------------------------------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top navcolor col-xs-12 col-xs-12" >
    <a class="navbar-brand" href="#"><img src="img/png.png" style="" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link"   style="color: white" data-toggle="modal" data-target="#exampleModalCenter1">Rastreo <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" style="color: white" href="#Cobertura">Cobertura<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" style="color: white" href="#mapa">Sucursales<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " style="color: white" href="#atencionalcliente">Atencion al cliente<span class="sr-only">(current)</span></a>
            </li>
        </ul>

    </div>
</nav>
 @yield('content')
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<script src="fontawesome/js/all.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="estilosjs/map.js"> </script>
<script src="jquery/dist/jquery.js"></script>
<script src="wowjs/dist/wow.min.js"></script>
<script>

</script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>
