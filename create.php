<?php
$data = json_decode(file_get_contents("php://input"), true);
$notas = json_decode(file_get_contents("notas.json"), true);

$data['id'] = uniqid();
$data['fecha'] = date('Y-m-d H:i:s');

$notas[] = $data;

file_put_contents("notas.json", json_encode($notas, JSON_PRETTY_PRINT));
echo json_encode(["mensaje" => "Nota creada"]);
?>
