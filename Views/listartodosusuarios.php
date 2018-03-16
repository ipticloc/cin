<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$banco = new ConexaoBanco();

$PesquisaId = $_GET["PesquisaID_USUARIO"];
$PesquisaDs = $_GET["PesquisaDS_EMAIL"];

if($PesquisaId != ""){
    $sql = "SELECT * FROM Usuario  WHERE ID_USUARIO='".$PesquisaId."'";
}else if($PesquisaDs != ""){
    $sql = "SELECT * FROM Usuario  WHERE DS_EMAIL='".$PesquisaDs."'";
}
else{
    $sql = "SELECT * FROM Usuario";
}


$todosusuarios = $banco->executeQuery($sql);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuários</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" scr="../js/bootstrap.min.js">
  </script>
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
          <h1>Usuário</h1>        
      </div>
  <div class="container">

    <div align="left" class="control-group">
      <a class="btn btn-primary" href="cadastrousuario.php">Novo</a>
    </div>

    <div class="container">
        
        <label>Pesquisa : </label>
        <form class="form-inline">
          <label>ID</label>
          <input class="form-control input-sm" name="PesquisaID_USUARIO" required="required" onkeyup="somenteNumeros(this);" type="text"  ng-model="numero.valor" placeholder="Ex: 321" />
         <label>EMAIL</label>
          <input type="email" name="PesquisaDS_EMAIL" required="required" placeholder="Ex: @gmail">
          <input class="btn btn-info" type="submit" value="Pesquisar">
        </form>

    </div>

<table style="width:80%;" class="table table-striped">
	<tr>
		<td>Código</td>
		<td>Nome</td>
		<td>e-mail</td>
		<td>Ações</td>
	</tr>

	<?php
	while ($linha = mysqli_fetch_array($todosusuarios)) {
		echo "<tr>";
		echo "<td>".$linha[ID_USUARIO]."</td>";
        echo "<td>".$linha[DS_USUARIO]."</td>";
        echo "<td>".$linha[DS_EMAIL]."</td>";
        echo "<td><a class=\"btn btn-mini btn-warning\" href=\"atualizarusuario.php?DS_EMAIL=$linha[DS_EMAIL]&ID_USUARIO=$linha[ID_USUARIO]& DS_USUARIO=$linha[DS_USUARIO]\"class=\"btn btn-info\">Editar</a>
        &nbsp;&nbsp;&nbsp;
        <a class=\"btn btn-mini btn-danger\" onclick=\"return confirm('Você tem certeza que deseja apagar o Usuario $linha[DS_USUARIO] ?') \"; href=\"../DAO/excluirusuariodb.php?ID_USUARIO=$linha[ID_USUARIO]& DS_USUARIO=$linha[DS_USUARIO]&DS_EMAIL=$linha[DS_EMAIL]\"class=\"btn btn-danger\">Excluir</a></td>";
		echo "</tr>";
	}
	?>
</table>

</div>
</div>
</div>
</div>
</body>
</html>