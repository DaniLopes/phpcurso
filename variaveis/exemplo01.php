<?php
//tipos basicos
$nome = "Dani";
$anoNasc = new DateTime();
$salario = 5500.99;
$bloq = false;

//variáveis pré definidas

//$nome = (int)$_GET["a"];

//var_dump($nome);
//$ip = $_SERVER["REMOTE_ADDR"]; //IP DO PROVEDOR DE ACESSO.
$ip = $_SERVER["SCRIPT_NAME"]; //LOG DE ACESSO.
echo $ip;


exit();
//tipos compostos

$frutas = array("abacaxi","laranja","manga","apple");


//var_dump($anoNasc);


//tipos especiais
$arquivo = fopen("exemplo01.php","r");
//var_dump($arquivo);
$nulo = NULL; //AUSENCIA DE VALOR //VAZIO FOI INICIADO mas já foi reservado um espaço na memoria.

var_dump($nulo);

exit;
$nome = "Dani";


echo $nome." nasceu no ano de". $anoNasc;
//unset($anoNasc);

if (isset($anoNasc)){

    echo $anoNasc;
}else{
    echo "nao existe";
}




?>