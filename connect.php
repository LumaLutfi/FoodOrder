<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body class="body" style="background-color:#FFA07A;">

<?php
$name=$_POST["userName"];
$email=$_POST["email"];
$r_chicken=$_POST["r_chicken"];
$r_beefSha=$_POST["r_beefShawarma"];
$r_donair=$_POST["r_beefDonair"];
$r_kabab=$_POST["r_beefKabab"];
$r_falafel=$_POST["r_falafel"];
$r_comment=$_POST["r_comment"];
$l_chicken=$_POST["l_chicken"];
$l_beefSha=$_POST["l_beefShawarma"];
$l_donair=$_POST["l_beefDonair"];
$l_kabab=$_POST["l_beefKabab"];
$l_falafel=$_POST["l_falafel"];
$l_chSalad=$_POST["l_ch_salad"];
$l_comment=$_POST["l_comment"];
$strips=$_POST["strips"];
$hotdog=$_POST["hotdog"];
$burger=$_POST["burger"];
$kids_comment=$_POST["kids_comment"];
$pepsi=$_POST["pepsi"];
$coke=$_POST["coke"];
$ditecoke=$_POST["ditecoke"];
$cokezero=$_POST["cokezero"];
$sprite=$_POST["sprite"];
$tabule=$_POST["tabule"];
$hummus=$_POST["hummus"];
$fattoush=$_POST["fattoush"];
$tzatziki=$_POST["tzatziki"];
$r_ch_price = 8.00;
$r_beef_price = 8.00;
$r_do_price=7.00;
$r_kabab_price = 6.50;
$r_fala_price = 6.00;
$l_ch_price = 10.00;
$l_beef_price=10.00;
$l_do_price=9.00;
$l_kabab_price=7.50;
$l_fala_price=7.50;
$l_chSalad_price=8.00;
$ch_fries_price=5.00;
$hotdog_price=5.00;
$burger_price=6.00;
$pop_price=1.25;
$tabule_price=4.00;
$hummus_price=4.00;
$fattoush_price=6.00;
$tzatziki_price=4.00;

//if(isset($_POST['btn'])){
$conn= new mysqli("localhost","root","","foodorder"); //serverName,username,pass,databadeName
if (!$conn){
  die('Could not connect: ' . mysqli_error());
}

$stmt1=$conn->prepare("insert into customers (userName,email) values (?,?);");//insert into tableName
$stmt2=$conn->prepare("insert into adultorder (userName,r_chicken,r_beefShawarma,r_beefDonair,r_beefKabab,r_falafel,r_comment,
l_chicken,l_beefShawarma,l_beefDonair,l_beefKabab,l_falafel,l_ch_salad,l_comment) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
$stmt3=$conn->prepare("insert into kidsorder (userName,strips,hotdog,burger,kids_comment) values (?,?,?,?,?);");
$stmt4=$conn->prepare("insert into drinks (userName, pepsi,coke,ditecoke,cokezero,sprite) values (?,?,?,?,?,?);");
$stmt5=$conn->prepare("insert into appetizers (userName, tabule, hummus, fattoush, tzatziki) values (?,?,?,?,?);");

$stmt1->bind_param("ss" , $name, $email);
$stmt2->bind_param("siiiiisiiiiiis" , $name, $r_chicken,$r_beefSha,$r_donair,$r_kabab,$r_falafel,$r_comment,
$l_chicken,$l_beefSha,$l_donair,$l_kabab,$l_falafel,$l_chSalad,$l_comment);
$stmt3->bind_param("siiis" , $name, $strips, $hotdog,$burger,$kids_comment);
$stmt4->bind_param("siiiii", $name, $pepsi,$coke,$ditecoke,$cokezero,$sprite);
$stmt5->bind_param("siiii", $name, $tabule,$hummus,$fattoush,$tzatziki);

$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$stmt5->execute();
//$stmt6->execute();
$subtotal=0.0;
   $t_r_ch_price= (float)$r_chicken * $r_ch_price;
   $t_r_beef_price = (float)$r_beefSha * $r_beef_price;
   $t_r_do_price=(float)$r_donair * $r_do_price;
   $t_r_kabab_price = (float)$r_kabab * $r_kabab_price;
   $t_r_fala_price = (float)$r_falafel * $r_fala_price;
   $t_l_ch_price = (float)$l_chicken * $l_ch_price;
   $t_l_beef_price=(float)$l_beefSha * $l_beef_price;
   $t_l_do_price=(float)$l_donair * $l_do_price;
   $t_l_kabab_price=(float)$l_kabab * $l_kabab_price;
   $t_l_fala_price=(float)$l_falafel * $l_fala_price;
   $t_l_chSalad_price=(float)$l_chSalad * $l_chSalad_price;
   $t_ch_fries_price=(float)$strips * $ch_fries_price;
   $t_hotdog_price=(float)$hotdog * $hotdog_price;
   $t_burger_price=(float)$burger * $burger_price;
   $t_pepsi_price=(float)$pepsi * $pop_price;
   $t_coke_price=(float)$coke * $pop_price;
   $t_diteCoke_price=(float)$ditecoke * $pop_price;
   $t_cokezero_price=(float)$cokezero * $pop_price;
   $t_sprite_price=(float)$sprite * $pop_price;
   $t_tabule_price=(float)$tabule * $tabule_price;
   $t_hummus_price=(float)$hummus * $hummus_price;
   $t_fattoush_price=(float)$fattoush * $fattoush_price;
   $t_tzatziki_price=(float)$tzatziki * $tzatziki_price;
$subtotal=$subtotal+$t_r_ch_price+ $t_r_beef_price +$t_r_do_price+$t_r_kabab_price+$t_r_fala_price+
$t_l_ch_price+$t_l_beef_price+$t_l_do_price+$t_l_kabab_price+$t_l_fala_price+$t_l_chSalad_price+
$t_ch_fries_price+$t_hotdog_price+$t_burger_price+$t_pepsi_price+$t_coke_price+$t_diteCoke_price+
$t_cokezero_price+$t_sprite_price+$t_tabule_price+$t_hummus_price+$t_fattoush_price+$t_tzatziki_price;
$tax = $subtotal * 0.05;
$total = 0.0;
$total = $total+ $tax + $subtotal;

echo "subtotal= " . $subtotal . "<br>";
echo "tax= " . $tax . "<br>";
echo "total= ". $total. "<br>";
$sql = "INSERT INTO total VALUES ('$name','$email','$total') ";
 //print($sql);
 $result = mysqli_query($conn, $sql);
 // if ($result)
 // {
 //    print("Row was inserted");
 // }
 // else
 // {
 //    print("Error inserting row");
 // }

?>
<h3>The form is successfully submitted <span class="glyphicon glyphicon-ok"></span></h3>
<h1>Thank you!!</h1>

</body>
</html>
