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
    <link href="../css/style.css" rel="stylesheet" type="text/css">
     
</head>
<div class="wrapper">
    <body>
     
    
    
   <?php 
        
if (isset($_SESSION['loggedin'])) {
    $name = $_SESSION['name'];
     if ($_SESSION['name'] == 'admin'){
        include '../adminheader.php';
    }
    else{
    include 'loginheader.php';}
}
        else{
        include 'header.php';}
        ?><!-- Using php to link the header into the page -->
        
         <div class="row">
       
       <div class="main">
             <?php  
          
           // Include the setup.php file to establish database connection
    require_once '../setup.php';
           
// Check if the ID parameter is provided in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    
    // Fetch the record from the "contacts" table with the given ID
    $query = "SELECT * FROM pages WHERE id = ?";
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
<label for="page_name">Page Name:</label>
<input type="text" id="page_name" name="page_name" value="<?php echo $row['page_name']; ?>"><br><br>
    
<label for="title1">Title 1:</label>
<input type="text" id="title1" name="title1" value="<?php echo $row['title1']; ?>"><br><br>
    <label for="text1">Text 1:</label>
<textarea id="text1" name="text1"><?php echo $row['text1']; ?></textarea><br><br>
    
<label for="title2"> Title 2:</label>
<input type="title2" id="text1" name="title2" value="<?php echo $row['title2']; ?>"><br><br>
    
<label for="text2">Text 2:</label>
<textarea id="text2" name="text2"><?php echo $row['text2']; ?></textarea><br><br>
    
    
<label for="text3">Text 3:</label>
<textarea id="text3" name="text3"><?php echo $row['text3']; ?></textarea><br><br>
    
    <label for="image1"> Image 1:</label>
<input type="image1" id="image1" name="image1" value="<?php echo $row['image1']; ?>"><br><br>
    
<input type="submit" value="Update">
</form>
           
           
       
             
             </div>
     
    </div>
        
        
        
          <?php include '../footer.php';
}?>
    </body>
    </div>
</html>