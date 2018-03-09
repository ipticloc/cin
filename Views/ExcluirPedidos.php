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
  </style>
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
<form method="post">
     <fieldset>
     <legend> Excluir</legend>
</head>
<body>
    <form method="post"  action="../DAO/ExcluirPedidosDB.php">
    <fieldset>
     <label>ID do Pedido : </label>
     <strong><?php echo $ID_PEDIDO;?></strong>
     <label>Data Pedido:</label>
     <strong><?php echo $DT_PEDIDO; ?></strong>
<<<<<<< HEAD
      <input type="hidden" name="ID_PEDIDO" required="required"  value="<?php echo $ID_PEDIDO;  ?>">
=======
      <input type="hidden" name="ID_PEDIDO" value="<?php echo $ID_PEDIDO;  ?>">
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
   
    <br/>
    <button class=\"btn btn-mini btn-danger\" type="submit" >Excluir</button>
    <input class=\"btn btn-mini btn-danger\" type="submit" value="Excluir">
    </fieldset>
    </form>
</body>
</html>