<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Menu</title>    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
    <script src="../js/editavel.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/editavel.css">
  </head>
  <body>
    <?php include("menu_topo.php"); ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <?php include("menu_lateral.php"); ?>    
        <div class="span9">
          <div class="hero-unit">
            <h1>Tipo de Material</h1>
            <p></p>          
          </div>
          <div class="container">
            <form method="post" action="../DAO/CadastrotipodematerialDb.php" class="form-horizontal">
              <fieldset>
                <legend>Cadastro</legend>
                <label>Descrição</label>
                <input id="desc" class="form-control input-sm" type="text" name="descricao" required="required"onkeyup="somenteNomes(this);" type="text"  ng-model="nomes.valor" placeholder="Digite algo....">
                <br>
                <?php 
                  // Gera um número aleatório entre 11111111 e 999999999                   
                  $NumAle = rand(10000000,99999999);
                  echo "<input id='desc' class='form-control input-sm hidden' type='password' name='numeroAle' value='$NumAle' type='text'  ng-model='nomes.valor'>";
                 ?>
                 <br>
                <button class="btn btn-success">Salvar</button>
                <a href="listartudo.php" class="btn btn-info">Voltar</a>                    
              </fieldset>
            </form>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </body>
</html>
