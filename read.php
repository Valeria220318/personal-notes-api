<?php
$notas = json_decode(file_get_contents("notas.json"), true);
echo json_encode($notas);
?>
