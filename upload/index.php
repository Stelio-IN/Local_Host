<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="text_nome">Nome:</label>
            <input type="text" id="text_nome" name="text_nome">
        </div>

        <div>
            <label for="text_password">Senha:</label>
            <input type="password" id="text_password" name="text_password">
        </div>

        <div>
            <label for="ficheiro">Enviar arquivos:</label>
            <input 
                type="file" 
                name="ficheiro"
                accept="image/png, application/pdf"
            >
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>