<?php 
if(isset($_GET['action']) && $_GET['action']=="add") {
    $id=intval($_GET['id']);
    if(isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else { 
        $stmt = $mysqli->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        if(isset($result['id']) && $result['id']) {
            $_SESSION['cart'][$result['id']] = array(
                "quantity" => 1,
                "price" => $result['price']
            );
        } else {
            $message="This product id is invalid!";
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
<div class="wrapper">
    <body>
        <?php 
        //<!-- Using php to link the header into the page -->
        session_start();
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
            
<h1>Product List</h1>
<?php 
    if(isset($message)) { 
        echo "<h2>$message</h2>";
    }
?> 

<?php 
             require_once 'setup.php';
                    // Fetch records from the "contacts" table
           
            if(isset($_GET['id'])) {
             $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id ='$id'";
    
        
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
     
     <form method="post" action="cart.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
<input type="submit" value="Add to Cart">
</form>
  
</div>

       <?php 
}
 }
            }
?>     
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    </div>
</html>
