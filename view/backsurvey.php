
  <?php
  
  include '../model/task.php';
    
    $paymentid = date("d-m-Y H:i:s");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (ISSET($_GET['q']))
        {
        $task = new task();
        $task->changequestions($_GET['q'], $_GET['waarde']);
        }

}
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
          
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="../assets/style.css" type="text/css" rel="stylesheet">  
                                              <!-- Link to stylesheet -->
    <style type="text/css">
    
    
      
</style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
</head>
    <body background="../images/hallowground.jpg">
    <div id="container">
    <div class="row">
    <div class="col-lg-12">
         <h1>Halloween shop</h1>
    </div></div>
    <a href="welcome.php">Backend</a>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-9">
         <?php
        $task = new task();
        ?>
        <table>
        <?php
        $row = $task->fetchAllQuestionsWithStatus();
        echo "Aantal vragen in de database: " . count($row);
        foreach($task->fetchAllQuestionsWithStatus() as $row)
        {
            echo "<tr><td  style='padding:10px;'>";
            echo $row['vraag'];
            echo '</td>'; 
            if ($row['visible'] == 1)
            {
                echo '<td style="padding:10px;"><a href="backsurvey.php?q=' . $row["survey_id"]. '&waarde=' .$row["visible"] . '" style="color:black;" class="btn btn-danger"  >Verwijderen</a>';
            }
            else
            {
                echo '<td style="padding:10px;"><a href="backsurvey.php?q=' . $row["survey_id"]. '&waarde=' .$row["visible"] . '"   style="color:black;" class="btn btn-success"  >Weergeven</a>';
            }
            
            echo '</td></tr>';
        }
        ?>
        </table>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Nieuwe vraag toevoegen:
                </div>
                <div class="panel-body">
            <form action="gratitude.php" method="POST">
            <div class="wrapper">
            <label for="vraag" style="color:black;">Vraag:</label>
            <input type="text" name="vraag" />
            </div>
            <div class="wrapper">
            <label style="color:black;">Weergeven</label><input type="checkbox" name="visible" value="1">Weergeven</input>
            <input type="submit" name="question" value="Toevoegen" class="btn btn-primary"/></div>
            </div>
            </form>
                </div>
            </div>

        </div>
    </div>
    
   
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
    </div>
    </body>