<?php
require_once "./core/db/connectdb.php";
if( isset($_SESSION['userId']))
{
    $userId = $_SESSION['userId'];
    


    
        $tot = 0;
        foreach ($_SESSION["shopping_cart"] as $product)
        {
            $product["prijs"];
            $product["quantity"]; 
            $tot += ($product["prijs"] * $product["quantity"]);
            
        
        }
        
            $price_inc = $tot ;
            $price_ex = $tot * 0.79;
    
        
        $sql = "SELECT * FROM `factuur`";
        
        
        $result = mysqli_query($con, $sql);
        
        
        $sql = "INSERT INTO `factuur` (`factuurcode`,
                                  `userid`,
                                  `factuurdatum`
                                  ) 
             VALUES                (NULL, 
                                    $userId,
                                    NOW()
                                    )"; 
    
    $result = mysqli_query($con, $sql );
    
     echo $sql;
    
    $factuurcode = mysqli_insert_id($con);
    
    foreach ($_SESSION["shopping_cart"] as $product){
        $quantity = $product['quantity'];
        $productId = $product['productid'];
        
    
    $sql = "INSERT INTO `orderline` (`idorderline`, 
                                     `factuurcode`, 
                                     `productid`,  
                                     `aantal` 
                                     ) 
             VALUES                 (NULL, 
                                     '$factuurcode', 
                                     '$productId', 
                                     '$quantity'
                                     )";
                                     
                                     
    
    
    $result = mysqli_query($con, $sql);
    
    echo $sql;
    
    $sql2 = "SELECT * FROM product WHERE productid = '$productId'";
    
          $result2 = mysqli_query($con, $sql2);
          $record2 = mysqli_fetch_assoc($result2);
    
          $af = $record2["productaantal"] - $quantity;
    
          $sql = "UPDATE product SET productaantal = '$af' WHERE product.productid = '$productId'";
          mysqli_query($con,$sql);

        //   echo '<meta http-equiv="Refresh" content="1; url="http://localhost/2019-c4-exotica/includes/pdf.php">';
    
    }
}else{
    $tot = 0;
    foreach ($_SESSION["shopping_cart"] as $product)
    {
        $product["prijs"];
        $product["quantity"]; 
        $tot += ($product["prijs"] * $product["quantity"]);
        
    
    }
    
        $price_inc = $tot ;
        $price_ex = $tot * 0.79;

    
    $sql = "SELECT * FROM `factuur`";
    
    
    $result = mysqli_query($con, $sql);
    
    
    $sql = "INSERT INTO `factuur` (`factuurcode`,
                              `userid`,
                              `factuurdatum`
                              ) 
         VALUES                (NULL, 
                                NULL,
                                NOW()
                                )"; 

$result = mysqli_query($con, $sql );

 echo $sql;

$factuurcode = mysqli_insert_id($con);

foreach ($_SESSION["shopping_cart"] as $product){
    $quantity = $product['quantity'];
    $productId = $product['productid'];
    

$sql = "INSERT INTO `orderline` (`idorderline`, 
                                 `factuurcode`, 
                                 `productid`,  
                                 `aantal` 
                                 ) 
         VALUES                 (NULL, 
                                 '$factuurcode', 
                                 '$productId', 
                                 '$quantity'
                                 )";
                                 
                                 


$result = mysqli_query($con, $sql);

echo $sql;

$sql2 = "SELECT * FROM product WHERE productid = '$productId'";

      $result2 = mysqli_query($con, $sql2);
      $record2 = mysqli_fetch_assoc($result2);

      $af = $record2["productaantal"] - $quantity;

      $sql = "UPDATE product SET productaantal = '$af' WHERE product.productid = '$productId'";
      mysqli_query($con,$sql);

}



     echo '<meta http-equiv="Refresh" content="1; url=index.php?content=NAW">';
}
