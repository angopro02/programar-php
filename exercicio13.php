<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>13.João Papo-de-Pescador, homem de bem, comprou um microcomputador 
    para controlar o rendimento diário de seu trabalho. Toda vez que ele traz um 
    peso de peixes maior que o estabelecido pelo regulamento de pesca do estado 
    de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo 
    excedente. João precisa que você faça um programa que leia a variável peso 
    (peso de peixes) e calcule o excesso. Gravar na variável excesso a quantidade 
    de quilos além do limite e na variável multa o valor da multa que João deverá 
    pagar. Imprima os dados do script com as mensagens adequadas.</h1>

    <form action="exercicio.13"  method="get">
        Digite o peso em Kg:
        <input type="number"  name="peso">
        <br></br>
        <input type="submit"   value="calcular"/>    
    </form>
    <?php
      
      $peso = $_GET["peso"]
       
      if($peso <= 50){
        echo "Sem TAXA...";
    }else{
        $extra = ($peso - 50)* 4
        echo"o valor da multa é:" .$extra;
    }
    
    
    ?>
</body>
</html>