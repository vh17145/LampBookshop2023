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
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lamp Bookshop</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
     
    
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
    
             <h3>Edit Customer messages </h3>
             <?php 
           
           // Include the setup.php file to establish database connection
    require_once '../setup.php';

           // Fetch records from the "contacts" table
    $sql = "SELECT * FROM contact";
    
        
     $stmt = mysqli_prepare($conn, $sql);

 $result = mysqli_query($conn, $sql);

           
 if (mysqli_num_rows($result) > 0) {
     // Display the records in a table
        echo '<table>';
        echo '<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Comment</th><th>Actions</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['comment'] . '</td>';
            echo '<td><a href="edit.php?id=' . $row['id'] . ' ">Edit</a> | <a href="delete.php?id=' . $row['id'] .'">Delete</a></td>';
                     echo '</tr>';
        }
        echo '</table>';

      } else {
        echo 'No records found.';
    }


mysqli_close($conn);
mysqli_stmt_close($stmt);


           ?>
          
    </div>
        
        
        
          <?php include '../footer.php';
}
        ?>
    </body>
    
</html>