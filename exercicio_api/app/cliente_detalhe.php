<?php
    //pegar o id vindo do index
    $id_cliente = $_GET['id'];
    
    include 'api_calls.php';

    $url_post = 'http://localhost/Local_Host/exercicio_api/api/get_client_post.php';
    $post = array(
        'id' => $id_cliente
    );
    $dados = api_call_post($url_post,Json_encode($post,128));

    
    $cliente = json_decode($dados,128);

    var_dump($cliente);

    echo '<hr>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe de Cliente</title>
</head>
<body>
    <h3>ID: 
        <?php echo $cliente[0]['id'] ?>
    </h3>
    <h3>Nome: 
        <?php echo $cliente[0]['nome'] ?>
    </h3>
    <h3>Email: 
        <?php echo $cliente[0]['email'] ?>
    </h3>
    <h3>Telefone: 
        <?php echo $cliente[0]['telefone'] ?>
    </h3>
    <br>
    <a href="http:index.php">Voltar</a>
</body>
</html>