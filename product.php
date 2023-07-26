<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamp Bookshop Thames</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>
<div class="wrapper">
    <body>
         <?php include 'header.php';?><!-- Using php to link the header into the page -->
        
         <div class="row">
        <div class="leftside">
            <h3>Our Products</h3>
      <p>Lamp books sells a variety of products. We may be labels as a book store but within our store you can find books, dvds, jewelery, gifts, plarks and so much more. If Lampbooks doesnt stock what you are lookng for chances are itt can be ordered in so dont hesitate to ask one of our volunteers.</p>
        </div>
            <?php 
        if(isset($_GET['image'])) {
    $image = $_GET['image'];
        }
?>
        <div class ="rightside">
        
        <div class="card">
  <img src="images/<?php print $image;?>" alt="Adventure Bible" style="width:100%">
  <h1>Adventure Bible</h1>
  <p class="price">$19.99</p>
  <p>Some text about the adventure bible..</p>
  <p><button>Add to Cart</button></p>
</div>
                    
            
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    </div>
</html>
