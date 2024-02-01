<?php
    include 'api_calls.php';
    $url_get = 'http://localhost/Local_Host/exercicio_api/api/get_all_clients.php';
  
    echo '<h2>GET</h2>';
    $dados = api_call_get($url_get);
    echo $dados;
    echo '<hr>';

    echo '<h2>POST</h2>';
    $id = 2;
    $url_post = 'http://localhost/Local_Host/exercicio_api/api/get_client_post.php';
    $post = array(
        'id' => $id
    );
    $dados = api_call_post($url_post,Json_encode($post,128));
    echo $dados;

?>