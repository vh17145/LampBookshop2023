<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'lampbookshop';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css">
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
    
    <li><a href="logout.php">Log Out</a></li>   
    <li class="dropdown">
    <a href="../products.php" class="dropbtn">Products</a>
    <div class="dropdown-content">
     <a href="../products.php?category=book">Books</a>
      <a href="../products.php?category=gifts">Gifts</a>
      <a href="../products.php?category=jewelry">Jewelry</a></div>
    </li>
    <li><a href="../about.php">About us</a>
    </li> 
    <li><a href="../contact.php">Contact</a> </li>
    <li><a href="../index.php">Home</a> </li>
</ul>
                    </div>
	<body>
	
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>