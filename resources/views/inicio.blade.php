<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
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
        <a class="nav-link" style="color: white" href="#Sucursales">Sucursales<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link " style="color: white" href="#atencionalcliente">Atencion al cliente<span class="sr-only">(current)</span></a>
      </li>
    </ul>

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
        <form action="rastreo" method="post" class=" ">
            {{ csrf_field() }}
            <div class="modal-body">
                <input class=" col-12" style="border-color: #ff0034" name="id_rastreo" type="text" placeholder="Ingrese Su Numero De Rastreo">
            </div>
            <div class="modal-footer">
                <button type="submit "  style="" class="btn navcolor text-white heartBeat rastreo">Rastreo <i class="fas fa-2x fa-search-location"></i></button>
            </div>
        </form>
        </form>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!--CARUSEL DE IMAGENES------------- -------------------------------------------------------------------------------------------------------------------------------------------->

<div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/3397401.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/13032.jpg" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item">
      <img src="img/1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/4.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/5.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/6.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/7.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3397400.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!--Seccion de opcion RASTREAR -------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="">
<div class="card text-center azul " style=" ">
  <div class="card-header">
   <h2 class="text-white">Rastreo</h2>
  </div>
  <div class="card-body  " style="border-color:#CDCDCD ">
    <form action="rastreo" method="post" class=" row ">
        {{ csrf_field() }}
        <button type="submit"  style="" class="btn offset-md-3 col-md-2 col-sm-4 navcolor text-white btn-lg wow swing rastreo">Rastreo <i class="fas fa-2x fa-search-location"></i></button>
    <input class="form-contro  col-md-5 col-sm-12" style="border-color: #ff0034" name="id_rastreo" type="text" placeholder="Ingrese Su Numero De Rastreo">

    </form>
  </div>
</div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!--Seccion de cards ----------------------------------------------------------------------------------------------------------------------------------------------------------->


<div style="background-color: #cbff00" class=" ">

	<div class="container cards ">
    <h1 class=" text-center" style="color: #000674">Servicios</h1>
	   <div class="row">

  <div class="card col-md-4 col-xs-12 col-sm-12 bg-transparent wow bounceInLeft"  data-wow-duration="3s" style="border-color: #000674; border-width:medium">
    <img src="img/envio.png"  style="width:100px; height: 100px; align-self: center; "class="card-img-top text-center" alt="...">
    <div class="card-body text-center">
        <h5 class=" text-white" style="background-color: #000674">Enviar Ahora</h5>
    <p class="card-text" style="color: #000674">  <strong> Movemos Sobres y paquetes con un peso de hasta 50 Kgs, dentro de las principales ciudades de la República Mexicana, en 3 modalidades diferentes:
           </strong></p>

              <p style="color: #000674">  <strong>  Ocurre (de sucursal a sucursal): El cliente lleva paquete a sucursal origen y recoge en sucursal destino Recolección a Domicilio: <img src="img/logo.png" alt=""> recoge paquete en domicilio solicitado. Entrega a Domicilio: <img src="img/logo.png" alt=""> entrega paquete en domicilio solicitado.  </strong></p>

    </div>
    </div>


  <div class="card col-md-4 col-xs-12 col-sm-12 bg-transparent wow bounceInDown "  data-wow-duration="3s" style="border-color: #000674;border-width:thin; border-bottom-width: medium;border-top-width: medium;">
   <img src="img/costo.png"  style="width:100px; height: 100px; align-self: center; "class="card-img-top text-center" alt="...">
    <div class="card-body  text-center">
        <h5 class=" text-white" style="background-color: #000674">Solicitar cotización</h5>
        <p class="card-text" style="color: #000674"><strong class="">Puede enviar desde y hacia cualquier lugar del mundo, y reservar todo fácilmente en línea. Puede pagar al momento de la entrega, para su máxima comodidad. </strong></p>
    <strong>
        <br>
        <p style="color: #000674"> Telefono oficina: 8716888187</p> <br>
        <p style="color: #000674"> Email: comercial@intelogistica.com.mx</p>
    </strong>


  </div>
  	</div>

  <div class="card col-md-4 col-xs-12 col-sm-12 bg-transparent wow bounceInRight" data-wow-duration="3s"  style="border-color: #000674;border-width:medium ">
   <img src="img/atencion.png"  style="width:100px; height: 100px; align-self: center; "class="card-img-top text-center" alt="...">
    <div class="card-body  text-center">
        <h5 class=" text-white" style="background-color: #000674">Atención al cliente</h5>

      <strong>
            <br>
          <br> <br> <br>
                <p style="color: #000674"> Telefono: 87-16-88-81-87 </p>
                    <br>
          <p style="color: #000674">Email: comercial@intelogistica.com.mx</p> </strong>

    </div>
  	</div>

