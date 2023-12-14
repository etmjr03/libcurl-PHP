<?php

//MÉTODO HTTP
echo "* --- método da api --- *" .PHP_EOL;
echo $_SERVER['REQUEST_METHOD'] .PHP_EOL;

//HEADERS
echo "* --- headers da api --- *" .PHP_EOL;
$headers = getallheaders();
print_r($headers);

//POST
echo "* --- post da api --- *" .PHP_EOL;
$input = file_get_contents('php://input');
$array = json_decode($input, true);

$_POST = !empty($array) ? $array : $_POST;
print_r($_POST);

//RESPONSE DA API
// $response = [
//     'status'  => 200,
//     'sucesso' => true
// ];

// //CONVERTE O ARRAY EM JSON
// echo json_encode($response);