<?php
session_start();

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();


?>
<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
  <script>
    function somenteNomes(num) {
        var er = /[^a-z.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>
  <style type="text/css">
    .a{
      font-size: 70px;
      height: 10%;
      width: 35%;
    }
    .b{
      font-size: 40px;
      width: 20%;
    }
  </style>
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
<br>
                 <button class="btn btn-success">Salvar</button>
      <a href="listartudo.php" class="btn btn-info">Voltar</a>
    
                  
                  </fieldset>
                </form>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        
      </footer>

    </div><!--/.fluid-container-->
</body>
</html>
