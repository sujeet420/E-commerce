<?php
session_start();
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='dp';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$id=$_POST['fid'];
$name=$_POST['fname'];
$rollno=$_POST['frol'];

if(! $conn){
die('Could not connect:'.mysqli_connect_error());
}

$s="select *from student11 where id='$id'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['name']=$name;
	echo"<p>Student already exist</p>";
}
else{
$sql="INSERT INTO student11(id,name,rollno) VALUES('$id','$name','$rollno')";
 //$sql="DELETE FROM student11 WHERE id='4'";

 if(mysqli_query($conn,$sql)){
 	echo" Done";
 }
 else{
 	echo"no";
 }}
?>