<html>
<body>
<form action="insert.php" method="post"><br><br>
First Name: <input type = "text" name="fname">
</br>
Last Name: <input type = "text" name="lname">
</br>
<input type = "submit" value="Insert"><br><br>
<input type="reset">
</form>
<?php
$con = mysqli_connect('localhost','root','','tutorial');
if(!$con)
{
	echo 'not connect database';
}

if(mysqli_select_db($con,"tutorial"))
{	
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
}
 else
 {
	 echo 'not selected database';
 }
$sql = "INSERT INTO person (fname,lname) VALUES ('$fname','$lname')";

if(mysqli_query($con,$sql))
{ 
echo 'Inserted';
}
else
{
	echo 'Not Inserted';
}
?>
</body>
</html>