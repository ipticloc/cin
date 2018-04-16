<?php

include '../Classes/ConexaoBanco.php';

include '../Classes/Sessao_CIN.php';
Sessao_CIN::ValidaSessao();

$banco = new ConexaoBanco();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="../css/editavel.css">
    <script src="../js/jquery.js" type="text/javascript"></script>                  
    <script src="../js/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/editavel.js" type="text/javascript"></script> 
  </head>
  <body>
    <?php include("menu_topo.php"); ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <?php include("menu_lateral.php"); ?>      
        <div class="span9">
          <div class="hero-unit">
            <h1>Clientes</h1>
            <p></p>          
          </div>
          <div class="container">
            <form method="post" action="../DAO/CadastroClientesDB.php" >
              <fieldset>
                <legend>Cadastro</legend>
                <label>Nome do Cliente<span class="c"> *</span></label>
                <input class="form-control input-sm" name="NM_CLIENTE" onkeyup="somenteNomes(this);" ng-model="nomes.valor" required="required"  type="text"  placeholder="Nome" >           
                <br>
                CNPJ ou CPF:
                <span class="c"> *</span>                
                </br>
                <div id="localCampo">                  
                      <input class="form-control input-sm" id="cpf-cnpj" type="text" name="DS_CPF_CNPJ" required="required" ng-model="numero.valor" class="selecao" onkeydown="javascript:return aplica_mascara_cpfcnpj(this,18,event)" onkeyup="javascript:return aplica_mascara_cpfcnpj(this,18,event)" maxlength="18" minlength="14">                  
                </div>                
                <label>Endereço<span class="c"> *</span></label>
                <input  type="text" name="DS_ENDEREÇO" required="required" placeholder="Endereço">
                <br>
                <label>Telefone<span class="c"> *</span></label>
                <input data-mask="(99) 9 9999-9999" id="phone" class="form-control input-sm" type="tel" name="NR_TELEFONE" required="required" placeholder="Diga o Telefone" ng-model="numero.valor">
                 <br>                              
                <label>E-mail <span class="c"> *</span></label>
                <input type="email" name="DS_EMAIL" required="required" placeholder="E-mail">
                <div>
                  <button class="btn btn-success">Salvar</button>
                  <a href="listarclientes.php" class="btn btn-info">Voltar</a>
                </div>              
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>            
    <hr>
    <footer>
      <p>&copy; Company 2012</p>
    </footer>    
  </body>
</html>