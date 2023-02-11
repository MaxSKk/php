<?php
   
   while (true){
      $answer = (int)readline("В каком году было крещение Руси: 810, 990, 740?\n");
      if ($answer === 990){
         echo "Верно!";
         break;
      } elseif ($answer === 810 || $answer ===740){
         echo "Неверно!";
         break;
      }
   }