<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'ControllerIndex@index');

Route::get('/enduro/clima', function () {
    $opts = array(
        'ssl' => array('ciphers'=>'RC4-SHA', 'verify_peer'=>false, 'verify_peer_name'=>false)
    );

    $params = array ('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false, 'soap_version' => , 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 180, 'stream_context' => stream_context_create($opts) );
    $url = "http://www.webservicex.net/globalweather.asmx?WSDL";

    try{
        $client = new SoapClient($url,$params);
        dd($client->GetRastreoxGuia(['CountryName' => 'Peru'])->GetCitiesByCountryResult);
    }
    catch(SoapFault $fault) {
        echo '<br>'.$fault;
    }

});
