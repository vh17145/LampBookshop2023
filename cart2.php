
<?php 
print_r($_POST);
//if (isset($_POST['submit'])) {
   // foreach($_POST['quantity'] as $key => $val) {
        //if($val==0) {
          //  unset($_SESSION['cart'][$key]);
        //}else{
           // $_SESSION['cart'][$key]['quantity']=$val;
       // }
   // }
//}
?> 


<?php 
if(isset($_SESSION['cart'])) {
    $arrProductIds=array();
    foreach ($_SESSION['cart'] as $id => $value) {
        $arrProductIds[] = $id;
    }
    $strIds=implode(",", $arrProductIds);
    $stmt = $mysqli->prepare("SELECT * FROM products WHERE id IN (?)");
    $stmt->bind_param("s", $strIds);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
    ?>
        <p><?php echo $row['title'] ?> x <?php echo $_SESSION['cart'][$row['id']]['quantity'] ?></p>
    <?php
    } 
?>
    <hr />
    <a href="index.php?page=cart">Go to cart</a>
<?php
} else {
    echo "<p>Your Cart is empty. Please add some products.</p>";
}
?>  