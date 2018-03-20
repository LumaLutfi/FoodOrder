<?php
 //$email = $_POST["email"];
 //$urName= $_POST["userName"];
//select
// $aRegCh = $_POST["ch"];
// $aRegBeefDonair=$_POST["do"];
// $aRegBeefKabab=$_POST["kabab"];
// $aRegFalafel=$_POST["falafel"];
// $aLargeCh=$_POST["largech"];
// $aLargeBeefDonair=$_POST["largedo"];
// $aLargeBeefKabab=$_POST["largeka"];
// $aLargeFalafel=$_POST["largefal"];
// $chickenStrips=$_POST["strips"];
// $hotDog=$_POST["hotdog"];
// $beefBurger=$_POST["burger"];
// $pepsi = $_POST["pepsi"];
// $coke = $_POST["coke"];
// $diteCoke=$_POST["ditecoke"];
// $cokeZero=$_POST["cokezero"];
// $sprite=$_POST["sprite"];
// $drinks=$_POST["drinks"];

$email=$userName="";
$nameError = $emailError="";
if (isset($_POST['btn'])){
  if(empty($_POST['email'])){
    $emailError="please fill this field";
  }else {
  $email=valid_input($_POST["email"]);
}
if(empty($_POST["userName"])){
  $nameError="please fill this field";
}else {
  $userName=valid_input($_POST['userName']);
}
  }
function valid_input($data){
  $data=trim($data);
  $data=htmlspecialchars($data);
  $data=stripcslashes($data);
  return $data;
}

// echo "Email: ".$email."</br>";
// echo "Name: ".$userName. "</br>";
// echo "Regular Checkin: ".$aRegCh."</br>";
// echo "Regular Beef Donair: ".$aRegBeefDonair. "</br>";
// echo "Regular Beef Kabab : ".$aRegBeefKabab."</br>";
// echo "Regular Falafel: ".$aRegFalafel. "</br>";
// echo "Large Checkin: ".$aLargeCh. "</br>";
// echo "Large Beef Donair : ".$aLargeBeefDonair."</br>";
// echo "Large Beef Kabab : ".$aLargeBeefKabab."</br>";
// echo "Large Falafel: ".$aLargeFalafel. "</br>";
// echo "chicken Strips ".$chickenStrips."</br>";
// echo "Hot Dog ".$hotDog. "</br>";
// echo "Beef Burger: ".$beefBurger."</br>";
// echo "Pepsi: ".$pepsi. "</br>";
// echo "Coke: ".$coke. "</br>";
// echo "dite Coke: ".$diteCoke. "</br>";
// echo "Coke Zero: ".$cokeZero. "</br>";
// echo "Sprite: ".$sprite. "</br>";

// foreach ($drinks as $key => $myDrink) {
//   # code...
//   echo "Drinks: ".$myDrink. " ";
// }

?>
