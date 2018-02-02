<?php

      include '../model/task.php';

      if (isset($_POST['question'])) {
        $task = new task();          
        $visible = 0;
        if (isset($_POST['visible']))
            $visible = $_POST['visible'];
            
        $task->saveq($_POST['vraag'], $visible);
      }
      
      header('Location:backsurvey.php')
      
?>
