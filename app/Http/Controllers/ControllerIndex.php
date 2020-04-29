<?php

namespace App\Http\Controllers;

use Cassandra\SimpleStatement;
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

            $json = ($client->GetRastreoxGuia($checkVatParameters));
            $xml = simplexml_load_file($json);
            dd($xml);

        } catch ( SOAPFault $e ) {
            echo $e->getMessage().PHP_EOL;
        }

    }
}
