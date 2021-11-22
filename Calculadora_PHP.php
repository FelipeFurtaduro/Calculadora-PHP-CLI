<?php

  echo " | - - - Bem vindo a Calculadora PHP! - - - |"."\n";
  do{

    menu:

    echo " | Escolha o a opção do operador a ser usado : |"."\n";
    echo "                                                  "."\n";
    echo " | 1 : Soma (+) |";
    echo " | 2 : Subtração (-) |";
    echo " | 3 : Multiplicação (*) |";
    echo " | 4 : Divisão (%) |";
    echo " | 5 : Sair |". "\n";
    $opcao = readline("Opção desejada: ");
    
    switch ($opcao){

    case 1: 
      $num1 = readline("Escolha o primeiro número: ");
      $num2 = readline("Escolha o segundo número: ");
      $resul = $num1 + $num2; 
      break;

    case 2:
      $num1 = readline("Escolha o primeiro número: ");
      $num2 = readline("Escolha o segundo número: ");
      $resul = $num1 - $num2; 
      break;

    case 3:
      $num1 = readline("Escolha o primeiro número: ");
      $num2 = readline("Escolha o segundo número: ");
      $resul = $num1 * $num2; 
      break;

    case 4:
      $num1 = readline("Escolha o primeiro número: ");
        if($num1 == 0){
          echo "Não é possível efetuar divisões com 0."."\n";
          goto menu;
        }
      $num2 = readline("Escolha o segundo número: ");
        if($num2 == 0){
          echo "Não é possível efetuar divisões com 0."."\n";
          goto menu;
        }
      $resul = $num1 / $num2; 
      break;

    case 5:
      exit;
    
    default:
      echo "Opção errada!"."\n";
      goto menu;
      break;
    }
    echo "Resultado da operação é: $resul"."\n";
  } while ($opcao != 5);

?>
