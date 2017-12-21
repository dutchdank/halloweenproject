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

</head>
<body>
<script>
$(document).ready(function(){
    $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Dutch.json"
            }
        } );
});
</script>

   

    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to the backend.</h1>
        <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
    </div>
    
        
        <ul style="list-style: none;">
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="preorder.php">Bestellen</a></li>
      <li><a href="leveren.php">Waar we leveren</a></li>
      <li><a href="overons.php">Over Ons</a></li>
      <li><a href="map.php">Map</a></li>
      </ul>
    
        <br>
        <br>
        <br>
        <?php
        
             echo '<br><br><br><br>';
             echo '<table id="myTable">';
             echo '<thead><tr>';
             echo '<th>' . ' Voornaam ' . '</th>';
             echo '<th>' . ' Achternaam ' . '</th>';
             echo '<th>' . ' Straat ' .  '</th>';
             echo '<th>' . ' Huisnummer ' . '</th>';
             echo '<th>' . ' Postcode ' . '</th>';
             echo '<th>' . ' Gemeente ' . '</th>';
             echo '<th>' . ' Enkel Ontbijt ' . '</th>';
             echo '<th>' . ' Dubbel Ontbijt ' . '</th>';
             echo '<th>' . ' Kinder Ontbijt ' . '</th>';
             echo '<th>' . ' Aflever Uur ' . '</th>';
             echo '</tr></thead>';
        
             $task = new task();
          foreach($task->fetchAllTasks() as $row)
          {
             echo '<tr>';
             echo '<td>'.$row['voornaam'].'</td>';
             echo '<td>'.$row['achternaam'].'</td>';
             echo '<td>'.$row['straat'].'</td>';
             echo '<td>'.$row['huisnummer'].'</td>';
             echo '<td>'.$row['postcode'].'</td>';
             echo '<td>'.$row['gemeente'].'</td>';
             echo '<td>'.$row['enkelontbijt'].'</td>';
             echo '<td>'.$row['dubbelontbijt'].'</td>';
             echo '<td>'.$row['kinderontbijt'].'</td>';
             echo '<td>'.$row['afleveruur'].'</td>';
             echo '</tr>';
          }      
          echo '</table>';
        
        ?>
</body>
</html>