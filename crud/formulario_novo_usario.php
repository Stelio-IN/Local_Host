<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar usuario</title>
</head>
<body>
    <h3>Adicionar Usuario</h3>

    <hr>
    <a href="index.php">Voltar</a>
    <hr>
    <form action="registrar_novo_usuario.php" method="post">
      <p>  <input type="text" name= "text_usuario" placeholder="Usuario" required></p>
      <p>  <input type="password" name= "text_password" placeholder="Password" required></p>
      <input type="submit" value="Registrar">
    </form>
    

</body>
</html>