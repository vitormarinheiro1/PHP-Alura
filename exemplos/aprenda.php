<?php

/*

Os principais (mas não são os únicos) e mais comuns operadores lógicos no PHP são: AND (&&), OR (||) e NOT (!).

== (igual a)
=== (idêntico a)
!= (diferente de)
<> (diferente de)
!== (não idêntico a)
> (maior que)
>= (maior ou igual a)
< (menor que)
<= (menor ou igual a)
*/

$a = '1';
$b = 1;

$igual = $a == $b; // A variável $igual será *true*, pois o PHP vai realizar algumas conversões de tipos
$identico = $a === $b; // A variável $identico será *false*, pois os tipos são diferentes.
$diferente = $a != $b; // A variável $diferente será *false*, pois o PHP vai realizar a conversão de tipo e comparar apenas o valor, e 1 não é diferente de 1.
$naoIdentico = $a !== $b; // A variável $naoIdentico será *true*, pois o texto '1' é não é idêntico ao número 1, ou seja, os tipos são diferentes.

// switch (expressão) {
//     case valor1:
//        // código a ser executado se a expressão for igual a valor1
//        break;
//     case valor2:
//        // código a ser executado se a expressão for igual a valor2
//        break;
//     case valor3:
//        // código a ser executado se a expressão for igual a valor3
//        break;
//     ...
//     default:
//        // código a ser executado se a expressão não for igual a nenhum valor
//        break;
//  }


$dia = 3;

switch ($dia) {
   case 1:
      $nomeDia = "domingo";
      break;
   case 2:
      $nomeDia = "segunda-feira";
      break;
   case 3:
      $nomeDia = "terça-feira";
      break;
   case 4:
      $nomeDia = "quarta-feira";
      break;
   case 5:
      $nomeDia = "quinta-feira";
      break;
   case 6:
      $nomeDia = "sexta-feira";
      break;
   case 7:
      $nomeDia = "sábado";
      break;
   default:
      $nomeDia = "Dia inválido";
      break;
}

echo "O dia $dia é $nomeDia";

// Operador Ternário
// $resultado = $expressao1 ? $expressao2 : $expressao3;