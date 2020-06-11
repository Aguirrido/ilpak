<?php

namespace App\Http\Controllers;

use Cassandra\SimpleStatement;

use Illuminate\Support\Collection as Collection;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;
use SoapClient;
use RealRashid\SweetAlert\Facades\Alert;

class ControllerIndex extends Controller
{
    protected $wsdl="https://servicios.ilpak.com.mx/PreDocumenta.asmx?WSDL";
    protected $location="https://servicios.ilpak.com.mx/PreDocumenta.asmx";
    protected $uri="http://www.w3.org/2003/05/soap-envelope/";

      public function index()
    {
        return view('inicio');
    }

    public function getview()
    {
        return view('rastreo');
    }

    public function rastrear( Request $request)
    {

       $guia= $request->get('id_rastreo');

       if($guia==null){
           Alert::error('Error', "Porfavor llenar campo");
           return redirect('/');
       }
        try {
            $client = new SoapClient($this->wsdl, array(
                'location' =>$this->location ,
                'uri'      => $this->uri,
                'trace'    => 1 ));

            $checkVatParameters = array(
                'NumeroGuia'=>$guia,'Usuario'=>'730','Cliente'=>'-1','Token'=>'-1'
            );

            $result = $client->GET_RastreoXGuia($checkVatParameters)->GET_RastreoXGuiaResult;
            //dd($result);
            $data = json_decode($result, true);
          //  dd($data);
         // dd(  $data);
            if(isset($data['Resultado']) or $data[0]['Resultado'] == -1){
                if(isset($data['Mensaje'])){
                    $error =  $data['Mensaje'];
                }else{
                    $error =  $data[0]['Mensaje'];
                }

                  Alert::error('Error', $error);
                return redirect('/');

            }else {
                //$data= $data['Detalles']['Detalle'];
                if ($data[0]['Estatus']== "LLEGADA A DESTINO"){
                    $barprogress=80;
                }
                if ($data[0]['Estatus']== "ENTREGADA"){
                    $barprogress=100;
                }
                if ($data[0]['Estatus']== "DESEMBARCADA"){
                    $barprogress=60;
                }
                if ($data[0]['Estatus']== "EMBARCADA"){
                    $barprogress=40;
                }
                if ($data[0]['Estatus']== "DOCUMENTADA"){
                    $barprogress=20;
                } if ($data[0]['Estatus']== "EN REPARTO PARA ENTREGA"){
                    $barprogress=90;
                }



                return view('rastreo', compact('data', 'barprogress'));
            }

        } catch ( SOAPFault $e ) {
            echo $e->getMessage().PHP_EOL;
        }

    }

