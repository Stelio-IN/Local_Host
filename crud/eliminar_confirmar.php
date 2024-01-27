<?php 

    /*
        verificar se o id foi indicado 
        verificar se existe usuario com id indicado
        (isset/empty) if(isset($_GET['id']))....
    */

    //verificar se o id foi indicado
    $id =filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    if($id == false){
      header("Location: index.php");
    }

       //ligar bd e add parameters
       include 'gestor.php';
       $gestor = new Gestor();
       $parametros = array(
           ':id' => $id
       );

    //verificar se exite um usuario com id inserido
    $usuario = $gestor->EXE_QUERY('SELECT * FROM usuarios WHERE id= :id',$parametros);
    if(count($usuario)==0){
        header("Location: index.php");
    }
    
    $usuario = $gestor->EXE_QUERY('SELECT * FROM usuarios WHERE id= :id',$parametros);

?>

<h3>Usuario selecionado: <?php echo $usuario[0]['user']?></h3>

<div>
    <a href="index.php">Não</a> |<a href="eliminar_registro.php?id= <?php echo $id ?>">Sim</a>
</div>
