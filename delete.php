<?php
$data = json_decode(file_get_contents("php://input"), true);
$notas = json_decode(file_get_contents("notas.json"), true);

$notas = array_filter($notas, fn($nota) => $nota['id'] !== $data['id']);

file_put_contents("notas.json", json_encode(array_values($notas), JSON_PRETTY_PRINT));
echo json_encode(["mensaje" => "Nota eliminada"]);
?>
