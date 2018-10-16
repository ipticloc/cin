<<<<<<< HEAD
<?php
session_start();
if (isset($_SESSION["Usuario"])) {
  //ok
}
else{
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
    <script src="../js/editavel.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/editavel.css">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
            <a href="Sair.php" class="btn btn-danger">Sair</a>
            </p>
            <ul class="nav">
              <li class="a">
              <a href="#"><img class="a" src="logo-cin.png"></a>
              </li>
              <li class="active"><a href="menu.php">Pagina Inicial</a></li>
              <li><a href="http://www.ipti.org.br/pt/sobre/" target="blank">Sobre</a></li>
              <li><a href="http://www.ipti.org.br/pt/contato/" target="blank">Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span3">
            <div class="well sidebar-nav">
              <br/>
              <br/>
              <ul class="nav nav-list">
                <li class="nav-header">Clientes</li>
                <li class="active"><a href="CadastroCliente.php">Cadastro</a></li>
                <li><a href="listarclientes.php">Listas de Clientes</a></li>
                <li class="nav-header">Usuario</li>
                <li><a href="cadastrousuario.php">Cadastro</a></li>
                <li><a href="listartodosusuarios.php">Listas de Usuarios</a></li>
                <li class="nav-header">Tipo de Material</li>
                <li><a href="Cadastrotipomaterial.php">Cadastro</a></li>
                <li><a href="listartudo.php">Listas de Materiais</a></li>
                <li class="nav-header">Pedidos</li>
                <li><a href="CadastroPedidos.php">Cadastro</a></li>
                <li><a href="ListarPedidos.php">Listas de Pedidos</a></li>
                </ul>
            </div><!--/.well -->
          </div><!--/span-->
          <div class="span9">
          </div><!--/span-->
        </div><!--/row-->
      </div><!--/.fluid-container-->    
    </body>
</html>
=======
<?php
session_start();
if (isset($_SESSION["Usuario"])) {
  //ok
}
else{
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/editavel.css">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <a href="Sair.php" class="btn btn-danger">Sair</a>
            </p>
            <ul class="nav">
            <li class="a">
            <a href="#"><img class="a" src="logo-cin.png"></a>
            </li>
              <li class="active"><a href="#">Pagina Inicial</a></li>
              <li><a href="#about">Sobre</a></li>
              <li><a href="#contact">Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
        <div class="well sidebar-nav">
          <br/>
          <br/>
            <ul class="nav nav-list">
              <li class="nav-header">Clientes</li>
              <li class="active"><a href="CadastroCliente.php">Cadastro</a></li>
              <li><a href="listarclientes.php">Listas de Clientes</a></li>
              <li class="nav-header">Usuario</li>
              <li><a href="cadastrousuario.php">Cadastro</a></li>
              <li><a href="listartodosusuarios.php">Listas de Usuarios</a></li>
              <li class="nav-header">Tipo de Material</li>
              <li><a href="Cadastrotipomaterial.php">Cadastro</a></li>
              <li><a href="listartudo.php">Listas de Materiais</a></li>
              <li class="nav-header">Pedidos</li>
              <li><a href="CadastroPedidos.php">Cadastro</a></li>
              <li><a href="ListarPedidos.php">Listas de Pedidos</a></li>
              </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
        </div><!--/span-->
        </div><!--/row-->
        </div><!--/.fluid-container-->
</body>
</html>
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
