<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();
$codigo = $_GET['ID_USUARIO'];
$nome = $_GET['DS_USUARIO'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Excluir Usuario</title>
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
        <form method="post" action="../DAO/excluirusuariodb.php">
          <h1 align="center">Excluir Usuario</h1>          
          <div>
            <label>Nome</label>
            <input type="hidden" name="codigo" value="<?php echo $codigo; ?>"/>
            <input type="text" name="nome" required="required" value="<?php echo $nome?>"/>
          </div> 
          <br>
          <div>
            <input type="submit" name="Excluir" value="Excluir"/>
            <br>
          </div>
        </form>
      </div>
    </div>    
  </body>
</html>