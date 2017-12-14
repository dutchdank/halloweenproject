<? 
    include '../model/task.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="../assets/style.css" type="text/css" rel="stylesheet">                                          <!-- Link to stylesheet -->
        
<style>
    .button {
    background-color: orange;
    border: none;
    color: black;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
</style>
    
</head>
<body>

<header>
    <h1>Halloween shop</h1>
</header>

    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="preorder.php">Bestellen</a></li>
        <li><a href="leveren.php">Waar we leveren</a></li>
        <li><a href="overons.php">Over Ons</a></li>
        <li><a href="map.php">Map</a></li>
    </ul>

    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <br>
    <br>
    <br>
        <form action="payment.php" method="post">
            <button class="button 1" type="submit" name="afleveruur" id="afleveruur" value="7 - 8">Tussen 7:00 en 8:00</button>
            <br>
            <button class="button 2" type="submit" name="afleveruur" id="afleveruur" value="8 - 9">Tussen 8:00 en 9:00</button>
            <br>
            <button class="button 3" type="submit" name="afleveruur" id="afleveruur" value="9 - 10">Tussen 9:00 en 10:00</button>
            <br>
            <button class="button 4" type="submit" name="afleveruur" id="afleveruur" value="10 - 11">Tussen 10:00 en 11:00</button>
            <br>
            <button class="button 5" type="submit" name="afleveruur" id="afleveruur" value="11 - 12">Tussen 11:00 en 12:00</button>
            <input type="hidden" name="huisnummer" id="huisnummer" value="<?=$_POST['huisnummer']?>">
            <input type="hidden" name="postcode" id="postcode" value="<?=$_POST['postcode']?>">
            <input type="hidden" name="gemeente" id="gemeente" value="<?=$_POST['gemeente']?>">
            <input type="hidden" name="telefoonnummer" id="telefoonnummer" value="<?=$_POST['telefoonnummer']?>">
            <input type="hidden" name="email" id="email" value="<?=$_POST['email']?>">
            <? $paymentid = date("d-m-Y H:i:s"); ?>
            <input type="hidden" name="straat" id="straat" value="<?=$_POST['straat']?>">
            <input type="hidden" name="anaam" id="anaam" value="<?=$_POST['anaam']?>">
            <input type="hidden" name="vnaam" id="vnaam" value="<?=$_POST['vnaam']?>">
            <input type="hidden" name="enkelontbijt" id="enkelontbijt" value="<?=$_POST['enkelontbijt']?>">
            <input type="hidden" name="dubbelontbijt" id="dubbelontbijt" value="<?=$_POST['dubbelontbijt']?>">
            <input type="hidden" name="kinderontbijt" id="kinderontbijt" value="<?=$_POST['kinderontbijt']?>">
        </form>
</div>
</body>
</html>