<?php
    include '../model/task.php';
    
    $paymentid = date("d-m-Y H:i:s");
    
    if (isset($_POST['submit'])) {
        $paymentid = date("d-m-Y H:i:s");
        echo $paymentid;
        $task = new task();          
        $task->save(ucfirst(strtolower($_POST['vnaam'])),ucfirst(strtolower($_POST['anaam'])),ucfirst(strtolower($_POST['straat'])),$_POST['huisnummer'],$_POST['postcode'],ucfirst(strtolower($_POST['gemeente'])),$_POST['telefoonnummer'],(int)$_POST['enkelontbijt'],(int)$_POST['dubbelontbijt'],(int)$_POST['kinderontbijt'],$_POST['email'],$paymentid);
        //$task->email($email);
        $body = '';
        $body .= 'Hallo,' . PHP_EOL;
        $body .= '' . PHP_EOL;
        $body .= 'Je hebt gekozen voor:' . PHP_EOL;
        $body .= (int)$_POST['enkelontbijt'] . ' x Enkelontbijt' . PHP_EOL;
        $body .= (int)$_POST['dubbelontbijt'] . ' x Dubbelontbijt' . PHP_EOL;
        $body .= (int)$_POST['kinderontbijt'] . ' x Kinderontbijt' . PHP_EOL;
        
        mail($_POST['email'], 'Hallowinkel Bestelling', $body);
    }
    
  echo "Email sent";
?>
