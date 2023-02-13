<?php
$conn=mysqli_connect('localhost','root','','bookshop');
if($conn){
	if(isset($_GET['item_id'])){
	$item_id=$_GET['item_id'];
	$sql="insert into cart(item_id) values($item_id)";
	$query=mysqli_query($conn,$sql);
	if($query)
	{
		header("location: ../book.php?id=$item_id");
	}}
}
?>