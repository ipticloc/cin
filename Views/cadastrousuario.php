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
            <h1>Usuário</h1>

          </div>
    <div class="container">
      <form method="Post" action="../DAO/cadastrousuariodb.php">
        <fieldset>
          <legend>Cadastro</legend>
          <label>Nome:</label>
          <input type="text" name="nome" required="required" placeholder="Diga o Nome">
          <label>E-mail:</label>
          <input type="email" name="DS_Email" required="required" placeholder="Diga o E-mail">
          <label>Senha:</label>
          <input type="password" name="Senha" required="required" placeholder="Diga a Senha">
          <div>
            <button class="btn btn-success" type="submit">Salvar</button>
            <a href="listartodosusuarios.php" class="btn btn-info">Voltar</a>
          </div>
        </fieldset>
      </form>
      </div>
      </div>

</body>
</head>
</html>
