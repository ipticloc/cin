<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$ID_PEDIDO = $_GET['ID_PEDIDO'];
$ID_CLIENTE = $_GET['ID_CLIENTE'];
$DT_PEDIDO = $_GET['DT_PEDIDO'];
$NM_CLIENTE = $_GET['NM_CLIENTE'];

$banco = new ConexaoBanco();
$sql = "SELECT * FROM Clientes";
$todosclientes = $banco->executeQuery($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  	<title>Atualizar</title>
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
            <h1>Pedidos</h1>
          </div>
          <div class="container">
            <form method="post"  action="../DAO/AtualizarPedidosDB.php">
              <fieldset>
                <input type="hidden" name="ID_PEDIDO" value="<?php echo $ID_PEDIDO;  ?>">      
                <label>Nome Cliente: </label>
                <select name="ID_CLIENTE">
                  <?php
               	   while ($linha = mysqli_fetch_array($todosclientes)){
                      if( $ID_CLIENTE == $linha[ID_CLIENTE]){
                          echo "<option value=\"$linha[ID_CLIENTE]\" selected >$linha[NM_CLIENTE]</option>";
                      }
                      else{
                         echo "<option value=\"$linha[ID_CLIENTE]\" >$linha[NM_CLIENTE]</option>"; 
                      }        	    
               	   }
               	  ?>    	
                </select>
                <label>Data do pedido:</label>
                <input id="date" type="text" name="DT_PEDIDO" required="required" value="<?php echo $DT_PEDIDO;?>" class="selecao">
                <br>
                <button class="btn btn-success">Salvar</button>
                <a href="ListarPedidos.php" class="btn btn-info">Voltar</a>    
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>