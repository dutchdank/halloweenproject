<?php
  
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #e07d0d;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

</style>
<title>
    
</title>
</head>
<body>

<header>
    <h1>Halloween shop</h1>
</header>

    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a href="leveren.php">Waar we leveren</a></li>
        <li><a href="overons.php">Over Ons</a></li>
        <li><a href="map.php">Map</a></li>
    </ul>

    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
    
    <article>
        <h2>Welkom bij Halloween Shop!</h2>
        <p>Deze maand voor halloween hebben wij een actie waarbij we ook aan # zullen bezorgen.</p>
        <p>Onze uren voor 2017 zijn:</p>
    

        <p><h3>Tussen 7:00 en 8:00</h3></p>
        <p><h3>Tussen 8:00 en 9:00</h3></p>
        <p><h3>Tussen 9:00 en 10:00</h3></p>
        <p><h3>Tussen 10:00 en 11:00</h3></p>
        <p><h3>Tussen 11:00 en 12:00</h3></p>

    </article>
</div>
</body>
</html>