<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lamp Bookshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>
<div class="wrapper">
    <body>
     
    
    
   <?php include 'header.php';?>
        
         <div class="row">
        <div class="leftside">
            <h3>Lamp contact details</h3>
       <p>Contact Lamp Bookshop through our email address:<br>
        Our phone number: 027 222 8228<br>
        Or come in store at 595 MacKay Street, Thames 3500<br>
            </p>
            <div class="googlemap">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1590.3199051210213!2d175.54151053856998!3d-37.13748345480851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d72813798c04805%3A0x772ab7887f33edef!2sLamp%20Books!5e0!3m2!1sen!2snz!4v1687394380894!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        </div>
       
        <div class ="rightside">
            <h3>Customer Newspaper</h3>
        <p> Are you a regular customer? Fillout here to be added to the regulars list and be informed on whats going on at The Lamp.</p>
            
                    
        <h2>Contact Form</h2>

<form action="action_page.php" method="POST"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="john@mail.com"><br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
 <input type="submit" value="Submit">
</form>


        </div>
        
    </div>
        
        
        
          <?php include 'footer.php';?>
    </body>
    </div>
</html>