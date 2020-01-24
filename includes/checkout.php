<?php

if( isset($_SESSION['userid'])){
    $tot = 0;
    foreach ($_SESSION["shopping_cart"] as $product){
        $product["price"];
        $product["quantity"]; 
        $tot += ($product["price"] * $product["quantity"]);
    
      }
    
        $price_inc = $tot ;
        $price_ex = $tot * 0.79;


    $iduser = $_SESSION['userid'];


    
    $sql = "SELECT * FROM `order`, `orderline`";
    
    
    $result = mysqli_query($con, $sql);
    
    
    $sql = "INSERT INTO `order` (`idorder`,
                              `iduser`,
                              `date`,
                              `price_ex`, 
                              `price_inc`, 
                              `status`) 
         VALUES                (NULL, 
                                '$iduser',
                                NOW(), 
                                '$price_ex', 
                                '$price_inc', 
                                'in progress')"; 

$result = mysqli_query($con, $sql );

//echo $sql;

$orderid = mysqli_insert_id($con);

foreach ($_SESSION["shopping_cart"] as $product){
    $quantity = $product['quantity'];
    $price = $product['price'];
    $total = $product['price'] * $product['quantity'];
    $idproduct = $product['idproduct'];
    

$sql = "INSERT INTO `orderline` (`idorderline`, 
                                 `idorder`, 
                                 `idproduct`,  
                                 `quantity`, 
                                 `price`, 
                                 `total`) 
         VALUES                 (NULL, 
                                 '$orderid', 
                                 '$idproduct', 
                                 '$quantity', 
                                 '$price', 
                                 '$total')";
                                 
                                 
//echo $sql;

$result = mysqli_query($con, $sql );

$sql2 = "SELECT * FROM product WHERE idproduct = '$product[idproduct]'";

      $result2 = mysqli_query($con, $sql2);
      $record2 = mysqli_fetch_assoc($result2);

      $af = $record2["stock"] - $product["quantity"];

      $sql = "UPDATE product SET stock = '$af' WHERE product.idproduct = '$product[idproduct]'";
      mysqli_query($con,$sql);


