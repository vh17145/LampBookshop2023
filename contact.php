<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lamp Bookshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>

  <?php
        // Include the setup.php file to establish database connection
    require_once 'setup.php';
       // Fetch records from the "contacts" table
    $sql = "SELECT * FROM pages where id = 2 ";
    
        
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
            <h3><?php echo $title1; ?></h3>
       <p><?php echo $text2; ?><br>
            </p>
<!-- This piece of code is for the google maps frame-->
            <div class="googlemap">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1590.3199051210213!2d175.54151053856998!3d-37.13748345480851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d72813798c04805%3A0x772ab7887f33edef!2sLamp%20Books!5e0!3m2!1sen!2snz!4v1687394380894!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        </div>
       
        <div class ="rightside">
            <h3><?php echo $title2; ?></h3>
        <p><?php echo $text1; ?></p>
            
                    
        <h2></h2>

<form action="action_page.php" method="POST"> 
  <label for="fname">First name:</label><br>
  <input type="text" placeholder="John"  id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" placeholder=" Doe" id="lname" name="lname" value=""><br><br>
  <label for="email">email:</label><br>
  <input type="text" placeholder="johndoe@gmail.com" id="email" name="email" value=""><br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
 <input type="submit" value="Submit">
</form>


        </div>
        
    </div>
        
        
        
          <?php include 'footer.php';?>
    </body>
    
</html>