</div>
</div>

</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!--MODAL DE las CARDS --------------------------------------------------------------------------------------------------------------------------------------------------------->


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!--Seccion de Cobertura----------- -------------------------------------------------------------------------------------------------------------------------------------------->
<div class="row container-fluid" id="Cobertura">
    <div id="geochart-colors" id="mapa" class="mapa col-md-8 col-xs-12 col-sm-12" style=""></div>
    <div class="card col-md-4 col-xs-12 col-sm-12 cardmapa" id="" style="">
        <div class="card-body  text-center  align-self-center">
            <h3>Cobertura</h3>
            <div class="cardtext"></div>
        </div>
    </div>
</div>

<!--<div style="background-color: #000674" id="Cobertura">


    <img class="col-12" src="img/mapa.png" alt="">

</div>
<div class="col-12">

<div class="row estados">
<ul>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Coahuila</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Baja California Norte</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Sonora</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Sinaloa</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Estado de Mexico</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Guanajuato</button></li>
</ul>
<ul>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Nayarit</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Jalisco</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Nuevo León</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Durango</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Chihuahua</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Tamaulipas</button></li>
</ul>
<ul>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Veracruz</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">San Luis Potosí</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Aguascalientes</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Queretaro</button></li>
    <li class="p-2"><button class="btn btn-danger estado" href="" id="coah">Hidalgo</button></li>
</ul>
</div>

</div>

<div id="parrafo">
    <table class="table">
        <thead>
        <tr>
            <th scope="col" id="titletable"></th>
        </tr>
        </thead>
        <tbody id="content">
        </tbody>
    </table>
</div>-->


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!--Seccion de Sucursales----------- -------------------------------------------------------------------------------------------------------------------------------------------->



