<?php
$con = mysqli_connect('localhost','root');
if($con){
echo("success");
}else{
echo("not");
}

mysqli_select_db($con,'golandesir');

$firstname = $_POST['Name']; 
$middelname = $_POST['fn'];
$lastname = $_POST['ln'];
$medium = $_POST['medium'];
$address = $_POST['add'];
$mobileno = $_POST['mobno'];
$gender = $_POST['gender'];
$standard = $_POST['std'];
$dob = $_POST['dob'];
$gaurdian = $_POST['gpn'];
$mobile = $_POST['gpnmobno'];
$schoolname = $_POST['scn'];
$schooladd = $_POST['sadd'];
$principalmobile = $_POST['principalno'];
$teachermobile = $_POST['teacherno'];
$adharfront = $_POST['adharfront'];
$adharback = $_POST['adharback'];

$sql = "INSERT INTO `golandesirform`(`firstName`, `middelName`, `lastName`, `medium`, `address`, `mobileNo`, `gender`, `standard`, `dateofBirth`, `gaurdianName`, `gmobileNo`, `schoolName`, `schoolAddress`, `principalmobileNo`, `TeachermobileNo`, `adharFront`, `adharBack`) 
VALUES ('$firstname','$middelname','$lastname','$medium','$address','$mobileno','$gender','$standard','$dob','$gaurdian','$mobile','$schoolname','$schooladd','$principalmobile','$teachermobile','$adharfront','$adharback')";

mysqli_query ($con,$sql);












?>