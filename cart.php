
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamp Bookshop Thames</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>
    <?php     session_start();
    date_default_timezone_set('Pacific/Auckland');
    ?>
<div class="wrapper">
    <body>
        <?php 
        //<!-- Using php to link the header into the page -->

// If the user is not logged in redirect to the login page...
   
if (isset($_SESSION['loggedin'])) {
    $name = $_SESSION['name'];
    $user_id = $_SESSION['id'];
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
// Include the setup.php file to establish database connection
require_once 'setup.php';
// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    // Check if all required form fields are filled
    if(isset($_POST['id'] )) {
        print_r($_POST);
        print_r($_SESSION);
        $product_id = $_POST['id'];
        $client_id = $_SESSION['id'];
        $date = date("Y-m-d");
        $amount = $_POST['price'];
        //$comment = $_POST['comment'];
 $sql = "INSERT INTO invoices (product_id, client_id, date, amount)
VALUES ('$product_id', '$client_id', '$date', '$amount')";

if ($conn->query($sql) === TRUE) {
?>
<p>New Invoice recieved</p>            
            
            <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
}

// Close the database connection
mysqli_close($conn);
?>

            
             </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    </div>
</html>
