<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="../css/style.css" /> </head>
<body>
<div id="header">
        <div id="logo">
            <a href="../page1.php"><img src="../images/logo.png" width="200" /></a>
        </div>
        <div id="cart">
            <a href="page4.php">
                <img src="../images/bag.png" width="50" />
            </a>
        </div>
        <div id="serch">
            <form name="search" action="search.php">
                <input type="search" placeholder="search..." id="search" name="s" />
                <input type="submit" value="search" id="s_button" />
            </form>
        </div>
        <div class="reg">
            <a href="../page2.php">
                <input type="button" id="sign" name="sign" value="sign up" />
            </a>
            <a href="../page3.php">
                <input type="button" id="log" name="log" value="log in" />
            </a>
        </div>
    </div>
<?php
	$full_name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$name_card=$_POST['name_card'];
	$exp_month=$_POST['exp_month'];
	$exp_year=$_POST['exp_year'];
	$cvv=$_POST['cvv'];
	$conn=mysqli_connect('localhost','root','','bookshop');
	if($conn){
		$sql="insert into check_inf(full_name,email,address,city,name_card,exp_month,exp_year,cvv) 
		values('$full_name','$email','$address','$city','$name_card',$exp_month,$exp_year,$cvv)";
		$query=mysqli_query($conn,$sql);
		if($query)
		{
			echo "<div class='result'>your order has been placed. </div>";
		}
        else
        echo"<div class='result'>Error! please try again.</div>";
	}
    include '../footer.php';
?>