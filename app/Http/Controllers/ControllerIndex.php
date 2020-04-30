<?php

namespace App\Http\Controllers;

use Cassandra\SimpleStatement;

use Illuminate\Support\Collection as Collection;
use Illuminate\Http\Request;
use SoapClient;

class ControllerIndex extends Controller
{
    protected $wsdl="http://187.191.95.87:8090/WSCPreDocumentacion.asmx?WSDL";
    protected $location="http://187.191.95.87:8090/WSCPreDocumentacion.asmx";
    protected $uri="http://tempuri.org/";

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

        $client = new SoapClient($this->wsdl, array(
            'location' =>$this->location ,
            'uri'      => $this->uri,
            'trace'    => 1 ));

        try {
            $checkVatParameters = array(
                'K_Guia'=>$guia,'K_Usuario'=>'730','K_Cliente'=>'14685','Token'=>'-1','strReferencia'=>''
            );

            $result = $client->GetRastreoxGuia($checkVatParameters)->GetRastreoxGuiaResult->any;
            $data= $this->loadXmlStringAsArray($result);
            // dd($data['Detalles']['Detalle']);
           // dd($data['Mensaje']);

            if($data['Mensaje']!= 'OK'){

                Alert::message('The end is near', 'danger');
            }

            $data= $data['Detalles']['Detalle'];
            return view('rastreo', compact('data'));

        } catch ( SOAPFault $e ) {
            echo $e->getMessage().PHP_EOL;
        }

    }
    public function loadXmlStringAsArray($xmlString)
    {
        $array = (array) @simplexml_load_string($xmlString);
        if(!$array){
            $array = (array) @json_decode($xmlString, true);
        } else{
            $array = (array)@json_decode(json_encode($array), true);
        }
        return $array;
    }
}
