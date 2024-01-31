<?php

    $num_clientes = 100;
    $dominios = array('@gmail.com','@hotmail.com','@mail.com');
    $paises = array('Moçambique','Portugal','Brasil','Angola','Guine');

    $dados = array();
    for($i =1; $i<=$num_clientes;$i++){
        $cliente = array(
            'nome'=> 'Cliente '.$i,
            'telemovel' => rand(100000000,999999999),
            'email' => 'cliente_' . $i .$dominios[rand(0,count($dominios)-1)],
            'nacionalidade' => $paises[rand(0,count($paises)-1)]
        );
        array_push($dados,$cliente);
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="inc/datatables.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Clientes</h1> <hr>


<table id="table" class="table">
        <thead class="table-dark">
            <tr>    
                <th>Nome do cliente</th>
                <th>Email</th>
                <th>Telemovel</th>
                <th>Nacionalidade</th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 0; foreach ($dados as $cliente): ?>
                <tr>
                    <?php
                        $i++;
                    ?>

                    <?php if ( $cliente['nacionalidade'] =='Moçambique'): ?>
                        <td class="table-warning"><?php echo $cliente['nome'] ?></td>
                        <td><?php echo $cliente['email'] ?></td>
                        <td><?php echo $cliente['telemovel'] ?></td>
                        <td><?php echo $cliente['nacionalidade'] ?></td>
                    <?php else: ?>
                        <td><?php echo $cliente['nome'] ?></td>
                        <td><?php echo $cliente['email'] ?></td>
                        <td><?php echo $cliente['telemovel'] ?></td>
                        <td><?php echo $cliente['nacionalidade'] ?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <script src="inc/datatables.min.js"></script>
    
     <script>
        // Crie uma instância do DataTable usando a ID correta
        $(document).ready(function () {
            $('#table').DataTable({
                ordering: false,
                language: {
                            info: 'pagina _PAGE_ de _PAGES_',
                            infoEmpty: 'Nao ha registros',
                            infoFiltered: '(filtrando de _MAX_ registros)',
                            lengthMenu: 'Apresentar _MENU_ linhas por pagina',
                            zeroRecords: 'Nao ha registros'
                        }
            });
        });
    </script>
</body>
</html>