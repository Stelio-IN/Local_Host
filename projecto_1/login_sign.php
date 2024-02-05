<?php if(isset($_SESSION['user'])): ?>

<h1>Area Reservada</h1>

<?php else:?>
<div id="carouselExampleControls" class="carousel slide mb-5 mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">

        <div class="container m-3">
            <div class="row">
                <div class="offset-3 col-7 ">
                <h3 class="text-center">Login/Sign</h3>
                    <form action="?p=area_reservada" method="post">
                        <div class="form-group m-3">
                            <input type="text" name="text_usuario" placeholder="Usuario" class="form-control">
                        </div>
                        <div class="form-group m-3">
                            <input type="password" name="text_senha" class="form-control" placeholder="password" >
                        </div>
                    
                        <div class="text-center">
                            <input type="submit" value="Entrar" class="btn btn-primary m-3">
                        <a href="http:cliente/formulario_registro.php">Criar conta</a>
                        </div>
                        <?php if($erro): ?>
                            <div class="alert alert-danger text-center" id="erro">
                                Login invalido
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
	
    </div>
    <div class="carousel-item">

         <div class="container m-3">
            <div class="row">
                <div class="offset-3 col-7 ">                
                    <h3 class="m-4">Registro de Usuário</h3>
                    <form action="processar_registro.php" method="post">
                        <div class="form-group m-3">
                            <input type="text" name="text_usuario" placeholder="Usuario" class="form-control" required>
                        </div>
                        <div class="form-group m-3">
                            <input type="password" placeholder="Senha" class="form-control"  id="senha" name="txt_senha" required>
                        </div>
                        <div class="form-group m-3">
                            <input type="number" placeholder="Telemovel ex: 842156451" class="form-control"  id="txt_numero" name="txt_numero" required>
                        </div>
                        <div class="form-group m-3">
                            <input type="txt" placeholder="Morada ex: Magoanine 'C'" class="form-control"  id="txt_morada" name="txt_morada" required>
                        </div>
                        
                        <div class="text-center">
                            <input type="submit" value="Registrar" class="btn btn-primary m-3">
                              <a href="http:cliente/formulario_registro.php">Ja tem conta</a>
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>


    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php endif;?>

<script>
    $('#erro').delay(3000).fadeOut('slow');
</script>