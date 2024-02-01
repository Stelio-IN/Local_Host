<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    <h1>Clientes</h1>
    <?php
        include 'api_calls.php';
        $dados = api_call_get('http://localhost/Local_Host/exercicio_api/api/get_all_clients.php');
        $clientes = json_decode($dados,128);
       // var_dump($clientes)
   ?>
    <table border=2>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Detalhes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente['id']?></td>
                    <td><?php echo $cliente['nome']?></td>
                    <td><?php echo $cliente['email']?></td>
                    <td><?php echo $cliente['telefone']?></td>
                    <td><a href="<?php echo 'cliente_detalhe.php?id='. $cliente['id']?>">Detalhes</a></td>
                </tr>

            <?php endforeach;?>
        </tbody>

    </table>
</body>
</html>