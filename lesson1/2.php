<?php
   $allTime = 0;

   $name = readline("Как вас зовут?\n");
   $greetings = "$name,  сегодня у вас запланировано 3 приоритетных задачи на день:\n";

   $task = readline ("Какая задача стоит перед вами сегодня?\n");
   $time = readline ("Сколько примерно времени это займёт?\n");

   $string1 = "- $task ($time ч)\n";
   $allTime += $time;

   $task = readline ("Какая задача стоит перед вами сегодня?\n");
   $time = readline ("Сколько примерно времени это займёт?\n");

   $string2 = "- $task ($time ч)\n";
   $allTime += $time;

   $task = readline ("Какая задача стоит перед вами сегодня?\n");
   $time = readline ("Сколько примерно времени это займёт?\n");

   $string3 = "- $task ($time ч)\n";
   $allTime += $time;

   $total = "Примерное время выполнения плана = $allTime ч\n";
   
   echo ($greetings . $string1 . $string2 . $string3 . $total);