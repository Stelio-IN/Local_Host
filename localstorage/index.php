<?php 

    $clientes = array(
        array(
            'nome'=> 'Cliente 1',
            'telemovel'=> '11111111'
        ),
        array(
            'nome'=> 'Cliente 2',
            'telemovel'=> '22222222'
        ),
        array(
            'nome'=> 'Cliente 3',
            'telemovel'=> '33333333'
        ),
        array(
            'nome'=> 'Cliente 4',
            'telemovel'=> '44444444'
        ),
        array(
            'nome'=> 'Cliente 5',
            'telemovel'=> '55555555'
        ),
    );
    
    echo '<h1> Clientes </h1> <hr>';
    /*
    foreach($clientes as $cliente){
        echo '<p>'.$cliente['nome'].'</p>';
    }
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <table class='table table-striped table-bordered'>
        <thead class='table-dark '>
            <tr>    
                <th>Nome do cliente</th>
                <th>Telemovel</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($clientes as $cliente):?>
                <tr>
                    <td><?php echo $cliente['nome']?></td>
                    <td><?php echo $cliente['telemovel']?></td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>