<div class="" style="background-color: #cbff00" id="Sucursales">

	<h1 class=" text-center mt-5" style=" color: #000674">Sucursales</h1>
    <div class="table-responsive">
    <table class="table table-bordered" >
        <tbody>

        <tr>
            <td><a class="btn btn-danger " value="COAHUILA" style=" background-color: #000674"  href="https://www.google.com/maps/place/Av+Bernardo+Reyes+1601,+Industrial,+64440+Monterrey,+N.L./@25.6911716,-100.3256162,17z/data=!4m5!3m4!1s0x866295938dff6eff:0x3735f1575b295a0c!8m2!3d25.6911668!4d-100.3234275">MONTERREY <i class="fas fa-map-marker-alt"></i></a> <p>DIRECCION: BERNARDO REYES # 1601

                    ESQUINA JOSE MARIA BOCANEGRA

                    COLONIA INDUSTRIAL

                    CODIGO POSTAL : 64440</p></td>
            <td><a class="btn btn-danger" style=" background-color: #000674"  target="_blank" href="https://www.google.com/maps/place/Perif.+Luis+Echeverr%C3%ADa+1077,+Latinoamericana,+25270+Saltillo,+Coah./@25.4457243,-100.9879673,17z/data=!3m1!4b1!4m5!3m4!1s0x86886d53e5e22603:0x9db7dd7beca4a378!8m2!3d25.4457195!4d-100.9857733">SALTILLO <i class="fas fa-map-marker-alt"></i></a><p>8446887523</p><p>DIRECCION: PERIFERICO LUIS ECHEVERRIA #1077

                    COLONIA LATINOAMERICANA

                    CODIGO POSTAL : 25270</p></td>
            <td><a class="btn btn-danger" style=" background-color: #000674"  target="_blank" href="https://www.google.com/maps/place/Av.+Juarez+4710,+Nueva+California,+Torre%C3%B3n,+Coah./@25.5370857,-103.4050316,18.03z/data=!4m5!3m4!1s0x868fdb75500b2f65:0x21aef9097b85f13e!8m2!3d25.5379662!4d-103.4041335">TORREON <i class="fas fa-map-marker-alt"></i></a><p>8716888187</p><p>
                    DIRECCION: AV JUAREZ #4710 LOCAL 3

                    COLONIA: NUEVA CALIFORNIA

                    CODIGO POSTAL:27089</p></td>
        </tr>
        <tr>

            <td><a class="btn btn-danger" style=" background-color: #000674"  target="_blank" href="https://www.google.com/maps/search/CALLE+3RA+SUR+%23+2++COLONIA:+CENTRO++CODIGO+POSTAL:33000/@28.1791718,-105.4860457,14z/data=!3m1!4b1">DELICIAS <i class="fas fa-map-marker-alt"></i></a><p>6391323151

                </p><p>DIRECCION: CALLE 3RA SUR # 2

                    COLONIA: CENTRO

                    CODIGO POSTAL:33000</p></td>
            <td><a class="btn btn-danger" style=" background-color: #000674"  target="_blank" href="https://www.google.com/maps/search/INDEPENDENCIA+%23+409++COLONIA:+CENTRO++CODIGO+POSTAL:33800/@26.9332258,-105.6735803,15z/data=!3m1!4b1">PARRAL <i class="fas fa-map-marker-alt"></i></a><p>6271183317

                </p><p>

                    DIRECCION: CALLE INDEPENDENCIA # 409

                    COLONIA: CENTRO

                    CODIGO POSTAL:33800</p></td>
            <td><a class="btn btn-danger" style=" background-color: #000674"  target="_blank" href="https://www.google.com/maps/search/+RAYON+%23+107+LOCAL+4++COLONIA:+CENTRO++CODIGO+POSTAL:31500/@28.4021074,-106.8711275,17z/data=!3m1!4b1">CUAUHTEMOC <i class="fas fa-map-marker-alt"></i></a><p>6251383820</p><p>DIRECCION: CALLE RAYON # 107 LOCAL 4

                    COLONIA: CENTRO

                    CODIGO POSTAL:31500</p></td>
        </tr>
        <tr>

            <td><a class="btn btn-danger" style=" background-color: #000674"  target="_blank" href="https://www.google.com/maps/search/NDUSTRIAS+6111++COLONIA+NOMBRE+DE+DIOS++CODIGO+POSTAL:31105/@28.6743039,-106.0990881,15z/data=!3m1!4b1">CHIHUAHUA <i class="fas fa-map-marker-alt"></i></a><p>6144105646</p><p>DIRECCION: INDUSTRIAS 6111

                    COLONIA: NOMBRE DE DIOS

                    CODIGO POSTAL:31105



                </p></td>
            <td><a class="btn btn-danger" style=" background-color: #000674"  target="_blank" href="https://www.google.com/maps/search/MANUEL+GOMEZ+MORIN+11630+BODEGA+1++COLONIA:+PARTIDO+SENECU++CODIGO+POSTAL:32459/@31.7169546,-106.4160446,17z/data=!3m1!4b1"> CIUDAD JUAREZ <i class="fas fa-map-marker-alt"></i></a><p>6566556235</p><p>DIRECCION: MANUEL GOMEZ MORIN 11630 BODEGA 1

                    COLONIA: PARTIDO SENECU

                    CODIGO POSTAL:32459



                </p></td>
            <td></td>
        </tr>
          </tbody>
    </table>
    </div>

