<?php
// Include the setup.php file to establish database connection
require_once '../setup.php';
// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    // Check if all required form fields are filled
    if(isset($_POST['id'], $_POST['page_name'], $_POST['title1'], $_POST['title2'], $_POST['text2'], $_POST['text3'], $_POST['image1'])) {
        $id = $_POST['id'];
        $page_name = $_POST['page_name'];
        $title1 = $_POST['title1'];
        $title2 = $_POST['title2'];
        $text2 = $_POST['text2'];
        $text3 = $_POST['text3'];
        $image1 = $_POST['image1'];

                // Update the record in the "contacts" table
        $query = "UPDATE pages SET page_name = ?, title1 = ?, title2 = ?, text2 = ?, text3 = ?, image1 = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssssssi", $page_name, $title1, $title2, $text2, $text3, $image1, $id);

                if(mysqli_stmt_execute($stmt)) {
            header('Location: admin.php');
        } else {
            echo 'Error updating record: ' . mysqli_stmt_error($stmt);
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo 'All form fields are required.';
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
mysqli_close($conn);
?>
