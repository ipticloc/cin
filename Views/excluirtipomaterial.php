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
	<title>Excluir tipo Material</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" scr="../js/bootstrap.min.js"></script>

<body >
 <?php include("menu_topo.php"); ?>

    <div class="container-fluid">
    <div class="row-fluid">
    <?php include("menu_lateral.php"); ?>
    
      <form method="post" action="../DAO/excluirtipomaterialdb.php">
      <h1 align="center">Excluir tipo Material</h1>

<div>
      <label>Descrição</label>
      <input type="hidden" name="codigo" required="required" value="<?php echo $codigo?>"/>
      <label><?php echo $nome?></label>
      
   </div> 
<br>
    <div>
      <input type="submit" name="excluir" value="excluir"/>
<br>
    </div>

      </form>

</body>
</head>
</html>