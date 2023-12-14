<?php

//INICIANDO O CURL
$curl = curl_init();

//DEFINE AS CONFIGURAÇÕES (URL DA API E MÉTODO)
// curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/api.php");
// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt_array($curl, [
    CURLOPT_URL             => 'http://localhost:8080/api.php',
    CURLOPT_CUSTOMREQUEST  => 'GET',
    CURLOPT_RETURNTRANSFER => true
]);

//EXECUTANDO A REQUISIÇÃO
$response = curl_exec($curl);

//FECHANDO CONEXÃO
curl_close($curl);

//IMPRIME O RESPONSE DA REQUISIÇÃO
echo $response;