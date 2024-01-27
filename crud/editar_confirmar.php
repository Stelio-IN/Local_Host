<?php 

   //verificar se o id foi indicado
   $id =filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
   if($id == false){
     header("Location: index.php");
   }

    //buscar id do usuario
    $id = $_GET['id'];

    include 'gestor.php';
    $gestor = new Gestor();
    $parametros = array(
    ':id_user' => $id
    );
   # SELECT user,created_at FROM
        $usuario = $gestor->EXE_QUERY('SELECT user FROM usuarios WHERE id= :id_user',$parametros);
        echo '<pre>';
        print_r($usuario);

          //verificar se exite um usuario com id inserido
    $usuario = $gestor->EXE_QUERY('SELECT * FROM usuarios WHERE id= :id_user',$parametros);
    if(count($usuario)==0){
        header("Location: index.php");
    }
?>
<form action="editar_final.php" method="post">
    <label>Nome do Usuario:</label>
    <input type="hidden" name="id_user" value="<?php echo $id ?>">
    <input type="text" name="text_user" riquered value=<?php echo $usuario[0]['user'] ?>>
    <input type="submit" value="Aleterar">
</form>
<p><a href="index.php">voltar</a></p>