<?php
    $tema= 'ligth_mode.css';
    if(isset($_COOKIE['tema'])){
        $tema = $_COOKIE['tema'];


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $tema ?>">
    <title>Document</title>
</head>
<body>
    <h1>Ola Mundo</h1>
    <a href="ligth_mode.php">Light mode</a> | <a href="dark_mode.php">Dark mode</a> 
</body>
</html>