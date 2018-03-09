<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$banco = new ConexaoBanco();

$PesquisaId = $_GET["PesquisaID_TIPOMATERIAL"];
$PesquisaDs = $_GET["PesquisaDS_TIPOMATERIAL"];

if($PesquisaId != ""){
    $sql = "SELECT * FROM TiposMateriais  WHERE ID_TIPOMATERIAL='".$PesquisaId."'";
}else if($PesquisaDs != ""){
    $sql = "SELECT * FROM TiposMateriais  WHERE DS_TIPOMATERIAL='".$PesquisaDs."'";
}
else{
    $sql = "SELECT * FROM TiposMateriais";
}

$todosmaterias = $banco->executeQuery($sql);

?>
<!DOCTYPE html>
<html>
<head>
 <title>tipo de Material</title>
 <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
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
=======
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
 <style type="text/css">
   .a{
      font-size: 70px;
      height: 10%;
      width: 35%;
    }
 </style>
<<<<<<< HEAD
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
        <h1>Tipo de Material</h1>
      </div>
      <div class="container">
        <div align="left" class="control-group">
         <a class="btn btn-primary"  href="Cadastrotipomaterial.php">Novo</a>
       </div>
       <div class="container">
        
        <label>Pesquisa : </label>
        <form class="form-inline">
          <label>ID</label>
<<<<<<< HEAD
          <input class="form-control input-sm" name="PesquisaID_TIPOMATERIAL" required="required" onkeyup="somenteNumeros(this);" type="text"  ng-model="numero.valor" placeholder="Ex: 321" />
          <label>TIPO DO MATERIAL</label>
         <input class="form-control input-sm" name="PesquisaDS_TIPOMATERIAL" required="required" onkeyup="somenteNomes(this);" type="text"  ng-model="nomes.valor" placeholder="Ex:Algodão" />
=======
          <input type="text" name="PesquisaID_TIPOMATERIAL" placeholder="Ex: 231">
          <label>TIPO DO MATERIAL</label>
          <input type="text" name="PesquisaDS_TIPOMATERIAL" placeholder="Algodão">
>>>>>>> 73a74eef9677186827527c4d55369ddb5c0e090c
          <input class="btn btn-info" type="submit" value="Pesquisar">
        </form>

    </div>
    <br>

       <table style="width:80%;" class="table table-striped">
          <td>Código</td>
          <td>Nome</td>
          <td>Ações</td>
        </tr>

        <?php
        while ($linha = mysqli_fetch_array($todosmaterias)) {
          echo "<tr>";
          echo "<td>".$linha[ID_TIPOMATERIAL]."</td>";
          echo "<td>".$linha[DS_TIPOMATERIAL]."</td>";
          echo "<td><a class=\"btn btn-mini btn-warning\" href=\"atualizartipomaterial.php?ID_TIPOMATERIAL=$linha[ID_TIPOMATERIAL]& DS_TIPOMATERIAL=$linha[DS_TIPOMATERIAL]\"class=\"btn btn-info\">Editar</a>&nbsp;&nbsp;&nbsp;

          <a class=\"btn btn-mini btn-danger\" onclick=\"return confirm('Você tem certeza que deseja apagar?') \"; href=\"../DAO/excluirtipomaterialdb.php?ID_TIPOMATERIAL=$linha[ID_TIPOMATERIAL]& DS_TIPOMATERIAL=$linha[DS_TIPOMATERIAL]\"class=\"btn btn-danger\">Excluir</a></td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>
  </body>
  </html>