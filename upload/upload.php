<?php

    //Finalizar o upload do ficheiro
    /*
    move_uploaded_file($_FILES['ficheiro']['tmp_name'], 'uploads/'.$_FILES['ficheiro']['name']);
    echo '<pre>';
    print_r($_FILES);
    die();
    */

   $file_name = $_FILES['ficheiro']['name'];     
   $file_size = $_FILES['ficheiro']['size'];     
   $file_tmp = $_FILES['ficheiro']['tmp_name'];     
   $file_type = $_FILES['ficheiro']['type'];  
   $temp = explode('.',$file_name);
   $file_extension = $temp[count($temp)-1] ;

   //criar um array e verificar os tipos permitidos
    $extensions = array('png','jpeg','jpg','PNG');
    if(!in_array($file_extension,$extensions)){
        die('Erro. Ficheiro invalido'); 
    }

   //verificar o tamanho
   if($file_size>1500000){
    die('Erro. Tamanho do arquivo maior que o desejado');
   }
   //finalizar o envio
   $file = uniqid().'.'.$file_extension;
   move_uploaded_file($_FILES['ficheiro']['tmp_name'], 'uploads/'.$_FILES['ficheiro']['name']);
   //alterando o nome
   move_uploaded_file($_FILES['ficheiro']['tmp_name'], 'uploads/'.$file);

   echo $file_extension . '<br>';
   #explode- divide a string apartir do '.'  
    echo 'Terminado';