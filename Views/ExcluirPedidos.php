<?php
$DT_PEDIDO =$_GET['DT_PEDIDO'];
$ID_PEDIDO =$_GET['ID_PEDIDO'];
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  	<title>Excluir</title>
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
            <h1 align="center">Pedidos</h1>
          </div>
        </div>
        <div>
          <fieldset>
            <legend> Excluir</legend>    
            <form method="post"  action="../DAO/ExcluirPedidosDB.php">
              <label>ID do Pedido : </label>
              <strong><?php echo $ID_PEDIDO;?></strong>
              <label>Data Pedido:</label>
              <strong><?php echo $DT_PEDIDO; ?></strong>
              <input type="hidden" name="ID_PEDIDO" required="required"  value="<?php echo $ID_PEDIDO;  ?>">
              <br>
              <button class=\"btn btn-mini btn-danger\" type="submit" >Excluir</button>
              <input class=\"btn btn-mini btn-danger\" type="submit" value="Excluir">
            </form>            
          </fieldset>
        </div>
      </div>
    </div>    
  </body>
</html>