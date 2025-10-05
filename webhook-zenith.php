<?php
// Recebe o JSON enviado pela Zenith Pay
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Registra no log para verificar
file_put_contents("webhook-log.txt", date('Y-m-d H:i:s') . " - " . $input . PHP_EOL, FILE_APPEND);

// Responde com sucesso
http_response_code(200);
echo json_encode(["status" => "ok"]);
?>
