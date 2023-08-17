
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
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>
    <?php     session_start()?>
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
            
          <h1>Cart</h1> 
<?php 
if(isset($_SESSION['cart'])) {
    $arrProductIds=array();
    foreach ($_SESSION['cart'] as $id => $value) {
        $arrProductIds[] = $id;
    }
    $strIds=implode(",", $arrProductIds);
    $stmt = $mysqli->prepare("SELECT * FROM products WHERE id IN (?)");
    $stmt->bind_param("s", $strIds);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
    ?>
        <p><?php echo $row['title'] ?> x <?php echo $_SESSION['cart'][$row['id']]['quantity'] ?></p>
    <?php
    } 
?>
    <hr />
    <a href="index.php?page=cart">Go to cart</a>
<?php
} else {
    echo "<p>Your Cart is empty. Please add some products.</p>";
}
?>  
            
            
             </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    </div>
</html>
