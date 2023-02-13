<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
$conn=mysqli_connect('localhost','root','','bookshop');
if($conn){
	$sql="select email from users";
	$data=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($data))
	{
		$d_email=$row['email'];
		if($email==$d_email)
		{
			$sql="select pass from users where email='$email'";
			$data=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($data);
			$d_pass=$row['pass'];
			if($pass==$d_pass)
				header("location: ../page1.php");
			else
			{
				header("location: ../page3.php?msg=wrong password");
				}
				
		}
		else{
			header("location: ../page3.php?msg=wrong email");
}
			
	}

	}
?>