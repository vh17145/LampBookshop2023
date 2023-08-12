<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About Lamp Bookshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
</head>
    
    
    
  <?php
        // Include the setup.php file to establish database connection
    require_once 'setup.php';
       // Fetch records from the "contacts" table
    $sql = "SELECT * FROM pages where id = 1 ";
    
        
 $result = mysqli_query($conn, $sql);

           
 if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
        //print_r($row);
    $title1 =$row['title1'];
    $text1 =$row['text1'];
    $image1 =$row['image1'];
    $title2 =$row['title2'];
    $text2 =$row['text2'];
    $text3 = $row['text3'];
 }
    ?>
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
            
            
             <h3><?php echo $title1; ?></h3>
        <p><?php echo $text1; ?></p>
       
        </div>
        
        <div class ="rightside">
            <h3><?php echo $title2; ?></h3>
            
        <p><?php echo $text2; ?></p>
                 <div class="exterior"><img src="images/<?php echo $image1; ?>" alt="Lamp Books Exterior" ></div>
            <br>
            <p><?php echo $text3; ?></p>
            
        </div>
        
    </div>
    
      <?php include 'footer.php';?>
</body>
  
</html>