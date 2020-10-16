<html>
<body>

<form action="update.php" method="post"><br><br>

ID : <input type = "number" name="ID"> <br><br>
First Name: <input type = "text" name="fname"> <br><br>
Last Name: <input type = "text" name="lname"> <br>
<input type = "submit" value="UPDATE">
<?php
$con = mysqli_connect('localhost','root','','tutorial');
if(!$con)
{
	echo 'not connect database';
}
if(mysqli_select_db($con,"tutorial"))
{	
   $ID = $_POST['ID'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
}
 else
 {
	 echo 'not updated database';
 }


$result = mysqli_query($con, "UPDATE x SET fname='$fname',lname='$lname' WHERE ID=$ID");





?>
</form>
</body>
</html>
