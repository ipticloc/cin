<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

 $codigo = $_GET['ID_TIPOMATERIAL'];
 $nome = $_GET['DS_TIPOMATERIAL'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Atualizar Tipo Material</title>
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
          <h1 align="center">Tipos de Materias</h1>
          </div>
        <div class="container-fluid">
          <form method="post" action="../DAO/atualizartipomaterialDb.php">        
            <fieldset>
              <div>
                  <label>Descrição</label>
                  <input type="hidden" name="codigo" value="<?php echo $codigo?>"/>
                  <input class="form-control input-sm" name="descricao" required="required"onkeyup="somenteNomes(this);" type="text"  value="<?php echo $nome?>" ng-model="nomes.valor" />
              </div> 
                <br>
                <div>
                  <button class="btn btn-success">Atualizar</button>
                  <a href="listartudo.php" class="btn btn-info">voltar</a>
                  <br>
                </div>
            </fieldset>
          </form>
          </div>
      </div>
    </body>
  </head>
</html>