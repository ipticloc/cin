<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_GET['ID_PEDIDO'];

$banco = new ConexaoBanco();
  
$sql = "SELECT * FROM TiposMateriais";


$todosmateriais = $banco->executeQuery($sql);

mysqli_close();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro Item Pedido</title>
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
<<<<<<< HEAD
  <script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>
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
=======
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
</head>
<body>
 <?php include("menu_topo.php"); ?>

    <div class="container-fluid">
    <div class="row-fluid">
    <?php include("menu_lateral.php"); ?>
    
        <div class="span9">
        <div class="hero-unit">
        <h1>Itens Pedido</h1>
        </div>
    <a href="CadastroItemPedido.php"></a>
    <form method="post"  action="../DAO/CadastroItemPedidoDB.php">
    <fieldset>
    <legend>Cadastro</legend>
<<<<<<< HEAD
    <input type="hidden" name="ID_PEDIDO" required="required" value="<?php echo $ID_PEDIDO; ?>">
=======
    <input type="hidden" name="ID_PEDIDO" value="<?php echo $ID_PEDIDO; ?>">
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
    </br>
    <label>Tipo Material: </label>
     <select name="ID_TIPOMATERIAL">
            <?php

           while ($linha = mysqli_fetch_array($todosmateriais)){
            echo "<option value=\"$linha[ID_TIPOMATERIAL]\" >$linha[DS_TIPOMATERIAL]</option>";
                
           }
        ?>
        
    </select>

    </br>
    <label>Sequencia Pedido:</label>
<<<<<<< HEAD
    <input  class="form-control input-sm" onkeyup="somenteNumeros(this);" type="text" name="SQ_PEDIDO" required="required" ng-model="numero.valor">
    </br>
    <label>Nome Produto:</label>
    <input class="form-control input-sm" onkeyup="somenteNomes(this);" type="text" name="DS_ITEM" required="required" ng-model="nome.valor">
    </br>
    <label>Quantidade:</label>
    <input  class="form-control input-sm" onkeyup="somenteNumeros(this);" type="text" name="VL_QUANTIDADE" required="required" ng-model="numero.valor">
    </br>
    <label>Cor:</label>
    <input type="text" name="DS_COR" required="required">
=======
    <input type="text" name="SQ_PEDIDO">
    </br>
    <label>Nome Produto:</label>
    <input type="text" name="DS_ITEM">
    </br>
    <label>Quantidade:</label>
    <input type="text" name="VL_QUANTIDADE">
    </br>
    <label>Cor:</label>
    <input type="text" name="DS_COR">
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
    </br>
    
    <button class="btn btn-success">Salvar</button>
    <a class="btn btn-primary"  href="ListarItensDoPedido.php?ID_PEDIDO=<?php echo $ID_PEDIDO;?>">Voltar</a>
    </fieldset>
    </form>

</body>
</html>