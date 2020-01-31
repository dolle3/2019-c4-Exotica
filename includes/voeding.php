<?php require_once './core/init.php';
?>

<section id="shop">
    <div class="container text-center">
    <h1 class="title">Voeding</h1>
    </div>
</section>

<img src="img/myimage.png" class="bottom-img">


<section id="diensten">


    <?php
    require_once "./core/db/connectdb.php";
    $status="";
    if (isset($_POST['productcode']) && $_POST['productcode']!=""){
        $productcode = $_POST['productcode'];
        $result = mysqli_query(
            $con,
            "SELECT * FROM `product` WHERE `productcode`= '$productcode' AND `productcategorieid` = 3"
        );
        $row = mysqli_fetch_assoc($result);
        $productid = $row['productid'];
        $name = $row['productnaam'];
        $productcode = $row['productcode'];
        $price = $row['prijs'];
        $image = $row['image'];
        $stock = $row['productaantal'];

        $cartArray = array(
            $productcode=>array(
                'productid'=>$productid,
                'productnaam'=>$name,
                'productcode'=>$productcode,
                'prijs'=>$price,
                'quantity'=> 1,
                'image'=>$image,
                'productaantal'=>$stock
            )


        );

        if(empty($_SESSION["shopping_cart"])) {
            $_SESSION["shopping_cart"] = $cartArray;
            $status = "<div class='box'>Product is toegevoegd aan de winkelwagen</div>";
        }else{
            $array_keys = array_keys($_SESSION["shopping_cart"]);
            if(in_array($productcode,$array_keys)) {
                $status = "<div class='box' style='color:white;'>
	Product is al toegevoegd aan de winkelwagen</div>";
            } else {
                $_SESSION["shopping_cart"] = array_merge(
                    $_SESSION["shopping_cart"],
                    $cartArray
                );
                $status = "<div class='box'>Product is toegevoegd aan de winkelwagen</div>";
            }

        }
    }






    if(!empty($_SESSION["shopping_cart"])) {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));

        echo "<div class='cart_div type='hidden>";
        echo "<a href='./index.php?content=cart'><img src='./img/cart.jpg' /> Cart<span>";
        echo $cart_count; echo"</span></a>
</div>";

    }


    $result = mysqli_query($con,"SELECT * FROM `product` WHERE `productcategorieid` = 3");
    echo '<div class="container text-center"> <div class="row text-center">';
    while($row = mysqli_fetch_assoc($result)){

        echo "
  <div class=\"col-sm-12 col-md-3 p-3 services\">
  <div class=\"card\" style=\"width: auto;\">
  <form method='post' action=''>
  <input type='hidden' name='productcode' value=".$row['productcode']." />
  <div class='image'><img src='".$row['image']."' height='140p'></div>
  <div class=\"card-body\">
    <div class='name'>".$row['productnaam']."</div>
    <div class='price'>€".$row['prijs']."</div>
    <button type='submit' class='buy'>Toevoegen aan winkelwagen</button>
    </div>
    </form>
  </div>
</div>

";
    }
    echo '</div> </div>';


    echo "<div style='clear:both;'></div>";

    echo "<div class='message_box' style='margin:10px 0px;'>";
    echo $status; ?>
</section>
<img src="img/image.png" class="bottom-img">
