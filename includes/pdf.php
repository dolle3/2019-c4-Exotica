<?php
require_once "../core/fpdf181/fpdf.php";
require_once "../core/db/connectdb.php";





session_start();
$pdf=new FPDF();

$userId = $_SESSION['userId'];
$factuurId = $_SESSION['factuurcode'];
$sql = "SELECT * FROM  `factuur` WHERE `factuurcode` = '$factuurId'";

    $result = mysqli_query($con, $sql); 
    $record = mysqli_fetch_assoc($result);


    $factuurdatum = $record['factuurdatum'];
    $factuurcode = $record['factuurcode'];
       
if(isset($_SESSION['userId'])){

    $sql = "SELECT * FROM  user WHERE userid = '$userId'";

    $result = mysqli_query($con, $sql); 
    $record = mysqli_fetch_assoc($result);


   $voornaam = $record['firstname'];
   $tussenvoegsel = $record['infix'];
   $achternaam = $record['lastname'];
   $email = $record['email'];
   $postcode = $record['zipcode'];
   $adres = $record['address'];
   $stad = $record['city'];
    
}else{

   $voornaam = $_POST['firstname'];
   $tussenvoegsel = $_POST['infix'];
   $achternaam = $_POST['lastname'];
   $email = $_POST['email'];
   $postcode = $_POST['zipcode'];
   $adres = $_POST['address'];
   $stad = $_POST['city'];

}





        
        
$pdf->AddPage();




$pdf->SetFont("Arial","","12");
$pdf->Image("../img/exo-logo.png");
$pdf->Cell(0,5,"Datum: " . $factuurdatum,0,1,"R");
$pdf->Cell(168.8,5,"Factuurcode: " . $factuurcode,0,1,"R");
$pdf->Cell(0,5,"",0,1,"R");
$pdf->Cell(0,5,"exotica.com",0,1,"L");
$pdf->Cell(0,5,"Choorstraat 40",0,1,"L");
$pdf->Cell(0,5,"3511 KN Utrecht",0,1,"L");
$pdf->Cell(0,5,"Nederland",0,1,"L");

$pdf->Cell(0,5,"exotica@shop.com ",0,1,"L");
$pdf->Cell(0,5,"030-5352768",0,1,"L");



$pdf->SetFont("Arial","B","20");
$pdf->Cell(0,10," ",0,1);
$pdf->Cell(0,10,"Factuur",0,1);
$pdf->SetFont("Arial","","12");
$pdf->Cell(0,7,"",0,1,"R");


if($tussenvoegsel == ""){
    $pdf->Cell(0,5,$voornaam ." " . $achternaam,0,1);
}else{
    $pdf->Cell(0,5,$voornaam ." ". $tussenvoegsel ." ". $achternaam,0,1);
}


$pdf->Cell(0,5,$adres,0,1);
$pdf->Cell(0,5,$postcode. " ".$stad,0,1);




$pdf->Cell(100,10,"Naam",0,0);
$pdf->Cell(30,10,"Prijs",0,0);
$pdf->Cell(20,10,"Aantal",0,0);
$pdf->Cell(30,10,"Totaal",0,1);

$color = TRUE;
foreach ($_SESSION["shopping_cart"] as $product){
    
    if ( $color == FALSE)
    {
        $price = $product["prijs"];
        $quantity = $product["quantity"];
        $name = $product["productnaam"];
        $price = $product["prijs"];
        $total = $product['prijs'] * $product['quantity'];
        
        $pdf->SetFillColor(255, 145, 88);
    
    
    $pdf->Cell(100,10,$name   ,1,0,"","True");
    $pdf->cell(30,10,chr(128)  . $price ,1,0,"","True");
    $pdf->cell(20,10, $quantity  ,1,0,"C","True");
    $pdf->cell(30,10,chr(128)  . $total ,1,1,"","True");
    $color = TRUE;
}
else
{
    $price = $product["prijs"];
    $quantity = $product["quantity"];
    $name = $product["productnaam"];
    $price = $product["prijs"];
    $total = $product['prijs'] * $product['quantity'];



    $pdf->Cell(100,10,$name   ,1,0);
    $pdf->cell(30,10,chr(128)  . $price ,1,0);
    $pdf->cell(20,10, $quantity  ,1,0,"C");
    $pdf->cell(30,10,chr(128)  . $total ,1,1);
    $color = FALSE;
}
    




}
    $pdf->Cell(100,10,""  ,"LB");
    $pdf->cell(30,10,"" ,"B");
    $pdf->cell(20,10,  "" ,"B");    
    $pdf->cell(30,10,chr(128)  . $_SESSION['total_price'] ,"BR");


//  $pdf->Output();



$to = $email; 
$from = "exotica@shop.nl"; 
$subject = "OrderFormulier"; 
$message = "<p> beste" . $voornaam . ",
Bedankt voor Het bestellen bij exotica@shop.nl In bijgevoegde bijlage kunt u uw order bekijken.
Zorg dat u dit pdf bestand opslaat op uw pc</p>";


$separator = md5(time());


$eol = PHP_EOL;


$filename = "factuur.pdf";


$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));


$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";


$body = "--".$separator.$eol;
 $body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$body .= "Beste $voornaam,

Bedankt voor Het bestellen bij exotica.
Uw bestelling wordt binnen 1 a 2 dagen verwerkt en kunt u aan het eind van de week voor uw deur verwachten.
In bijgevoegde bijlage kunt u uw order bekijken.
Zorg dat u dit pdf bestand opslaat op uw pc.

Met vriendelijke groet,

exotica.com".$eol;


$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";


mail($to, $subject, $body, $headers);

//  unset($_SESSION['shopping_cart']);

 header("location:../index.php");


?>
