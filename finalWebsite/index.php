<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamp Bookshop Thames</title>
    <link href="/LampBookshop2023/finalWebsite/style.css" rel="stylesheet" type="text/css">
     
</head>
<div class="wrapper">
    <body>
        <div class ="header">
        
                <h1>Lamp Bookshop</h1>
        </div>
        <div class="navbar">
            <ul>
           <li><a href="gallery.php">Product Gallery</a></li>
             <li><a href="about.php">About our website</a> </li>
         <li><a href="contact.php">Contact</a> </li>
                <li><a href="index.php">Home</a> </li>
            </ul>
        </div>
        
         <div class="row">
        <div class="leftside">
            <h3>Welcome to Lamp Books!</h3>
      
        </div>
        
        <div class ="rightside">
        
<div class="slideshowContainer">

<div class="mySlides fade">
  
  <img src="images/display1.jpg" style="width:100%">
  <div class="text">
      <p>Bible journalling Display</p></div>
</div>

<div class="mySlides fade">
  <img src="images/lampExterior.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">

  <img src="images/clothing.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

        
 
            
            
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    </div>
</html>
