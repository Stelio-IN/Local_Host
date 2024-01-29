<?php

    if(!isset($_COOKIE['nome'])){   
            //Formulario para pegar o nome do user
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
                //nao se fez a submissao do formulario
                echo '  <form method="POST" action="index.php">
                            <input type="text" name="text_nome"> <br>
                            <input type="submit" value="Guardar">
                        </form>
                    ';
        }else{
                //houve submisssao de formulario
                setcookie('nome',$_POST['text_nome'],time()+30);
               // echo 'Seja bem-vindo, ' .$_COOKIE['nome']. '!';
        }
    }else{
            //pegar o cookie que esta iniciado e dar as boas vindas ao user
         echo 'Seja bem-vindo, ' .$_COOKIE['nome']. '!';
    }
            echo 'Terminado';

    /*
    //cookie deve ter nome, valor e tempo que ira permanecer
        $nome = 'meu_cookie';
        $valor = rand(0,100);
        
        //pegando data atual e acrescentando segundos...
        if(!isset($_COOKIE[$nome])){
            setcookie($nome,strval($valor), time() + 5);
        }
        echo 'terminado';

    */