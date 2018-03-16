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
        <script >
            $(document).ready(function(){
               $("#date").mask("99/99/9999");
               $("#phone").mask("(99) 99999-9999");
               $("#tin").mask("99-9999999");
               $("#ssn").mask("999-99-9999");
               $("#cnpj").mask("99.999.999/9999-99");
               
               $(".selecao").click(function(){
                   var Campo= $(this).val();
                   var inserirCampo= '<input type="text" id="'+Campo+'" name= "'+Campo+'">';
                   $("#localCampo").html(inserirCampo);
                   $("#cnpj").mask("99.999.999/9999-99");
                   $("#cpf").mask("999.999.999-99");
                   
               })
            
});

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
 
    function somenteNomes(num) {
        var er = /[^a-z.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>
	<title>Atualizar Clientes</title>


	
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
  
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <script type="text/javascript" scr="../js/bootstrap.min.js">
  </script>


  <style type="text/css">
    .a{
      font-size: 70px;
      height: 10%;
      width: 35%;
    }
  </style>

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
    <label>cpf ou cnpj</label>
     <input type="radio" selected ="selected" name="DS_CPF_CNPJ" required="required" placeholder="Diga o cnpj" checked  />
     <inputtype="radio" selected ="selected" name="DS_CPF_CNPJ" required="required" placeholder="Diga o cpf" />
    </br>
      
      <div id="localCampo">
          <input type="number" name="DS_CPF_CNPJ" required="required" class="selecao">

      </div> 
    <input type="text" name="NM_CLIENTE" required="required" placeholder="diga o nome..." value="<?php echo $nome;?>"/>
    <br>
    <label>Endereço</label>
    <input type="text" name="DS_ENDEREÇO" required="required" placeholder="Diga o Endereço" value="<?php echo $endereço;?>"/>
    <br>
    <label>Telefone</label>
    <input id="phone" class="form-control input-sm" type="tel" name="NR_TELEFONE" required="required" placeholder="Diga o Telefone" ng-model="numero.valor" value="<?php echo $telefone;?>"/>
    <br>
    <label>E-mail</label>
    <input type="email" name="DS_EMAIL" required="required" placeholder="Diga o Email" value="<?php echo $email;?>"/>
    <input type="tel" name="NR_TELEFONE" required="required" placeholder="Diga o Telefone" value="<?php echo $telefone;?>"/>
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