<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;

class ControllerIndex extends Controller
{
      public function index()
    {
        return view('inicio');
    }

    public function soap()
    {
        try {
            $opts = array(
                'http' => array(
                    'user_agent' => 'PHPSoapClient'
                )
            );
            $context = stream_context_create($opts);

            $wsdlUrl = "http://187.191.95.87:8090/WSCPreDocumentacion.asmx";
            $soapClientOptions = array(
                'stream_context' => $context,
            );

            $client = new SoapClient($wsdlUrl, $soapClientOptions);

            $checkVatParameters = array(
                'K_Guia'=>'1103378060','K_Usuario'=>'730','K_Cliente'=>'14685','Token'=>'-1','strReferencia'=>''
            );

            dd($result = $client->GetRastreoxGuia($checkVatParameters));

        }
        catch(\Exception $e) {
            echo $e->getMessage();
        }


    }
}
