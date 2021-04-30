</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="myform"   action='login.php' method="post">
		<body style="background-image: url('Rest.jpg');height: 100vh;
    background-size: cover;
    background-position: center;
">
 
ID <input type=" number" name="fid"><br><br>
NAME<input type="text" name="fname"><br><br>
ROLL NO<input type="number" name="frol"><br><br>
<button type="submit" onclick="valid()">
Submit 
</button>
</form>

	
<script>
document.write("Hello World");
function valid(){
 var a=document.forms["myform"]['fid'].value;
if(a=="")
{
alert("name is empty");
return false;
}

var b=document.forms['myform']['fname'].value;
if(b=="" and b<=8)
{
alert('password should not empty and greater than 8 letters');
return false;}

}

</script>


</body>

</html>