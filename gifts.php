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
         <?php include 'header.php';?><!-- Using php to link the header into the page -->
        
         <div class="row">
        <div class="leftside">
            <h3>Our Products</h3>
      <p>Lamp books sells a variety of products. We may be labels as a book store but within our store you can find books, dvds, jewelery, gifts, plarks and so much more. If Lampbooks doesnt stock what you are lookng for chances are itt can be ordered in so dont hesitate to ask one of our volunteers.</p>
        </div>
        
        <div class ="rightside">
        
            <div class="dropdown">
        <a href="gallery.php" class="dropbtn">Products</a>
             <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
        </div>
         <h2>Best sellers</h2>
        
            
<div class="gallery">
  <a target="_blank" href="product.php?image=seeingBeautiful.jpg">
    <img src="images/seeingBeautiful.jpg" alt="Seeing Beautiful Again">
  </a>
  <div class="desc"><p>Seeing Beautiful by Lysa Terkeurst $30</p></div>
</div>

<div class="gallery">
  <a target="_blank" href="product.php?image=jesusCalling.jpg">
    <img src="images/jesusCalling.jpg" alt="Adventure bible" >
  </a>
  <div class="desc">
      <p>Adventure bible<br>NKJV<br>$50
          
          <br>
      </p></div>
</div>

<div class="gallery">
  <a target="_blank" href="product.php?image=narnia2.jpg">
    <img src="images/narnia2.jpg" alt="Sense and sensibility by jane Austen">
  </a>
  <div class="desc">
     <p>Narnia by C.S Lewis
      <br>$30
      <br>
         
      </p>
    </div>
</div>

<div class="gallery">
  <a target="_blank" href="product.php?image=jesusCalling.jpg">
    <img src="images/jesusCalling.jpg" alt="Jesus Always">
  </a>
  <div class="desc"><p>Jesus Always
      by Sarah young
            <br>$30
      <br>
      </p>
    </div>
</div>

<div class="gallery">
            <a target="_blank" href="product.php?image=journalbible.jpg">
    <img src="images/journalbible.jpg" alt="Journaling bible">
    </a>
    <div class="desc"><p>Niv Beautiful Word Colouring Bible $60</p>
    </div>
            </div>
<div class="gallery">
            <a target="_blank" href="product.php?image=strong.jpg">
    <img src="images/strong.jpg" alt="Strong by Lisa Bereve">
    </a>
    <div class="desc"><p>Strong by Lisa Bevere
              <br>$30
      <br>
        </p>
    </div>
            </div>
            
<div class="gallery">
            <a target="_blank" href="product.php?image=redbible.jpg">
    <img src="images/redbible.jpg" alt="Red Leather Bible">
    </a>
    <div class="desc"><p>Red Leather<br> NIV Bible
              <br>$50
      <br>
        
        </p>
    </div>
            </div>           
            
        </div>
        
    </div>
        
    
     <?php include 'footer.php';?>
     
    </body>
    

    
</html>
