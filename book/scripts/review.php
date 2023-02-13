<?php
	$id=$_GET['id'];
	$star=$_REQUEST['star'];
	$comment=$_REQUEST['user_rev'];
	$conn=mysqli_connect('localhost','root','','bookshop'); 
	if($conn){
		 $sql="select title from books where id = $id";
		 $data=mysqli_query($conn,$sql);
		 $row=mysqli_fetch_assoc($data);
		 $title=$row['title'];
		 $sql="INSERT INTO review(book_id,book_title,rate,comment) VALUES($id, '$title' , $star , '$comment')";
		
		$query=mysqli_query($conn,$sql);
		if($query){
			header("Location: ../book.php?id=$id");
			
		}
		else{
			echo 'error';
		}
		mysqli_close($conn);
	}
?>

