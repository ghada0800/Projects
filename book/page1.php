<!DOCTYPE html>
<html>
<head>
    <title>The Book Store | Home</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <div class="book-b">
        <a href="page5.php">
            <input type="button" id="all-books" name="books" value="view all books" />
        </a>
    </div>

    <div class="pop-books">
        <h2>Popular Books</h2>
    <?php
        $conn=mysqli_connect('localhost','root','','bookshop');
        if($conn)
        {
          $sql='select id,pic,title,price,description from books where id<=4';

            $data=mysqli_query($conn,$sql);
            $no_rows=mysqli_num_rows($data);
            if($no_rows>0)
            {
                while($row=mysqli_fetch_assoc($data))
                {
                    $id=$row['id'];
                    $pic=$row['pic'];
                    $title=$row['title'];
                    $description=substr($row['description'],0,211);
                    $price=$row['price'];
                    echo    
                        "<div class='book'>
                            <div class='b'>
                                <a href='book.php?id=$id'>
                                 <div class='b_img'><img src='$pic' width='200' height='300' /></div>
                                 <div class='title'>$title</div>
                                </a>
                                <div class='hp'>
                                 <p>
                                      $description .... <a href='book.php'>read more</a>
                                 </p>
                                </div>
                                <div class='p'>Price:$price JD</div>
                            </div>
                        </div>";
                }
            }
            else{
             echo '0 results';
            }
        }
        mysqli_close($conn);
    ?>
    <div class='foot'>
        <?php
         include 'footer.php';
        ?>
  </div>
</body>
</html>