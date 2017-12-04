<?php
    include '../model/task.php';
    
    if (isset($_POST['submit'])) {
        //$task = new task();          
        //$task->save(ucfirst(strtolower($_POST['vnaam'])),ucfirst(strtolower($_POST['anaam'])),ucfirst(strtolower($_POST['straat'])),$_POST['huisnummer'],$_POST['postcode'],ucfirst(strtolower($_POST['gemeente'])),$_POST['telefoonnummer'],$_POST['enkelontbijt'],$_POST['dubbelontbijt'],$_POST['kinderontbijt']);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <link href="../assets/style.css" type="text/css" rel="stylesheet">                                          <!-- Link to stylesheet -->

        <style>
        {
        box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 50%; /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          //window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
<header>
    <h1>Halloween shop</h1>
</header>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a class="active" href="preorder.php">Bestellen</a></li>
  <li><a href="leveren.php">Waar we leveren</a></li>
  <li><a href="overons.php">Over Ons</a></li>
  <li><a href="map.php">Map</a></li>
  </ul>
  
  <div style="margin-left:15%;padding:1px 16px;height:1000px;">
  <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Enkel Ontbijt</h2>
        <br>
        <p><h4>1x Sandwich</h4></p>
        <p><h4>1x Harde Pistolet</h4></p>
        <p><h4>1x Croissant</h4></p>
        <p><h4>1x Choco</h4></p>
        <p><h4>1x Jam</h4></p>
        <p><h4>1x Fruit</h4></p>
        <p><h4>1x Gebak</h4></p>
        <p><h4>1x Siroop</h4></p>
        <p><h4>1x Doekje</h4></p>
        <p><h4>1x Schotel Vlees Enkel</h4></p>
        <p><h4>1x Schotel Kaas Enkel</h4></p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Dubbel Ontbijt</h2>
        <br>
        <p><h4>2x Sandwich</h4></p>
        <p><h4>2x Harde Pistolet</h4></p>
        <p><h4>2x Croissant</h4></p>
        <p><h4>1x Choco</h4></p>
        <p><h4>2x Jam</h4></p>
        <p><h4>2x Fruit</h4></p>
        <p><h4>2x Gebak</h4></p>
        <p><h4>1x Siroop</h4></p>
        <p><h4>2x Doekje</h4></p>
        <p><h4>1x Schotel Vlees Dubbel</h4></p>
        <p><h4>1x Schotel Kaas Dubbel</h4></p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Kinder Ontbijt</h2>
        <br>
        <p><h4>2x Sandwich</h4></p>
        <p><h4>2x Harde Pistolet</h4></p>
        <p><h4>2x Croissant</h4></p>
        <p><h4>1x Choco</h4></p>
        <p><h4>2x Jam</h4></p>
        <p><h4>2x Fruit</h4></p>
        <p><h4>2x Gebak</h4></p>
        <p><h4>1x Siroop</h4></p>
        <p><h4> </h4></p>
        <p><h4> </h4></p>
        <p><h4> </h4></p>
  </div>
</div>
  <br>
  <br>
  <br>
  <br>
  <form action="payment.php" method="post">
    <input type="hidden" name="vnaam" id="vnaam" value="<?=$_POST['vnaam']?>">
    <p>Enkel Ontbijt <input type="number" name="enkelontbijt" id="enkelontbijt" value="0" min="0" placeholder="0" step="1" /> x &#8364;8,-</p>
    <input type="hidden" name="anaam" id="anaam" value="<?=$_POST['anaam']?>">
    <p>Dubbel Ontbijt <input type="number" name="dubbelontbijt" name="dubbelontbijt" value="0" min="0" placeholder="0" step="1" /> x &#8364;15,-</p>
    <input type="hidden" name="straat" id="straat" value="<?=$_POST['straat']?>">
    <p>Kinder Ontbijt <input type="number" name="kinderontbijt" id="kinderontbijt" value="0" min="0" placeholder="0" step="1" /> x &#8364;7,-</p>
    <input type="hidden" name="huisnummer" id="huisnummer" value="<?=$_POST['huisnummer']?>">
    <input type="hidden" name="postcode" id="postcode" value="<?=$_POST['postcode']?>">
    <input type="hidden" name="gemeente" id="gemeente" value="<?=$_POST['gemeente']?>">
    <input type="hidden" name="telefoonnummer" id="telefoonnummer" value="<?=$_POST['telefoonnummer']?>">
    <input type="hidden" name="email" id="email" value="<?=$_POST['email']?>">
    <? $paymentid = date("d-m-Y H:i:s"); ?>
    <input type="submit" name="submit" value="Opslaan">
  </form>
</body>
</html>