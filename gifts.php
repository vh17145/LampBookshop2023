<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamp Bookshop Thames</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>

    <body>
           <?php 
       
        session_start();//starting a session
if (isset($_SESSION['loggedin'])) {// Changing how the nav bar looks depending on if the user is logged in or not
    $name = $_SESSION['name'];
    include 'loginheader.php';
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
        
           
         <h2>Gifts and Home Accessories</h2>
        
            
            
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    
</html>