</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!--Seccion final de la pagina informacion y redes sociales---------------------------------------------------------------------------------------------------------------------->

<div class="jumbotron jumbotron-fluid" id="atencionalcliente">
  <div class="container">
   <p s style = "font-family:Times New Roman; font-size: xx-large;">
ILPAK
</p>
    <p class="lead">LLamanos al: 01 8718654122</p>
	<p>ENLAZE OPERACIONES
lun., 24 feb. 12:18 (hace 8 días)
para Juan, mí

ENVIO DATOS DE LAS SUCURSALES ILPAK
    <hr>
        <div class="text-center center-block">
          <h3>Redes Sociales</h3>
            <br />
            <a href=""><i class="fab fa-instagram fa-3x"></i></a>
            <a href=""><i class="fab fa-facebook-f fa-3x"></i></a>

        </div>
      </hr>

</div>

</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<script src="jquery/dist/jquery.js"></script>
<script src="wowjs/dist/wow.min.js"></script>
<script>

    $(document).ready(function() {
        new WOW().init();
        google.charts.load('upcoming', {
            'packages': ['geochart']
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
                ['State', 'Accent'],
                ['Baja California', 300],
                ['Sonora', '500'],
                ['Chihuahua', '200'],
                ['Coahuila', '300'],
                ['Nuevo León', '100'],
                ['Tamaulipas', '400'],
                ['Sinaloa', '300'],
                ['Nayarit', '500'],
                ['Durango', '100'],
                ['Zacatecas', '400'],
                ['Jalisco', '200'],
                ['Colima', '400'],
                ['Tlaxcala', '400'],
                ['Aguascalientes', '100'],
                ['Zacatecas', '400'],
                ['San Luis Potosí', '300'],
                ['Puebla', '400'],
                ['Guanajuato', '500'],
                ['Querétaro', '200'],
                ['Hidalgo', '500'],
                ['Morelos', '400'],
                ['Estado de México', 100],
                ['Distrito Federal', 200],
                ['Baja California Sur', '400'],
                ['Michoacán', '400'],
                ['Guerrero', '400'],
                ['Oaxaca', '400'],
                ['Veracruz', '100'],
                ['Tabasco', '400'],
                ['Campeche', '400'],
                ['Chiapas', '400'],
                ['Quintana Roo', '400'],
                ['Yucatán', '400']
            ]);

            var options = {
                region: 'MX', // Mexico
                resolution: 'provinces',
                colorAxis: {
                    //     	minValue=100,
                    //     maxValue=400,
                    values: [100, 200, 300, 400,500],
                    colors: ['#000674', 'red', '#740000', '#f5f5f5','blue']
                },
                backgroundColor: 'white',
                datalessRegionColor: '#eeeeee',
                defaultColor: '#f5f5f5',
            };


            var chart = new google.visualization.GeoChart(document.getElementById('geochart-colors'));
            chart.draw(data, options);
            function selectHandler() {
                var selectedItem = chart.getSelection()[0];
                if (selectedItem) {
                    var topping = data.getValue(selectedItem.row, 0);
                    console.log(topping)
                    var token=$("input[name=_token]").val();
                    var th=topping;
                    $.ajax({
                        url:"/cobertura",
                        // en data se envían los datos
                        data:{nombre:topping,_token:token},
                        type:"post",
                        dataType:'json',
                        success:function (response) {
                            var cont="";
                            $(".cardtext").empty();
                            $.each(response, function(i,r){
                                cont+='<tr><td>'+r+'</td></tr>'
                            });

                            $(".cardtext").append(cont);

                        }
                    })
                }
            };

            google.visualization.events.addListener(chart, 'select', selectHandler);


        }
    });

   /* $(".rastreo").click(function () {
         Swal.fire({
            title: 'Cargando',
            onBeforeOpen: () => {
                Swal.showLoading()
            }
        })
    });
*/
</script>
@include('sweetalert::alert')

<script src="fontawesome/js/all.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
