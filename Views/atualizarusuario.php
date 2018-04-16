<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

 $email =$_GET['DS_EMAIL'];
 $nome = $_GET['DS_USUARIO'];
 $senha =$_GET['DS_SENHA'];
 $codigo=$_GET['ID_USUARIO'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Atualizar Usuario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
          <h1 align="center">Usuario</h1>
        </div>
        <div class="container">
          <fieldset>
            <form method="post" action="../DAO/atualizarusuariodb.php">            
              <div>
                <label>Nome</label>
                <input type="hidden" name="codigo" value="<?php echo $codigo?>"/>
                <input class="form-control input-sm" placeholder="Diga o Nome" onkeyup="somenteNomes(this);" type="text" ng-model="nomes.valor" required="required" value="<?php echo $nome?>"/>
                <label>e-mail</label>
                <input type="email" required="required" placeholder="Diga o Email" name="email" value="<?php echo $email?>"/>
                <br>
                <button class="btn btn-success">Salvar</button>
                <a href="listartodosusuarios.php" class="btn btn-info">voltar</a>
                <br>
              </div>
          </form>
        </fieldset>
      </div>
    </div>
  </body>
  </head>
</html>