<!DOCTYPE html>
<html>
<head>
    <title>All Books</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"   />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <?php
    include 'header.php';
  ?>
        <?php
           
             $conn=mysqli_connect('localhost','root','','bookshop');
             if($conn){
                $sql='select id,pic,title,price from books';
                $data=mysqli_query($conn,$sql);
                $no_items=mysqli_num_rows($data);
                if($no_items>0){
                    while($row = mysqli_fetch_assoc($data))
                    {
                        $id=$row['id'];
                        $pic=$row['pic'];
                        $title=$row['title'];
                        $price=$row['price'];
                        echo "<div class='vbook'><a href='book.php?id=$id'>
                             <div><img src='$pic' width='200' height='300' /></div>
                             <div>$title</div>
                             </a>
                             <div>$price JD</div></div>";
                    }
                }
                else{
                    echo '0 results';
                }
                }
                mysqli_close($conn);
        ?>
  <?php
    include 'footer.php';
  ?>
</body>
</html>
