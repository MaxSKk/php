<?php
   $allTasks = (int)readline("Сколько задач у вас запланировано?\n");
   $allTime = 0;
   $list = "";

   for($i = 0; $i < $allTasks; $i++){
      $task = readline("Какая задача стоит перед вами сегодня?\n");
      $time = (int)readline("Сколько примерно времени это займёт?\n");

      $string = "- $task ($time ч)\n";
      $list = $list . $string;
      $allTime += $time;
   }

   $total = "Примерное время выполнения плана = $allTime ч\n";
   echo $list . $total;
   

   
   