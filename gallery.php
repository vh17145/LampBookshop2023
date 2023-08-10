<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamp Bookshop Thames</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>
  <?php 
        if(isset($_GET['category'])) {
    $category = $_GET['category'];
        }
?>
    <body>
         <?php include 'header.php';?><!-- Using php to link the header into the page -->
        
         <div class="row">
        <div class="leftside">
            <h3>Our Products</h3>
      <p>Lamp books sells a variety of products. We may be labels as a book store but within our store you can find books, dvds, jewelery, gifts, plarks and so much more. If Lampbooks doesnt stock what you are lookng for chances are itt can be ordered in so dont hesitate to ask one of our volunteers.</p>
        </div>
        
        <div class ="rightside">
        <h2>  
        <?php 
            if(isset($_GET['category'])) {
             $category = $_GET['category'];
                if ($category == 'book') {
                    echo 'Books';
                }
                if ($category == 'gifts') {
                    echo 'Gifts and Home Accessories';
                }
                if ($category == 'jewelry') {
                    echo 'Jewelry';
                }
            } else{
                echo 'Products';} 
            ?>
            </h2>
            <?php 
           
           // Include the setup.php file to establish database connection
    require_once 'setup.php';

    if(isset($_GET['category'])) {
        $category = $_GET['category'];
         $sql = "SELECT * FROM products WHERE category ='$category'";
        }
        else{
            // Fetch records from the "contacts" table
    $sql = "SELECT * FROM products";
     
        }
          
        
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
<div class="gallery">
  <a target="_blank" href="product.php?id=<?php echo $id; ?>">
    <img src="images/<?php echo $image; ?>" alt="Seeing Beautiful Again">
  </a>
  <div class="desc"><p><?php echo $title; ?> $<?php echo $price; ?></p></div>
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
    

    
</html>
