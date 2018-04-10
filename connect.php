<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

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
//$total=$_POST["totalPrice"];

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
//$stmt6=$conn->prepare("insert into total (userName,email,totalPrice) values (?,?,?); ");

$stmt1->bind_param("ss" , $name, $email);
$stmt2->bind_param("siiiiisiiiiiis" , $name, $r_chicken,$r_beefSha,$r_donair,$r_kabab,$r_falafel,$r_comment,
$l_chicken,$l_beefSha,$l_donair,$l_kabab,$l_falafel,$l_chSalad,$l_comment);
$stmt3->bind_param("siiis" , $name, $strips, $hotdog,$burger,$kids_comment);
$stmt4->bind_param("siiiii", $name, $pepsi,$coke,$ditecoke,$cokezero,$sprite);
$stmt5->bind_param("siiii", $name, $tabule,$hummus,$fattoush,$tzatziki);
//$stmt6->bind_param("sss", $name, $email, $total);
$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$stmt5->execute();
//$stmt6->execute();
// if($_REQUEST['userName']){
//   $name=$_REQUEST['userName'];
//   $email=$_REQUEST['email'];
//   $total=$_REQUEST['totalPrice'];
//   $q = "insert into total values('$name','$email','$total')";
//   $query = mysqli_query($conn,$q);
//   if($query){
//     echo "data inserted successfully";
//  }
//}
?>
<h3>The form is successfully submitted <span class="glyphicon glyphicon-ok"></span></h3>
<h1>Thank you!!</h1>

</body>
</html>
