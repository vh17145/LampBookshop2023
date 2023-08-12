<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamp Bookshop Thames</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
</head>

    <body>
      <?php 
        //<!-- Using php to link the header into the page -->
        session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
    $name = $_SESSION['name'];
    include 'loginheader.php';
}
        else{
        include 'header.php';}
        ?>
        
         <div class="row">
        <div class="leftside">
            <h3>Welcome <?php 
               if (isset ($name)){echo $name;}?> to Lamp Books!</h3>
            
      <p>Lamp Books is located in Thames New Zealand. Lamp books is a christian bookstore but also a safe place for anyone who wants to hangout, sit, or chat over a hot drink. You will find a variety of products from fiction books to bibles, jewelery or gifts.<br> Check out our Contact page for more information on where to find Lamp books and how to get in touch.  </p>
        </div>
        
        <div class ="rightside">
        
<div class="slideshowContainer">

<div class="mySlides fade">
  
  <img src="images/slideshowimg1.jpg" style="width:100%;">
  <div class="text">Clothing Display</div>
</div>

<div class="mySlides fade">
  <img src="images/slideshowimg2.jpg" style="width:100%;">
  <div class="text">Fathers day display</div>
</div>

<div class="mySlides fade">

  <img src="images/slideshowimg3.jpg" style="width:100%;">
  <div class="text" >Gifts display</div>
</div>

</div>
<br>
<!-- Ctreating 3 dots in a row that give the user a chance to go to which ever slide in the slide show they want to view. -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<!-- From line 54-74 is the script used to link each slide to the dots. And this code also makes the slide show rotate images automatically. It also puts the images in the basic slideshow layoutso that only one of the images is displayed -->
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

        
 
            
            
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    


</html>
