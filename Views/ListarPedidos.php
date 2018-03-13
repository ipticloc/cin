<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$banco = new ConexaoBanco();

$PesquisaId = $_GET["PesquisaIdPedido"];
$PesquisaNmCliente = $_GET["PesquisaNmCliente"];

if($PesquisaId != ""){
    $sql = "SELECT * FROM Pedidos INNER JOIN Clientes ON Pedidos.ID_CLIENTE = Clientes.ID_CLIENTE  WHERE ID_PEDIDO='".$PesquisaId."'";
}else if($PesquisaNmCliente != ""){
    $sql = "SELECT * FROM Pedidos INNER JOIN Clientes ON Pedidos.ID_CLIENTE = Clientes.ID_CLIENTE  WHERE NM_CLIENTE='".$PesquisaNmCliente."'";
}
else{
    $sql = "SELECT * FROM Pedidos INNER JOIN Clientes ON Pedidos.ID_CLIENTE = Clientes.ID_CLIENTE";
}


$todospedidos = $banco->executeQuery($sql);

mysqli_close($conexao);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>LISTAR TUDO</title>
     <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href=".../css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
  <script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
    function somenteNomes(num) {
        var er = /[^a-z.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>
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

        

   <form method="post">
     <fieldset>
      <div align="left" class="control-group">
    <a class="btn btn-primary" href="../Views/CadastroPedidos.php">Novo</a>
    <br>
    <br>
    </form>

    <div class="container">
        <label>Pesquisa : </label>
        <form class="form-inline">
          <label>ID</label>
          <input class="form-control input-sm" name="PesquisaIdPedido" required="required" onkeyup="somenteNumeros(this);" type="text"  ng-model="numero.valor" placeholder="Ex: 321" />
          <label>NOME CLIENTE</label>
           <input class="form-control input-sm" name="PesquisaNmCliente" required="required" onkeyup="somenteNomes(this);" type="text"  ng-model="nomes.valor" placeholder="Ex:Multiserv" />
          <input class="btn btn-info" type="submit" value="Pesquisar">
        </form>

    </div>
    <br>
     <table style="width:80%;" class="table table-striped">
     <tr>
     	  <td>Id pedido</td>
          <td>Nome cliente</td>
     	  <td>Data pedido</td>
          <td>Ações</td>
     </tr>
    
     	
     	<?php

     	   while ($linha = mysqli_fetch_array($todospedidos)){
     	   	echo "<tr>
     	   	    <td>$linha[ID_PEDIDO]</td>
                <td>$linha[NM_CLIENTE]</td>
                <td>$linha[DT_PEDIDO]</td>

                <td>
                    <a  class=\"btn btn-mini btn-warning\"  href=\"AtualizarPedidos.php?ID_CLIENTE=$linha[ID_CLIENTE]&ID_PEDIDO=$linha[ID_PEDIDO]&DT_PEDIDO=$linha[DT_PEDIDO]&NM_CLIENTE=$linha[NM_CLIENTE]\">Editar</a> 

                    <a class=\"btn btn-mini btn-danger\"  onclick=\"return confirm('Você tem certeza que deseja apagar o Pedido do Cliente $linha[NM_CLIENTE]?') \"; href=\"../DAO/ExcluirPedidosDB.php?ID_PEDIDO=$linha[ID_PEDIDO]&DT_PEDIDO=$linha[DT_PEDIDO]\">Excluir</a>

                    <a class=\"btn btn-info\" href=\"ListarItensDoPedido.php?ID_PEDIDO=$linha[ID_PEDIDO]&DT_PEDIDO=$linha[DT_PEDIDO]&NM_CLIENTE=$linha[NM_CLIENTE]\">Detalhes</a>

                </td>


     	   	</tr>";
     	   }
     	?>
     </table>
     </fieldset>
     
     </div>
     </div>
</div>
</body>
</html>







