
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
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" scr="../js/bootstrap.min.js"></script>
  <style type="text/css">
  .a{
      font-size: s70px;
      height: 10%;
      width: 35%;
    }
    .b{
      font-size: 40px;
      width: 20%;
    }
    .c {
      color: red;
    }
  </style>
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
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
  
}
</script>
<script src="../js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
               $("#date").mask("99/99/9999");
               $("#phone").mask("(99) 99999-9999");
               $("#tin").mask("99-9999999");
               $("#ssn").mask("999-99-9999");
               $("#cnpj").mask("99.999.999/9999-99");
               $("#cpf").mask("999.999.999-99");
               
               $(".selecao").click(function(){
                   var Campo= $(this).val();
                   var inserirCampo= '<input type="text" id="'+Campo+'" name= "'+Campo+'">';
                   $("#localCampo").html(inserirCampo);
                   $("#cnpj").mask("99.999.999/9999-99");
                   $("#cpf").mask("999.999.999-99");
                   
               })
            
});

    </script>
<script type="text/javascript">
  function validar(dom,tipo){
  switch(tipo){
    case'num':var regex=/[A-Za-z]/g;break;
    case'text':var regex=/\d/g;break;
  }
  dom.value=dom.value.replace(regex,'');
}
</script>

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


            <form method="post" action="../DAO/ValidarCPFDB.php" ">
            <!-- action="../DAO/ValidarCPFDB.php" -->
            <!-- action="../DAO/CadastroClientesDB.php" -->


<fieldset>
<legend>Cadastro</legend>

    <label>Nome do Cliente<span class="c"> *</span></label>
    <input type="text" name="NM_CLIENTE" required="required" placeholder="Nome" >
    <br>

    CNPJ: <input  selected ="selected" type="radio" required="required" name="DS_CPF_CNPJ" value="cnpj" class="selecao" checked >
    CPF: <input selected ="selected" type="radio" required="required" name="DS_CPF_CNPJ" value="cpf" onkeyup="somenteNumeros(this);" type="text"  ng-model="numero.valor" >
    <span class="c"> *</span>

    </br>
      
      <div id="localCampo">
          <input class="form-control input-sm" id="cnpj" type="text" name="DS_CPF_CNPJ" required="required" ng-model="numero.valor" class="selecao">

      </div> 
  <label>Endereço<span class="c"> *</span></label>
    <input  type="text" name="DS_ENDEREÇO" required="required" placeholder="Endereço">
    <br>

    <label>Telefone<span class="c"> *</span></label>
     <input id="phone" type="tel" name="NR_TELEFONE" maxlength="12" onkeyup="validar(this,'num');" required="required" placeholder="Telefone" class="selecao">
     <br>
   
   
    <label>E-mail <span class="c"> *</span></label>
    <input type="email" name="DS_EMAIL" required="required" placeholder="E-mail">
    <div>
      <button class="btn btn-success">Salvar</button>
      <a href="listarclientes.php" class="btn btn-info">Voltar</a>
    </div>
    </div>
  </fieldset>
  </form>
             </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->
</body>
</html>
