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
      <?php include 'header.php';?>
        
         <div class="row">
        <div class="leftside">
            <h3>Welcome to Lamp Books!</h3>
      
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

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

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
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>

        
 
            
            
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

 </div>
</html>
