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
	
	$s=$_GET['s'];
	$conn=mysqli_connect('localhost','root','','bookshop');
	if($conn){
		$sql="select id,pic,title from books where title='$s' or author='$s'";
        
        
		$data=mysqli_query($conn,$sql);
        $result=mysqli_num_rows($data);
        if($result>0)
        {
		while($row=mysqli_fetch_assoc($data))
		{
			$id=$row['id'];
			$pic=$row['pic'];
			$title=$row['title'];
			echo "<div class='d_search'><a href='../book.php?id=$id'>
					<div class='searchT'>$title</div>
					<img class='searchImg' src='../$pic' width='200' height='300' /></a></div>";
		}
        }
        else 
            echo "<div class='result'>no result was found.</div>";
	}
	
?>
<?php include "../footer.php"; ?>
</body>
</html>