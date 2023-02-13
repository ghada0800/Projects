<?php
	$f_name=$_POST['n1'];
	$l_name=$_POST['n2'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	$conn=mysqli_connect('localhost','root','','bookshop');
	if($conn){
		$sql="insert into users(f_name,l_name,email,pass) values('$f_name','$l_name','$email','$pass')";
		
		$query=mysqli_query($conn,$sql);
		if($query){
			header("Location: ../page1.php");
			
		}
		else{
			echo 'error';
		}
		mysqli_close($conn);
	}
	
?>