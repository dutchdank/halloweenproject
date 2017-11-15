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
        <li><a href="index.php">Home</a></li>
        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a class="active" href="leveren.php">Waar we leveren</a></li>
        <li><a href="overons.php">Over Ons</a></li>
        <li><a href="map.php">Map</a></li>
    </ul>

    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
    
    <article>
        <p>Rekem</p>
        <p>Lanaken</p>
        <p>Maasmechelen</p>
        <p>Overig</p>
        </article>
</div>
</body>
</html>