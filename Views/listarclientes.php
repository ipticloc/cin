
<?php
include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$banco = new ConexaoBanco();

$sql = "SELECT * FROM `Clientes`";
$todosclientes = $banco->executeQuery($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
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
                <h1>Clientes</h1>
                
          </div>

        <div class="container" >
          <form method="post">
          <fieldset>
          <div align="left" class="control-group">
            <a class="btn btn-primary" href="CadastroCliente.php">Novo</a>
          </div>
          <table style="width:80%;" class="table table-striped">
            <tr>
              <td>Código</td>
              <td>Nome</td>
              <td>Cpf</td>
              <td>Endereço</td>
              <td>Telefone</td>
              <td>e-mail</td>
              <td>Ações</td>
            </tr>
            
          <?php
            while ($linha = mysqli_fetch_array($todosclientes)) {
              echo "<tr>";
                  echo "<td>".$linha[ID_CLIENTE]."</td>";
                  echo "<td>".$linha[NM_CLIENTE]."</td>";
                  echo "<td>".$linha[DS_CPF_CNPJ]."</td>";
                  echo "<td>".$linha[DS_ENDEREÇO]."</td>";
                  echo "<td>".$linha[NR_TELEFONE]."</td>";
                  echo "<td>".$linha[DS_EMAIL]."</td>";

                  echo "<td><a class=\"btn btn-mini btn-warning\" href=\"atualizarclientes.php?ID_CLIENTE=$linha[ID_CLIENTE]&NM_CLIENTE=$linha[NM_CLIENTE]&DS_CPF_CNPJ=$linha[DS_CPF_CNPJ]&DS_ENDEREÇO=$linha[DS_ENDEREÇO]&NR_TELEFONE=$linha[NR_TELEFONE]&DS_EMAIL=$linha[DS_EMAIL]\">Editar</a>
                    &nbsp;&nbsp;&nbsp;

                    <a class=\"btn btn-mini btn-danger\" onclick=\"return confirm('Você tem certeza que deseja apagar o Cliente $linha[NM_CLIENTE]?'); \" href=\"../DAO/excluirclientesdb.php?ID_CLIENTE=$linha[ID_CLIENTE]& NM_CLIENTE=$linha[NM_CLIENTE]&DS_CPF_CNPJ=$linha[DS_CPF_CNPJ]&DS_ENDEREÇO=$linha[DS_ENDEREÇO]&NR_TELEFONE=$linha[NR_TELEFONE]&DS_EMAIL=$linha[DS_EMAIL]\">Excluir</a></td>";

              echo "</tr>";
            }
            ?>
          </table>
          </form>
          </fieldset>
        </div>

        </div>
      </div>
    </div>

</body>
</html>