    public function cobertura( Request $request){
        $estado=$request->get('nombre');
        $municipios=[];
        if ($estado=="Coahuila") {
             $municipios = ['ALLENDE', 'BARROETAN', 'CASTAÑOS', 'CLOETE', 'CUATRO CIENEGAS', 'FRONTERA', 'JIMENEZ', 'MATAMOROS', 'MONCLOVA', 'MORELOS', 'MUZQUIZ', 'NAVA', 'NUEVA ROSITA', 'PALAU', 'PIEDRAS NEGRAS', 'RAMOS ARIZPE', 'SABINAS', 'SALTILLO', 'SAN BUENA VENTURA', 'SAN JUAN DE SABINA', 'TORREON', 'ZARAGOZA', 'NADADORES', 'OCAMPO', 'AGUJITA', 'VILLA UNION', 'SACRAMENTO', 'ACUÑA', 'JUAREZ', 'PROGRESO', 'ESCOBEDO', 'ABASOLO', 'MUZQUIZ', 'CANDELA'];

        }else if ($estado=="Sinaloa") {
            $municipios=["C.OP CULIACAN", "CULIACAN LOS PINOS", "CULUACÁN CENTRAL", "EL ROSARIO ", "ESCUINAPA ","GUAMUCHIL", "GUASAVE", "LOS MOCHIS ","MAZATLÁN "];
        }else if ($estado=="Durango") {
            $municipios=["DURANGO", "GOMEZ PALACIO", "LERDO"];
        }else if ($estado=="Veracruz") {
            $municipios=["EL HIGO", "TANTOYUCA","TEMPOAL","PANUCO"];
        }else if ($estado=="Jalisco") {
            $municipios=["GUADALAJARA", "PUERTO VALLARTA","EL SALTO","TLAJOMULCO DE ZUÑIGA","TLAQUEPAQUE","TONALA ","ZAPOPAN "];
        }else if ($estado=="San Luis Potosí") {
            $municipios=["AQUISMON","AXTLA DE TERRAZAS", "CD. SANTOS TANCANHUITZ","CD. VALLES","EL NARANJO","HUICHIHUAYAN ","RASCON","MATLAPA"
                ,"SAN VICENTE TANCUAYALAB","TAMASOPO","TAMAZUNCHALE","TAMBACA","TAMPAMOLON","TAMUIN","TANLAJAS","TANQUIAN","XILITLA","EBANO",
                "CEDRAL","MATEHUALA","VANEGAS","AHUALULCO","CERRITOS","CHARCAS","GUADALCAZAR","LA PILA (S.L.P., CAPITAL)","MEXQUITIC DE CARMONA","MOCTEZUMA",
                "SALINAS DE HIDALGO","SAN LUIS POTOSI","SANTA MARIA DEL RIO","SOLEDAD DE GRACIANO SHZ","VENADO","VILLA DE ARISTA","VILLA DE POZOS (S.L.P. CAPITAL)","VILLA DE REYES",
                "VILLA DE ZARAGOZA","VILLA HIDALGO", "CARDENAS","CD. DEL MAIZ ","CD. FERNANDEZ","CRUCERO DE RAYON ( RAYON)","EL REFUGIO","RAYON","RIO VERDE","SAN CIRO ACOSTA"];
        }
        else if ($estado=="Hidalgo") {
            $municipios=["HUEJUTLA"];
        } else if ($estado=="Distrito Federal") {
            $municipios=["COYOACAN", "ALVARO OBREGON","IZTAPALAPA","BENITO JUAREZ","IZTACALCO","MIGUEL HIDALGO","CUAUHTEMOC","VENUSTIANO CARRANZA","GUSTAVO A MADERO","AZCAPOTZALCO"];
        } else if ($estado=="Estado de México") {
            $municipios=["NAUCALPAN","TLALNEPANTLA","ECATEPEC","CUAUTITLÁN IZCALLI"];
        } else if ($estado=="Querétaro") {
            $municipios=["JALPAN DE S (VÍA RIO VERDE)","QUERETARO","CORREGIDORA","PARQUE QUERETARO","EL MARQUES"];
        } else if ($estado=="Guanajuato") {
            $municipios=["LEON"];
        } else if ($estado=="Aguascalientes") {
            $municipios=["AGUASCALIENTES","CALVILLO","JESUS MARIA","PABELLON DE ARTEAGA","RINCON DE ROMOS","SAN FRANCISCO DE LOS ROMOS"];
        } else if ($estado=="Nayarit") {
            $municipios=["ACAPONETA", "PEÑAS","TEPIC"];
        } else if ($estado=="Nuevo León") {
            $municipios=["MONTERRREY","APODACA","ESCOBEDO","GUADALUPE","SAN NICOLAS DE LOS GARZA","SAN PEDRO GARZA GARCIA","SANTA CATARINA"];
        } else if ($estado=="Chihuahua") {
            $municipios=["CAMARGO","CD JUAREZ","CHIHUAHUA","CUAUHTEMOC","DELICIAS","HIDALGO DE PARRAL","JIMENEZ","MEOQUI"];
        } else if ($estado=="Baja California") {
            $municipios=["C.OP TIJUANA","TIJUANA ","MEXICALI CENTRO CIVICO "];
        } else if ($estado=="Sonora") {
            $municipios=["AGUA PRIETA ","C.OP HERMOSILLO","CABORCA","CANANEA","CD. OBREGON","EMPALDE","GUYMAS","HERMOSILLO GIRASOL ","HERMOSILLO MONTEVERDE ",
            "MAGDALENA","NAVOJOA","NOGALES","SAN LUIS RC","SANOYTA","SANTA ANA"];
        }else{
            return $municipios=['Sin  Cobertura'];
        }

        return $municipios;
    }

}
