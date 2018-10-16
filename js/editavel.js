function printpage()
  {
  window.print()
  }
  
function somenteNomes(num) {
var er = /[^A-Za-z.' '.'á'.'Á'.'é'.'É'.'i'.'Í'.'o'.'Ó'.'u'.'Ú'.'ê'.'Ê'.'ô'.'Ô'.'à'.'è'.'ì'.'ò'.'ù'.'À'.'È'.'Ì'.'Ò'.'Ù'.'ã'.'Ã'.'î'.'â'.'û'.'Â'.'Î'.'Û']/;
er.lastIndex = 0;
var campo = num;
    if (er.test(campo.value)) {
      campo.value = "";
    }
}

function somenteNumeros(num) {
    var er = /[^0-9.]/;
    er.lastIndex = 0;
    var campo = num;
    if (er.test(campo.value)) {
    	campo.value = "";
    }
}


function formatar(mascara, documento){
var i = documento.value.length;
var saida = mascara.substring(0,1);
var texto = mascara.substring(i)
  	if (texto.substring(0,1) != saida){
  		documento.value += texto.substring(0,1);
  	} 
}

 function validar(dom,tipo){
  switch(tipo){
    case'num':var regex=/[A-Za-z]/g;break;
    case'text':var regex=/\d/g;break;
  }
  dom.value=dom.value.replace(regex,'');
}

//Este código é da mascara cpf e cnpj
//Aplica a máscara no campo
//Função para ser utilizada nos eventos do input para formatação dinâmica
function aplica_mascara_cpfcnpj(campo,tammax,teclapres) {
  var tecla = teclapres.keyCode;

  if ((tecla < 48 || tecla > 57) && (tecla < 96 || tecla > 105) && tecla != 46 && tecla != 8) {
    return false;
  }

  var vr = campo.value;
  vr = vr.replace( /\//g, "" );
  vr = vr.replace( /-/g, "" );
  vr = vr.replace( /\./g, "" );
  var tam = vr.length;

  if ( tam <= 2 ) {
    campo.value = vr;
  }
  if ( (tam > 2) && (tam <= 5) ) {
    campo.value = vr.substr( 0, tam - 2 ) + '-' + vr.substr( tam - 2, tam );
  }
  if ( (tam >= 6) && (tam <= 8) ) {
    campo.value = vr.substr( 0, tam - 5 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
  }
  if ( (tam >= 9) && (tam <= 11) ) {
    campo.value = vr.substr( 0, tam - 8 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
  }
  if ( (tam == 12) ) {
    campo.value = vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
  }
  if ( (tam > 12) && (tam <= 14) ) {
    campo.value = vr.substr( 0, tam - 12 ) + '.' + vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
  }
}

//Verifica se CPF ou CGC e encaminha para a devida função, no caso do cpf/cgc estar digitado sem mascara
function verifica_cpf_cnpj(cpf_cnpj) {
  if (cpf_cnpj.length == 11) {
    return(verifica_cpf(cpf_cnpj));
  } else if (cpf_cnpj.length == 14) {
    return(verifica_cnpj(cpf_cnpj));
  } else { 
    return false;
  }
  return true;
}

//Verifica se o número de CPF informado é válido
function verifica_cpf(sequencia) {
  if ( Procura_Str(1,sequencia,'00000000000,11111111111,22222222222,33333333333,44444444444,55555555555,66666666666,77777777777,88888888888,99999999999,00000000191,19100000000') > 0 ) {
    return false;
  }
  seq = sequencia;
  soma = 0;
  multiplicador = 2;
  for (f = seq.length - 3;f >= 0;f--) {
    soma += seq.substring(f,f + 1) * multiplicador;
    multiplicador++;
  }
  resto = soma % 11;
  if (resto == 1 || resto == 0) {
    digito = 0;
  } else {
    digito = 11 - resto;
  }
  if (digito != seq.substring(seq.length - 2,seq.length - 1)) {
    return false;
  }
  soma = 0;
  multiplicador = 2;
  for (f = seq.length - 2;f >= 0;f--) {
    soma += seq.substring(f,f + 1) * multiplicador;
    multiplicador++;
  }
  resto = soma % 11;
  if (resto == 1 || resto == 0) {
    digito = 0;
  } else {
    digito = 11 - resto;
  }
  if (digito != seq.substring(seq.length - 1,seq.length)) {
    return false;
  }
  return true;
}

//Verifica se o número de CNPJ informado é válido
function verifica_cnpj(sequencia) {
  seq = sequencia;
  soma = 0;
  multiplicador = 2;
  for (f = seq.length - 3;f >= 0;f-- ) {
    soma += seq.substring(f,f + 1) * multiplicador;
    if ( multiplicador < 9 ) {
      multiplicador++;
    } else {
      multiplicador = 2;
    }
  }
  resto = soma % 11;
  if (resto == 1 || resto == 0) {
    digito = 0;
  } else {
    digito = 11 - resto;
  }
  if (digito != seq.substring(seq.length - 2,seq.length - 1)) {
    return false;
  }

  soma = 0;
  multiplicador = 2;
  for (f = seq.length - 2;f >= 0;f--) {
    soma += seq.substring(f,f + 1) * multiplicador;
    if (multiplicador < 9) {
      multiplicador++;
    } else {
      multiplicador = 2;
    }
  }
  resto = soma % 11;
  if (resto == 1 || resto == 0) {
    digito = 0;
  } else {
    digito = 11 - resto;
  }
  if (digito != seq.substring(seq.length - 1,seq.length)) {
    return false;
  }
  return true;
}

//Procura uma string dentro de outra string
function Procura_Str(param0,param1,param2) {
  for (a = param0 - 1;a < param1.length;a++) {
    for (b = 1;b < param1.length;b++) {
      if (param2 == param1.substring(b - 1,b + param2.length - 1)) {
        return a;
      }
    }
  }
  return 0;
}

//Retira a máscara do valor de cpf_cnpj
function retira_mascara(cpf_cnpj) {
  return cpf_cnpj.replace(/\./g,'').replace(/-/g,'').replace(/\//g,'')
}