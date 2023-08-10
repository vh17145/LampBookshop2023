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
        if(isset($_GET['id'])) {
    $id = $_GET['id'];
        }
?>
        <div class ="rightside">
          <?php 
           
           // Include the setup.php file to establish database connection
    require_once 'setup.php';

           // Fetch records from the "contacts" table
    $sql = "SELECT * FROM products WHERE  id ='$id' ";
    
        
     $stmt = mysqli_prepare($conn, $sql);

 $result = mysqli_query($conn, $sql);

           
 if (mysqli_num_rows($result) > 0) {
     // Display the records in a table
       
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
           $title = $row['title'];
            $info = $row['info'];
            $price = $row['price'];
            $category = $row['category'];
            $image = $row['image'];
            ?>
            
                
        <div class="card">
  <img src="images/<?php print $image;?>" alt="Adventure Bible" style="width:100%">
  <h1><?php echo $title; ?></h1>
  <p class="price">$<?php echo $price; ?></p>
  <p><?php echo $info; ?></p>
  <p><button>Add to Cart</button></p>
</div>
     
           <?php
        }

      } else {
        echo 'No records found.';
    }
mysqli_close($conn);
mysqli_stmt_close($stmt);


           ?>
            
        
                    
            
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    </div>
</html>
