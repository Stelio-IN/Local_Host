<?php 
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
?>
<form action="editar_final.php" method="post">
    <label>Nome do Usuario:</label>
    <input type="hidden" name="id_usuario" value="<?php echo $id ?>">
    <input type="text" name="text_user" riquered value=<?php echo $usuario[0]['user'] ?>>
    <input type="submit" value="Aleterar">
</form>
<p><a href="index.php">voltar</a></p>