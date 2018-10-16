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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="../css/editavel.css">
    <script src="../js/jquery.js" type="text/javascript"></script>                  
    <script src="../js/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/editavel.js" type="text/javascript"></script>   
  </head>
  <script>
function radiomarcado(){
var marcado = $("#cnpj").is(":checked");
if(marcado){
marcado = "cnpj";
document.getElementById('valorMascara').value = marcado;
}else{
marcado = "cpf";
document.getElementById('valorMascara').value = marcado;
}
$.notify("Você pode escolher entre CPF e CNPJ", 'success');
}

</script>
  <body>
   <?php include("menu_topo.php");     
   ?>
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
                  <input class="form-control input-sm" name="NM_CLIENTE" onkeyup="somenteNomes(this);" type="text"  ng-model="nomes.valor" required="required" placeholder="diga o nome..." value="<?php echo $nome;?>"  />
                  <br>
                  CPF ou CNPJ
                  <span class="c"> *</span>
                  </br>        
                  <div id="localCampo">                  
                      <input class="form-control input-sm" id="cpf-cnpj" type="text" name="DS_CPF_CNPJ" required="required" ng-model="numero.valor" class="selecao" onkeydown="javascript:return aplica_mascara_cpfcnpj(this,18,event)" onkeyup="javascript:return aplica_mascara_cpfcnpj(this,18,event)" maxlength="18" minlength="14" value="<?php echo $cpf;?>">                  
                </div>     
                <label>Endereço</label>
                <input type="text" name="DS_ENDEREÇO" required="required" placeholder="Diga o Endereço" value="<?php echo $endereço;?>"/>
                <br>
                <label>Telefone</label>
                <input data-mask="(99) 9 9999-9999" id="phone" class="form-control input-sm" type="tel" name="NR_TELEFONE" required="required" placeholder="Diga o Telefone" ng-model="numero.valor" value="<?php echo $telefone;?>"/>
                <br>
                <label>E-mail</label>
                <input type="email" name="DS_EMAIL" required="required" placeholder="Diga o Email" value="<?php echo $email;?>"/>
                <br>
                <button class="btn btn-success">Salvar</button>
                <a href="listarclientes.php" class="btn btn-info">Voltar</a>
              </fieldset>              
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>