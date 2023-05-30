<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lamp Bookshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>

    <body>
     
    
    
   <?php include 'header.php';?>
        
         <div class="row">
        <div class="leftside">
            <h3>Lamp contact details</h3>
       
        </div>
       
        <div class ="rightside">
            <h3>Customer Newspaper</h3>
        <p> Are you a regular customer? Fillout here to be added to the regulars list and be informed on whats going on at The Lamp.</p>
            
                    
        <h2>Contact Form</h2>

<form action="action_page.php" method="POST"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="john@mail.com"><br><br>
 <input type="submit" value="Submit">
</form>


        </div>
        
    </div>
        
        
        
          <?php include 'footer.php';?>
    </body>

</html>