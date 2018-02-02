<?php
    include '../model/task.php';
    
    require_once '../vendor/autoload.php';
    
    $paymentid = date("dmHis");
    
    if (isset($_POST['afleveruur'])) {
        $paymentid = date("dmHis");
        echo $paymentid;
        $task = new task();          
        $task->save(ucfirst(strtolower($_POST['vnaam'])),ucfirst(strtolower($_POST['anaam'])),ucfirst(strtolower($_POST['straat'])),$_POST['huisnummer'],$_POST['postcode'],ucfirst(strtolower($_POST['gemeente'])),$_POST['telefoonnummer'],(int)$_POST['enkelontbijt'],(int)$_POST['dubbelontbijt'],(int)$_POST['kinderontbijt'],$_POST['email'],$paymentid,$_POST['afleveruur']);
//        $body = '';
//        $body .= 'Hallo,' . PHP_EOL;
//        $body .= '' . PHP_EOL;
//        $body .= 'U heeft gekozen voor:' . PHP_EOL;
//        $body .= (int)$_POST['enkelontbijt'] . ' x Enkelontbijt' . PHP_EOL;
//        $body .= (int)$_POST['dubbelontbijt'] . ' x Dubbelontbijt' . PHP_EOL;
//        $body .= (int)$_POST['kinderontbijt'] . ' x Kinderontbijt' . PHP_EOL;
//        $body .= '' . PHP_EOL;
//        $body .= $_POST['afleveruur'] . ' Is de tijd schema dat u heeft gekozen!' . PHP_EOL;
//        
//        mail($_POST['email'], 'Hallowinkel Bestelling', $body);
        echo "Email sent";
        
        $id = $task->inserted_id();
        
        $transport = (new Swift_SmtpTransport('smtp.tripolis.com', 10025));
        
        $mailer = new Swift_Mailer($transport);
             $e1 = 8;
             $d1 = 15;
             $k1 = 7;
            
             $e2 = $_POST['enkelontbijt'] * $e1;
             $d2 = $_POST['dubbelontbijt'] * $d1;
             $k2 = $_POST['kinderontbijt'] * $k1;
            
             $final = $e2 + $d2 + $k2;
        $message = (new Swift_Message('Uw Bestelling'))
            ->setFrom(['Hallo@winkel.com' => 'Halloween Shop'])
            ->SetTo([$_POST['email'] => $_POST['vnaam']])
            ->setBody(
            'Hallo, ' . $_POST['vnaam'] . '<br/>'.
            'Uw bestelling is: <br/>' .
            '<br/>' .
            (int)$_POST['enkelontbijt'] . 'x Enkelontbijt <br/>' .
            (int)$_POST['dubbelontbijt'] . 'x Dubbelontbijt <br/>' .
            (int)$_POST['kinderontbijt'] . 'x Kinderontbijt <br/>' .
            '<br/>' .
            'Hierbij het rekeningnummer voor het betalen van het ontbijt: <br/>' .
            '<br/>' .
            'BE24 9731 0362 5538 <br/>' .
            '<br/>' .
            '<br/>' .
            'De tijdstip waar u voor gekozen hebt is: ' . $_POST['afleveruur'] .
            '<br/>' .
            '<br/>' .
            'Uw bevestigingsnummer is: ' . $id . $paymentid .
            '<br/>' .
            '<br/>' .
            '<br/>' .
            
            
            'De totaal kost is: &#8364;' . $final
            

                        
            , 'text/html');
            
        $result = $mailer->send($message);
        
        var_dump($result);        
        
        
    } else {
        echo "Something went wrong";
    }
    
  
?>
<!--<meta http-equiv="refresh" content="5;url=https://halloween.dev/view/survey.php" />


<h1>You are being redirected</h1>
<h2>If the page isn't redirected within 5 seconds, click this link: https://halloween.dev/view/survey.php</h2> --!>

