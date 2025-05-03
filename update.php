<?php
$data = json_decode(file_get_contents("php://input"), true);
$notas = json_decode(file_get_contents("notas.json"), true);

foreach ($notas as &$nota) {
    if ($nota['id'] === $data['id']) {
        $nota['titulo'] = $data['titulo'];
        $nota['autor'] = $data['autor'];
        $nota['cuerpo'] = $data['cuerpo'];
        $nota['clasificacion'] = $data['clasificacion'];
        break;
    }
}

file_put_contents("notas.json", json_encode($notas, JSON_PRETTY_PRINT));
echo json_encode(["mensaje" => "Nota actualizada"]);
?>
