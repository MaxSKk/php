<?php


while(true){
   $number = (int)readline("Введите номер пальца\n");
   $remainder = $number % 8;

   echo $remainder;

   if($remainder === 1){
      echo "Большой";
      break;
   }elseif ($remainder === 0 || $remainder === 2){
      echo "Указательный";
      break;
   }elseif ($remainder === 3 || $remainder === 7){
      echo "Средний";
      break;
   }elseif ($remainder === 4 || $remainder === 6){
      echo "Безымянный";
      break;
   }elseif ($remainder === 5){
      echo "Мизинец";
      break;
   }
}