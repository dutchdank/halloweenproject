<?php
  
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
.center {
 text-align: center;   
}
.merge-bottom-input {
  width: 67px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.merge-top-left-button {
  border-top-left-radius: 0;
}
.merge-top-right-button {
  border-top-right-radius: 0;
}
 /* Styling for columns */
.column {
    float: left;
    width: 33%;
    padding: 10px;
    height: 35%;
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
  <li><a class="active" href="bestellen.php">Bestellen</a></li>
  <li><a href="leveren.php">Waar we leveren</a></li>
  <li><a href="overons.php">Over Ons</a></li>
  <li><a href="map.php">Map</a></li>
  </ul>
  
<div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Een Persoons Ontbijt</h2>
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
        <div class="col-sm-2">
      <label>Een Persoonsontbijt <br> &#8364;8,-</label> <!-- purely semantic -->
      <div class="form-control input-sm center merge-bottom-input" name="eenontbijt">0</div>
      <input type=hidden name="eenontbijt" id="eenontbijt"></div>

      <div class="btn-group btn-block" role="group" aria-label="plus-minus">
        <button type="button" class="btn btn-sm btn-danger minus-button merge-top-left-button" disabled="disabled"><span class="glyphicon glyphicon-minus"></span></button>
        <button type="button" class="btn btn-sm btn-success plus-button merge-top-right-button"><span class="glyphicon glyphicon-plus"></span></button>
      </div><!-- end button group -->
    </div> <!-- end column -->
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Twee Persoons Ontbijt</h2>
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
        <div class="col-sm-2">
      <label>Twee Persoonsontbijt <br> &#8364;15,-</label>
      <div class="form-control input-sm center merge-bottom-input" name="tweeontbijt">0</div>
      <input type=hidden name="kinderontbijt" id="tweeontbijt"></div>

      <div class="btn-group btn-block" role="group" aria-label="plus-minus">
        <button type="button" class="btn btn-sm btn-danger minus-button merge-top-left-button" disabled="disabled"><span class="glyphicon glyphicon-minus"></span></button>
        <button type="button" class="btn btn-sm btn-success plus-button merge-top-right-button"><span class="glyphicon glyphicon-plus"></span></button>
      </div><!-- end button group -->
    </div> <!-- end column -->
  </div>
  <div class="column" style="background-color:#aaa;">
    <h2>Een Kinder Ontbijt</h2>
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
    <div class="col-sm-2">
      <label>Een Kinderontbijt <br> &#8364;7,-</label>
      <div class="form-control input-sm center merge-bottom-input" name="kinderontbijt">0</div>
      <input type=hidden name="kinderontbijt" id="kinderontbijt"></div>

      <div class="btn-group btn-block" role="group" aria-label="plus-minus">
        <button type="button" class="btn btn-sm btn-danger minus-button merge-top-left-button" disabled="disabled"><span class="glyphicon glyphicon-minus"></span></button>
        <button type="button" class="btn btn-sm btn-success plus-button merge-top-right-button"><span class="glyphicon glyphicon-plus"></span></button>
      </div><!-- end button group -->
    </div> <!-- end column -->
  </div>
</div>

<script type="text/javascript">
    $(document).ready( () => {
  $('.minus-button').click( (e) => {
    
    // change this to whatever minimum you'd like
    const minValue = 0

    const currentInput = $(e.currentTarget).parent().prev()[0];

    let minusInputValue = $(currentInput).html();

    if (minusInputValue > minValue) {
      minusInputValue --;
      $($(e.currentTarget).next()).removeAttr('disabled');
      $(currentInput).html(minusInputValue);

      if (minusInputValue <= minValue) {
        $(e.currentTarget).attr('disabled', 'disabled');
      }
    }
  });

  $('.plus-button').click( (e) => {
      while (0) {}
    const maxValue = 50

    const currentInput = $(e.currentTarget).parent().prev()[0];

    let plusInputValue = $(currentInput).html();

    if (plusInputValue < maxValue) {
      plusInputValue ++;
      $($(e.currentTarget).prev()[0]).removeAttr('disabled');
      $(currentInput).html(plusInputValue);

      if (plusInputValue >= maxValue) {
        $(e.currentTarget).attr('disabled', 'disabled');
      }
    }
  });
});
</script>
</body>
</html>