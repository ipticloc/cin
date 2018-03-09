<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_GET['ID_PEDIDO'];
$SQ_PEDIDO = $_GET['SQ_PEDIDO'];
$DS_ITEM = $_GET['DS_ITEM'];
$VL_QUANTIDADE = $_GET['VL_QUANTIDADE'];
$DS_COR = $_GET['DS_COR'];
$ID_TIPOMATERIAL = $_GET['ID_TIPOMATERIAL'];
$SL_CORTE = $_GET['SL_CORTE'];
$ST_SILK = $_GET['ST_SILK'];
$ST_BORDADO = $_GET['ST_BORDADO'];
$ST_ETIQUETA = $_GET['ST_ETIQUETA'];
$DS_PREPARACAO = $_GET['DS_PREPARACAO'];


$banco = new ConexaoBanco();
  
$sql = "SELECT * FROM TiposMateriais";


$todosmateriais = $banco->executeQuery($sql);




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>PEDIDO</title>
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
        <h1>Itens do Pedido</h1>
        </div>
        <div class="container">
       <form method="post"  action="../DAO/AtualizarItemDoPedidoDB.php">
    <fieldset>
    <input type="hidden" name="ID_PEDIDO" value="<?php echo $ID_PEDIDO; ?>">
     <input type="hidden" name="SQ_PEDIDO" value="<?php echo $SQ_PEDIDO; ?>">
    </br>
<<<<<<< HEAD
    <label>Tipo Material:</label>
=======
    <label>Tipo Material: </label>
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
     <select name="ID_TIPOMATERIAL">
            <?php

           while ($linha = mysqli_fetch_array($todosmateriais)){
             if( $ID_TIPOMATERIAL == $linha[ID_TIPOMATERIAL]){
                echo "<option value=\"$linha[ID_TIPOMATERIAL]\" selected > $linha[DS_TIPOMATERIAL]</option>";
             }else{
                echo "<option value=\"$linha[ID_TIPOMATERIAL]\" > $linha[DS_TIPOMATERIAL]</option>";
             }
            
           }
        ?>
        
    </select>

    </br>
    <label>Descrição:</label>
<<<<<<< HEAD
    <input type="text" name="DS_ITEM" required="required" value="<?php echo $DS_ITEM;  ?>">
    </br>
    <label>Quantidade:</label>
    <input  class="form-control input-sm" onkeyup="somenteNumeros(this);" type="text" name="VL_QUANTIDADE" required="required" value="<?php echo $VL_QUANTIDADE;  ?>">
    </br>
    <label>cor:</label>
    <input type="text" name="DS_COR" required="required" value="<?php echo $DS_COR;  ?>">
