<?php 
    
    //interface
    echo '<h3>Gestao de usuarios</h3>';
    echo '<hr>';

    echo '<a href="formulario_novo_usario.php"> Adicionar Usuario</a>';
    echo '<hr>';

    //tabela com usuarios

    //incluir o generic

    include 'gestor.php';
    $gestor = new Gestor();
    $usuarios = $gestor->EXE_QUERY('SELECT * FROM usuarios');

?>
<table border='1'>
    <thead>
        <tr>    
            <th>Id</th>
            <th>Usuario</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Accoes</th>

        </tr>
    </thead>
    <tboad>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['id'] ?></td>
                <td><?php echo $usuario['user'] ?></td>
                <td><?php echo $usuario['created_at'] ?></td>
                <td><?php echo $usuario['updated_at'] ?></td>
                <td>
                    <a href="editar_confirmar.php?id=<?php echo $usuario['id']?>">Editar</a> 
                    &nbsp;|&nbsp; 
                    <a href="eliminar_confirmar.php?id=<?php echo $usuario['id']?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>         
    </tboad>    
</table>
<p>Resultado:  <?php echo count($usuarios)?></p>