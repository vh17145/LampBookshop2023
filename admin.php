<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lamp Bookshop</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
     
    
    <style>
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
<div class="wrapper">
    <body>
     
    
    
   <?php include 'header.php';?><!-- Using php to link the header into the page -->
        
         <div class="row">
       <main>
             <h3>Edit Customer messages </h3>
             <?php 
           
           // Include the setup.php file to establish database connection
    require_once 'setup.php';

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




           // Fetch records from the "contacts" table
    $sql = "SELECT * FROM pages";
    
           
 if (mysqli_num_rows($result) > 0) {
     // Display the records in a table
        echo '<table>';
        echo '<tr><th></th><th>Last Name</th><th>Email</th><th>Comment</th><th>Actions</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['title1'] . '</td>';
            echo '<td>' . $row['text1'] . '</td>';
            echo '<td>' . $row['text2'] . '</td>';
            echo '<td>' . $row['title2'] . '</td>';
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
             </main>
    </div>
        
        
        
          <?php include 'footer.php';?>
    </body>
    </div>
</html>