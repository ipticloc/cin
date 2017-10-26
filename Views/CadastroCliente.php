<?php

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
  <style type="text/css">
  .a{
      font-size: s70px;
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
            <h1>Clientes</h1>
            <p></p>
            
          </div>
          <div class="container">
            <form method="post" action="../DAO/CadastroClientesDB.php">

<fieldset>
<legend>Cadastro</legend>

    <label>Nome do Cliente</label>
    <input type="text" name="NM_CLIENTE" required="required" placeholder="Diga o nome" >
    <br>
    <label>Cpf ou Cnpj</label>
    <input type="text" name="DS_CPF_CNPJ" required="required" placeholder="Diga o cnpj">
    <br>
    <label>Endereço</label>
    <input type="text" name="DS_ENDEREÇO" required="required" placeholder="Diga o Endereço">
    <br>
    <label>Telefone</label>
    <input type="tel" name="NR_TELEFONE" required="required" placeholder="Diga o Telefone">
    <br>
    <label>e-mail</label>
    <input type="email" name="DS_EMAIL" required="required" placeholder="Diga o e-mail">
    <div>
      <button class="btn btn-success">Salvar</button>
      
      <a href="listarclientes.php" class="btn btn-info">Voltar</a>
    </div>
    </div>
  </fieldset>
  </form>
             </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->
</body>
</html>
