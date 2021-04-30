<?php
session_start();
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='first_db';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$id=$_POST['fid'];
$username=$_POST['fname'];
$password=$_POST['frol'];

if(! $conn){
die('Could not connect:'.mysqli_connect_error());
}

$s="select *from user1 where id='$id'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['username']=$username;
	echo"<p>Student already exist</p>";
}
else{
$sql="INSERT INTO user1(id,username,password) VALUES('$id','$username','$password')";
 //$sql="DELETE FROM student11 WHERE id='4'";

 if(mysqli_query($conn,$sql)){
 	echo" welcome ";
 }
 else{
 	echo"no";
 }}
?>


