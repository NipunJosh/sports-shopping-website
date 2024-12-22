<?php
$n=$_POST['name'];
$c=$_POST['phone_number'];
$r=$_POST['quantity'];
$s=$_POST['items'];
$con=mysqli_connect("localhost","root","","company");
$sql="INSERT INTO user(name, phone_number, quantity, items) values('$n','$c','$r','$s')";
$r=mysqli_query($con,$sql);
if($r)
{
echo " EMPLOYEE DETAILS ADDED SUCESSFULLY";
}
else
{
echo"details not added";
}
?>