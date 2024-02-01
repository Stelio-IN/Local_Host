<?php
include 'gestor.php';

// Exemplo de chamada POST à API
$data = json_decode(file_get_contents('php://input'), true);

$bd = new Gestor();

if ($data && isset($data['id'])) {
    $parametros = array(':id_cliente' => $data['id']);
    
    try {
        $dados = $bd->EXE_QUERY("SELECT * FROM clientes WHERE id = :id_cliente", $parametros);
        echo json_encode($dados, JSON_PRETTY_PRINT);
    } catch (Exception $e) {
        // Tratamento de erro, você pode logar o erro ou retornar uma resposta apropriada.
        echo json_encode(['error' => $e->getMessage()], JSON_PRETTY_PRINT);
    }
} else {
    echo json_encode(['error' => 'Dados inválidos'], JSON_PRETTY_PRINT);
}
?>