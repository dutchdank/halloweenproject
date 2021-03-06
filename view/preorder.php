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
            function checkSpcialChar(event){
                if(!((event.keyCode >= 65) && (event.keyCode <= 90) || (event.keyCode >= 97) && (event.keyCode <= 122) || (event.keyCode >= 48) && (event.keyCode <= 57))){
                    event.returnValue = false;
                    return;
                }
                event.returnValue = true;
            }
            function key(event)
            {
                console.log(event.keyCode);
            }

            $(function () {
                $('.maskOnlyLetters').inputmask({ regex: "[a-zA-Z]*" });
                $('.maskNoSpecials').inputmask({ regex: "[a-zA-Z0-9]*" });
                $('.maskNoSpecialsAndSpace').inputmask({ regex: "[a-zA-Z\\s]*" });
                $('.maskZipcode').inputmask({ regex:"[1-9]{4}[\\s]{0,1}[A-Z]{0,2}"});
                $('.maskNumber').inputmask({ regex: "[0-9]*" });

            })
    </script>
</head>
    <body oncontextmenu="return false;" background="../images/hallowground.jpg">
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
    
        <br>
        <br>
        <br>
        
        <header><h1 style="color:white;">Hallowinkel Bestellen</h1></header>
        <br>
        <br>
        
        <form action="bestellen.php" method="post">
            <table align="center">
                <tr>
                    <td align="left" style="color:white;">Voornaam*: </td>
                    <td align="right"><input type="text" style="text-transform: capitalize;" class="maskOnlyLetters" name="vnaam" maxlength="25" required></td>
                </tr><tr>
                    <td align="left" style="color:white;">Achternaam*: </td>
                    <td align="right"><input type="text" style="text-transform: capitalize;" class="maskOnlyLetters" name="anaam" maxlength="25" required onkeypress="return checkSpcialChar(event)"></td>
                </tr><tr>
                    <td align="left" style="color:white;">Straat*: </td>
                    <td align="right"><input type="text" style="text-transform: capitalize;" class="maskNoSpecialsAndSpace" name="straat" maxlength="25" required onkeypress="return checkSpcialChar(event) pattern="[a-zA-Z0-9]+""></td>
                </tr><tr>
                    <td align="left" style="color:white;">Huisnummer*: </td>
                    <td align="right"><input type="number" name="huisnummer" class="maskNumber" required onkeypress="return checkSpcialChar(event)"></td>
                </tr><tr>
                    <td align="left" style="color:white;">Postcode*: </td>
                    <td align="right"><input type="text" style="text-transform: capitalize;" class="maskZipcode" name="postcode" minlength="4" required maxlength="7"></td>
                </tr><tr>
                    <td align="left" style="color:white;">Gemeente*: </td>
                    <td align="right"><input type="text" style="text-transform: capitalize;" class="maskOnlyLetters" maxlength="20" name="gemeente" required onkeypress="return checkSpcialChar(event)" onkeyup="key(event)"></td>
                </tr><tr>
                <td align="left" style="color:white;">Telefoonnummer*: </td>
                    <td align="right"><input type="number" name="telefoonnummer" class="maskNumber" required onkeypress="return checkSpcialChar(event)"></td>
                </tr><tr>
                <td align="left" style="color:white;">Email*: </td>
                    <td align="right"><input type="text" style="text-transform: capitalize;" maxlength="35" name="email" required></td>
                </tr><tr>                
                <td align="left"><input type="submit" name="submit" value="Opslaan"></td>
            </table>
        </form>
    </body>
</html>