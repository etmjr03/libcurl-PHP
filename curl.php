<?php

//INICIANDO O CURL
$curl = curl_init();

//HEADERS
$headers = [
    'Authorization: teste123',
    'Content-Type: application/json'
];

//DADOS ENVIADOS DO POST DE CURL -> API
$post = [
    'nome'       => 'tenis nike',
    'tamanho'    => '40',
    'preco'      => '500',
    'quantidade' => '10'
];

//CONVERTE ARRAY EM JSON
$json = json_encode($post);

//DEFINE AS CONFIGURAÇÕES (URL DA API E MÉTODO)
curl_setopt_array($curl, [
    CURLOPT_URL            => 'http://localhost:8080/api.php',
    CURLOPT_CUSTOMREQUEST  => 'POST',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => $headers,
    CURLOPT_POSTFIELDS     => $json
]);

//EXECUTANDO A REQUISIÇÃO
$response = curl_exec($curl);

//FECHANDO CONEXÃO
curl_close($curl);

//IMPRIME O RESPONSE DA REQUISIÇÃO
echo $response;
//print_r(json_decode($response, true));