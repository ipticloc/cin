<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

 $email =$_GET['DS_EMAIL'];
 $nome = $_GET['NM_CLIENTE'];
 $codigo=$_GET['ID_CLIENTE'];
 $telefone =$_GET['NR_TELEFONE'];
 $endereço =$_GET['DS_ENDEREÇO'];
 $cpf =$_GET['DS_CPF_CNPJ'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Atualizar Clientes</title>
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
<body>
 <?php include("menu_topo.php"); ?>

    <div class="container-fluid">
    <div class="row-fluid">
    <?php include("menu_lateral.php"); ?>
    
        <div class="span9">
        <div class="hero-unit">
        <h1 align="center">Clientes</h1>
        </div>
  <div class="container">
<form method="post" action="../DAO/atualizarclientesdb.php">
<fieldset>

    <label>Nome do Cliente</label>
    <input type="hidden" name="codigo" value="<?php echo $codigo;?>"/>
    <input type="text" name="NM_CLIENTE" required="required" placeholder="diga o nome..." value="<?php echo $nome;?>"/>
    <br>
      <label>Cpf ou Cnpj</label>
    <input type="text" name="DS_CPF_CNPJ" required="required" placeholder="Diga o cnpj" value="<?php echo $cpf;?>"/>
    <br>
    <label>Endereço</label>
    <input type="text" name="DS_ENDEREÇO" required="required" placeholder="Diga o Endereço" value="<?php echo $endereço;?>"/>
    <br>
    <label>Telefone</label>
    <input type="tel" name="NR_TELEFONE" required="required" placeholder="Diga o Telefone" value="<?php echo $telefone;?>"/>
    <br>
    <label>Email</label>
    <input type="text" name="DS_EMAIL" required="required" placeholder="Diga o Email" value="<?php echo $email;?>"/>
    <br>
      <button class="btn btn-success">Salvar</button>
      <a href="listarclientes.php" class="btn btn-info">Voltar</a>
</fieldset>
      </form>
      </div>
      </div>
</body>
</head>
</html>