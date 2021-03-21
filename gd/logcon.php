<?php

  session_start();

 $con = mysqli_connect('localhost','root');
 if($con){
  
	echo"connected";
 }else{
	 echo "no connection";
 }

 mysqli_select_db($con,'log');
 
 $name = $_POST['Name'];
 $password = $_POST['Password'];

$q = " SELECT * FROM log where name='$name' && password='$password'";

$res = mysqli_query($con,$q);

$num = mysqli_num_rows($res);

if($num==1){
	$_session['name'] = $name;
    header('location:index.php');
}
else{
	echo "errrorrrrrrrr";
}
?>

