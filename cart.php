
<?php 
if (isset($_POST['submit'])) {
    foreach($_POST['quantity'] as $key => $val) {
        if($val==0) {
            unset($_SESSION['cart'][$key]);
        }else{
            $_SESSION['cart'][$key]['quantity']=$val;
        }
    }
}
?> 
  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamp Bookshop Thames</title>
    <link href="cart.css" rel="stylesheet" type="text/css">
     
</head>
<div class="wrapper">
    <body>
        <?php 
        //<!-- Using php to link the header into the page -->

// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
    $name = $_SESSION['name'];
     if ($_SESSION['name'] == 'admin'){
        include 'adminheader.php';
    }
    else{
    include 'loginheader.php';}
}
        else{
        include 'header.php';}
         ?>
        
         <div class="row">
        <div class="leftside">
            <h3>Our Products</h3>
      <p>Lamp books sells a variety of products. We may be labels as a book store but within our store you can find books, dvds, jewelery, gifts, plarks and so much more. If Lampbooks doesnt stock what you are lookng for chances are itt can be ordered in so dont hesitate to ask one of our volunteers.</p>
        </div>
       
        <div class ="rightside">
            
            
             </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    </div>
</html>
