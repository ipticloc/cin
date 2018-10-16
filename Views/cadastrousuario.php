<<<<<<< HEAD
<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
    <script src="../js/editavel.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/editavel.css">>
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
              <form method="Post" action="../DAO/cadastrousuariodb.php">
                <fieldset>
                    <legend>Cadastro</legend>
                    <label>Nome:</label>
                    <input class="form-control input-sm" name="nome" required="required" onkeyup="somenteNomes(this);" type="text"  ng-model="nome.valor" placeholder="Diga o Nome" />
                    <label>e-mail:</label>
                    <input type="email" name="Email" required="required" placeholder="Diga o E-mail">
                    <label>Senha:</label>
                    <input type="password" name="Senha" required="required" placeholder="Diga a Senha">                
                    <div>
                      <button class="btn btn-success" type="submit">Salvar</button>
                      <a href="listartodosusuarios.php" class="btn btn-info">Voltar</a>
                    </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>          
    </body>    
</html>
=======
<?php
include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
            <h1>Usuário</h1>
          </div>
            <div class="container">
              <form method="Post" action="../DAO/cadastrousuariodb.php">
                <fieldset>
                    <legend>Cadastro</legend>
                    <label>Nome:</label>
                    <input class="form-control input-sm" name="nome" required="required" onkeyup="somenteNomes(this);" type="text"  ng-model="nome.valor" placeholder="Diga o Nome" />
                    <label>e-mail:</label>
                    <input type="email" name="Email" required="required" placeholder="Diga o E-mail">
                    <label>Senha:</label>
                    <input type="password" name="Senha" required="required" placeholder="Diga a Senha">
                    <div>
                      <button class="btn btn-success" type="submit">Salvar</button>
                      <a href="listartodosusuarios.php" class="btn btn-info">Voltar</a>
                    </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>          
    </body>    
</html>
>>>>>>> df27015e8983967067fe6b0cf51ff9010c2f1465
