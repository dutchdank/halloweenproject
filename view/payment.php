<?php
    include '../model/task.php';
    
    $paymentid = date("d-m-Y H:i:s");
    
    if (isset($_POST['submit'])) {
        $paymentid = date("d-m-Y H:i:s");
        echo $paymentid;
        $task = new task();          
        $task->save(ucfirst(strtolower($_POST['vnaam'])),ucfirst(strtolower($_POST['anaam'])),ucfirst(strtolower($_POST['straat'])),$_POST['huisnummer'],$_POST['postcode'],ucfirst(strtolower($_POST['gemeente'])),$_POST['telefoonnummer'],$_POST['enkelontbijt'],$_POST['dubbelontbijt'],$_POST['kinderontbijt'],$_POST['email'],$paymentid);
    }

  echo "Email sent";
?>
