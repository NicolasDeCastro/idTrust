<?php

$valor=fopen('php://stdin','r');
$novoValor=fopen('php://stdin','r');



//ou somente stdin pode ser usado no fgets

echo"qual o seu sexo?F/M?".PHP_EOL;
$sexo = strtoupper(trim(fgets($valor)));
echo"qual a sua idade".PHP_EOL;
$pessoa=fgets($novoValor);






 if (!is_numeric($pessoa)){
    echo"idade somente numero".PHP_EOL;
 exit();
 }


try{

    if($sexo=="M"){
        if($pessoa>=18 && $pessoa<65){
            echo"você é um ADULTO";
        }elseif($pessoa>=65)
        echo "APOSENTADO";
    }
elseif($pessoa<13)
    echo"Você é CRIANÇA".PHP_EOL;
elseif($pessoa>=13 && $pessoa<=18 )
    print_r( "Você é ADOLECENTE");
elseif($pessoa>18 && $pessoa <60)
    echo"você é ADULTO".PHP_EOL;
elseif($pessoa>=60 && $sexo=="F")
    echo"APOSENTADA".PHP_EOL;
    }catch(Exception $erro){
        echo"infelizmente tem algo errado".PHP_EOL;
    }



/*a) O valor da soma é 57
b) O valor da soma é 69
c) O valor da soma é 79
d) O valor da soma é 93

acredito que a resposta correta seja C), porem estou em duvida sobre oque seria o operador ":=", caso seja somente atribuição , a resposta sera C)
*/

