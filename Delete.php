
<html>
<body>
<form action="test.php" method="post"><br><br>
ID : <input type = "number" name="ID">
<input type = "submit" value="DELETE"> &nbsp
<br><br>

</form>
<br><br>



<?php
$con = mysqli_connect('localhost','root','','tutorial');
if(!$con)
{
	echo 'not connect database';
}

if(mysqli_select_db($con,"tutorial"))
{	
   $ID = $_POST['ID'];
   
}
 else
 {
	 echo 'not selected database';
 }
$result = mysqli_query($con, "DELETE FROM x WHERE ID=$ID");






?>
</body>
</html>

