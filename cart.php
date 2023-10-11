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
     $client_id = $_SESSION['id'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $fullname = $fname. " ".$lname;
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lamp Bookshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
     
    
    <style>
        .row {
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            
       
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }


        tr:hover {
            background-color: antiquewhite;
        }
     
  

    </style>

</head>

    <body>
     
     <?php 
        //<!-- Using php to link the header into the page -->
   
// If the user is not logged in redirect to the login page...
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
        ?>
         <div class="row">
    
             
             <?php 
           echo "<h3>Invoices for $fullname </h3>";
           // Include the setup.php file to establish database connection
    require_once 'setup.php';

           // Fetch records from the "contacts" table
    $sql = 
"SELECT 
    invoices.id,
    accounts.id,
    accounts.username,
    products.id,
    products.title,
    products.price,
    invoices.date,
    accounts.fname,
    accounts.lname
FROM 
    invoices
JOIN 
    accounts ON invoices.client_id = accounts.id
JOIN 
    products ON invoices.product_id = products.id
    WHERE accounts.id = '$client_id'
    ";
     $stmt = mysqli_prepare($conn, $sql);

 $result = mysqli_query($conn, $sql);

           
 if (mysqli_num_rows($result) > 0) {
     // Display the records in a table
     echo '<div style="overflow-x:auto;">';
        echo '<table>';
        echo '<tr><th>Inv num</th>
        <th>Title</th><th>Price</th><th>Date</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            //echo '<td>' . $row['fname'] . '</td>';
            //echo '<td>' . $row['lname'] . '</td>';
            //echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td><a href="edit.php?id=' . $row['id'] . ' ">Edit</a> | <a href="delete.php?id=' . $row['id'] .'">Delete</a></td>';
                     echo '</tr>';
        }
        echo '</table>';
echo '</div>';
      } else {
        echo 'No records found.';
    }


mysqli_close($conn);
mysqli_stmt_close($stmt);


           ?>
          
    </div>
        
        
        
          <?php include 'footer.php';
}
        ?>
    </body>
    
</html>