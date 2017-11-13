<?php
  
?>

<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
<title>
    
</title>
</head>
<body>

<div class="container">

<header>
    <h1>Halloween shop</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a href="leveren.php">Waar we leveren</a></li>
        <li><a href="overons.php">Over Ons</a></li>
        <li><a href="map.php">Map</a></li>
    </ul>
</nav>

<iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCSYCOAyFFCNxrR8_nATUtT_mt0PbXBrRY
    &q=Veldstraat+46,Rekem" allowfullscreen>
</iframe>

<footer>Copyright &copy; Halloweenshop.nl</footer>
</div>
</body>
</html>