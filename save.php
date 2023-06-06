<?php
$name=$_POST['sname'];
$password=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","uk1")or die("db not connected");
$que="select*from logi where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	if($row['pwd']==$password)
	{
		echo"<script>alert('login sucess');windows.location.href='login';</script>";
	}
	else
	{
		echo"<script>alert('invalid password');windows.location.href='login'</script>";
	}
}
else
{
			echo"<script>alert('invalid username');windows.location.href='login'</script>";
}
?>