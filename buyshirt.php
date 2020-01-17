<?php require 'dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Supreme store - Buy</title>
</head>
<body>
    <?php 

$id = $_GET['shirt'];

try{
    $query = 'SELECT * FROM tshirts WHERE id = ' . $id;
    $statement = $connection->query($query);
} catch (PDOException $e){
    echo 'Fout bij SQL query:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
}
    
?>
<div class="container-buy">
<div class="wrapper-buy">
    <div class="content-left">
<?php
    foreach ($statement as $row) {
        echo '<img class="afbeelding-buy" src="images/' . $row['afbeelding'] . '">';
    ?> 
    </div> 
    <div class="content-right"> 
    <h1 id="bedankt" class="bedankt">Bedankt uw bestelling is onderweg!</h1>
    <?php
        echo '<div class="product-buy">' . $row['product'] . '</div>';
        echo '<div class="beschrijving-buy">' . $row['beschrijving'] . '</div>';
        echo '<div class="prijs-buy">€' . $row['prijs'] . '</div>'; 
    ?>  
        <div onClick="show()" class="buybutton-buy">Buy</div></a>
    <?php
    }    
    ?>
</div>
</div>
</div>
<script type="text/javascript">
    function show() {
        document.getElementById('bedankt').style.display = 'block';
    }
</script>
</body>
</html>