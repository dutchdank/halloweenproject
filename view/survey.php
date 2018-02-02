
  <?php

  include '../model/task.php';
    
    $paymentid = date("d-m-Y H:i:s");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="../assets/style.css" type="text/css" rel="stylesheet">                                          <!-- Link to stylesheet -->
    <style type="text/css">
    
    
      
</style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
</head>
    <body background="../images/hallowground.jpg">
    <header>
        <h1>Halloween shop</h1>
    </header>
    <br>
    <br>
    <br>
    
    <?php
        $task = new task();
        ?>
        <table>
        <?php
        $row = $task->fetchAllQuestions(); 
        if (count($row) == 0)
        {
            echo "Er is momenteel geen survey beschikbaar";
        }
        $j = 0;
        foreach($task->fetchAllQuestions() as $row)
        {
            $j = $j + 1;
            echo "<tr><td>";
            echo $row['vraag'];
            echo '</td></tr><tr><td>'; 
            
            for ($i = 1; $i <= 5; $i++)
            {
                echo '<a href="survey.php?q=' . $row["survey_id"] . '&mark=' . $i . '"><img src="../images/sandwich.png" width="80" height="80"></a>';
                echo '<input type="radio" value="$i" name="question_' . $j . '"';
            } 
            echo '</td></tr>';
        }
        ?>
        </table>
    <!--
    <p style="color:white;">Hoe tevreden was u van uw ontbijt?</p>
    <br>
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    <br>
    <p style="color:white;">Was alles voldoende?</p>
    <br>
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    <img src="../images/sandwich.png" width="80" height="80">
    -->
    </body>