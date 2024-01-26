<?php 
    $id = $_GET['id'];
    echo $id; 

    //apresentar dados do usuario
    include 'gestor.php';
    $gestor = new Gestor();
    $parametros = array(
        ':id' => $id
    );
    $usuario = $gestor->EXE_QUERY('SELECT * FROM usuarios WHERE id= :id',$parametros);

?>

<h3>Usuario selecionado: <?php echo $usuario[0]['user']?></h3>

<div>
    <a href="index.php">Não</a> |<a href="eliminar_registro.php?id= <?php echo $id ?>">Sim</a>
</div>
