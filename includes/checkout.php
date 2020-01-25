<?php
require_once "./core/db/connectdb.php";
if( isset($_SESSION['username']))
{
    $tot = 0;
    foreach ($_SESSION["shopping_cart"] as $product)
    {
        $product["prijs"];
        $product["quantity"]; 
        $tot += ($product["prijs"] * $product["quantity"]);
        $productId = $product['productid'];
        $quantity = $product['quantity'];
    
    }
    
        $price_inc = $tot ;
        $price_ex = $tot * 0.79;

        $userId = $_SESSION['userId'];
    


    
    $sql = "SELECT * FROM `factuur`";
    
    
    $result = mysqli_query($con, $sql);
    
    
    $sql = "INSERT INTO `factuur` (`factuurcode`,
                              `userid`,
                              `productid`,
                              `factuurdatum`,
                              `aantal`) 
         VALUES                (NULL, 
                                '$userId',
                                '$productId',
                                NOW(), 
                                '$quantity')"; 

$result = mysqli_query($con, $sql );

echo $sql;



$sql2 = "SELECT * FROM product WHERE productid = '$productId'";

      $result2 = mysqli_query($con, $sql2);
      $record2 = mysqli_fetch_assoc($result2);

      $af = $record2["productaantal"] - $quantity;

      $sql = "UPDATE product SET productaantal = '$af' WHERE product.productid = '$productId'";
      mysqli_query($con,$sql);

      echo '<div class="alert alert-info" role="alert">
      Bedankt voor uw aankoop. uw product wordt zo spoedig mogelijk op de opgegeven locatie geleverd.</div>';



    // echo '<meta http-equiv="Refresh" content="1; url=./pdf.php">';
    
// price_ex
// price_inc
// status
//var_dump($_SESSION);

//unset($_SESSION['shopping_cart']);




        //echo $sql;
//var_dump($result);


}else{
    echo '<div class="alert alert-primary" role="alert">login om af te rekenen</div>';
    echo '<meta http-equiv="Refresh" content="2; url=./index.php?content=login">';

}
