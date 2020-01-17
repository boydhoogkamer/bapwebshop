<?php require 'dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Supreme Store - Home</title>
</head>
<body>
<section class="section1">
    <div class="content">
    <a href="#Shirts"><img class="supreme" src="images/supreme.jpg" alt="Supreme logo"></a>
<div class="backgroundvid__div">
            <video class="backgroundvid" src="images/supremevideo.mp4" muted autoplay loop></video>
        </div>
    </div>
</section>
<section class="section3" id="Shirts">
<div class="wrapper">
    <?php 

try{
    $query = "SELECT * FROM tshirts";
    $statement = $connection->query($query);
} catch (PDOException $e){
    echo 'Fout bij SQL query:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
}

    foreach ($statement as $row) {
        echo '<div class="container container' . $row['id'] . '"><div class="product">' . $row['product'] . '</div>';
        echo '<img class="afbeelding" src="images/' . $row['afbeelding'] . '">';
        echo '<div class="prijs">€' . $row['prijs'] . '</div>'; 
    ?>
        <a href="buyshirt.php?shirt=<?php echo $row['id'] ?>"><div class="buybutton">Buy</div></a>
    </div>
    <?php
    }
    ?>
</div>
</section>
</body>
</html>