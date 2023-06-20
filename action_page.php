<html>
<body>
<?php print_r ($_POST); 
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    ?>
    <br>
Welcome <?php echo $fname; ?><br>
Your email address is: <?php echo $email; ?>

    
</body>
</html>