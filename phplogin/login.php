<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="/LampBookshop2023/css/loginstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
    
    <div class ="header">
<div class="logorow">
<div class="logoleftside">
        <img src="/LampBookshop2023/images/logo1.png" alt="Logo" class="logo" width="200">
       </div>
       <div class="logorightside">
                <h1 style="font-size:5vw;">Lamp Bookshop</h1>
       </div>
       </div>
        </div>
    
            <div class="navbar">
<ul>
    
    <li><a href="login.php">Log In</a></li>   
    <li class="dropdown">
    <a href="/LampBookshop2023/products.php" class="dropbtn">Products</a>
    <div class="dropdown-content">
      <a href="../products.php?category=book">Books</a>
      <a href="../products.php?category=gifts">Gifts</a>
      <a href="../products.php?category=jewelry">Jewelry</a>
    </div>
         
    </li>
    <li><a href="/LampBookshop2023/about.php">About us</a>
    </li> 
    <li><a href="/LampBookshop2023/contact.php">Contact</a> </li>
    <li><a href="/LampBookshop2023/index.php">Home</a> </li>
</ul>
                
       
                
                </div>
     
    
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
                <a href="register.html"><p>New? Create  a new user here!</p></a>
			</form>
		</div>
	</body>
</html>