<?php

    include '../model/task.php';

// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>

    <script type="text/javascript"  src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript"  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link href="../assets/backend.css" type="text/css" rel="stylesheet"> 
    
</head>
<body background="../images/hallowground.jpg">
<script>
$(document).ready(function(){
    $('#myTable').DataTable({
        "lengthMenu": [ 10, 20, 50, 100 ],
        "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Dutch.json"
            }
        } );
});
</script>

   

    <div class="page-header">
        <h1 style="color:white;">Hi, <b><?php echo $_SESSION['username']; ?></b>, Welcome to the backend.</h1>
        <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
    </div>
    
      <!--        
      <ul style="list-style: none;">
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="preorder.php">Bestellen</a></li>
      <li><a href="leveren.php">Waar we leveren</a></li>
      <li><a href="overons.php">Over Ons</a></li>
      <li><a href="map.php">Map</a></li>
      </ul>
      -->
    
        <br/>
        <br/>
        <br/>
        
        <form action="../control/upload.php" method="post" enctype="multipart/form-data" class="backend-form">
        <br/>
            
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
        
        <br/>
        <br/>
        <br/>
        
        <form action="http://maps.google.com/maps" method="get" target="_blank">
            <label for="saddr">Enter Target Destination</label>
            <input type="text" name="saddr" />
            <input type="hidden" name="daddr" value="Veldstraat 46 Rekem, BE 3621"/>
            <input type="submit" value="Get directions" />
        </form>
        <br>

        <br/>
        <br>
        <p><a href="survey.php" class="btn btn-danger">Survey</a></p><p><a href="backsurvey.php" class="btn btn-danger">Back End Survey</a></p>
        
        <?php
        
             echo '<br><br><br><br>';
             echo '<table id="myTable">';
             echo '<thead><tr>';
             echo '<th style="color:white;">' . ' Voornaam ' . '</th>';
             echo '<th style="color:white;">' . ' Achternaam ' . '</th>';
             echo '<th style="color:white;">' . ' Straat ' .  '</th>';
             echo '<th style="color:white;">' . ' Huisnummer ' . '</th>';
             echo '<th style="color:white;">' . ' Postcode ' . '</th>';
             echo '<th style="color:white;">' . ' Gemeente ' . '</th>';
             echo '<th style="color:white;">' . ' Enkel Ontbijt ' . '</th>';
             echo '<th style="color:white;">' . ' Dubbel Ontbijt ' . '</th>';
             echo '<th style="color:white;">' . ' Kinder Ontbijt ' . '</th>';
             echo '<th style="color:white;">' . ' Aflever Uur ' . '</th>';
             echo '</tr></thead>';
        
             $task = new task();
          foreach($task->fetchAllTasks() as $row)
          {
             echo '<tr>';
             echo '<td>'.htmlentities($row['voornaam']).'</td>';
             echo '<td>'.htmlentities($row['achternaam']).'</td>';
             echo '<td>'.htmlentities($row['straat']).'</td>';
             echo '<td>'.htmlentities($row['huisnummer']).'</td>';
             echo '<td>'.htmlentities($row['postcode']).'</td>';
             echo '<td>'.htmlentities($row['gemeente']).'</td>';
             echo '<td>'.htmlentities($row['enkelontbijt']).'</td>';
             echo '<td>'.htmlentities($row['dubbelontbijt']).'</td>';
             echo '<td>'.htmlentities($row['kinderontbijt']).'</td>';
             echo '<td>'.htmlentities($row['afleveruur']).'</td>';
             echo '</tr>';
          }      
          echo '</table>';
        
        
        ?>
        
        
</body>
</html>