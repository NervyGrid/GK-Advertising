<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "not coonected";
}
if(!mysqli_select_db($con,'gk'))
{
	echo "database not selected";
}
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$sql="INSERT INTO contact(name,contact,email,comment) VALUES('$name','$contact','$email','$comment')";
if(!mysqli_query($con,$sql))
{
		
}
else
{
  echo "<script>location.href='index.php'</script>";
}
?>