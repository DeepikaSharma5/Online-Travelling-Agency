<?php

if(isset($_GET['use']))
{
	$UID=$_GET['use'];
}
?>
<?php
require 'main.php';
$name=$_POST['Name'];
$emailid=$_POST['email'];
$phone=$_POST['phone'];
$time=$_POST['time'];
$Fullname=$_POST['name1'];
$Cardnumber=$_POST['name2'];
$Address=$_POST['Address'];
$Cardholderename=$_POST['john'];
$city=$_POST['code1'];
$zipcode=$_POST['code2'];
$expiredate=$_POST['code3'];
$cvv=$_POST['number'];

$obj=new mysqli("localhost","root","","travel");
$sql="insert into bookingcontent(Name,EmailID,Phone,Time,Fullname,Cardnumber,Address,Cardholdername,City,Zipcode,Expiredate,Cvv) values('$name'
,'$emailid'
,'$phone'
,'$time'
,'$Fullname'
,'$Cardnumber'
,'$Address'
,'$Cardholderename'
,'$city'
,'$zipcode'
,'$expiredate',
'$cvv')";

$obj->query($sql);
?>

