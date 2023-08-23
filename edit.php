<!DOCTYPE html>
<html lang="en">
    
      <?php 
    session_start()
        ?>
    <?php
        //<!-- Using php to link the header into the page -->
   
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: phplogin/login.php');
}else{
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lamp Bookshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>
<div class="wrapper">
    <body>
     
    
    
   <?php include 'header.php';?><!-- Using php to link the header into the page -->
        
         <div class="row">
       
       <div class="main">
             <?php  
          
           // Include the setup.php file to establish database connection
    require_once 'setup.php';
           
// Check if the ID parameter is provided in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    
    // Fetch the record from the "contacts" table with the given ID
    $query = "SELECT * FROM contact WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // Display the edit form with the existing record's data
          
}
    else {
echo 'No record found with the provided ID.';
    }
    
     // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo 'ID parameter not provided.';
}// Close the database connection
mysqli_close($conn);

        ?>

<h2>Edit Contact</h2>
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<label for="fname">First Name:</label>
<input type="text" id="fname" name="fname" value="<?php echo $row['fname']; ?>"><br><br>
<label for="lname">Last Name:</label>
<input type="text" id="lname" name="lname" value="<?php echo $row['lname']; ?>"><br><br>
<label for="email">Email:</label>
<input type="email" 
       id="email" name="email" 
       value="<?php echo $row['email']; ?>"><br><br>
<label for="comment">Comment:</label>
<textarea id="comment" name="comment"><?php echo $row['comment']; ?></textarea><br><br>
<input type="submit" value="Update">
</form>
           
           
       
             
             </div>
     
    </div>
        
        
        
          <?php include 'footer.php';
}?>
    </body>
    </div>
</html>