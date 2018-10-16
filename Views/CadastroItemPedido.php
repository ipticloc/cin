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
          <h1>Itens Pedido</h1>
        </div>
        <a href="CadastroItemPedido.php"></a>
        <form method="post"  action="../DAO/CadastroItemPedidoDB.php">
          <fieldset>
            <legend>Cadastro</legend>
            <input type="hidden" name="ID_PEDIDO" required="required" value="<?php echo $ID_PEDIDO; ?>">
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
            </br>
            <?php 
                  // Gera um número aleatório entre 11111111 e 999999999                   
              $NumAle = rand(10000000,99999999);
              echo "<input id='desc' class='form-control input-sm hidden' type='password' name='CD_BARRASP' value='$NumAle' type='text'  ng-model='nomes.valor'>";
            ?>
            <br>
            <button class="btn btn-success">Salvar</button>
            <a class="btn btn-primary"  href="ListarItensDoPedido.php?ID_PEDIDO=<?php echo $ID_PEDIDO;?>">Voltar</a>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>