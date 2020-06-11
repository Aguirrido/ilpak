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

<nav class="navbar navbar-expand-lg navbar-dark navcolor col-xs-12 col-xs-12" >
    <a class="navbar-brand" href="/"><img src="img/png.png" style="" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >

    </div>
</nav>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!--MODAL DEL NAVBAR OPCION RASTREAR -------------------------------------------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Rastreo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" class="">
                <div class="modal-body">
                    <input class="form-control col-12" type="text" placeholder="Ingrese Su Numero De Rastreo">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Rastreo</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if ($barprogress === 100)
    <div class="progress mt-5 m-3">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{$barprogress}}%">{{$barprogress}}%</div>
    </div>
@else
    <div class="progress mt-5 m-3">
        @if ($barprogress === 80)
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: {{$barprogress}}%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">{{$barprogress}}%</div>
        @elseif ($barprogress === 60)
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: {{$barprogress}}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">{{$barprogress}}%</div>
        @elseif ($barprogress === 40)
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{$barprogress}}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">{{$barprogress}}%</div>
        @elseif ($barprogress === 20)
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: {{$barprogress}}%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">{{$barprogress}}%</div>
        @elseif ($barprogress === 90)
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: {{$barprogress}}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">{{$barprogress}}%</div>
        @endif
    </div>
@endif


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Estado</th>
        <th scope="col">Oficina</th>
        <th scope="col">Fecha</th>
        @if ($data[0]['Recibio']!="")
        <th scope="col">Recibido</th>
        @endif
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{$d['Estatus']}}</td>
        <td>{{$d['OficinaEstatus']}}</td>
        <td>{{$d['FechaEstatus']}}</td>
        @if (isset($d['Recibio']))
        <td>{{$d['Recibio']}}</td>
        @endif
    </tr>
        @endforeach
    </tbody>
</table>


<div class="container" >
    <a type="button" class="btn btn-primary btn-lg btn-block" href="/">Volver</a>
</div>


<script src="fontawesome/js/all.js"></script>
<script src="jquery/dist/jquery.js"></script>
<script src="wowjs/dist/wow.min.js"></script>
<script>

</script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>