=======
    <input type="text" name="DS_ITEM" value="<?php echo $DS_ITEM;  ?>">
    </br>
    <label>Quantidade:</label>
    <input type="text" name="VL_QUANTIDADE" value="<?php echo $VL_QUANTIDADE;  ?>">
    </br>
    <label>cor:</label>
    <input type="text" name="DS_COR" value="<?php echo $DS_COR;  ?>">
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
    </br>
    <label>Corte:</label>
    <?php
        if( $SL_CORTE == 1){
            echo " <input type=\"radio\" name=\"SL_CORTE\" value=\"1\" checked> Parado ";

        }else{
           echo " <input type=\"radio\" name=\"SL_CORTE\" value=\"1\"> Parado "; 
        }

        if( $SL_CORTE == 2){
            echo " <input type=\"radio\" name=\"SL_CORTE\" value=\"2\" checked> Executando ";

        }else{
           echo " <input type=\"radio\" name=\"SL_CORTE\" value=\"2\"> Executando "; 
        }

        if( $SL_CORTE == 3){
            echo " <input type=\"radio\" name=\"SL_CORTE\" value=\"3\" checked> Concluído ";

        }else{
           echo " <input type=\"radio\" name=\"SL_CORTE\" value=\"3\"> Concluído "; 
        }


    ?>
    </br>
    <label>Silk:</label>
    <?php
        if( $ST_SILK == 1){
            echo " <input type=\"radio\" name=\"ST_SILK\" value=\"1\" checked> Parado ";

        }else{
           echo " <input type=\"radio\" name=\"ST_SILK\" value=\"1\"> Parado "; 
        }

        if( $ST_SILK == 2){
            echo " <input type=\"radio\" name=\"ST_SILK\" value=\"2\" checked> Executando ";

        }else{
           echo " <input type=\"radio\" name=\"ST_SILK\" value=\"2\"> Executando "; 
        }

        if( $ST_SILK == 3){
            echo " <input type=\"radio\" name=\"ST_SILK\" value=\"3\" checked> Concluído ";

        }else{
           echo " <input type=\"radio\" name=\"ST_SILK\" value=\"3\"> Concluído "; 
        }


    ?>
    </br>
    <label>Etiqueta:</label>
    <?php
        if( $ST_ETIQUETA == 1){
            echo " <input type=\"radio\" name=\"ST_ETIQUETA\" value=\"1\" checked> Parado ";

        }else{
           echo " <input type=\"radio\" name=\"ST_ETIQUETA\" value=\"1\"> Parado "; 
        }

        if( $ST_ETIQUETA == 2){
            echo " <input type=\"radio\" name=\"ST_ETIQUETA\" value=\"2\" checked> Executando ";

        }else{
           echo " <input type=\"radio\" name=\"ST_ETIQUETA\" value=\"2\"> Executando "; 
        }

        if( $ST_ETIQUETA == 3){
            echo " <input type=\"radio\" name=\"ST_ETIQUETA\" value=\"3\" checked> Concluído ";

        }else{
           echo " <input type=\"radio\" name=\"ST_ETIQUETA\" value=\"3\"> Concluído "; 
        }


    ?>

    </br>
    <label>Bordado:</label>
    <?php
        if( $ST_BORDADO == 1){
            echo " <input type=\"radio\" name=\"ST_BORDADO\" value=\"1\" checked> Parado ";

        }else{
           echo " <input type=\"radio\" name=\"ST_BORDADO\" value=\"1\"> Parado "; 
        }

        if( $ST_BORDADO == 2){
            echo " <input type=\"radio\" name=\"ST_BORDADO\" value=\"2\" checked> Executando ";

        }else{
           echo " <input type=\"radio\" name=\"ST_BORDADO\" value=\"2\"> Executando "; 
        }

        if( $ST_BORDADO == 3){
            echo " <input type=\"radio\" name=\"ST_BORDADO\" value=\"3\" checked> Concluído ";

        }else{
           echo " <input type=\"radio\" name=\"ST_BORDADO\" value=\"3\"> Concluído "; 
        }


    ?>

    <label>Preparação:</label>
    <?php
        if( $DS_PREPARACAO == 1){
            echo " <input type=\"radio\" name=\"DS_PREPARACAO\" value=\"1\" checked> Parado ";

        }else{
           echo " <input type=\"radio\" name=\"DS_PREPARACAO\" value=\"1\"> Parado "; 
        }

        if( $DS_PREPARACAO == 2){
            echo " <input type=\"radio\" name=\"DS_PREPARACAO\" value=\"2\" checked> Executando ";

        }else{
           echo " <input type=\"radio\" name=\"DS_PREPARACAO\" value=\"2\"> Executando "; 
        }

        if( $DS_PREPARACAO == 3){
            echo " <input type=\"radio\" name=\"DS_PREPARACAO\" value=\"3\" checked> Concluído ";

        }else{
           echo " <input type=\"radio\" name=\"DS_PREPARACAO\" value=\"3\"> Concluído "; 
        }


    ?>
        

    
    </br>
    </br>
    <button class="btn btn-success">Salvar</button>

    

    </fieldset>
    </form>
    </div>
    </div>
    </div>

<a href="ListarItensDoPedido.php?ID_PEDIDO=<?php echo $ID_PEDIDOS; ?> "class="btn btn-info">Voltar</a>

</body>
</html>