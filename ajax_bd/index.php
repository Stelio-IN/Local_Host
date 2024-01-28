<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animate.compat.css">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h3>Clientes</h3>
    <hr>
    <div id="detalhe_cliente">
       <small>Nao existe cliente selecionado</small> 
    </div>

    <hr>

    <div id= "lista_clientes"></div>

    <button onclick="lista_clientes()">Atualizar</button>





    <script>
        //-------------------------------------------------------
         $(document).ready(function(){
            //Construcao da lista clientes quando o documeto estiver totalmente carregado
            lista_clientes();
        });
        //------------------------------------------------------
        function lista_clientes(){
            $.ajax({
                type: "GET",
                url: "ajax/todos_clientes.php",
                success: function(resp){
                    var clientes = JSON.parse(resp)

                    var html = "<ul>";
                    clientes.forEach(c =>{
                        html += "<li onclick=\"detalhe_cliente("+ c['id_cliente']+")\">" +c['nome'] + "</li>"
                    })

                    html += "</ul>";

                 /*   clientes.forEach(element =>{
                        console.log(element['nome'])
                    })*/

                  $("#lista_clientes").html(html)
                },
                error: function(){
                    console.log('Erro!!!')
                }
            });
        }
        //------------------------------------------------------
        function detalhe_cliente(id_cliente){
            $.ajax({
                type: "POST",
                url: "ajax/detalhe_clientes.php",
                data: {id : id_cliente},
                success: function(resp){
                    console.clear()
                   console.log(resp)

                   var cliente = JSON.parse(resp);
                    console.log(cliente)
                   var html = "<p>Nome: " + cliente[0]['nome'] + "</p>"
                   html += "<p>Email: " + cliente[0]['email'] + "</p>"
                   html += "<p>Telefone: " + cliente[0]['telefone'] + "</p>"
                   $("#detalhe_cliente").html(html)

                   //para atualizar ao clicar detalhes de cliente
                   lista_clientes();
                },
                error: function(){
                    console.log('Erro!!!')
                }
            });
        } 

    </script>
</body>
</html>