<section id="shop">
    <div class="container text-center">
        <h1 class="title">winkelmandje</h1>
    </div>
</section>

<img src="img/myimage.png" class="bottom-img">   


<section id="diensten">

<?php
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["productcode"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:white;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}

if (!isset($_SESSION['total_price'])) {
  $_SESSION['total_price'] = 0;
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['productcode'] === $_POST["productcode"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
    }
}
  	
}
?>
<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
  $_SESSION['total_price'] = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>Naam</td>
<td>Aantal</td>
<td>Prijs</td>
<td>Totale prijs</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td>
<img src='<?php echo $product["image"]; ?>' width="50" height="40" />
</td>
<td><?php echo $product["productnaam"]; ?><br />
<form method='post' >
<input type='hidden' name='productcode' value="<?php echo $product["productcode"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Verwijder product</button>
</form>
</td>
<td>
<form method='post'>
<input type='hidden' name='productcode' value="<?php echo $product["productcode"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">
<option selected value=""><?php echo $product['quantity']; ?></option>

<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</form>
</td>
<td><?php echo "€".$product["prijs"]; ?></td>
<td><?php echo "€".$product["prijs"]*$product["quantity"]; ?></td>
</tr>
<?php
$_SESSION['total_price'] += ($product["prijs"]*$product["quantity"]);
}


?>
<tr>
<td colspan="5" align="right">
<strong>TOTAAL: <?php echo "€".$_SESSION['total_price']; ?></strong>

</td>


</tr>
<form method="post" action="./index.php?content=checkout">
<tr>
<td colspan="5" align="right">


<button type='submit' action="./index.php?content=checkout"  class='buy'>afrekenen</button>


</td>


</tr>

</form>

</tbody>
</table>		
  <?php
}else{
	echo "<h3>De winkelmand is leeg</h3>";
	}
?>
</div>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
</section>
<img src="img/image.png" class="bottom-img">